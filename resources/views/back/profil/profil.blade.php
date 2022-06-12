@extends('back.theme.master')

@section('css')

@endsection

@section('content')
<div class="page-body">
    <div class="container-fluid">
      <div class="page-title">
        <div class="row">
          <div class="col-12 col-sm-6">
            <h3>Profil sayfası</h3>
          </div>
          <div class="col-12 col-sm-6">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="{{ route('admin.dashboard')}}"><i data-feather="home"></i></a></li>
              <li class="breadcrumb-item active">Profil</li>
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
            @foreach ($profil as $prof)
                
            <form action="{{route('admin.profil.detay',$prof->slug)}}" method="POST" enctype="multipart/form-data" class="form theme-form">
                @csrf
              <div class="card-body">
                <div class="row">
                  <div class="col">
                    <div class="mb-3 row">
                      <label class="col-sm-3 col-form-label">Ad Soyad</label>
                      <div class="col-sm-9">
                        <input class="form-control" name="name" placeholder="Ad Soyad giriniz" type="text" value="{{ $prof->name }}">
                      </div>
                    </div>
                    <div class="mb-3 row">
                      <label class="col-sm-3 col-form-label">Fotoğraf</label>
                      <div class="col-sm-9">
                        <img src="{{asset($prof->image)}}" class="form-control w-25 h-75 raunded"  alt="resim yok" srcset=""/>
                        <br>
                        <code class="text-danger">( Eski fotoğraf )</code>
                      </div>
                    </div> 
                    <div class="mb-3 row">
                      <label class="col-sm-3 col-form-label">Fotoğraf</label>
                      <div class="col-sm-9">
                        <input class="form-control" name="image" type="file">
                        <br>
                        <code class="text-success">( Yeni fotoğraf )</code>
                      </div>
                    </div> 
                    <div class="mb-3 row">
                      <label class="col-sm-3 col-form-label">Alt Başlık</label>
                      <div class="col-sm-9">
                        <input class="form-control" name="subtitle" placeholder="Alt başlık giriniz." type="text" value="{{ $prof->subtitle }}">
                      </div>
                    </div>
                    <div class="mb-3 row">
                      <label class="col-sm-3 col-form-label">Linkedin - <i class="fa-brands fa-linkedin"></i></label>
                      <div class="col-sm-9">
                        <input class="form-control" name="linkedin" type="text" placeholder="Link giriniz..." value="{{ $prof->linkedin }}">
                      </div>
                    </div>
                    <div class="mb-3 row">
                      <label class="col-sm-3 col-form-label">Twitter - <i class="fa-brands fa-twitter"></i></label>
                      <div class="col-sm-9">
                        <input class="form-control" name="twitter" type="text" placeholder="Link giriniz..." value="{{ $prof->twitter }}">
                      </div>
                    </div>
                    <div class="mb-3 row">
                      <label class="col-sm-3 col-form-label">Facebook - <i class="fa-brands fa-facebook"></i></label>
                      <div class="col-sm-9">
                        <input class="form-control" name="facebook" type="text" placeholder="Link giriniz..." value="{{ $prof->facebook }}">
                      </div>
                    </div>
                   
                    {{-- <div class="row">
                      <label class="col-sm-3 col-form-label">Açıklama</label>
                      <div class="col-sm-9">
                        <textarea class="form-control" name="description" id="summernote" rows="5" cols="5" >{{ old('description') }} </textarea>
                      </div>
                    </div> --}}
                  </div>
                </div>
              </div>
                <div class="card-footer text-end">
                  <button class="btn btn-primary btn-block" type="submit">Kaydet</button>
                </div>
              </form>

              @endforeach

          </div>
        </div>
      </div>
    </div>
    <!-- Container-fluid Ends-->
  </div>
@endsection

@section('js')

<script>
  $(document).ready(function() {
  $('#summernote').summernote({
      height: 400, 
      placeholder: 'Enter the product description',
  });
})
</script>
@endsection