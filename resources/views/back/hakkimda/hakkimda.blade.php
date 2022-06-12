@extends('back.theme.master')

@section('css')

@endsection

@section('content')
<div class="page-body">
    <div class="container-fluid">
      <div class="page-title">
        <div class="row">
          <div class="col-12 col-sm-6">
            <h3>Hakkımda oluşturma sayfası</h3>
          </div>
          <div class="col-12 col-sm-6">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}"><i data-feather="home"></i></a></li>
              <li class="breadcrumb-item">Hakkımda</li>
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
            @foreach ($hakkimda as $hak)
              
            <form action="{{route('admin.hakkimda.detay',$hak->slug)}}" method="POST" enctype="multipart/form-data" class="form theme-form">
                @csrf
              <div class="card-body">
                <div class="row">
                  <div class="col">
                    <div class="mb-3 row">
                      <label class="col-sm-3 col-form-label">Ben kimim?</label>
                      <div class="col-sm-9">
                        <textarea class="form-control" name="benkimim" id="" cols="30" rows="10"> {{ $hak->benkimim}}</textarea>
                      </div>
                    </div>
                    <div class="mb-3 row">
                      <label class="col-sm-3 col-form-label">Yaş</label>
                      <div class="col-sm-9">
                        <input class="form-control" name="yas" type="number" value="{{ $hak->yas}}">
                      </div>
                    </div>
                    <div class="mb-3 row">
                      <label class="col-sm-3 col-form-label">Ülke</label>
                      <div class="col-sm-9">
                        <input class="form-control" name="ulke" type="text" value="{{ $hak->ulke}}">
                      </div>
                    </div>
                    <div class="mb-3 row">
                      <label class="col-sm-3 col-form-label">Adres</label>
                      <div class="col-sm-9">
                        <textarea class="form-control" name="adres" id="" cols="30" rows="10">{{ $hak->adres}}</textarea>
                      </div>
                    </div>
                    <div class="mb-3 row">
                      <label class="col-sm-3 col-form-label">Mail</label>
                      <div class="col-sm-9">
                        <input class="form-control" name="mail" type="mail" value="{{ $hak->mail}}">
                      </div>
                    </div>
                    <div class="mb-3 row">
                      <label class="col-sm-3 col-form-label">Telefon</label>
                      <div class="col-sm-9">
                        <input class="form-control" name="telefon" type="number" value="{{ $hak->telefon}}">
                      </div>
                    </div>
                    {{-- <hr>
                    <div class="mb-3 row">
                      <label class="col-sm-3 col-form-label">Hizmet İcon</label>
                      <div class="col-sm-9">
                        <input class="form-control" name="hizmetIcon" type="text" value="{{ $hak->hizmetIcon}}">
                      </div>
                    </div>
                    <div class="mb-3 row">
                      <label class="col-sm-3 col-form-label">Hizmet Başlığı</label>
                      <div class="col-sm-9">
                        <input class="form-control" name="hizmetTitle" type="text" value="{{ $hak->hizmetTitle}}">
                      </div>
                    </div>
                    <div class="mb-3 row">
                      <label class="col-sm-3 col-form-label">Metin</label>
                      <div class="col-sm-9">
                        <textarea class="form-control" name="metin" id="" cols="30" rows="10">{{ $hak->metin}}</textarea>
                      </div>
                    </div> --}}
                  </div>
                </div>
              </div>
              
           
                <div class="card-footer text-end">
                  <button class="btn btn-primary" type="submit">Kaydet</button>
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

{{-- <script>
  $(document).ready(function() {
  $('#summernote').summernote({
      height: 400, 
      placeholder: 'Enter the product description',
  });
}) --}}
@endsection