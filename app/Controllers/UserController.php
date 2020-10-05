<?php namespace App\Controllers;

class UserController extends BaseController
{

	public function form(){
		return view('form');
	}

	public function login(){
		return view('form');
	}
	
	public function changeCode(){
		return view('changeLogin');
	}

	public function newPassword(){
		return view('newPassword');
	}

	

	//--------------------------------------------------------------------

}
