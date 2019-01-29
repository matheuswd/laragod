<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

use App\User as Model;
use App\UserMeta as Meta;

class UserController extends Controller
{
    protected $model, $meta;

    public function __construct(Model $model, Meta $meta)
    {
        $this->middleware('auth');
        $this->middleware('admin')->except('show');

        $this->model = $model;
        $this->meta = $meta;
    }

    #
    # Views
    #
    
    public function index()
    {
        $users = $this->model->with('meta')->paginate(4);
        return view('modules.users.index')->with([ 'users' => $users ]);
    }

    public function create()
    {
        return view('modules.users.create');
    }

    public function edit(Int $id)
    {
        $user = $this->model->with('meta')->findOrFail($id);
        return view('modules.users.edit')->with([ 'user' => $user ]);
    }

    public function show(Int $id)
    {
        $user = $this->model->with('meta')->findOrFail($id);
        return view('modules.users.show')->with([ 'user' => $user ]);
    }

    #
    # Logics
    #

    public function search(Request $request)
    {
        if (empty($request->search))
        {
            return redirect('/users');
        }

        // Rules & Validation
        $validated = $request->validate([
            'search' => 'required|string|max:255',
        ]);

        // Vars
        $model = $this->model;
        $meta = $this->meta;

        $fields = array_merge(
            $model->getFillable(), $meta->getFillable()
        );

        // Search
        $users = $model
            ->search($validated['search'], $fields)
            ->paginate(4);

        return view('modules.users.index')->with([ 'users' => $users ]);
    }

    public function store(Request $request)
    {
        // Rules & Validation
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6',

            'mark_as_admin' => 'nullable|boolean',
            'mark_as_verified' => 'nullable|boolean',
        ]);

        // Vars
        $model = $this->model;
        $meta = $this->meta;

        // DB
        $user = \DB::transaction(function() use ($model, $meta, $validated) {

            // Create Model
            $model = $model->create([
                'name' => $validated['name'],
                'email' => $validated['email'],
                'password' => Hash::make($validated['password']),
                'is_admin' => !empty($validated['mark_as_admin']) ? true : false,
            ]);

            // Update Email Verified At
            $mark_as_verified =
                !empty($validated['mark_as_verified'])
                ? $validated['mark_as_verified']
                : null;

            if ($mark_as_verified) {

                $model->update([
                    'email_verified_at' => now()->format('Y-m-d'),
                ]);

            }

            // Attach New Meta to Model
            $model->meta()->save($meta);

            return $model;
        });

        return redirect('/users')->with('status', __('User created with success!'));
    }

    public function update(Request $request, Int $id)
    {
        // Rules & Validation
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            // 'email' => 'required|string|email|max:255|unique:users',
            'password' => 'nullable|string|min:6',

            'mark_as_admin' => 'nullable|boolean',
            'mark_as_verified' => 'nullable|boolean',

            'avatar' => 'nullable|file|image',

            'birth' => 'nullable|date',
            'interests' => 'nullable|string|max:255',
            'biography' => 'nullable|string',

            'position' => 'nullable|string|max:100',
            'company' => 'nullable|string|max:100',
            'city' => 'nullable|string|max:100',
            'country' => 'nullable|string|max:100',

            'facebook' => 'nullable|string|max:100',
            'whatsapp' => 'nullable|string|max:100',
            'linkedin' => 'nullable|string|max:100',
            'instagram' => 'nullable|string|max:100',
            'twitter' => 'nullable|string|max:100',
            'youtube' => 'nullable|string|max:100',
        ]);

        // Vars
        $model = $this->model->findOrFail($id);
        $meta = $model->meta;

        // DB
        $user = \DB::transaction(function() use ($model, $meta, $validated, $request) {
            
            // Update Model
            $model->update([
                'name' => $validated['name'],
                'is_admin' => !empty($validated['mark_as_admin']) ? true : false,
            ]);

            // Update Meta
            $meta->update([
                'company' => $validated['company'],
                'position' => $validated['position'],
                'city' => $validated['city'],
                'country' => $validated['country'],

                'birth' => $validated['birth'],
                'biography' => $validated['biography'],
                'interests' => $validated['interests'],

                'facebook' => $validated['facebook'],
                'whatsapp' => $validated['whatsapp'],
                'linkedin' => $validated['linkedin'],
                'instagram' => $validated['instagram'],
                'twitter' => $validated['twitter'],
                'youtube' => $validated['youtube'],
            ]);

            // Update Password
            $password =
                !empty($validated['password'])
                ? $validated['password']
                : null;

            if ($password) {

                $model->update([
                    'password' => Hash::make($validated['password']),
                ]);

            }

            // Update Email Verified At
            $mark_as_verified =
                !empty($validated['mark_as_verified'])
                ? $validated['mark_as_verified']
                : null;

            if ($mark_as_verified) {

                $model->update([
                    'email_verified_at' => now()->format('Y-m-d'),
                ]);

            }

            // Update Avatar
            $avatar = $request->file('avatar');

            if ($avatar) {

                $meta->update([
                    'avatar' => $avatar->storeAs(
                        'avatars', $request->user()->id . '.' . $avatar->getClientOriginalExtension()
                   ),
                ]);

            }

            return $model;

        });

        return redirect('/users')->with('status', __('User updated with success!'));
    }

    public function destroy(Int $id)
    {
        // Vars
        $model = $this->model->findOrFail($id);

        // DB
        $user = $model->delete();

        return redirect('/users')->with('status', __('User deleted with success!'));
    }
}
