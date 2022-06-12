<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\profil;
use App\Models\hizmet;
use App\Models\hakkimda;
use App\Models\referance;
use App\Models\egitim;
use App\Models\tecrube;
use App\Models\iletisim;
use App\Models\kategori;
use App\Models\proje;







class indexController extends Controller
{
    public function index()
    {

        $profil = profil::take(1)->get();
        $hakkimda = hakkimda::take(1)->get();
        $hizmet = hizmet::all();
        $referance = referance::all();
        $egitim = egitim::all();
        $tecrube = tecrube::all();
        $iletisim = iletisim::all();
        $kategori = kategori::all();
        $projeall = proje::with('getProje')->get();

        return view('front.index',compact('profil','hakkimda','hizmet','referance','egitim','tecrube','iletisim','kategori','projeall'));
    }
    // public function index2($slug)
    // {

    //     $profil = profil::take(1)->get();
    //     $hakkimda = hakkimda::take(1)->get();
    //     $hizmet = hizmet::all();
    //     $referance = referance::all();
    //     $egitim = egitim::all();
    //     $tecrübe = tecrübe::all();
    //     $iletisim = iletisim::all();
    //     $kategori = kategori::with('getDetay')->get();
    //     $projeall = proje::with('getProje')->get();
        

    //     return view('front.index-2',compact('profil','hakkimda','hizmet','referance','egitim','tecrübe','iletisim','kategori','projeall'));
    // }
    public function protfoy($slug)
    {
        $proje = proje::with('getProje')->whereSlug($slug)->get();
        return view('front.portfolio-1',compact('proje'));
    }
    public function protfoy2()
    {
        return view('front.portfolio-2');
    }
    public function protfoy3()
    {
        return view('front.portfolio-3');
    }
    public function blogpost()
    {
        return view('front.blog-post');
    }
}
