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

    public function confirm(\Illuminate\Http\Request $request)
    {
        $filename = $request->post("name") . $request->post("lastname") . "." . strtolower(pathinfo($_FILES['autofoto']['name'], PATHINFO_EXTENSION));
        $path = $request->file('autofoto')->storeAs(
                'avatars', $filename
        );

        $data = $request->post("name") . "\t" . $request->post("lastname") . "\t" . $request->post("dieta") . "\t" . '/avatars/'. $filename;

        Storage::append($this->answersFile, $data);

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
        
        $content=Storage::get($this->answersFile);
        $lines= explode("\n", $content);
        $all_data = array();
        foreach($lines as $data){
            array_push($all_data, explode("\t", $data));
        }
        return view('confirmed', ['confirmed' => $all_data]);
    }

}
