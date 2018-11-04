<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contact;
use App\Quote;
use Mail;
class IndexController extends Controller
{
    //

    public function test()
    {
      $data = array('name'=>"mdkflmkldfmklfmdlk ");
      Mail::send('mail', $data, function($message) {
         $message->to('abhinav.cse12@gmail.com', 'Tutorials Point')->subject
            ('Laravel HTML Testing Mail');
         $message->from('abhinavsbbgi@gmail.com','Abhinav');
      });
      echo "HTML Email Sent. Check your inbox.";

    }
   
    public function index()
    {
        $data=Quote::All()->shuffle()->take(30);
        return view('index',[ 'passdata' => $data,  ]);
    }
     public function getAuthors()
    {
        return view('authors');
    }
    public function getContact()
    {
        return view('contact');
    }
    
    public function submitContact(Request $request)
    {
        $request->validate([
            'name' => 'bail|required|max:255',
        ]);        
                
        Contact::create( [ 'uname' => $request['name'],
        'email' => $request['email'], 'msg' => $request['msg'], ] ); 
                
        return redirect()->route('contact')->with( ['success' => 'Data Submitted Successfully. We will contact you soon.', ] );
        
    }
    
}
//$quote = Quote::All()->take(10)->shuffle();