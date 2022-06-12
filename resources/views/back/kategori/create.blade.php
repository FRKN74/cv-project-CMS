@extends('back.theme.master')
@section('css')
<link href="https://cdn.jsdelivr.net/gh/gitbrent/bootstrap4-toggle@3.6.1/css/bootstrap4-toggle.min.css" rel="stylesheet">
@endsection
@section('content')
<div class="page-body">
    <div class="container-fluid">
      <div class="page-title">
        <div class="row">
          <div class="col-12 col-sm-6">
            <h3>Kategori oluşturma sayfası</h3>
          </div>
          <div class="col-12 col-sm-6">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}"><i data-feather="home"></i></a></li>
              <li class="breadcrumb-item">Kategori</li>
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
            <form action="{{ route('admin.kategori.create.post') }}" method="POST" enctype="multipart/form-data" class="form theme-form">
                @csrf
              <div class="card-body">
                <div class="row">
                  <div class="col">
                    <div class="mb-3 row">
                      <label class="col-sm-3 col-form-label">Kategori</label>
                      <div class="col-sm-9">
                        <input class="form-control" name="kategori_adi" type="text" placeholder="Yeni proje gir" value="{{ old('kategori_adi') }}">
                      </div>
                    </div>
                  <div class="card-footer text-end">
                    <button class="btn btn-primary btn-block" type="submit">Oluştur</button>
                  </div>
                </form>
                <br>
                <table class="table">
                  <thead class="thead-dark">
                    <tr>
                      <th scope="col">#</th>
                      <th scope="col">Kategori adı</th>
                      <th scope="col">Oluşturma tarihi</th>
                      <th scope="col">Durum</th>
                    </tr>
                  </thead>
                  @foreach ($kat as $p)
                  <tbody>
                    <tr>
                      <th scope="row">{{ $loop->iteration }}</th>
                      <td>{{ $p->kategori_adi }}</td>
                      <td>{{ $p->created_at->diffForHumans() }}</td>
                     
                      <td> 
                        <a href="{{ route('admin.kategori.update',$p->id) }}" class="btn btn-warning m-1 btn-sm"><i class="fa fa-edit "></i></a>
                        <a href="{{ route('admin.kategori.delete',$p->id) }}" id="delete" class="btn btn-danger m-1 btn-sm"><i class="fa fa-trash"></i></a>
                      </td>
                    </tr>
                  </tbody>
                  @endforeach

                </table>
                  </div>
                </div>
              </div>
              
          </div>
          
        </div>
      </div>
    </div>
    <!-- Container-fluid Ends-->
  </div>
@endsection

@section('js')
<script src="https://cdn.jsdelivr.net/gh/gitbrent/bootstrap4-toggle@3.6.1/js/bootstrap4-toggle.min.js"></script>

{{-- <script>
    $(function () { 
    $('.switch').change(function(){
        id = $(this)[0].getAttribute('proje-id');
        statu = $(this).prop('checked');
        $.get("{{ route('admin.proje.switch') }}", {id:id , statu:statu}, function (data,status) {
        });
    })
})
</script> --}}
@endsection