<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AnhSanPham extends Model
{
    public $table = "anh_sanpham";
    protected $primaryKey='id';
    protected $fillable=['id_sanpham','anh'];
}
