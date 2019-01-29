<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        // $this->middleware('verified');
    }

    public function index(Request $request)
    {
        $user = $request->user();
        return view('profile', [ 'user' => $user ]);
    }

    public function update(Request $request)
    {
        // Rules & Validation
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            // 'email' => 'required|string|email|max:255|unique:users',
            'password' => 'nullable|string|min:6',

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
        $model = $request->user();
        $meta = $model->meta;

        // DB
        $user = \DB::transaction(function() use ($model, $meta, $validated, $request) {
            
            // Update Model
            $model->update([
                'name' => $validated['name'],
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

        return redirect('/profile')->with('status', __('Profile updated with success!'));
    }
}
