<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DiaChiGiaoHang extends Model
{
   public $table = "diachi_giaohang";
    protected $primaryKey='id';
    protected $fillable=['id_nguoidung','email_nguoidung','ten','diachi','sdt'];
}
