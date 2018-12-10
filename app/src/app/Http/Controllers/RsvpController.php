<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Storage;
use App\Http\Controllers\Controller;

class RsvpController extends Controller
{
    /*
      |--------------------------------------------------------------------------
      | Login Controller
      |--------------------------------------------------------------------------
      |
      | This controller handles authenticating users for the application and
      | redirecting them to your home screen. The controller uses a trait
      | to conveniently provide its functionality to your applications.
      |
     */

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        #$this->middleware('guest')->except('logout');
        $this->answersFile = 'public/answers.csv';
    }

    public function cancel(\Illuminate\Http\Request $request)
    {
        $RSVPAnswer=new \App\RSVPAnswer();
        $RSVPAnswer->saveCancellation($request->post("cancel"));
        return redirect("/");
    }
    
    public function confirm(\Illuminate\Http\Request $request)
    {
        $filename = $request->post("name") . $request->post("lastname") . "." . strtolower(pathinfo($_FILES['autofoto']['name'], PATHINFO_EXTENSION));
        $path = $request->file('autofoto')->storeAs('avatars', $filename);
        
        $RSVPAnswer=new \App\RSVPAnswer();
        $RSVPAnswer->saveConfirmed($request->post("name"), $request->post("lastname"), $request->post("dieta"),'/avatars/'. $filename);
        
        $response = array('uploaded' => ($path) ? true : false,
            'name' => $request->post("name"),
            'lastname' => $request->post("lastname"),
            'autofoto' => $request->file("autofoto"),
            'foto' => '/avatars/'. $filename);
        if (!$path) {
            $response['error'] = $_FILES["autofoto"]["error"];
        }

        echo json_encode($response);
    }

    public function confirmed(\Illuminate\Http\Request $request)
    {
        $RSVPAnswer=new \App\RSVPAnswer();
        $confirmed=$RSVPAnswer->getAllConfirmed();
        $cancelled=$RSVPAnswer->getAllCancelled();
        return view('confirmed', ['confirmed' => $confirmed,'cancelled'=>$cancelled]);
    }

}
