@extends('back.theme.master')

@section('content')
<div class="page-body">
    <div class="container-fluid">
      <div class="page-title">
        <div class="row">
          <div class="col-12 col-sm-6">
            <h3>Hakkımızda güncelle sayfası</h3>
          </div>
          <div class="col-12 col-sm-6">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="index-2.html"><i data-feather="home"></i></a></li>
              <li class="breadcrumb-item">Hakkımızda</li>
              <li class="breadcrumb-item active">Güncelle</li>
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
            @foreach ($update as $item)
                
            <form action="{{ route('admin.hakkımızda.update.post',$item->id) }}" method="POST" enctype="multipart/form-data" class="form theme-form">
                @csrf
              <div class="card-body">
                <div class="row">
                  <div class="col">
                    <div class="mb-3 row">
                      <label class="col-sm-3 col-form-label">Başlık</label>
                      <div class="col-sm-9">
                        <input class="form-control" name="title" type="text" value="{{ $item->title }}">
                      </div>
                    </div>
                    <div class="mb-3 row">
                      <label class="col-sm-3 col-form-label">Alt Başlık</label>
                      <div class="col-sm-9">
                        <input class="form-control" name="subtitle" type="text" value="{{ $item->subtitle }}">
                      </div>
                    </div>
                    <div class="mb-3 row">
                      <label class="col-sm-3 col-form-label">Küçük Başlık</label>
                      <div class="col-sm-9">
                        <input class="form-control" name="short_write" type="text" value="{{  $item->short_write  }}">
                      </div>
                    </div>
                    <div class="mb-3 row">
                        <label class="col-sm-3 col-form-label">Fotoğraf</label>
                        
                        <div class="col-sm-6">
                            <img src="{{ asset($item->image) }}" class="w-50" alt="" srcset="">
                            <br>
                            <code class="text-danger">(Eski Fotoğraf)</code>
                            <br>
                            <input class="form-control" name="image" type="file">
                            <code class="text-success">(Yeni Fotoğraf)</code>
                        </div>
                        </div>
                    <div class="row">
                      <label class="col-sm-3 col-form-label">Açıklama</label>
                      <div class="col-sm-9">
                        <textarea class="form-control" name="description" rows="5" cols="5" >{{ $item->description }} </textarea>
                      </div>
                    </div>
                  </div>
                    <div class="card-header pb-0">
                      <h5>Figur Güncelle</h5>
                    </div>
                      <div class="card-body">
                        <div class="row">
                          <div class="col-md-6">
                            <div class="mb-3 row">
                              <label class="col-sm-3 col-form-label">Figur</label>
                              <div class="col-sm-9">
                                <img src="{{ asset($item->image2) }}" class="w-50" alt="" srcset="">
                                  <br>
                                  <code class="text-danger">(Eski Fotoğraf)</code>
                                  <br>
                                <input class="form-control" name="image2" type="file">
                                <code class="text-success">(Yeni Fotoğraf)</code>
                              </div>
                            </div>
                            {{-- <div class="mb-3 row">
                              <label class="col-sm-3 col-form-label">Fotoğraf-2</label>
                              <div class="col-sm-9">
                                <img src="{{ asset($item->image2) }}" class="w-50" alt="" srcset="">
                                  <br>
                                  <code class="text-danger">(Eski Fotoğraf)</code>
                                  <br>
                                <input class="form-control" name="image2" type="file">
                                <code class="text-success">(Yeni Fotoğraf)</code>
                              </div>
                            </div> --}}
                          </div>
                          {{-- <div class="col-md-6">
                            <div class="mb-3 row">
                              <label class="col-sm-3 col-form-label">Fotoğraf-3</label>
                              <div class="col-sm-9">
                                <img src="{{ asset($item->image3) }}" class="w-50" alt="" srcset="">
                                  <br>
                                  <code class="text-danger">(Eski Fotoğraf)</code>
                                  <br>
                                <input class="form-control" name="image3" type="file">
                                <code class="text-success">(Yeni Fotoğraf)</code>
                              </div>
                            </div>
                            <div class="mb-3 row">
                              <label class="col-sm-3 col-form-label">Fotoğraf-4</label>
                              <div class="col-sm-9">
                                <input class="form-control" name="image4" type="file">
                              </div>
                            </div> 
                          </div> --}}
                        </div>
                      </div>
                      <div class="card-footer text-end">
                        <button class="btn btn-primary" type="submit">Güncelle</button>
                        <input class="btn btn-light" type="reset" value="Cancel">
                      </div>
                    </form>
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