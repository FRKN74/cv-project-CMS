@extends('back.theme.master')

@section('content')
<div class="page-body">
    <div class="container-fluid">
      <div class="page-title">
        <div class="row">
          <div class="col-12 col-sm-6">
            <h3>İletişim  sayfası</h3>
          </div>
          <div class="col-12 col-sm-6">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}"><i data-feather="home"></i></a></li>
              <li class="breadcrumb-item">İletişim</li>

            </ol>
          </div>
        </div>
      </div>
    </div>
    <!-- Container-fluid starts-->
    <div class="container-fluid">
      <div class="row">
        @if ($errors->any())
        <div class="alert alert-danger mt-3">
            @foreach ($errors->all() as $error )
                <li>{{$error}}</li>
            @endforeach
        </div>
    @endif
        <div class="col-sm-12">
          <div class="card">
            @foreach ($iletisim as $i)
              
            <form action="{{route('admin.iletisim.detay',$i->slug)}}" method="POST" enctype="multipart/form-data" class="form theme-form">
                @csrf
              <div class="card-body">
                <div class="row">
                  <div class="col">
                    <div class="mb-3 row">
                     <label class="col-sm-3 col-form-label">Adres (Kısa)</label>
                     <div class="col-sm-9">
                       <input class="form-control" name="adres" type="text" value="{{ $i->adres }}">
                     </div>
                   </div> 
                   <div class="mb-3 row">
                    <label class="col-sm-3 col-form-label">Telefon</label>
                    <div class="col-sm-9">
                      <input class="form-control" name="tel" type="text" value="{{ $i->tel }}">
                    </div>
                  </div> 
                    <div class="mb-3 row">
                      <label class="col-sm-3 col-form-label">Mail</label>
                      <div class="col-sm-9">
                        <input class="form-control" name="mail" type="text" value="{{ $i->mail }}">
                      </div>
                    </div>
                    <div class="mb-3 row">
                      <label class="col-sm-3 col-form-label">Meslek</label>
                      <div class="col-sm-9">
                        <input class="form-control" name="meslek" type="text" value="{{ $i->meslek }}">
                      </div>
                    </div>

                    <div class="row">
                      <label class="col-sm-3 col-form-label">Harita</label>
                      <div class="col-sm-9">
                        <textarea class="form-control" name="harita" rows="5" cols="5" >{{ $i->harita }} </textarea>
                      </div>
                    </div>
                  </div>
                  <br>
                  <div class="card-footer text-end">
                    <button class="btn btn-primary" type="submit">Kaydet</button>
                  </div>
                </form>
            @endforeach

                </div>
              </div>
              
          </div>
        </div>
      </div>
    </div>
    <!-- Container-fluid Ends-->
  </div>
@endsection