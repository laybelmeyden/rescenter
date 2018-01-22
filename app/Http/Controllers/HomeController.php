<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mero;
use App\Info;


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
        $meros = Mero::latest()->get();
        
        return view('home', compact('meros'));
    }
    
    public function info(Request $request)
    {
        Info::create([ 
        'name' => request('name'), 
        'email' => request('email'), 
        'title' => request('title'), 
        ]);
    
      $data= array(
      'name' => request('name'),
      'email' => request('email'),
      'title' => request('title'),
      );
       \Mail::send('email.mail2', $data, function($message1) use ($data)
    {
        $mail_admin = env('MAIL_ADMIN_FOOTER');
        $message1->from($data['email'], $data['name'], $data['title']);
        $message1->to($mail_admin, 'For Admin')->subject('Message from site');
     });
     
    session()->flash('mes', 'Ваша заявка отправлена!');
    return back();

    }
    
}
