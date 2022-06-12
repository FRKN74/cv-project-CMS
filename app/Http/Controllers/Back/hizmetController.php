<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\hizmet;
use App\Http\Requests\HCreateRequest;
use Illuminate\Support\Str;

use Yajra\Datatables\Datatables;


class hizmetController extends Controller
{
    public function create()
    {
        return view('back.hizmetler.create');
    }
    public function createPost(HCreateRequest $request)
    {
        $hizmet =  new hizmet;
        $hizmet->hizmetTitle = $request->hizmetTitle;
        $hizmet->hizmetIcon = $request->hizmetIcon;
        $hizmet->metin = $request->metin;
        $hizmet->save();

        toastr()->success('Başarılı','Hizmet oluşturuldu.');
        return redirect()->route('admin.hizmet.list');
    }
    public function list(Request $request)
    {
        if ($request->ajax()) {
            $data = hizmet::latest()->get();
            return Datatables::of($data)
            ->addIndexColumn()
             ->editColumn('metin', function ($data) {
                 return Str::limit($data->metin, 50);
            })
            ->addColumn('action', function($row){
                
                $btn = '
                <a href="'. route('admin.hizmet.update', $row->id) .'" class="btn btn-warning m-1 btn-sm"><i class="fa fa-edit "></i></a>
                <a href="'. route('admin.hizmet.delete', $row->id) .'" id="delete" class="btn btn-danger m-1 btn-sm"><i class="fa fa-trash"></i></a>';
                
                return $btn;
            })
            
             ->rawColumns(['metin'])
            ->rawColumns(['action'])
            ->make(true);
            
        }
        
        return view('back.hizmetler.list');
    }
    public function update($id)
    {
        $hizmet = hizmet::whereId($id)->get();

        return view('back.hizmetler.update',compact('hizmet'));

    }
    public function updatePost(HCreateRequest $request , $id)
    {
        $hizmet =  hizmet::find($id);
        $hizmet->hizmetTitle = $request->hizmetTitle;
        $hizmet->hizmetIcon = $request->hizmetIcon;
        $hizmet->metin = $request->metin;
        $hizmet->update();

        toastr()->success('Başarılı','Hizmet güncellendi.');
        return redirect()->route('admin.hizmet.list');
    }

    public function delete($id)
    {
        hizmet::whereId($id)->delete();
        
        toastr()->success('Başarılı','Hizmet silindi.');
        return redirect()->route('admin.hizmet.list');

    }
       
}
