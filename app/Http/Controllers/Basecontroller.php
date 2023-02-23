<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Basecontroller extends Controller
{
   
   public function Home()
   {
      return view('/home');
   }
   public function Services()
   {
      return view('/services');
   }
   public function Company()
   {
      return view('/company');
   }
   public function Contact()
   {
      return view('/contact');
   }
}
