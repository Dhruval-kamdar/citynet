<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Hash;
use DB;
use Auth;
use App\Model\UserHasPermission;
use App\Model\Sendmail;
use App\Model\Users;
use PDF;
use Config;

class Blog extends Model {
    protected $table = 'blog';
   
    public function addBlog($request) {
       $name = '';
        if($request->file()){
            $image = $request->file('demo_pic');
            $name = 'admin'.time().'.'.$image->getClientOriginalExtension();
            $destinationPath = public_path('/uploads/blog/');
            $image->move($destinationPath, $name);    
        }
        $objUser = new Blog();
        $objUser->title = $request->input('title');
        $objUser->description = $request->input('description');
        $objUser->image = $name;
        $objUser->created_at = date('Y-m-d H:i:s');
        $objUser->updated_at = date('Y-m-d H:i:s');
        $objUser->save();
        return TRUE;
    }
 public function editBlog($request) {
       $name = $request->input('image');
        if(!empty($request->file())){
            $image = $request->file('demo_pic');
            $name = 'admin'.time().'.'.$image->getClientOriginalExtension();
            $destinationPath = public_path('/uploads/blog/');
            $image->move($destinationPath, $name);    
        }
        $objUser = Blog::find($request->input('edit_id'));
        $objUser->title = $request->input('title');
        $objUser->description = $request->input('description');
        $objUser->status = $request->input('status');
        $objUser->image = $name;
        $objUser->updated_at = date('Y-m-d H:i:s');
        $objUser->save();
        return TRUE;
    }

     public function getData($request) {
        $requestData = $_REQUEST;
        $columns = array(
            // datatable column index  => database column name
            0 => 'ra.id',
            1 => 'ra.title',
            2 => 'ra.description'
        );

        $query = Blog::from('blog as ra');

        if (!empty($requestData['search']['value'])) {   // if there is a search parameter, $requestData['search']['value'] contains search parameter
            $searchVal = $requestData['search']['value'];
            $query->where(function($query) use ($columns, $searchVal, $requestData) {
                        $flag = 0;
                        foreach ($columns as $key => $value) {
                            $searchVal = $requestData['search']['value'];
                            if ($requestData['columns'][$key]['searchable'] == 'true') {
                                if ($flag == 0) {
                                    $query->where($value, 'like', '%' . $searchVal . '%');
                                    $flag = $flag + 1;
                                } else {
                                    $query->orWhere($value, 'like', '%' . $searchVal . '%');
                                }
                            }
                        }
                    });
        }

        $temp = $query->orderBy($columns[$requestData['order'][0]['column']], $requestData['order'][0]['dir']);

        $totalData = count($temp->get());
        $totalFiltered = count($temp->get());

        $resultArr = $query->skip($requestData['start'])
                ->take($requestData['length'])
                ->select('ra.id', 'ra.title', 'ra.description', 'ra.image', 'ra.created_at','ra.status')->get();
        $data = array();
        foreach ($resultArr as $row) {
           $actionHtml = '';
           $actionHtml .= '<a href="' . route('edit-blog', array('id' => $row['id'])) . '" class="link-black text-sm" data-toggle="tooltip" data-original-title="Edit" > <i class="fa fa-edit"></i></a>';
            $actionHtml .= '<a href="#deleteModel" data-toggle="modal" data-id="'.$row['id'].'" class="link-black text-sm demoDelete" data-toggle="tooltip" data-original-title="Delete" > <i class="fa fa-trash"></i></a>';
            $nestedData = array();
            $nestedData[] = $row["id"];
            $nestedData[] = $row["title"];
            $nestedData[] = $row["description"];
            $nestedData[] = ($row["status"] == '1' ? 'Active' : 'In-Active');
            $nestedData[] = date('d-m-Y',strtotime($row["created_at"]));
            $nestedData[] = $actionHtml;
            $data[] = $nestedData;
        }
       // echo "<pre>";print_r($data);exit;

        $json_data = array(
            "draw" => intval($requestData['draw']), // for every request/draw by clientside , they send a number as a parameter, when they recieve a response/data they first check the draw number, so we are sending same number in draw. 
            "recordsTotal" => intval($totalData), // total number of records
            "recordsFiltered" => intval($totalFiltered), // total number of records after searching, if there is no searching then totalFiltered = totalData
            "data" => $data   // total data array
        );

        return $json_data;
    }
   
   public function getBlog(){
        $result = Blog::select('*')->where('status','1')->orderBy('id', 'desc')->get();
        return $result;
   }
}
