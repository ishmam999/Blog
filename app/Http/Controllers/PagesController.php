<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function getIndex() {
    	return view('pages.welcome');
    }

    public function getAbout() {
    	$first = "Ishmam";
    	$last = "Islam";

    	$fullname = $first . " " . $last;
    	$email = 'ishmam2050@gmail.com';
    	$data = [];
    	$data['email'] = $email;
    	$data['fullname'] = $fullname;
    	return view('pages.about')->withData($data);
    }

    public function getContact() {
    	return view('pages.contact');
    }

}
