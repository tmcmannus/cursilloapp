<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PastorInfo extends Controller
{
    //

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

    /* use RegistersUsers; */

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
  /*  protected $redirectTo = '/home'; */

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
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
            'fullname' => 'required|max:255',
            'churchname' => 'required|max:255',
            'address' => 'required|max:255',
            'city' => 'required|max:255',
            'state' => 'required|max:255',
            'zip' => 'required|max:255',
            'phone' => 'required|max:255',
            'email' => 'required|email|max:255|',
            'goodcandidateexplanation' => 'required|max:255',
            'signed' => 'required|max:255'
          ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
    protected function create(array $data)
    {
        return User::create([
            'fullname' => $data['fullname'],
            'churchname' => $data['churchname'],
            'address' => $data['address'],
            'city' => $data['city'],
            'state' => $data['state'],
            'zip' => $data['zip'],
            'phone' => $data['phone'],
            'email' => $data['email'],
            'goodcandidateexplanation' =>['goodcandidateexplanation'],
            'signed' => $data['signed'],
        ]);
    }
}
