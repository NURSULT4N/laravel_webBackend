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
    public function index() {
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

    public function subscribes(SubscribesRequest $reqi) {
        $subs = new Subscribes();
        $subs->email = $reqi->input('email');

        $subs->save();

        return redirect()->route('home')->with('success', 'Thanks for subscribing!!!');
    }

    public function allData() {
        $cont = new Pages();
        return view('pages.messages', ['data' => $cont->all()]);
    }

    public function showOneMessage($id) {
        $cont = new Pages();
        return view('pages.one-message', ['data' => $cont->find($id)]);
    }

    public function updateMessage($id) {
        $cont = new Pages();
        return view('pages.update-message', ['data' => $cont->find($id)]);
    }

    public function updateMessageSubmit($id, PagesRequest $req): string {
        $pages = Pages::find($id);
        $pages->name = $req->input('name');
        $pages->email = $req->input('email');
        $pages->subject = $req->input('subject');
        $pages->message = $req->input('message');

        $pages->save();

        return redirect()->route('contact-data-one', $id)->with('success', 'Your message has been successfully edited!!!!');
    }

    public function deleteMessage($id) {
        Pages::find($id)->delete();
        return redirect()->route('contact-data')->with('success', 'Your message has been successfully deleted!!!!');

    }

}
