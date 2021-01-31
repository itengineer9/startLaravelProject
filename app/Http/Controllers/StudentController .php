<?php

namespace App\Http\Controllers\Auth;


use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class StudentController extends Controller
{


    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     *    protected function validator(array $data)
    {
    return Validator::make($data, [
    'fname' => ['required', 'string', 'max:255'],
    'sname' => ['required', 'string', 'max:255'],
    ]);
    }
     */


    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function saveData(Request $data)
    {
         Student::create([
            'firstName' => $data->fname,
            'secondName' => $data->sname,
        ]);
        //return 'Saved Successfully';
    }
}
