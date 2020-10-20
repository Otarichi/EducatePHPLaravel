<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pageController extends Controller
{
    public function Home(){
    	return view('Pages.content')
    	->with('theme', 'light')
    	->with('footer', true)
    	->with('text', 'home');
    }

    public function Contact(){
    	return view('Pages.content')
    	->with('title', 'Title Page')
    	->with('theme', 'dark')
    	->with('footer', false)
    	->with('text', 'contact');
    }

    public function About(){
    	return view('Pages.content')
    	->with('title', 'About Page')
    	->with('theme', 'dark')
    	->with('footer', true)
    	->with('text', 'about');
    }

}
