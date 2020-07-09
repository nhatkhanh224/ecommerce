<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SanPham extends Model
{
    protected $table='sanpham';
    protected $primaryKey='id_sanpham';
    protected $fillable=['id_loaisp','ten_sanpham','code_sanpham','mau_sanpham','mieuta','price','anh'];

    public function loaisanpham(){
        return $this->belongsTo('App\Loaisanpham','id_loaisp','id_loaisp');
    }
    public function thuoctinh(){
        return $this->hasMany('App\ThuocTinh','id_sanpham');
    }
    
    
}
