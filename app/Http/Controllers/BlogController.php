<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use App\Model\Blog;
use Auth;
use Session;
use Redirect;

class BlogController extends Controller {

    /**
     * Create a new authentication controller instance.
     *
     * @return void
     */
    public function __construct() {
        //$this->middleware('guest', ['except' => 'logout']);
    }
    
    public function blog(Request $request) {
        $objDemo = new Blog();
        $data['blogArray'] = $objDemo->getBlog();
        return view('front.blog.blog-list',$data);
    } 
    public function blog_details(Request $request,$id) {
        $data['blogArray'] =  Blog::find($id);
        // print_r($data['blogArray']);exit;
        return view('front.blog.blog-detail',$data);
    }
}