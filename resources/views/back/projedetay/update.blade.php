@extends('back.theme.master')

@section('content')
    <div class="page-body">
        <div class="container-fluid">
            <div class="page-title">
                <div class="row">
                    <div class="col-12 col-sm-6">
                        <h3>Proje güncelleme sayfası</h3>
                    </div>
                    <div class="col-12 col-sm-6">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}"><i
                                        data-feather="home"></i></a></li>
                            <li class="breadcrumb-item">Proje</li>
                            <li class="breadcrumb-item active">Güncelleme</li>
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
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </div>
                @endif
                <div class="col-sm-12">
                    <div class="card">
                        @foreach ($projedetay as $item)
                            <form action="{{ route('admin.proje.update.post',$item->id) }}" method="POST"
                                enctype="multipart/form-data" class="form theme-form">
                                @csrf
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col">
                                            <div class="mb-3 row">
                                                <label class="col-sm-3 col-form-label">Proje adı</label>
                                                <div class="col-sm-9">
                                                    <input class="form-control" name="title" placeholder="Proje  adı"
                                                        type="text" value="{{ $item->title }}">
                                                </div>
                                            </div>
                                            <div class="mb-3 row">
                                                <label class="col-sm-3 col-form-label">Ad Soyad</label>
                                                <div class="col-sm-9">
                                                    <input class="form-control" name="ad_soyad" placeholder="Ad Soyad"
                                                        type="text" value="{{  $item->ad_soyad }}">
                                                </div>
                                            </div>
                                            <div class="mb-3 row">
                                                <label class="col-sm-3 col-form-label">Proje link</label>
                                                <div class="col-sm-9">
                                                    <input class="form-control" name="link" placeholder="Link" type="text"
                                                        value="{{ $item->link }}">
                                                </div>
                                            </div>
                                            <div class="mb-3 row">
                                                <label class="col-sm-3 col-form-label">Açıklama</label>
                                                <div class="col-sm-9">
                                                    <textarea class="form-control" name="description" id="" cols="30" rows="10">{{ $item->description }}</textarea>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                                <div class="card-body">
                                    <h4 class="card-title">Kategori <code>(Zorunlu alan)</code></h4>
                                    <select class="form-control" name="proje_id">
                                      <option>Seçiniz..</option>
                                      @foreach ($kategori as $categori)
                                      <option @if($item->proje_id == $categori->id) selected @endif value="{{ $categori->id }}">{{ $categori->slug }}</option>
                                      @endforeach
                                  </select>
                                </div>

                                <div class="card-header pb-0">
                                    <h5>Fotoğraf yükle</h5>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="mb-3 row">
                                                <label class="col-sm-3 col-form-label">Fotoğraf-1</label>
                                                <div class="col-sm-9">
                                                    <img src="{{asset($item->image1)}}" alt="">
                                                    <br>
                                                    <code class="text-danger">Eski Foroğraf-1</code>
                                                    <br>
                                                    <input class="form-control" name="image1" type="file">
                                                    <br>
                                                    <code class="text-success">Yeni Foroğraf-1</code>
                                                </div>
                                            </div>
                                            <div class="mb-3 row">
                                                <label class="col-sm-3 col-form-label">Fotoğraf-2</label>
                                                <div class="col-sm-9">
                                                  <img src="{{asset($item->image2)}}" alt="">
                                                  <br>
                                                  <code class="text-danger">Eski Foroğraf-2</code>
                                                  <br>
                                                  <input class="form-control" name="image2" type="file">
                                                  <br>
                                                  <code class="text-success">Yeni Foroğraf-2</code>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="mb-3 row">
                                                <label class="col-sm-3 col-form-label">Fotoğraf-3</label>
                                                <div class="col-sm-9">
                                                  <img src="{{asset($item->image3)}}" alt="">
                                                  <br>
                                                  <code class="text-danger">Eski Foroğraf-3</code>
                                                  <br>
                                                  <input class="form-control" name="image3" type="file">
                                                  <br>
                                                  <code class="text-success">Yeni Foroğraf-3</code>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-footer text-end">
                                        <button class="btn btn-primary" type="submit">Güncelle</button>
                                    </div>
                                </div>
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
