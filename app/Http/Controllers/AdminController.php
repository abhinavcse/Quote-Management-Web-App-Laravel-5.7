<?php

namespace App\Http\Controllers;
use Auth;
use Illuminate\Http\Request;
use App\Quote;
use App\User;
use App\Events\QueryEvent;
use App\Query;
class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
     public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('CheckUserTypeReverse');
    }
     
     public function index()
     {
        return View('admin_home'); 
     }
     public function addUser()
     {
        return "Add User";
     }
     public function QueryReply()
     {
        return "Query Reply";
     }
}    