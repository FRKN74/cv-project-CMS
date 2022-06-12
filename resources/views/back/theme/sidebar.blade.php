      <!-- Page Sidebar Start-->
      <div class="sidebar-wrapper"> 
        <div>
          <div class="logo-wrapper"><a href="{{ route('admin.dashboard') }}">
              <img class="img-fluid w-50 h-25 ml-5 for-light" src="{{ asset('beyaz-mor.png') }}"  alt="">
              <img class="img-fluid w-50 h-25 ml-5 for-dark" src="{{ asset('siyah-beyaz.png') }}"  alt=""></a>
            <div class="back-btn"><i class="fa fa-angle-left"></i>
            </div>
          </div>
          <div class="logo-icon-wrapper">
            <a href="{{ route('admin.dashboard') }}"><img class="img-fluid  ml-5  " src="{{ asset('beyaz-mor.png') }}"    alt=""></a>
            <br><br>
          </div>

          <nav class="sidebar-main ">
            <div class="left-arrow" id="left-arrow"><i data-feather="arrow-left"></i></div>
            <div id="sidebar-menu ">
              <ul class="sidebar-links " id="simple-bar">
                <li class="back-btn">
                    <a href="{{ route('admin.dashboard') }}">
                      <img class="img-fluid" src="{{ asset('beyaz-mor.png') }}" alt=""></a>
                  <div class="mobile-back text-end">
                      <span>Back</span><i class="fa fa-angle-right ps-2" aria-hidden="true"></i>
                </div>
                </li>
                <br><br>
                <li class="sidebar-list">
                  {{-- <label class="badge badge-light-primary">2</label> --}}
                  <a class="sidebar-link sidebar-title" href="{{ route('admin.dashboard') }}">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <g>
                        <g> 
                          <path d="M9.07861 16.1355H14.8936" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                          <path fill-rule="evenodd" clip-rule="evenodd" d="M2.3999 13.713C2.3999 8.082 3.0139 8.475 6.3189 5.41C7.7649 4.246 10.0149 2 11.9579 2C13.8999 2 16.1949 4.235 17.6539 5.41C20.9589 8.475 21.5719 8.082 21.5719 13.713C21.5719 22 19.6129 22 11.9859 22C4.3589 22 2.3999 22 2.3999 13.713Z" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                        </g>
                      </g>
                    </svg>
                    <span class="lan-3 ">Panel</span>
                  </a>
                </li>
                <li class="sidebar-list">
                  {{-- <label class="badge badge-light-info">New</label> --}}
                  <a class="sidebar-link sidebar-title" href="#">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <g>
                        <g>
                          <path d="M14.3053 15.45H8.90527" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                          <path d="M12.2604 11.4387H8.90442" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                          <path fill-rule="evenodd" clip-rule="evenodd" d="M20.1598 8.3L14.4898 2.9C13.7598 2.8 12.9398 2.75 12.0398 2.75C5.74978 2.75 3.64978 5.07 3.64978 12C3.64978 18.94 5.74978 21.25 12.0398 21.25C18.3398 21.25 20.4398 18.94 20.4398 12C20.4398 10.58 20.3498 9.35 20.1598 8.3Z" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                          <path d="M13.9342 2.83276V5.49376C13.9342 7.35176 15.4402 8.85676 17.2982 8.85676H20.2492" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                        </g>
                      </g>
                    </svg>
                    <span>Profil</span>
                </a>
                  <ul class="sidebar-submenu">
                    @foreach ($profils as $prof)
                    <li>
                      <a href="{{ route('admin.profil.profil',$prof->slug)}}">Gözat</a>
                    </li>
                    @endforeach

                  </ul>
                </li>
                 <li class="sidebar-list">
                  {{-- <label class="badge badge-light-info">New</label> --}}
                  <a class="sidebar-link sidebar-title" href="#">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <g>
                        <g>
                          <path d="M14.3053 15.45H8.90527" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                          <path d="M12.2604 11.4387H8.90442" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                          <path fill-rule="evenodd" clip-rule="evenodd" d="M20.1598 8.3L14.4898 2.9C13.7598 2.8 12.9398 2.75 12.0398 2.75C5.74978 2.75 3.64978 5.07 3.64978 12C3.64978 18.94 5.74978 21.25 12.0398 21.25C18.3398 21.25 20.4398 18.94 20.4398 12C20.4398 10.58 20.3498 9.35 20.1598 8.3Z" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                          <path d="M13.9342 2.83276V5.49376C13.9342 7.35176 15.4402 8.85676 17.2982 8.85676H20.2492" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                        </g>
                      </g>
                    </svg>
                    <span>Hakkımda</span>
                </a>
                  <ul class="sidebar-submenu">
                    @foreach ($hakkimdas as $hak)
                    <li>
                      <a href="{{ route('admin.hakkimda.hakkimda',$hak->slug)}}">Gözat</a>
                    </li>
                    @endforeach

                  </ul>
                  
                </li> 
                <li class="sidebar-list">
                  {{-- <label class="badge badge-light-info">New</label> --}}
                  <a class="sidebar-link sidebar-title" href="#">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <g>
                        <g>
                          <path d="M14.3053 15.45H8.90527" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                          <path d="M12.2604 11.4387H8.90442" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                          <path fill-rule="evenodd" clip-rule="evenodd" d="M20.1598 8.3L14.4898 2.9C13.7598 2.8 12.9398 2.75 12.0398 2.75C5.74978 2.75 3.64978 5.07 3.64978 12C3.64978 18.94 5.74978 21.25 12.0398 21.25C18.3398 21.25 20.4398 18.94 20.4398 12C20.4398 10.58 20.3498 9.35 20.1598 8.3Z" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                          <path d="M13.9342 2.83276V5.49376C13.9342 7.35176 15.4402 8.85676 17.2982 8.85676H20.2492" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                        </g>
                      </g>
                    </svg>
                    <span>Hizmetlerim</span>
                </a>
                  <ul class="sidebar-submenu">
                   
                    <li>
                      <a href="{{route('admin.hizmet.create')}}">Oluştur</a>
                    </li>
                    <li>
                      <a href="{{route('admin.hizmet.list')}}">Tablo</a>
                    </li>
                  </ul>
                  
                </li> 
                <li class="sidebar-list">
                  {{-- <label class="badge badge-light-info">New</label> --}}
                  <a class="sidebar-link sidebar-title" href="#">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <g> 
                        <g> 
                          <path d="M8.54248 9.21777H15.3975" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                          <path fill-rule="evenodd" clip-rule="evenodd" d="M11.9702 2.5C5.58324 2.5 4.50424 3.432 4.50424 10.929C4.50424 19.322 4.34724 21.5 5.94324 21.5C7.53824 21.5 10.1432 17.816 11.9702 17.816C13.7972 17.816 16.4022 21.5 17.9972 21.5C19.5932 21.5 19.4362 19.322 19.4362 10.929C19.4362 3.432 18.3572 2.5 11.9702 2.5Z" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                        </g>
                      </g>
                    </svg>
                    <span>Referans</span>
                </a>
                  <ul class="sidebar-submenu">
                    <li><a href="{{route('admin.referans.create')}}">Oluştur</a></li>
                    <li><a href="{{route('admin.referans.list')}}">Tablo</a></li>
                    
                  </ul>
                </li>
                <li class="sidebar-list">
                  {{-- <label class="badge badge-light-info">New</label> --}}
                  <a class="sidebar-link sidebar-title" href="#">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <g> 
                        <g> 
                          <path d="M8.54248 9.21777H15.3975" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                          <path fill-rule="evenodd" clip-rule="evenodd" d="M11.9702 2.5C5.58324 2.5 4.50424 3.432 4.50424 10.929C4.50424 19.322 4.34724 21.5 5.94324 21.5C7.53824 21.5 10.1432 17.816 11.9702 17.816C13.7972 17.816 16.4022 21.5 17.9972 21.5C19.5932 21.5 19.4362 19.322 19.4362 10.929C19.4362 3.432 18.3572 2.5 11.9702 2.5Z" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                        </g>
                      </g>
                    </svg>
                    <span>Eğitim Bilgilerim</span>
                </a>
                  <ul class="sidebar-submenu">
                    <li><a href="{{route('admin.egitim.create')}}">Oluştur</a></li>
                    <li><a href="{{route('admin.egitim.list')}}">Tablo</a></li>
                    
                  </ul>
                </li>
                <li class="sidebar-list">
                  {{-- <label class="badge badge-light-info">New</label> --}}
                  <a class="sidebar-link sidebar-title" href="#">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <g> 
                        <g> 
                          <path d="M8.54248 9.21777H15.3975" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                          <path fill-rule="evenodd" clip-rule="evenodd" d="M11.9702 2.5C5.58324 2.5 4.50424 3.432 4.50424 10.929C4.50424 19.322 4.34724 21.5 5.94324 21.5C7.53824 21.5 10.1432 17.816 11.9702 17.816C13.7972 17.816 16.4022 21.5 17.9972 21.5C19.5932 21.5 19.4362 19.322 19.4362 10.929C19.4362 3.432 18.3572 2.5 11.9702 2.5Z" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                        </g>
                      </g>
                    </svg>
                    <span>Tecrübelerim</span>
                </a>
                  <ul class="sidebar-submenu">
                    <li><a href="{{route('admin.tecrube.create')}}">Oluştur</a></li>
                    <li><a href="{{route('admin.tecrube.list')}}">Tablo</a></li>
                    
                  </ul>
                </li>
                <li class="sidebar-list">
                  {{-- <label class="badge badge-light-info">New</label> --}}
                  <a class="sidebar-link sidebar-title" href="#">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <g> 
                        <g> 
                          <path d="M8.54248 9.21777H15.3975" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                          <path fill-rule="evenodd" clip-rule="evenodd" d="M11.9702 2.5C5.58324 2.5 4.50424 3.432 4.50424 10.929C4.50424 19.322 4.34724 21.5 5.94324 21.5C7.53824 21.5 10.1432 17.816 11.9702 17.816C13.7972 17.816 16.4022 21.5 17.9972 21.5C19.5932 21.5 19.4362 19.322 19.4362 10.929C19.4362 3.432 18.3572 2.5 11.9702 2.5Z" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                        </g>
                      </g>
                    </svg>
                    <span>İletişim</span>
                </a>
                  <ul class="sidebar-submenu">
                    @foreach ($iletisims as $ilet)
                    <li>
                      <a href="{{ route('admin.iletisim.ilet',$ilet->slug)}}">Gözat</a>
                    </li>
                    @endforeach
                    
                  </ul>
                </li>
                <li class="sidebar-list">
                  {{-- <label class="badge badge-light-info">New</label> --}}
                  <a class="sidebar-link sidebar-title" href="#">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <g> 
                        <g> 
                          <path d="M8.54248 9.21777H15.3975" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                          <path fill-rule="evenodd" clip-rule="evenodd" d="M11.9702 2.5C5.58324 2.5 4.50424 3.432 4.50424 10.929C4.50424 19.322 4.34724 21.5 5.94324 21.5C7.53824 21.5 10.1432 17.816 11.9702 17.816C13.7972 17.816 16.4022 21.5 17.9972 21.5C19.5932 21.5 19.4362 19.322 19.4362 10.929C19.4362 3.432 18.3572 2.5 11.9702 2.5Z" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                        </g>
                      </g>
                    </svg>
                    <span>Kategori</span>
                </a>
                  <ul class="sidebar-submenu">
                    <li><a href="{{route('admin.kategori.create')}}">Oluştur/Tablo</a></li>
                  </ul>
                </li>
                <li class="sidebar-list"><a class="sidebar-link sidebar-title" href="#">
                  <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <g>
                      <g>
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M2.75024 12C2.75024 5.063 5.06324 2.75 12.0002 2.75C18.9372 2.75 21.2502 5.063 21.2502 12C21.2502 18.937 18.9372 21.25 12.0002 21.25C5.06324 21.25 2.75024 18.937 2.75024 12Z" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                        <path d="M15.2045 13.8999H15.2135" stroke="#130F26" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                        <path d="M12.2045 9.8999H12.2135" stroke="#130F26" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                        <path d="M9.19557 13.8999H9.20457" stroke="#130F26" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                      </g>
                    </g>
                  </svg>
                    <span>Proje Detay</span>
                  </a>
                  <ul class="sidebar-submenu">
                    <li><a href="{{route('admin.proje.create')}}">Oluştur</a></li>
                    <li><a href="{{route('admin.proje.list')}}">Tablo</a></li>
                  </ul>
                </li>
                <li class="sidebar-list">
                  <a class="sidebar-link sidebar-title link-nav" href="{{ route('index')}}" target="_blank">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <g>
                        <g> 
                          <path d="M9.07861 16.1355H14.8936" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                          <path fill-rule="evenodd" clip-rule="evenodd" d="M2.3999 13.713C2.3999 8.082 3.0139 8.475 6.3189 5.41C7.7649 4.246 10.0149 2 11.9579 2C13.8999 2 16.1949 4.235 17.6539 5.41C20.9589 8.475 21.5719 8.082 21.5719 13.713C21.5719 22 19.6129 22 11.9859 22C4.3589 22 2.3999 22 2.3999 13.713Z" stroke="#130F26" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                        </g>
                      </g>
                    </svg>
                    <span >Web siteye gözat</span>
                  </a>
                </li>
              </ul>
              <div class="sidebar-img-section mb-5">
                <div class="sidebar-img-content"><img class="img-fluid" src="{{ asset('back') }}/assets/images/side-bar.png" alt="">
                  <h4>Size nasıl yardımcı olabiliriz?</h4>
                  <a class="txt" href="https://bionluk.com/benberkant">BF Design "berkant.tirpan.533@gmail.com"</a><a class="btn btn-secondary" href="https://bionluk.com/benberkant">Bize ulaş</a>
                </div>
              </div> 
            </div>
            <div class="right-arrow" id="right-arrow"><i data-feather="arrow-right"></i></div>
          </nav>
        </div>
      </div>
      <!-- Page Sidebar Ends-->