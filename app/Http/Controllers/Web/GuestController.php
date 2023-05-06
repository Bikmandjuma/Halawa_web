<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\CheckEmailBeforeSelfRegistration;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Crypt;
use App\Mail\SendCodeToCheckEmail;
use Illuminate\Mail\Mailable;

class GuestController extends Controller
{
        public function RegisterMuslim(Request $req){
        $req->validate([
            'firstname' => 'required|string',
            'lastname' => 'required|string',
            'gender' => 'required|string',
            'study_status' => 'required|string',
            'start_year' => 'required|string',
            'end_year' => 'required|string',
            'role' => 'required|string',
            'phone' => 'required|unique:users,phone',
            'birth_date' => 'required|string',
            'email' => 'required|string|unique:users,email',
            'department' => 'required|string',
            'password' => 'required|string|between:8,32',
            'residence' => 'required|string',
            'image' => 'required|string',
        ]);

        $user=new User;
        $user->firstname = $req->firstname;
        $user->lastname = $req->lastname;
        $user->gender = $req->gender;
        $user->phone = $req->phone;
        $user->email = $req->email;
        $user->role = $req->role;
        $user->department = $req->department;
        $user->study_status = $req->study_status;
        $user->start_year = $req->start_year;
        $user->end_year = $req->end_year;
        $user->birth_date = $req->birth_date;
        $user->residence = $req->residence;
        $user->password = bcrypt($req->phone);
        // $user->image = $req->image;

        if($req->hasFile('image')){
            $file= $req->file('image');
            $filename= date('YmdHis').$file->getClientOriginalName();
            $extenstion = $file->getClientOriginalExtension();
            $file-> move(public_path('images/user/muslim'), $filename);
            $user->image = $filename;
        };

        $user->save();

        return response()->json([
            'status' => 'New Muslim added successfully "',
            'message' => $user,
        ],200);
    
    }

    public function MuslimCheckEmail(){
        return view('CheckEmailBeforeRegister');
    }

    public function CreateCheckEmail(Request $req){
        $req->validate([
            'email' => 'required|email|unique:users'
        ],[
            'email.unique' => 'This email already used !',
            'email.required' => 'Please fill email field !'
        ]);

        //delete data of user-email already set
        CheckEmailBeforeSelfRegistration::where('email',$req->email)->delete();

        $code=mt_rand(100000,999999);
        $email=$req->email;

        CheckEmailBeforeSelfRegistration::create([
            'email' =>$email,
            'code' => $code
        ]);

        //send email to user
        Mail::to($req->email)->send(new SendCodeToCheckEmail($code));

        return redirect(url('/checkcode/'.encrypt($email)))->with([
            'emailCheckCode' =>'we sent you a code on your email !',
            'email' => $email
        ]);
    }

    public function MuslimCheckCode(){
        return view('CheckCode');
    }

    public function CreateCheckCode(Request $req){
        $req->validate([
            'code' => 'required|string|between:6,6|exists:check_email_before_self_registrations,code'
        ],[
            'code.required' => 'Please fill code field !',
            'code.between' => 'code must be 6 characters !',
            'code.exists' => 'the code entered is invalid ,check your email !'
        ]);

        return redirect(route('muslim_self_register'))->with('register','fill the following field !');
    }

    public function ResendCode($email){

        //delete data of user-email already set
        CheckEmailBeforeSelfRegistration::where('email',$email)->delete();


        $code=mt_rand(100000,999999);
        $emails=$email;

        CheckEmailBeforeSelfRegistration::create([
            'email' =>$emails,
            'code' => $code
        ]);

        //send email to user
        Mail::to($emails)->send(new SendCodeToCheckEmail($code));

        return redirect(url('/checkcode/'.encrypt($emails)))->with([
            'emailCheckCode' =>'we sent you a code on your email !',
            'email' => $emails
        ]);
    }

    public function Show_Register_Muslim(){
        return view('SelfRegistration');
    }

}
