<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class HelmModel extends Model
{
    public function allData()
    {
        return DB::table('product')
        ->get();
    }

    public function detailData($id_helm)
    {
        return DB::table('product')
        ->where('id_helm',$id_helm)
        ->first();
    }

    public function addData($data)
    {
        DB::table('product')
        ->insert($data);
    }
    public function editData($id_helm,$data)
    {
        DB::table('product')
        ->where('id_helm',$id_helm)
        ->update($data);
    }

    public function deleteData($id_helm)
    {
        DB::table('product')
        ->where('id_helm',$id_helm)
        ->delete();
    }

}
