<?php

namespace App\Http\Controllers;
use Input;
use Textarea;
use Illuminate\Http\Request;
use App\Models\review;
class uploadreview extends Controller
{
    public function index(){
        return('mainpage');
    }
    public function review(){
   //     if(Input::has('name') && Input::has('email')&& Input:)
        $rev = new review();
        $rev->name = Input::get('name');
        $rev->email  = Input::get('email');
        $rev->review = Textarea::get('review');
        $rev->save();
        return redirect('/mainpage');
    }
}
