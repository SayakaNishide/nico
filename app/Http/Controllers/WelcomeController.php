<?php
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;

class WelcomeController extends Controller {
    public function contact(){
        return view("contact");
    }
}