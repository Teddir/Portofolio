<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Nexmo;
use NotificationChannels\Twilio\TwilioChannel;
use NotificationChannels\Twilio\TwilioMmsMessage;
use Illuminate\Notifications\Notification;

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
    protected $redirectTo = '/nexmo';

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
            'name' => ['required', 'string', 'max:255'],
            'avatar' => 'https://via.placeholder.com/150',
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'phone_number' => ['required', 'min:10', 'max:15', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);

        $this->sendMessage('User registration successful!!', $request->phone_number);
        return back()->with(['success' => "{$request->phone_number} registered"]);

    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        // $verification = Nexmo::message()->send([
        //     'to' => $data['phone_number'],
        //     'from' => 'Teddir',
        //     'text' => 'Hello '
            

        // $verification = Nexmo::verify()->start([
        //     'number' => $data['phone_number'],
        //     'brand' => 'Phone Verification',
        // ]);

        // // Log::info('sent message: ' . $verification['message-id']);

        // session(['nexmo_request_id' => $verification->getRequestId()]);
            
        $verification = Nexmo::message()->send([
            'to' => $data['phone_number'],
            'from' => '@leggetter',
            'text' => 'Sending SMS from Laravel. Woohoo!'
        ]);
        Log::info('sent message: ' . $verification['message-id']);

        return User::create([
            'name' => $data['name'],
            'avatar' => 'https://via.placeholder.com/150',
            'email' => $data['email'],
            'phone_number' => $data['phone_number'],
            'password' => Hash::make($data['password']),
        ]);
    }
}
