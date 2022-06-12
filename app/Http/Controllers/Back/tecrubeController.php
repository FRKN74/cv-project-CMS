<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\tecrube;
use Illuminate\Support\Str;
use Yajra\Datatables\Datatables;

class tecrubeController extends Controller
{
    public function create()
    {
        return view('back.tecrube.create');
    }

    public function createPost(Request $request)
    {
        $tecrübe = new tecrube;
        $tecrübe->tecübe_yili = $request->tecübe_yili;
        $tecrübe->sirket_adi = $request->sirket_adi;
        $tecrübe->alan = $request->alan;
        $tecrübe->metin = $request->metin;
        $tecrübe->save();

        toastr()->success('Başarılı','Tecrübe öğesi eklendi.');
        return redirect()->route('admin.tecrube.create');

    }

    public function list(Request $request)
    {
        if ($request->ajax()) {
            $data = tecrube::latest()->get();
            return Datatables::of($data)
            ->addIndexColumn()
             ->editColumn('metin', function ($data) {
                 return Str::limit($data->metin, 50,'...');
            })
            ->addColumn('action', function($row){
                
                $btn = '
                <a href="'. route('admin.tecrube.update', $row->id) .'" class="btn btn-warning m-1 btn-sm"><i class="fa fa-edit "></i></a>
                <a href="'. route('admin.tecrube.delete', $row->id) .'" id="delete" class="btn btn-danger m-1 btn-sm"><i class="fa fa-trash"></i></a>';
                
                return $btn;
            })
            
             ->rawColumns(['metin'])
            ->rawColumns(['action'])
            ->make(true);
            
        }
        
        return view('back.tecrube.list');
    }

    public function update($id)
    {
        $tecrübe = tecrube::whereId($id)->get();
        return view('back.tecrube.update',compact('tecrübe'));
    }

    public function updatePost(Request $request , $id)
    {
        $tecrübe = tecrube::find($id);
        $tecrübe->tecübe_yili = $request->tecübe_yili;
        $tecrübe->sirket_adi = $request->sirket_adi;
        $tecrübe->alan = $request->alan;
        $tecrübe->metin = $request->metin;
        $tecrübe->update();

        toastr()->success('Başarılı','Tecrübe öğesi güncellendi.');
        return redirect()->route('admin.tecrube.list');
    }
    public function delete($id)
    {
        tecrube::whereId($id)->delete();

        toastr()->success('Başarılı','Tecrübe öğesi silindi.');
        return redirect()->route('admin.tecrube.list');
    }
}
