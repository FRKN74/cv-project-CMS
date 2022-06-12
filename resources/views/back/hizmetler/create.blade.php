@extends('back.theme.master')

@section('content')
<div class="page-body">
    <div class="container-fluid">
      <div class="page-title">
        <div class="row">
          <div class="col-12 col-sm-6">
            <h3>Hizmet oluşturma sayfası</h3>
          </div>
          <div class="col-12 col-sm-6">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}"><i data-feather="home"></i></a></li>
              <li class="breadcrumb-item">Hizmet</li>
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
            <form action="#" method="POST" enctype="multipart/form-data" class="form theme-form">
                @csrf
              <div class="card-body">
                <div class="row">
                  <div class="col">
                    <div class="mb-3 row">
                     <label class="col-sm-3 col-form-label">İcon Kodu</label>
                     <div class="col-sm-9">
                       <input class="form-control" name="hizmetIcon" type="text" value="{{ old('hizmetIcon') }}">
                     </div>
                   </div> 
                    <div class="mb-3 row">
                      <label class="col-sm-3 col-form-label">Başlık</label>
                      <div class="col-sm-9">
                        <input class="form-control" name="hizmetTitle" type="text" value="{{ old('hizmetTitle') }}">
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