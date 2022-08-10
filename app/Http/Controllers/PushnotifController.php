<?php

namespace App\Http\Controllers;

use App\Models\UsersModel;
use App\Notifications\Pushnotif;
use Illuminate\Http\Request;
use Notification;
use Illuminate\Support\Facades\Http;

class PushnotifController extends Controller
{
    public function sendOfferNotification(Request $request) {
        $firebaseToken = [$request->fcm_token];
    
        $SERVER_API_KEY = env('FIRE_BASE_SERVERAPI');
        
        // 'AAAAW3A2pQU:APA91bFFxkoE6KJipUFb7yt1ajWMIK7KjvWd8tD98HmmEyeytjGiaIiVCwAszMhJ-ylj0hz6HwbdyHWqt86DdzwuMfK2MImqCnCOb-Iv8Woc00TkPbF1izcyHJwp2PFR_gw6gXa7UvS4';
        
    
        $response = Http::accept('application/json')->withHeaders([
            'Authorization' => 'key='.$SERVER_API_KEY,
        ])->post('https://fcm.googleapis.com/fcm/send', [
            "registration_ids" => $firebaseToken,
            "notification" => [
                "title" => $request->title,
                "body" => $request->body,  
            ]
        ]);
    
        if($response->status() == 200)
        {
            return response()->json(['status'=> true]);
        }else{
            return response()->json(['status'   => false,
                                     'message'  => 'FCM Token failed'
                                    ]);
        } 
        
    }
}
