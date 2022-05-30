<?php

namespace App\Http\Controllers;
use App\Models\HomeModel;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function __construct()
    {
        $this->HomeModel = new HomeModel();
    }
    public function index()
    {
        $data =[
            'product'=>$this->HomeModel->allData(),
        ];
        return view('v_home',$data);
    }
    //-- --//
    public function detail($id_helm)
    {
        if(!$this->HomeModel->detailData($id_helm)){
            abort(404);
        }
        $data =[
            'product'=> $this->HomeModel->detailData($id_helm),
        ];
        return view('v_homedetail',['product'=>$data,'image1'=>$data]);
    }
}
