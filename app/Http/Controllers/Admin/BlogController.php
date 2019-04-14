<?php

namespace App\Http\Controllers\Admin;
use App\Model\Users;
use App\Model\Blog;
use App\Http\Controllers\Controller;
use App\Model\Sendmail;
use Illuminate\Http\Request;
use Config;

class BlogController extends Controller {

    public function __construct() {
        parent::__construct();
        $this->middleware('admin');
    }

    public function index(Request $request) {
        $session = $request->session()->all();
        $data['pluginjs'] = array('jQuery/jquery.validate.min.js');
        $data['js'] = array('admin/blog.js');
        $data['funinit'] = array('Demo.init()');
        $data['css'] = array('');
        $data['header'] = array(
            'title' => 'Companyies',
            'breadcrumb' => array(
                'Home' => route("admin-dashboard"),
                'Demo' => 'Demo'));
        return view('admin.blog.list', $data);
        
    }   

    public function add(Request $request) {
         if ($request->isMethod('post')) {
            $objDemo = new Blog();
            // print_r( $request->file());exit;
            $ret = $objDemo->addBlog($request);
            if ($ret) {
                $return['status'] = 'success';
                $return['message'] = 'Blog added successfully.';
                $return['redirect'] = route('list-blog');
            } else {
                $return['status'] = 'error';
                $return['message'] = 'something will be wrong.';
            }
            echo json_encode($return);
            exit;
        }
        $data['testarray'] = Config::get('constants.testarray');
        $session = $request->session()->all();
        $data['pluginjs'] = array('jQuery/jquery.validate.min.js');
        $data['js'] = array('admin/blog.js', 'ajaxfileupload.js','jquery.form.min.js');
        $data['funinit'] = array('Demo.init()');
        $data['css'] = array('plugins/jasny/jasny-bootstrap.min.css');
        $data['header'] = array(
            'title' => 'Companyies',
            'breadcrumb' => array(
                'Home' => route("admin-dashboard"),
                'Demo' => route("list-blog"),
                'Add Demo' => 'Add Demo',));
        return view('admin.blog.add', $data);
    } 
    public function edit(Request $request,$id) {
        $data['testarray'] = Config::get('constants.testarray');
        $data['detail'] = Blog::find($id);

        if ($request->isMethod('post')) {
            $objDemo = new Blog();
            $ret = $objDemo->editBlog($request);
            if ($ret) {
                $return['status'] = 'success';
                $return['message'] = 'Record Edited successfully.';
                $return['redirect'] = route('list-blog');
            } else {
                $return['status'] = 'error';
                $return['message'] = 'something will be wrong.';
            }
            echo json_encode($return);
            exit;
        }

        $session = $request->session()->all();
        $data['pluginjs'] = array('jQuery/jquery.validate.min.js');
        $data['js'] = array('admin/blog.js', 'ajaxfileupload.js','jquery.form.min.js');
        $data['funinit'] = array('Demo.init()');
        $data['css'] = array('plugins/jasny/jasny-bootstrap.min.css');
         $data['header'] = array(
            'title' => 'Companyies',
            'breadcrumb' => array(
                'Home' => route("admin-dashboard"),
                'Demo' => route("list-blog"),
                'Edit Demo' => 'Edit Demo',));
        return view('admin.blog.edit', $data);
    }

    public function deleteBlog($postData) {
        if ($postData) {
            $result = Blog::where('id', $postData['id'])->delete();
            if ($result) {
                $return['status'] = 'success';
                $return['message'] = 'Record delete successfully.';
                $return['jscode'] = "setTimeout(function(){
                        $('#deleteModel').modal('hide');
                        $('#dataTables-example').refresh();
                    },1000)";
            } else {
                $return['status'] = 'error';
                $return['message'] = 'something will be wrong.';
            }
            echo json_encode($return);
            exit;
        }
    }

    public function ajaxAction(Request $request) {
        $action = $request->input('action');
        switch ($action) {
            case 'getdatatable':
                $objBlog = new Blog();
                $demoList = $objBlog->getData($request);
                echo json_encode($demoList);
                break;
            case 'deleteBlog':
                $result = $this->deleteBlog($request->input('data'));
                break;
        }
    }

}
