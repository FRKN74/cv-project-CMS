<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\kategori;
use Illuminate\Support\Str;
use App\Http\Requests\KCreateRequest;

class kategoriController extends Controller
{
    public function create()
    {
        $kat = kategori::all();
        return view('back.kategori.create',compact('kat'));
    }
    public function createPost(KCreateRequest $request )
    {
        $kategori = new kategori;
        $kategori->kategori_adi = $request->kategori_adi;
        $kategori->slug= Str::slug($request->kategori_adi);
        $kategori->save();

        toastr()->success('Başarılı','Kategori oluşturuldu.');
        return redirect()->route('admin.kategori.create');
    }
    public function update($id)
    {
        $kat = kategori::all();
        $kategori = kategori::whereId($id)->get();
        return view('back.kategori.update',compact('kat','kategori'));
    }
    public function updatePost(KCreateRequest $request ,$id)
    {
        $kategori = kategori::find($id);
        $kategori->kategori_adi = $request->kategori_adi;
        $kategori->slug= Str::slug($request->kategori_adi);
        $kategori->update();

        toastr()->success('Başarılı','Kategori güncellendi.');
        return redirect()->route('admin.kategori.create');
    }
    public function delete($id)
    {
        kategori::whereId($id)->delete();

        toastr()->success('Başarılı','Kategori silindi.');
        return redirect()->route('admin.kategori.create');
    }
    
}
