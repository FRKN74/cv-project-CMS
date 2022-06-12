<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\kategori;
use App\Models\proje;
use App\Http\Requests\PCreateRequest;
use App\Http\Requests\PUpdateRequest;

use Illuminate\Support\Str;
use Yajra\Datatables\Datatables;

class projeController extends Controller
{
     public function create()
    {
        $kategori = kategori::all();
        return view('back.projedetay.create',compact('kategori'));
    }
    public function createPost(PCreateRequest $request)
    {
        $projedetay = new proje;
        $projedetay->title = $request->title;
        $projedetay->slug = Str::slug($request->title);
        $projedetay->proje_id = $request->proje_id;
        $projedetay->ad_soyad = $request->ad_soyad;
        $projedetay->link = $request->link;
        $projedetay->description = $request->description;



        if ($request->hasFile('image1')) {
            $imageName = Str::slug($request->title)."1.".$request->image1->getClientOriginalExtension();
            $request->image1->move(public_path('projectUploads'),$imageName);

            $projedetay->image1 = 'projectUploads/'.$imageName;
        }
        if ($request->hasFile('image2')) {
            $imageName = Str::slug($request->title)."2.".$request->image2->getClientOriginalExtension();
            $request->image2->move(public_path('projectUploads'),$imageName);

            $projedetay->image2 = 'projectUploads/'.$imageName;
        }
        if ($request->hasFile('image3')) {
            $imageName = Str::slug($request->title)."3.".$request->image3->getClientOriginalExtension();
            $request->image3->move(public_path('projectUploads'),$imageName);

            $projedetay->image3 = 'projectUploads/'.$imageName;
        }
        $projedetay->save();

        toastr()->success('Başarılı','Proje eklendi.');
        return redirect()->route('admin.proje.list');
    }
    public function list(Request $request)
    {
        if ($request->ajax()) {
            $data = proje::latest()->get();
            return Datatables::of($data)
            ->addIndexColumn()
            ->editColumn('description', function ($data) {
                return Str::limit($data->description, 50,'...');
           })
            ->addColumn('action', function($row){
                
                $btn = '
                <a href="'. route('admin.proje.update', $row->id) .'" class="btn btn-warning m-1 btn-sm"><i class="fa fa-edit "></i></a>
                <a href="'. route('admin.proje.delete', $row->id) .'" id="delete" class="btn btn-danger m-1 btn-sm"><i class="fa fa-trash"></i></a>';
                
                return $btn;
            })
            ->addColumn('image1', function ($product_brand) { 
                $url=asset("$product_brand->image2"); 
                return '<img src='.$url.' border="0" width="100%" alt='.$url.' class="img-rounded rounded" align="center" />'; 
                
            })
            ->addColumn('image2', function ($product_brand) { 
                $url=asset("$product_brand->image2"); 
                return '<img src='.$url.' border="0" width="100%" alt='.$url.' class="img-rounded rounded" align="center" />'; 
                
            })
            ->addColumn('image3', function ($product_brand) { 
                $url=asset("$product_brand->image3"); 
                return '<img src='.$url.' border="0" width="100%" alt='.$url.' class="img-rounded rounded" align="center" />'; 
                
            })
            ->rawColumns(['description'])
            ->rawColumns(['action'])
            ->rawColumns(['image1'])
            ->escapeColumns(['image1'])
            ->rawColumns(['image2'])
            ->escapeColumns(['image2'])
            ->rawColumns(['image3'])
            ->escapeColumns(['image3'])

            ->make(true);
            
        }
        
        return view('back.projedetay.list');
    }
    public function update($id)
    {
        $kategori = kategori::all(); 
        $projedetay = proje::whereId($id)->get();
        return view('back.projedetay.update',compact('projedetay','kategori'));
    }
    public function updatePost(PUpdateRequest $request ,$id)
    {
        $projedetay = proje::find($id);
        $projedetay->title = $request->title;
        $projedetay->slug = Str::slug($request->title);
        $projedetay->proje_id = $request->proje_id;
        $projedetay->ad_soyad = $request->ad_soyad;
        $projedetay->link = $request->link;
        $projedetay->description = $request->description;



        if ($request->hasFile('image1')) {
            $imageName = Str::slug($request->title)."1.".$request->image1->getClientOriginalExtension();
            $request->image1->move(public_path('projectUploads'),$imageName);

            $projedetay->image1 = 'projectUploads/'.$imageName;
        }
        if ($request->hasFile('image2')) {
            $imageName = Str::slug($request->title)."2.".$request->image2->getClientOriginalExtension();
            $request->image2->move(public_path('projectUploads'),$imageName);

            $projedetay->image2 = 'projectUploads/'.$imageName;
        }
        if ($request->hasFile('image3')) {
            $imageName = Str::slug($request->title)."3.".$request->image3->getClientOriginalExtension();
            $request->image3->move(public_path('projectUploads'),$imageName);

            $projedetay->image3 = 'projectUploads/'.$imageName;
        }
        $projedetay->update();

        toastr()->success('Başarılı','Proje eklendi.');
        return redirect()->route('admin.proje.list');
    }



    public function delete($id)
    {
        kategori::whereId($id)->delete();
        
        toastr()->success('Başarılı','Proje detayları silindi.');
        return redirect()->route('admin.proje.list');
    }
}
