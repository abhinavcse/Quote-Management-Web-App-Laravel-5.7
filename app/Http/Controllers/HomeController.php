<?php

namespace App\Http\Controllers;
use Auth;
use Illuminate\Http\Request;
use App\Quote;
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
        return view('author_home');
    }
   
    public function postQuote()
    {
        return view('post_quote');
    }
    public function updateQuote()
    {
        return view('update_quote');
    }
    public function insertQuery()
    {
        return view('query');
    }
    public function postQuoteSubmit(Request $request)
    {
      Quote::create([ 'title' =>$request['title'], 'category' =>$request['category'], 'author_name' =>$request['author'], 
      'quote' =>$request['quote'], 'user_id' =>Auth::user()->id , 
      ]);  
      return redirect()->route('post_quote')->with( ['success' => 'Quote Submitted Successfully.', ] );
         
        
    }
}
