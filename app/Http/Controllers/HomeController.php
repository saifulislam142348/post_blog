<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
   public function index(){
    return view('welcome');
   }
   public function serach(){
    return view('search');
   }
   public function post(){
    return view('post');
   }
   public function posts (){
    return view(' posts');
   }
   public function catagories(){
    return view(' catagories');
   }
   public function catagorypost(){
    return view(' catagorypost');
   }
}
