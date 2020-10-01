<?php

namespace App\Http\Controllers\Auth;
use App\User;
use App\Category;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use DB;
use Response;
class RegisterController extends Controller
{
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
    protected $redirectTo = '/testimonials';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
          $this->middleware('guest:admin');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */

    protected function validator(array $data)
    {  

       
       //$before = $dt->subYears(18)->format('Y-m-d');
        return Validator::make($data, [
            'name' => 'required|string|max:255',
            // 'date_of_birth' => 'required|date|before:'.\Carbon\Carbon::now()->subYears(18)->format('d-m-Y'),
            'mobile_number' => 'required|min:10|max:10',
            'email' => 'required|string|email|max:255|unique:users',
            'location' => 'required',
            'professional' => 'required|max:50',
            'testimonial' => 'required|max:1000',
            'password' => 'required|string|min:6|confirmed',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            // 'date_of_birth' => $data['date_of_birth'],
            'mobile_number' => $data['mobile_number'],
            'email' => $data['email'],
            'location' => $data['location'],
            'professional' => $data['professional'],
            'testimonial' => $data['testimonial'],
            'password' => Hash::make($data['password']),
            // 'cat_id'=> '1',
        ]);
        
    }
//     public function insertmanual($request Request)
//     {
//         $user = new App\User();
// $user->status = $request->input('status');

// $user->save();
// return back();
//     }
   
}
