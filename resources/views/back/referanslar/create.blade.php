@extends('back.theme.master')

@section('content')
<div class="page-body">
    <div class="container-fluid">
      <div class="page-title">
        <div class="row">
          <div class="col-12 col-sm-6">
            <h3>Referans oluşturma sayfası</h3>
          </div>
          <div class="col-12 col-sm-6">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="{{route('admin.referans.create')}}"><i data-feather="home"></i></a></li>
              <li class="breadcrumb-item">Referans</li>
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
            <form action="{{route('admin.referans.create.post')}}" method="POST" enctype="multipart/form-data" class="form theme-form">
                @csrf
              <div class="card-body">
                <div class="row">
                  <div class="col">
                    <div class="mb-3 row">
                      <label class="col-sm-3 col-form-label">Başlık</label>
                      <div class="col-sm-9">
                        <input class="form-control" name="title" type="text" value="{{ old('title') }}">
                      </div>
                    </div>
                    
                    <div class="mb-3 row">
                        <label class="col-sm-3 col-form-label">Fotoğraf</label>
                        <div class="col-sm-9">
                          <input class="form-control" name="image" type="file">
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
          {{-- <div class="card">
            <div class="card-header pb-0">
              <h5>Fotoğraf yükle</h5>
            </div>
              <div class="card-body">
                <div class="row">
                  <div class="col-md-6">
                    <div class="mb-3 row">
                      <label class="col-sm-3 col-form-label">Fotoğraf-1</label>
                      <div class="col-sm-9">
                        <input class="form-control" name="image1" type="file">
                      </div>
                    </div>
                    <div class="mb-3 row">
                      <label class="col-sm-3 col-form-label">Fotoğraf-2</label>
                      <div class="col-sm-9">
                        <input class="form-control" name="image2" type="file">
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="mb-3 row">
                      <label class="col-sm-3 col-form-label">Fotoğraf-3</label>
                      <div class="col-sm-9">
                        <input class="form-control" name="image3" type="file">
                      </div>
                    </div>
                    <div class="mb-3 row">
                      <label class="col-sm-3 col-form-label">Fotoğraf-4</label>
                      <div class="col-sm-9">
                        <input class="form-control" name="image4" type="file">
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="card-footer text-end">
                <button class="btn btn-primary" type="submit">Submit</button>
                <input class="btn btn-light" type="reset" value="Cancel">
              </div>
            </form>
          </div> --}}
        </div>
      </div>
    </div>
    <!-- Container-fluid Ends-->
  </div>
@endsection