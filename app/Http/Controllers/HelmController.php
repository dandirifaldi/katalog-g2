<?php
namespace App\Http\Controllers;
use App\Models\HelmModel;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class HelmController extends Controller
{
    public function __construct()
    {
        $this->HelmModel = new HelmModel();
    }
    //-- --//
    public function index()
    {
        $data =[
            'product'=>$this->HelmModel->allData(),
        ];
        return view('dashboard.helm.helm',$data);
    }
    //-- --//
    public function detail($id_helm)
    {
        if(!$this->HelmModel->detailData($id_helm)){
            abort(404);
        }
        $data =[
            'product'=> $this->HelmModel->detailData($id_helm),
        ];
        return view('dashboard.helm.detail',['product'=>$data,'image1'=>$data]);
    } 
    //-- --//
    public function insert()
    {
        Request()->validate([
            //rules
            'id_helm' => 'required|unique:product,id_helm|max:20',
            'nama_helm' => 'required',
            'qty' => 'required',
            'kategori' => 'required',
            'type' => 'required',
            'warna' => 'required',
            'type_warna' => 'required',
            'visor' => 'required',
            'type_visor' => 'required',
            'image1' => 'required|mimes:jpg,jpeg,png|max:10240',
            'image2' => 'required|mimes:jpg,jpeg,png|max:10240',
            'image3' => 'required|mimes:jpg,jpeg,png|max:10240',
            'image4' => 'required|mimes:jpg,jpeg,png|max:10240',
            'image5' => 'required|mimes:jpg,jpeg,png|max:10240',
            'image6' => 'required|mimes:jpg,jpeg,png|max:10240',
            'image7' => 'required|mimes:jpg,jpeg,png|max:10240',
            'image8' => 'mimes:jpg,jpeg,png|max:10240',
        ],[
            //message
            'id_helm.required' => 'Required Id Helm !!!',
            'id_helm.unique' => 'Id Has AllReady !!!',
            'id_helm.max' => 'Max 20 Character !!!',
            'nama_helm.required' =>'Required Value !!!',
            'qty.required' => 'Required Value !!!',
            'kategori.required' => 'Required Value !!!',
            'type.required' => 'Required Value !!!',
            'warna.required' => 'Required Value !!!',
            'type_warna.required' => 'Required Value !!!',
            'visor.required' => 'Required Value !!!',
            'type_visor.required' => 'Required Value !!!',
            'image1.required' => 'Required Picture !!!',
            'image2.required' => 'Required Picture !!!',
            'image3.required' => 'Required Picture !!!',
            'image4.required' => 'Required Picture !!!',
            'image5.required' => 'Required Picture !!!',
            'image6.required' => 'Required Picture !!!',
            'image7.required' => 'Required Picture !!!',
            'image1.max' => 'Max Size Picture 10 Mb !!!',
            'image2.max' => 'Max Size Picture 10 Mb !!!',
            'image3.max' => 'Max Size Picture 10 Mb !!!',
            'image4.max' => 'Max Size Picture 10 Mb !!!',
            'image5.max' => 'Max Size Picture 10 Mb !!!',
            'image6.max' => 'Max Size Picture 10 Mb !!!',
            'image7.max' => 'Max Size Picture 10 Mb !!!',
            'image8.max' => 'Max Size Picture 10 Mb !!!',
        ]);
        //Jika Valdiasi Tidak Ada Maka Lakukan Simpan Data
        //upload gambar
        $file1 = Request()->image1;
        $fileName1 = Request()->id_helm .'.'. $file1->extension();
        $file1->move(public_path('img_helm/1'),$fileName1);

        $file2 = Request()->image2;
        $fileName2 = Request()->id_helm .'.'. $file2->extension();
        $file2->move(public_path('img_helm/2'),$fileName2);

        $file3 = Request()->image3;
        $fileName3 = Request()->id_helm .'.'. $file3->extension();
        $file3->move(public_path('img_helm/3'),$fileName3);

        $file4 = Request()->image4;
        $fileName4 = Request()->id_helm .'.'. $file4->extension();
        $file4->move(public_path('img_helm/4'),$fileName4);

        $file5 = Request()->image5;
        $fileName5 = Request()->id_helm .'.'. $file5->extension();
        $file5->move(public_path('img_helm/5'),$fileName5);

        $file6 = Request()->image6;
        $fileName6 = Request()->id_helm .'.'. $file6->extension();
        $file6->move(public_path('img_helm/6'),$fileName6);

        $file7 = Request()->image7;
        $fileName7 = Request()->id_helm .'.'. $file7->extension();
        $file7->move(public_path('img_helm/7'),$fileName7);

        $file8 = Request()->image8;
        $fileName8 = Request()->id_helm .'.'. $file8->extension();
        $file8->move(public_path('img_helm/8'),$fileName8);

        $data = [
            'id_helm' => Request()->id_helm,
            'nama_helm' => Request()->nama_helm,
            'qty' => Request()->qty, 
            'kategori' => Request()->kategori, 
            'type' => Request()->type, 
            'warna' => Request()->warna, 
            'type_warna' => Request()->type_warna, 
            'visor' => Request()->visor, 
            'type_visor' => Request()->type_visor, 
            'image1' => $fileName1,
            'image2' => $fileName2,
            'image3' => $fileName3,
            'image4' => $fileName4,
            'image5' => $fileName5,
            'image6' => $fileName6,
            'image7' => $fileName7,
            'image8' => $fileName8,
        ];
        $this->HelmModel->addData($data);
        Alert::success('ADDED','Data Helm Berhasil Di Tambahkan');
        return redirect()->route('helm');
    }
    //-- --/
    public function edit($id_helm)
    {
        if (!$this->HelmModel->detailData($id_helm)){
            abort(404);
        }
        $data =[
            'product'=>$this->MesinModel->detailData($id_helm),
        ];
        return view('dashboard.helm.helm',$data);
    }
    //-- --//
    public function update(Request $request, $id_helm)
    {
        Request()->validate([
            //rules
            'nama_helm' => 'required',
            'qty' => 'required',
        ],[
            //message
            'nama_helm.required' => 'Required Value !!!',
            'qty.required' => 'Required Value !!!',
        ]);
        $data = [
            'nama_helm' => Request()->nama_helm,
            'qty' => Request()->qty,
        ];
        $this->HelmModel->editData($id_helm,$data);
        Alert::warning('UPDATED','Data Helm Berhasil Di Update');
        return redirect()->route('helm');
    }
    //-- --//
    public function delete($id_helm)
    {
        $this->HelmModel->deleteData($id_helm);
        Alert::info('DELETED','Data Helm Berhasil Di Hapus');
        return redirect()->route('helm');
    }
}
