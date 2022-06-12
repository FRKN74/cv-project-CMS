@extends('back.theme.master')

@section('content')
<div class="page-body">
    <div class="container-fluid">
      <div class="page-title">
        <div class="row">
          <div class="col-12 col-sm-6">
            <h3>Tecrübe oluşturma sayfası</h3>
          </div>
          <div class="col-12 col-sm-6">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}"><i data-feather="home"></i></a></li>
              <li class="breadcrumb-item">Tecrübe</li>
              <li class="breadcrumb-item active">Oluştur</li>
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
            <form action="{{route('admin.tecrube.create.post')}}" method="POST" enctype="multipart/form-data" class="form theme-form">
                @csrf
              <div class="card-body">
                <div class="row">
                  <div class="col">
                    <div class="mb-3 row">
                     <label class="col-sm-3 col-form-label">Tecrübe yılı</label>
                     <div class="col-sm-9">
                       <input class="form-control" name="tecübe_yili" type="text" value="{{ old('tecübe_yili') }}">
                     </div>
                   </div> 
                   <div class="mb-3 row">
                    <label class="col-sm-3 col-form-label">Şirket adı</label>
                    <div class="col-sm-9">
                      <input class="form-control" name="sirket_adi" type="text" value="{{ old('sirket_adi') }}">
                    </div>
                  </div> 
                    <div class="mb-3 row">
                      <label class="col-sm-3 col-form-label">Çalıştığım alan/bölüm</label>
                      <div class="col-sm-9">
                        <input class="form-control" name="alan" type="text" value="{{ old('alan') }}">
                      </div>
                    </div>

                    <div class="row">
                      <label class="col-sm-3 col-form-label">Açıklama</label>
                      <div class="col-sm-9">
                        <textarea class="form-control" name="metin" rows="5" cols="5" >{{ old('metin') }} </textarea>
                      </div>
                    </div>
                  </div>
                  <br>
                  <div class="card-footer text-end">
                    <button class="btn btn-primary" type="submit">Oluştur</button>
                  </div>
                </form>
                </div>
              </div>
              
          </div>
        </div>
      </div>
    </div>
    <!-- Container-fluid Ends-->
  </div>
@endsection