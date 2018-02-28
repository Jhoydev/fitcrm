<?php

namespace App\Http\Controllers;

use App\Member;
use App\Contact;
use Illuminate\Http\Request;
use Illuminate\support\Facades\Mail;
use App\Mail\MailNotification;
use Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $contacts = Contact::orderBy('id','DESC')->limit(5)->get();
        $members = Member::orderBy('id','DESC')->limit(5)->get();

        return view('home',compact('members','contacts'));
    }

    public function sendNotification(){
        $member =  Member::find(Auth::user()->id);
        Mail::to($member->email)->send(new MailNotification($member));
        return redirect('/home');
    }
}
