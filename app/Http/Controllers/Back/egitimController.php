<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\egitim;
use Illuminate\Support\Str;

use Yajra\Datatables\Datatables;

class egitimController extends Controller
{
    public function create()
    {
        return view('back.egitim.create');
    }

    public function createPost(Request $request)
    {
        $egitim = new egitim;
        $egitim->egitimyili = $request->egitimyili;
        $egitim->okuladi = $request->okuladi;
        $egitim->bolümadi = $request->bolümadi;
        $egitim->metin = $request->metin;
        $egitim->save();

        toastr()->success('Başarılı','Eğtim eklendi.');
        return redirect()->route('admin.egitim.create');

    }

    public function list(Request $request)
    {
        if ($request->ajax()) {
            $data = egitim::latest()->get();
            return Datatables::of($data)
            ->addIndexColumn()
             ->editColumn('metin', function ($data) {
                 return Str::limit($data->metin, 50,'...');
            })
            ->addColumn('action', function($row){
                
                $btn = '
                <a href="'. route('admin.egitim.update', $row->id) .'" class="btn btn-warning m-1 btn-sm"><i class="fa fa-edit "></i></a>
                <a href="'. route('admin.egitim.delete', $row->id) .'" id="delete" class="btn btn-danger m-1 btn-sm"><i class="fa fa-trash"></i></a>';
                
                return $btn;
            })
            
             ->rawColumns(['metin'])
            ->rawColumns(['action'])
            ->make(true);
            
        }
        
        return view('back.egitim.list');
    }

    public function update($id)
    {
        $egitim = egitim::whereId($id)->get();
        return view('back.egitim.update',compact('egitim'));
    }

    public function updatePost(Request $request , $id)
    {
        $egitim = egitim::find($id);
        $egitim->egitimyili = $request->egitimyili;
        $egitim->okuladi = $request->okuladi;
        $egitim->bolümadi = $request->bolümadi;
        $egitim->metin = $request->metin;
        $egitim->update();

        toastr()->success('Başarılı','Eğtim güncellendi.');
        return redirect()->route('admin.egitim.list');
    }
    public function delete($id)
    {
        egitim::whereId($id)->delete();

        toastr()->success('Başarılı','Eğtim silindi.');
        return redirect()->route('admin.tecrübe.list');
    }
}
