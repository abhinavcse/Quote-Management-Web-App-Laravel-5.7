<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contact;
use App\Quote;
class IndexController extends Controller
{
    //
    public function test()
    {
        return Quote::orderBy('created_at', 'DESC')->get();;
    }
   
    public function index()
    {
        return view('index');
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
