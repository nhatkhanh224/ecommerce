<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order_SanPham extends Model
{
   public $table = "order_sanpham";
   protected $primaryKey='id';
   protected $fillable=['id_dathang','id_nguoidung','id_sanpham','ma_sanpham','ten_sanpham','size','gia','soluong'];
}
