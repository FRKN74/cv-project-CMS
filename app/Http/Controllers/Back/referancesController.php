<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\referance;
use Illuminate\Support\Str;

use Yajra\Datatables\Datatables;

class referancesController extends Controller
{
    public function create()
    {
        return view('back.referanslar.create');
    }
    public function createPost(Request $request)
    {
        $ref = new referance;
        $ref->title = $request->title;
        $ref->slug = Str::slug($request->title);

        if ($request->hasFile('image')) {
            $imageName = Str::slug($request->title).".".$request->image->getClientOriginalExtension();
            $request->image->move(public_path('referansUpload/'),$imageName);

            $ref->image = 'referansUpload/'.$imageName;
        }

        $ref->save();
        toastr()->success('Başarılı','Referans eklendi.');
        return redirect()->route('admin.dashboard');

    }
    public function list(Request $request)
    {
        if ($request->ajax()) {
            $data = referance::latest()->get();
            return Datatables::of($data)
            ->addIndexColumn()
            ->addColumn('action', function($row){
                
                $btn = '
                <a href="'. route('admin.referans.update', $row->id) .'" class="btn btn-warning m-1 btn-sm"><i class="fa fa-edit "></i></a>
                <a href="'. route('admin.referans.delete', $row->id) .'" id="delete" class="btn btn-danger m-1 btn-sm"><i class="fa fa-trash"></i></a>';
                
                return $btn;
            })
            ->addColumn('image', function ($product_brand) { 
                $url=asset("$product_brand->image"); 
                return '<img src='.$url.' border="0" width="50%" class="img-rounded rounded" align="center" />'; 
                
            })
            ->rawColumns(['action'])
            ->rawColumns(['image'])
            ->escapeColumns(['image'])
            ->make(true);
            
        }
        
        return view('back.referanslar.list');
    }
    public function update($id)
    {
        $referance = referance::whereId($id)->get();
        return view('back.referanslar.update',compact('referance'));
    }

    public function updatePost(Request $request ,$id)
    {
        $ref = referance::find($id);
        $ref->title = $request->title;
        $ref->slug = Str::slug($request->title);

        if ($request->hasFile('image')) {
            $imageName = Str::slug($request->title).".".$request->image->getClientOriginalExtension();
            $request->image->move(public_path('referansUpload/'),$imageName);

            $ref->image = 'referansUpload/'.$imageName;
        }

        $ref->update();
        toastr()->success('Başarılı','Referans güncellendi.');
        return redirect()->route('admin.dashboard');
    }
    public function delete($id)
    {
        referance::whereId($id)->delete();
        
        toastr()->success('Başarılı','Referans silindi.');
        return redirect()->route('admin.referans.list');

    }
}
