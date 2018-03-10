<?php

namespace App\Http\Controllers;

use App\Category;
use App\Championship;
use App\Club;
use App\Mail\MailContact;
use Illuminate\support\Facades\Mail;
use App\Member;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $members = Member::orderBy('members.id','ASC')
            ->filter(\request(['name','club_id','category_id']))
            ->paginate(15);
        $categories = Category::select('name', 'id')->orderBy('name', 'ASC')->get();
        $clubs = Club::select('name', 'id')->orderBy('name', 'ASC')->get();

        $championships = Championship::whereRaw('date >= CURRENT_DATE()')->get();
        return view('index',compact('members','clubs','categories','championships'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function sendContact(){
        $content =  \request()->all();
        Mail::to("jhoseph.dev@gmail.com")->send(new MailContact($content));
        return redirect('/');
    }
}
