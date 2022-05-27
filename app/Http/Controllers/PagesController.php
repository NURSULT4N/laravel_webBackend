<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\PagesRequest;
use App\Http\Requests\RegistersRequest;
use App\Http\Requests\SubscribesRequest;
use App\Models\Pages;
use App\Models\Registers;
use App\Models\Subscribes;


class PagesController extends Controller {
    public function index(): string {
        return view('pages.index');
    }

    public function contact(): string {
        return view('pages.contact');
    }

    public function service(): string {
        return view('pages.service');
    }

    public function signup(): string {
        return view('pages.signup');
    }

    public function register(RegistersRequest $regis) {
        $register = new Registers();
        $register->name = $regis->input('name');
        $register->email = $regis->input('email');
        $register->password = $regis->input('password');
        $register->repassword = $regis->input('repassword');

        $register->save();
        return redirect()->route('signup')->with('success', 'You have successfully registered!!!!');
    }

    public function submit(PagesRequest $req): string {
        $pages = new Pages();
        $pages->name = $req->input('name');
        $pages->email = $req->input('email');
        $pages->subject = $req->input('subject');
        $pages->message = $req->input('message');

        $pages->save();

        return redirect()->route('home')->with('success', 'Your message was successfully sent!!!!');
    }

    public function allData() {
        $cont = new Pages();
        return view('pages.messages', ['data' => $cont->orderBy('id', 'desc')->take(4)->get()]);
    }

    public function subscribes(SubscribesRequest $reqi) {
        $subs = new Subscribes();
        $subs->email = $reqi->input('email');

        $subs->save();

        return redirect()->route('home')->with('success', 'Thanks for subscribing!!!');
    }


}
