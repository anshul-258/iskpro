<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Blog;
use App\Testimonial;
use App\Contact;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        //dd($data['test']);
        return view('welcome');
    }

     public function contact()
    {
        $data['blog'] = Blog::orderby('created_at','desc')->limit(3)->get();
        $data['test'] = Testimonial::orderby('created_at','desc')->get();

        return view('contact',$data);
    }

    public function savecontact(Request $request)
    {
        $c = new Contact;
        $c->name = $request->name;
        $c->email = $request->email;
        $c->phone = $request->phone;
        $c->message = $request->message;
        $c->save();
        return redirect()->back()->with('message','Message Sent Successfully');

    }
}
