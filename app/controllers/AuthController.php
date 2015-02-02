<?php

class AuthController extends BaseController {

	public function login()
	{
		if(Auth::attempt(Input::only('id_pegawai','password'))){
            return Response::json(array('user' => Auth::user(), 'role' => Auth::role()));
        }else{
            return 'data invalid';
        }
	}

	public function logout()
	{
		Auth::logout();
        return 'logged out';
	}
}
