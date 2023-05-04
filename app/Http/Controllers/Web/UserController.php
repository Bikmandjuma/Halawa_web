<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function UserHome(){
        return view('User.user');
    }

    public function MyInformation(){
        $auth_user_id=auth()->guard('user')->user()->id;

        $info=User::all()->where('id',$auth_user_id);
        return view('User.MyInformation',compact('info'));
    }

    public function PasswordForm(){
        return view('User.Password');
    }

    public function CreatePassword(Request $request){
        
        # Validation
        $request->validate([
            'old_password' => 'required',
            'new_password' => 'required|confirmed|min:8|max:100',
        ]);


        #Match The Old Password
        if(!Hash::check($request->old_password, auth()->guard('user')->user()->password)){
            return back()->with("error", "Old Password Doesn't match!");
        }


        #Update the new Password
        User::whereId(auth()->guard('user')->user()->id)->update([
            'password' => Hash::make($request->new_password)
        ]);
        return back()->with("status", "Password changed successfully!");
    }

    public function ShowProfile(){
        return view('User.Profile');
    }

    public function CreateProfile(Request $request){
        $id=auth()->guard('user')->user()->id;
        
        $request->validate([
            'profile_picture' => 'mimes:jpg,jpeg,png,pdf',
        ],[
            'profile_picture.mimes'=>'profile picture must be in format of jpg,jpeg,png or pdf',
        ]);

        $rancodes=rand(0,100000);
        // $image= $request->file('image');
        // list($type, $image) = explode(';',$image);
        // list(, $image) = explode(',',$image);

        // $image = base64_decode($image);
        // $image_name = time().'.png';
        // file_put_contents(public_path('images/admin/').$image_name, $image);

        // $file= $request->file('profile_picture');
        // $filename= $rancodes.'_'.date('YmdHi').$file->getClientOriginalName();
        // $extenstion = $file->getClientOriginalExtension();
        // $file-> move(public_path('images/admin/'), $filename);
        $folderPath = public_path('images/admin/');
 
        $image_parts = explode(";base64,", $request->image);
        $image_type_aux = explode("image/", $image_parts[0]);
        $image_type = $image_type_aux[1];
        $image_base64 = base64_decode($image_parts[1]);
 
        $imageName = uniqid() . '.png';
 
        $imageFullPath = $folderPath.$imageName;
 
        file_put_contents($imageFullPath, $image_base64);
 
        $profile=User::find($id)->update(['image'=>$imageName]);

        if ($profile) {
            return redirect()->back()->with('profile_changed','profile changed  successfully !');
        }else{
            return redirect()->back()->with('profile_error','profile picture must be in format of jpg,jpeg,png or pdf');
        }   
    }

    public function UpdateInfo(Request $req,$id){
       

        $email=auth()->guard('user')->user()->email;
        $phone=auth()->guard('user')->user()->phone;
        $role=auth()->guard('user')->user()->role;

        if ($req->email != $email) {
             $req->validate([
                'email'=>'required|email|unique:users,email',
            ]);
        }

        $user=User::find($id);
        $user->firstname=$req->fname;
        $user->lastname = $req->lname;
        $user->gender = $req->gender;
        $user->phone = $req->phone;
        $user->email = $req->email;
        $user->role = $req->role;
        $user->department = $req->dept;
        $user->study_status = $req->study_status;
        $user->start_year = $req->start_year;
        $user->end_year = $req->end_year;
        $user->birth_date = $req->dob;
        $user->residence = $req->residence;
        $user->image = auth()->guard('user')->user()->image;
        $user->password = bcrypt($req->phone);
        $user->save();

        return redirect(route('myinformation'))->with('status','Data updated successfully !');
    }

    public function DocForm(){
        return view('User.FormDocument');
    }

}
