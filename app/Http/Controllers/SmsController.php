<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SmsController extends Controller
{
    public function send(Request $Request)
    {
       $userId = '24482';
       $apiKey = 'r0tSJJp0Ljpx33xdxRtJ';

       request()->validate([
        'contact_No'=> 'required|regex:/^(?:\+\d{1,3}[- ]?)?\d{10}$/','max:11',
        'msg'=>'required'
       ]);

       $contact = $Request->contact_No;
       $msg = $Request->msg;
       $url = 'https://app.notify.lk/api/v1/send?user_id='.$userId.'&api_key='.$apiKey.'&sender_id=NotifyDEMO&to='.$contact.'&message='.$msg;

        $ch = curl_init($url);
        curl_setopt($ch, CURLOPT_HTTPGET, true);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $response_json = curl_exec($ch);
        curl_close($ch);
       $response=json_decode($response_json, true);

       /* dd($response);

$response = file_get_contents('');*/

        if($response['status']=='success'){
            echo "The message was sent successfully\n";

            }
         else {
            echo "The message failed with status: " ;
        }


        return redirect()->route('send_sms')->with('success', 'Message sent successfully!');

    }
    public function index()
    {
        return view('sms.send');
    }



}
