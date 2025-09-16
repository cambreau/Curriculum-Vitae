<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CurriculumController extends Controller
{
    public function index(){
        return view('home');
    }

    public function competence(){
        return view('competence');
    }

    public function contact(){
        return view('contact');
    }

    public function parcours(){
        return view('parcours');
    }


    public function profil(){
        return view('profil');
    }

    public function contactForm(Request $request){
        return view('contact', ['data'=>$request]);
    }
}
