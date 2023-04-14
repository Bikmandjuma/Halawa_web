<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ContactUs;
use App\Models\ReplyGuestContactMessage;

class GuestController extends Controller
{
    public function test(){
        return response()->json([
            "data" => [
                "id" => "1",
                "fname" => "Bikman",
                "lname" => "Djuma",
                "age" => "29 years"
            ]
        ]);
    }

    //Guest send contact message
    public function GuestSendContact(Request $request){
        $request->validate([
            'names' => 'required|string',
            'email' => 'required|email',
            'message' => 'required|string|max:200',
            
        ]);

        $contact=new ContactUs;
        $contact->names = $request->names;
        $contact->email = $request->email;
        $contact->message = $request->message;
        $contact->save();

        $rep=ContactUs::all();
        $count_rep=collect($rep)->count();

        if ($count_rep == 0) {
            $fk_send_ids=1;
        }else{
            $fk_send_ids=$count_rep+1;
        }
        
        $reply=new ReplyGuestContactMessage;
        $reply->fk_sender_id= $fk_send_ids;
        $reply->reply_message = "";
        $reply->save();

        if ($contact) {
            return response()->json([
                'notification' => "Message sent !",
            ]);
        }
    }


}
