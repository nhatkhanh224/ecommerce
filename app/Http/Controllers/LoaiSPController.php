<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Loaisanpham;

class LoaiSPController extends Controller
{
    public function themloai(Request $request)
    {
    	if ($request->isMethod('post')) {
    		$data=$request->all();
            $loai =new Loaisanpham;
    		$loai->tenloai=$data['tenloai'];
    		$loai->parent_id_loaisp=$data['parent_id_loaisp'];
    		$loai->mieuta=$data['mieuta'];
    		$loai->url=$data['url'];
    		$loai->save();
    		return redirect('/admin/xemloai');
    	}
    	$levels=LoaiSanPham::where(['parent_id_loaisp'=>0])->get();

    	return view('admin.LoaiSanPham.them_loai')->with(compact('levels'));
    }
    public function sualoai(Request $request,$id_loaisp=null)
    {
    	if ($request->isMethod('post')) {
   		$data=$request->all();
   		LoaiSanPham::where(['id_loaisp'=>$id_loaisp])->update(['tenloai'=>$data['tenloai'],'mieuta'=>$data['mieuta'],'url'=>$data['url']]);
   		return redirect('/admin/xemloai');
   	}

    	$chitiet_loaisp=LoaiSanPham::where(['id_loaisp'=>$id_loaisp])->first();
    	$levels=LoaiSanPham::where(['parent_id_loaisp'=>0])->get();
    	return view('admin.LoaiSanPham.sua_loai')->with(compact('chitiet_loaisp','levels'));
    }
    public function xoaloai($id_loaisp=null)
    {
    	if(!empty($id_loaisp))
    	{
    		LoaiSanPham::where(['id_loaisp'=>$id_loaisp])->delete();
    		return redirect()->back();
    	}
    }
    public function xemloai()
    {
    	$loaisp=LoaiSanPham::get();
    	return view('admin.LoaiSanPham.xem_loai')->with(compact('loaisp'));
    }
}
