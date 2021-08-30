<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class AuthController extends Controller
{
    public function getLogin()
    {
        return view('login');
    }

    public function postLogin(Request $request)
    {
        // dd('Login berhasil');'
        if (!Auth::attempt($request->only('email', 'password')))
        {
            return redirect('/');
        }

        if (Auth::attempt($request->only('email', 'password')))
        {
            return redirect('member');
        }
    }

    public function logout(Request $request)
    {
        Auth::logout();
        return redirect('/');
    }

    public function hcp(Request $request)
    {
        return redirect('/hcp');
    }

    public function komunitas(Request $request)
    {
        return redirect('/komunitas');
    }

    public function postBroadcast(Request $request)
    {
		error_reporting(0);
		$my_apikey = "LTI99GBWNE4JMDP9SWB1";
		$destination = $_POST['nomor'];
		$message = $_POST['pesan'];
		$api_url = "http://panel.rapiwha.com/send_message.php";
		$api_url .= "?apikey=". urlencode ($my_apikey);
		$api_url .= "&number=". urlencode ($destination);
		$api_url .= "&text=". urlencode ($message);
		$api_url .= "?apikey=". urlencode ($my_apikey);
		$api_url .= "&number=". urlencode ($destination);
		$api_url .= "&text=". urlencode ($message);
		$my_result_object = json_decode(file_get_contents($api_url, false));
		echo "<br>Result: ". $my_result_object->success;
		echo "<br>Description: ". $my_result_object->description;
		echo "<br>Code: ". $my_result_object->result_code;
	
        return redirect('/broadcast');
    }

}
