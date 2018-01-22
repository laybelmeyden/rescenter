<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Neew;
use App\Mero;
use App\Dd;

class MainController extends Controller
{
    public function index()
    {
      $neews = Neew::latest()->limit(3)->get();
      $meros = Mero::latest()->limit(6)->get();
      
      return view('pages.main', compact('neews', 'meros'));
    }
    
    public function mero()
    {
      $meros = Mero::latest()->get();
      
      return view('pages.mero', compact('meros'));
    }
    
    public function new()
    {
      $neews = Neew::latest()->get();
      
      return view('pages.new', compact('neews'));
    }
    
    public function contact()
    {
      return view('pages.contact');
    }
    
    public function doc()
    {
      $dds = Dd::latest()->get();
      
      return view('pages.doc', compact('dds'));
    }
    
    public function merosolo(Mero $solo)
    {
      return view('pages.merosolo', compact('solo'));
    }
    
    public function newsolo(Neew $solo)
    {
      return view('pages.newsolo', compact('solo'));
    }
    public function footerform(Request $request)
      {
         $data= array(
      'name' => request('name'),
      'email' => request('email'),
      'message2' => request('message'),
      );
       \Mail::send('email.mail1', $data, function($message1) use ($data)
    {
        $mail_admin = env('MAIL_ADMIN_FOOTER');
        $message1->from($data['email'], $data['name'], $data['message2']);
        $message1->to($mail_admin, 'For Admin')->subject('Message from site');
     });
      return back();
    }
}
