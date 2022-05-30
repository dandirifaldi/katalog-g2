<?php
namespace App\Http\Controllers;
use App\Models\PanelModel;
use Illuminate\Http\Request;

class PanelController extends Controller
{
    public function __construct()
    {
        $this->PanelModel = new PanelModel();
    }
    public function index()
    {
        $data =[
            'product'=>$this->PanelModel->allData(),
        ];
        return view('panel',$data);
    }
    //-- --//
    public function detail($id_helm)
    {
        if(!$this->PanelModel->detailData($id_helm)){
            abort(404);
        }
        $data =[
            'product'=> $this->PanelModel->detailData($id_helm),
        ];
        return view('paneldetail',['product'=>$data,'image1'=>$data]);
    } 
}
