<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('frontEnd.home.homeContent');

    }

    public function products()
    {
        return view('frontEnd.women.products');

    }

    public function products1()
    {
        return view('frontEnd.men.products1');

    }

    public function codes()
    {
        return view('frontEnd.codes.codes');

    }
    public function mail()
    {
        return view('frontEnd.mail.mailUs');

    }
    public function checkOut()
    {
        return view('frontEnd.checkOut.checkOut');

    }
 public function logIn()
    {
        return view('frontEnd.login.logIn');

    }
public function registerUser()
    {
        return view('frontEnd.createAccount.createAccount');

    }

}
