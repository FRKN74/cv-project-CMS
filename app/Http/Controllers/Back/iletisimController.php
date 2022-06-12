<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\iletisim;
use Illuminate\Support\Str;

class iletisimController extends Controller
{

        public function ilet($slug)
        {
            $iletisim = iletisim::whereSlug($slug)->get();
            return view('back.iletisim.create',compact('iletisim'));
        }
        
        public function iletDetay(Request $request , $slug)
        {
            $iletisim = iletisim::whereSlug($slug)->first();
            $iletisim->slug = "contact";
            $iletisim->adres = $request->adres;
            $iletisim->tel = $request->tel;
            $iletisim->mail = $request->mail;
            $iletisim->meslek = $request->meslek;
            $iletisim->harita = $request->harita;
          
            $iletisim->update();
    
            toastr()->success('Başarılı','İşlem onaylandı.');
            return redirect()->route('admin.dashboard');
    
        }
}
