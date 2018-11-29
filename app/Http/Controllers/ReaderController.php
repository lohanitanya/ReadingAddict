<?php

namespace App\Http\Controllers;

use Illuminate \Http \Request;
use App \ Reader;
use Illuminate \Support \Facades \Input;


class ReaderController extends Controller
{
	 // public function reader(){
  // //   	$reader = Reader ::find($id);
		// // echo $reader->FirstName ;

	 // 	$text = Inputs::all();
		// return view ('inflate_data') ->with('var', $text);
  //   }

  //   public function reader($id){
  // //   	$reader = Reader ::find($id);
		// // echo $reader->FirstName ;
		// $text= $id;
		// return view ('inflate_data') ->with('var', $text);
  //   }

	public function reader($id){//$firstname,$lastname){

		// $val = $request;
		$test = new Reader;
		$test -> ID = $id;
		// $test1 = new Reader;
		// $test1 -> firstname = $firstname;
		// $test2 = new Reader;
		// $test2 -> lastname = $lastname;
		$test->save();

	}

	public function fillup(){

		return view ('inflate_data');
	}


	public function submit(){

		$var = Input::all();
		$var2 = Input::all();
		$var3 = Input::all();
		$test = new Reader;
		$test1 = new Reader;
		$test2 = new Reader;

		$test -> ID = $var['id'];
		// $test -> firstname = $var['firstname'];
		// $test -> lastname = $var['lastname'];
		$test -> save();
	}


}
