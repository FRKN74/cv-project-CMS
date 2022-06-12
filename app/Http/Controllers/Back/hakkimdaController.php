<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

use App\Models\hakkimda;
use File;

class hakkimdaController extends Controller
{
    public function hakkimda($slug)
    {
        $hakkimda = hakkimda::whereSlug($slug)->get();
        return view('back.hakkimda.hakkimda',compact('hakkimda'));
    }
    
    public function hakkimdaDetay(Request $request , $slug)
    {
        $hakkimda = hakkimda::whereSlug($slug)->first();
        $hakkimda->benkimim = $request->benkimim;
        $hakkimda->slug = "hakkimda";

        $hakkimda->adres = $request->adres;

        $hakkimda->yas = $request->yas;
        $hakkimda->ulke = $request->ulke;
        $hakkimda->mail = $request->mail;
        $hakkimda->telefon = $request->telefon;

      
        if ($request->hasFile('image')) {
            $imageName = Str::slug($request->title).".".$request->image->getClientOriginalExtension();
            $request->image->move(public_path('hakkimdaUpload/'),$imageName);

            $hakkimda->image = 'hakkimdaUpload/'.$imageName;
        }
        $hakkimda->update();

        toastr()->success('Başarılı','İşlem onaylandı.');
        return redirect()->route('admin.dashboard');

    }
}
