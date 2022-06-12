@extends('back.theme.master')

@section('content')
<div class="page-body">
    <div class="container-fluid">        
      <div class="page-title">
        <div class="row">
          <div class="col-12 col-sm-6">
            <h3>Admin Panel</h3>
          </div>
          <div class="col-12 col-sm-6">
            <ol class="breadcrumb">
              <li class="breadcrumb-item"> 
                  <a class="home-item" href="index-2.html"><i data-feather="home"></i></a></li>
              <li class="breadcrumb-item"> Admin Panel</li>
            </ol>
          </div>
        </div>
      </div>
    </div>
    <!-- Container-fluid starts-->
    <div class="container-fluid default-dash">
      <div class="row"> 
        <div class="col-xl-6 col-md-6 dash-xl-50">
          <div class="card profile-greeting">
            <div class="card-body">
              <div class="media">
                <div class="media-body"> 
                  <div class="greeting-user">
                    <h1 class="text-dark">Merhaba, {{ auth()->user()->ad_soyad }}</h1>
                    <p class="text-dark">Tekrar Hoşgeldin, Panel senin için hazır ya sen?</p>
                    <a class="btn btn-outline-white_color" href="#">Hemen Proje Yükle<i class="fa-solid fa-arrow-pointer"></i>                           </i></a>
                  </div>
                </div>
              </div>
              <div class="cartoon-img">
                  <img class="img-fluid" src="https://admin.pixelstrap.com/zeta/assets/images/images.svg" alt=""></div>
            </div>
          </div>
        </div>
        <div class="col-xl-6 col-md-6 dash-31 dash-xl-50">
          <div class="card news-update">
            <div class="card-header card-no-border"> 
              <div class="header-top">
                <h5 class="m-0">Yeni &amp; Eklenenler</h5>
                 <div class="icon-box onhover-dropdown">
                   {{-- <div class="icon-box-show onhover-show-div">
                    <ul> 
                      <li> <a>
                           Today</a></li>
                      <li> <a>
                           Yesterday</a></li>
                      <li> <a>
                            Tommorow</a></li>
                    </ul>
                  </div> - --}}
                </div> 
              </div>
            </div>
            <div class="card-body pt-0">           
              <div class="table-responsive custom-scrollbar">        
                <table class="table table-bordernone">                          
                  <tbody> 
                    {{-- @foreach ($project as $pro)

                      
                      <tr>
                        <td>
                          <div class="media">
                            {{-- <img class="img-fluid me-3 m-2 b-r-5 w-25" src="{{ asset($pro->image1) }}"  alt="">
                            <div class="media-body"><a href="{{ route('portfolio',$pro->slug) }}" target="_blank">
                                <h5>{{ $pro->title }}</h5></a>
                              {{-- <p>{{ Str::limit($page->description,50,'...') }}</p> 
                            </div>
                          </div>
                        </td>
                        <td><span class="badge badge-light-theme-light font-theme-light">{{ $pro->created_at->diffForHumans() }}</span></td>
                      </tr>
                      
                    @endforeach  
                    --}}
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Container-fluid Ends-->
  </div>
@endsection