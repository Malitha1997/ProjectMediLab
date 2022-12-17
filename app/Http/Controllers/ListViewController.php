<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ListViewController extends Controller
{
    public function patientlist(Request $request)
    {

          $query = $request->get('query');
          $users = User::where('f_name', 'LIKE', '%'. $query. '%')->get();
          //dd($user->getRoleNames());
          $response = array();

          foreach($users as $user){
            if($user->patient != null){

             $response[] = array("value"=>$user->patient->id,"label"=>$user->f_name);

                }
            }

          return response()->json($response);
    }
}
