<?php

namespace App\Http\Controllers\Auth;

use App\User as Model;
use App\UserMeta as Meta;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

class RegisterController extends Controller
{
    protected $model, $meta;

    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(Model $model, Meta $meta)
    {
        $this->middleware('guest');

        $this->model = $model;
        $this->meta = $meta;
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => [ 'required', 'string', 'max:255' ],
            'email' => [ 'required', 'string', 'email', 'max:255', 'unique:users' ],
            'password' => [ 'required', 'string', 'min:6', 'confirmed' ],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $validated
     * @return \App\User
     */
    protected function create(array $validated)
    {
        $model = $this->model;
        $meta = $this->meta;

        return \DB::transaction(function() use ($model, $meta, $validated) {

            // Create Model
            $model = $model->create([
                'name' => $validated['name'],
                'email' => $validated['email'],
                'password' => Hash::make($validated['password']),
            ]);

            // Attach Meta to Model
            $model->meta()->save($meta);
    
            return $model;
        });
    }
}
