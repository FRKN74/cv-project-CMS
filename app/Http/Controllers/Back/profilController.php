<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Http\Requests\ProfilCreateRequest;
use Illuminate\Support\Str;
use App\Models\profil;
use File;

class profilController extends Controller
{

    // public function create(ProfilCreateRequest $request)
    // {
    //     $profil = new profil ;
    //     $profil->name = $request->name;
    //     $profil->slug = Str::slug($request->name);

    //     if ($request->hasFile('image')) {
    //         $imageName = Str::slug($request->title).".".$request->image->getClientOriginalExtension();
    //         $request->image->move(public_path('profilUpload/'),$imageName);

    //         $profil->image = 'profilUpload/'.$imageName;
    //     }
    //     $profil->subtitle = $request->subtitle;

    //     $profil->facebook = $request->facebook;
    //     $profil->twitter = $request->twitter;
    //     $profil->linkedin = $request->linkedin;

    //     $profil->save();

    //     toastr()->success('Başarılı','İşlem onaylandı.');
    //     return redirect()->route('admin.dashboard');

    // }

    public function profil($slug)
    {
        $profil = profil::whereSlug($slug)->get();
        return view('back.profil.profil',compact('profil'));
    }
    
    public function profilDetay(Request $request , $slug)
    {
        $profil = profil::whereSlug($slug)->first();
        $profil->name = $request->name;
        $profil->slug = Str::slug($request->name);

        if ($request->hasFile('image')) {
            $imageName = Str::slug($request->title).".".$request->image->getClientOriginalExtension();
            $request->image->move(public_path('profilUpload/'),$imageName);

            $profil->image = 'profilUpload/'.$imageName;
        }
        $profil->subtitle = $request->subtitle;

        $profil->facebook = $request->facebook;
        $profil->twitter = $request->twitter;
        $profil->linkedin = $request->linkedin;

        $profil->update();

        toastr()->success('Başarılı','İşlem onaylandı.');
        return redirect()->route('admin.dashboard');

    }
}
