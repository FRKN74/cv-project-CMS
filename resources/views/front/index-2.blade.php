<!DOCTYPE html>
<html lang="en" class="no-js">
  

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge"> 
    <title>Berkant Tırpan | CV</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="description" content="BreezyCV - Resume / CV / vCard Template" />
    <meta name="keywords" content="vcard, resposnive, retina, resume, jquery, css3, bootstrap, Material CV, portfolio" />
    <meta name="author" content="lmpixels" />
    <link rel="shortcut icon" href="favicon.ico">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="{{asset('front')}}/css/reset.css" type="text/css">
    <link rel="stylesheet" href="{{asset('front')}}/css/bootstrap-grid.min.css" type="text/css">
    <link rel="stylesheet" href="{{asset('front')}}/css/animations.css" type="text/css">
    <link rel="stylesheet" href="{{asset('front')}}/css/perfect-scrollbar.css" type="text/css">
    <link rel="stylesheet" href="{{asset('front')}}/css/owl.carousel.css" type="text/css">
    <link rel="stylesheet" href="{{asset('front')}}/css/magnific-popup.css" type="text/css">
    <link rel="stylesheet" href="{{asset('front')}}/css/main.css" type="text/css">

    <script src="{{asset('front')}}/js/modernizr.custom.js"></script>
  </head>

  <body>
    <!-- Animated Background -->
    <div class="lm-animated-bg" style="background-image: url(img/main_bg.png);"></div>
    <!-- /Animated Background -->

    <!-- Loading animation -->
    <div class="preloader">
      <div class="preloader-animation">
        <div class="preloader-spinner">
        </div>
      </div>
    </div>
    <!-- /Loading animation -->

    <div class="page">
      <div class="page-content">
            @foreach ($profil as $data )
              
          <header id="site_header" class="header mobile-menu-hide">
            <div class="header-content">
              <div class="header-photo">
                <img src="{{ asset($data->image)}}" alt="Alex Smith">
              </div>
              <div class="header-titles">
                <h2>{{$data->name}}</h2>
                <h4>{{$data->subtitle}}</h4>
              </div>
            </div>

            <ul class="main-menu">
              <li class="active">
                <a href="#home" class="nav-anim">
                  <span class="menu-icon lnr lnr-home"></span>
                  <span class="link-text">Anasayfa</span>
                </a>
              </li>
              <li>
                <a href="#about-me" class="nav-anim">
                  <span class="menu-icon lnr lnr-user"></span>
                  <span class="link-text">Hakkımda</span>
                </a>
              </li>
              <li>
                <a href="#resume" class="nav-anim">
                  <span class="menu-icon lnr lnr-graduation-hat"></span>
                  <span class="link-text">Eğitim</span>
                </a>
              </li>
              <li>
                <a href="#portfolio" class="nav-anim">
                  <span class="menu-icon lnr lnr-briefcase"></span>
                  <span class="link-text">Pörtföy</span>
                </a>
              </li>
              
              <li>
                <a href="#contact" class="nav-anim">
                  <span class="menu-icon lnr lnr-envelope"></span>
                  <span class="link-text">İletişim</span>
                </a>
              </li>
            </ul>

            <div class="social-links">
              <ul>
                <li><a href="{{$data->linkedin}}" target="_blank"><i class="fab fa-linkedin-in"></i></a></li>
                <li><a href="{{$data->facebook}}" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                <li><a href="{{$data->twitter}}" target="_blank"><i class="fab fa-twitter"></i></a></li>
              </ul>
            </div>

            <div class="header-buttons">
              <a href="#" target="_blank" class="btn btn-primary">İletişime Geç</a>
            </div>

            <div class="copyrights">© 2020 All rights reserved. {{$data->name}}</div>
          </header>
          @endforeach

          <!-- Mobile Navigation -->
          <div class="menu-toggle">
            <span></span>
            <span></span>
            <span></span>
          </div>
          <!-- End Mobile Navigation -->

          <!-- Arrows Nav -->
          <div class="lmpixels-arrows-nav">
            <div class="lmpixels-arrow-right"><i class="lnr lnr-chevron-right"></i></div>
            <div class="lmpixels-arrow-left"><i class="lnr lnr-chevron-left"></i></div>
          </div>
          <!-- End Arrows Nav -->

          <div class="content-area">
            <div class="animated-sections">
              <!-- Home Subpage -->
              <section data-id="home" class="animated-section start-page">
                <div class="section-content vcentered">

                    <div class="row">
                      <div class="col-sm-12 col-md-12 col-lg-12">
                        <div class="title-block">
                          <h2>ÖZGEÇMİŞ | CV</h2>
                          <div class="owl-carousel text-rotation">                                    
                            <div class="item">
                              <div class="sp-subtitle">Web & Grafik Tasarım</div>
                            </div>
                            
                            <div class="item">
                              <div class="sp-subtitle">Web & Grafik Tasarım</div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>

                </div>
              </section>
              <!-- End of Home Subpage -->

              <!-- About Me Subpage -->
              <section data-id="about-me" class="animated-section">
                @foreach ($hakkimda as $hak)
                  
                <div class="page-title">
                  <h2>Ben <span>Kimim ?</span></h2>
                </div>

                <div class="section-content">
                  <!-- Personal Information -->
                  <div class="row">
                    <div class="col-xs-12 col-sm-7">
                      <p>{{ $hak->benkimim}}</p>
                    </div>

                    <div class="col-xs-12 col-sm-5">
                      <div class="info-list">
                        <ul>
                          <li>
                            <span class="title">Yaş</span>
                            <span class="value">{{ $hak->yas}}</span>
                          </li>

                          <li>
                            <span class="title">Ülke</span>
                            <span class="value">{{ $hak->ulke}}</span>
                          </li>

                          <li>
                            <span class="title">Adres</span>
                            <span class="value">{{ $hak->adres}}</span>
                          </li>

                          <li>
                            <span class="title">E-Mail</span>
                            <span class="value"><a href="https://lmpixels.com/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="caafa7aba3a68aafb2aba7baa6afe4a9a5a7">{{ $hak->mail}}</a></span>
                          </li>

                          <li>
                            <span class="title">Telefon</span>
                            <span class="value">{{ $hak->telefon}}</span>
                          </li>
                        </ul>
                      </div>
                    </div>
                  </div>
                  <!-- End of Personal Information -->
                  @endforeach

                  <div class="white-space-50"></div>

                  <!-- Services -->
                  <div class="row">
                    <div class="col-xs-12 col-sm-12">
                      <div class="block-title">
                        <h3>Hizmet <span>Alanlarım</span></h3>
                      </div>
                    </div>
                  </div>

                  <div class="row">
                    
                    @foreach ($hizmet as $services)
                    <div class="col-xs-12 col-sm-6">
                      <div class="col-inner">
                        <div class="info-list-w-icon">
                          
                          <div class="info-block-w-icon">
                            <div class="ci-icon">
                              {!!$services->hizmetIcon!!}
                            </div><div class="ci-text">
                              <h4>{{$services->hizmetTitle}}</h4>
                              <p>{{$services->metin}}</p>
                            </div>
                          </div>
                          
                        </div>
                      </div>
                    </div> 
                    @endforeach 
                    
                    {{-- <div class="col-xs-12 col-sm-6">
                      <div class="col-inner">
                        <div class="info-list-w-icon">
                          <div class="info-block-w-icon">
                            <div class="ci-icon">
                              <i class="lnr lnr-pencil"></i>
                            </div>
                            <div class="ci-text">
                              <h4>Grafik Tasarım</h4>
                              <p>Adobe Illustrator,Adobe Photoshop,Adobe Premiere Pro,Adobe InDesign,Adobe After Effects, Kullanarak Grafik Tasarım Alanında Hizmet Veriyorum</p>
                            </div>
                          </div>
                          
                        </div>
                      </div>
                    </div>  --}}
                  </div>

                  <!-- End of Services -->

                  <div class="white-space-30"></div>

                  <!-- Testimonials -->
                  
                  <!-- End of Testimonials -->

                  <div class="white-space-50"></div>

                  <!-- Clients -->
                  <div class="row">
                    <div class="col-xs-12 col-sm-12">
                      <div class="block-title">
                        <h3>Referanslar</h3>
                      </div>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-xs-12 col-sm-12">
                      <div class="clients owl-carousel">
                        

                        @foreach ($referance as $ref)
                          
                        <div class="client-block">
                          <a href="#" target="_blank" title="{{$ref->slug}}">
                            <img src="{{asset($ref->image)}}" alt="Logo">
                          </a>
                        </div>

                        @endforeach
                        
  
                      </div>
                    </div>
                  </div>
                  <!-- End of Clients -->

                  <div class="white-space-50"></div>

                  <!-- Pricing -->
                  

                  <!-- End of Pricing -->

                  <div class="white-space-50"></div>

                  

                  <!-- End of Fun Facts -->

                </div>
              </section>
              <!-- End of About Me Subpage -->

              <!-- Resume Subpage -->
              <section data-id="resume" class="animated-section">
                <div class="page-title">
                  <h2>Eğitim</h2>
                </div>

                <div class="section-content">

                  <div class="row">
                    <div class="col-xs-12 col-sm-7">

                      <div class="block-title">
                        <h3>Eğitim Bilgileri</h3>
                      </div>
                      
                      <div class="timeline timeline-second-style clearfix">


                        @foreach ($egitim as $e)
                        <div class="timeline-item clearfix">
                          <div class="left-part">
                            <h5 class="item-period">{{$e->egitimyili}}</h5>
                            <span class="item-company">{{$e->okuladi}}</span>
                          </div>
                          <div class="divider"></div>
                          <div class="right-part">
                            <h4 class="item-title">{{$e->bolümadi}}</h4>
                            <p>{{$e->metin}}</p>
                          </div>
                        </div>
                        @endforeach


                      </div>

                      <div class="white-space-50"></div>

                      <div class="block-title">
                        <h3>Tecrübe</h3>
                      </div>

                      @foreach ($tecrübe as $t)
                        
                      <div class="timeline timeline-second-style clearfix">
                        <div class="timeline-item clearfix">
                          <div class="left-part">
                            <h5 class="item-period">{{$t->tecübe_yili}}</h5>
                            <span class="item-company">{{$t->sirket_adi}}</span>
                          </div>
                          <div class="divider"></div>
                          <div class="right-part">
                            <h4 class="item-title">{{$t->alan}}</h4>
                            <p>{{$t->metin}}</p>
                          </div>
                        </div>
                      </div>
                      @endforeach

                    </div>

                    <!-- Skills & Certificates -->
                    <div class="col-xs-12 col-sm-5">
                      <!-- Design Skills -->
                      <div class="block-title">
                        <h3>Grafik <span>Tasarım</span></h3>
                      </div>

                      <div class="skills-info skills-second-style">
                        <!-- Skill 1 -->
                        <div class="skill clearfix">
                          <h4>Illustrator / Photoshop / Corel Draw</h4>
                          <div class="skill-value">95%</div>
                        </div>
                        <div class="skill-container skill-1">
                          <div class="skill-percentage"></div>
                        </div>
                        <!-- End of Skill 1 -->
                        
                        <!-- Skill 2 -->
                        <div class="skills-info skills-second-style ">
                          <h4>InDesign,Premiere Pro,After Effectsi,Animate</h4>
                          <div class="skill-value">70%</div>
                        </div>
                        <div class="skill-container skill-2">
                          <div class="skill-percentage"></div>
                        </div>
                       
                        <!-- End of Skill 4 -->

                      </div>
                      <!-- End of Design Skills -->

                      <div class="white-space-10"></div>

                      <!-- Coding Skills -->
                      <div class="block-title">
                        <h3>Web <span>Tasarım</span></h3>
                      </div>

                      <div class="skills-info skills-second-style">
                        <!-- Skill 5 -->
                        <div class="skill clearfix">
                          <h4>Html,Css,Boostrap</h4>
                          <div class="skill-value">95%</div>
                        </div>
                        <div class="skill-container skill-5">
                          <div class="skill-percentage"></div>
                        </div>
                        <!-- End of Skill 5 -->

                        <!-- Skill 6 -->
                        <div class="skill clearfix">
                          <h4>PHP,My_Sql</h4>
                          <div class="skill-value">85%</div>
                        </div>
                        <div class="skill-container skill-6">
                          <div class="skill-percentage"></div>
                        </div>
                        <!-- End of Skill 6 -->
                        
                        <!-- End of Skill 7 -->
                        
                        <!-- Skill 8 -->
                        <div class="skill clearfix">
                          <h4>javascript</h4>
                          <div class="skill-value">75%</div>
                        </div>
                        <div class="skill-container skill-8">
                          <div class="skill-percentage"></div>
                        </div>
                        <!-- End of Skill 8 -->

                        <!-- Skill 9 -->
                        <div class="skill clearfix">
                          <h4>Laravel 8</h4>
                          <div class="skill-value">90%</div>
                        </div>
                        <div class="skill-container skill-9">
                          <div class="skill-percentage"></div>
                        </div>
                        <!-- End of Skill 9 -->
                      </div>
                      <!-- End of Coding Skills -->

                      <div class="white-space-10"></div>

                      <!-- Knowledges -->
                      
                      <!-- End of Knowledges -->
                    </div>
                    <!-- End of Skills & Certificates -->
                  </div>

                  <div class="white-space-50"></div>

                  <!-- Certificates -->
                  <div class="row">
                    <div class="col-xs-12 col-sm-12">
                      <div class="block-title">
                        <h3>Sertifika</h3>
                      </div>
                    </div>
                  </div>
                  
                  <div class="row">
                    <!-- Certificate 1 -->
                    <div class="col-xs-12 col-sm-6">
                      <div class="certificate-item clearfix">
                        <div class="certi-logo">
                          <img src="{{ asset('front')}}/img/clients/client-1.png" alt="logo">
                        </div>
                        
                        <div class="certi-content">
                          <div class="certi-title">
                            <h4>Eğitim Alanı</h4>
                          </div>
                          <div class="certi-id">
                            <span>Sertifika Numarası:</span>
                          </div>
                          <div class="certi-date">
                            <span>TARİH</span>
                          </div>
                          <div class="certi-company">
                            <span></span>
                          </div>
                        </div>
                      </div>
                      
                    </div>
                    <!-- End of Certificate 1 -->

                    <!-- Certificate 2 -->
                    
                    <!-- End of Certificate 2 -->

                  </div>
                  <!-- End of Certificates -->
                </div>
              </section>
              <!-- End of Resume Subpage -->

              <!-- Portfolio Subpage -->
              <section data-id="portfolio" class="animated-section">
                <div class="page-title">
                  <h2>Portfolio</h2>
                </div>

                <div class="section-content">

                  <div class="row">
                    <div class="col-xs-12 col-sm-12">
                      <!-- Portfolio Content -->
                      <div class="portfolio-content">

                        <ul class="portfolio-filters">
                          <li class="active">
                            <a class="filter btn btn-sm btn-link" data-group="category_all">Hepsi</a>
                          </li>
                          @foreach ($kategori as $kat )
                            
                          <li class="">
                            <a class="btn btn-sm btn-link" href="" >{{$kat->slug}}</a>
                          </li>
                          @endforeach
                          
                        </ul>

                        <!-- Portfolio Grid -->
                        <div class="portfolio-grid three-columns">
                          

                          @foreach ($kategori as $k)
                            @foreach ($k->getDetay as $item)
                                
                                <figure class="item standard" data-groups='["category_all", "category_detailed"]'>
                                    <div class="portfolio-item-img">
                                    <img src="{{asset($item->image1)}}" alt="Media Project 2" title="" />
                                    <a href="{{ route('protfoy',$item->slug)}}" class="ajax-page-load"></a>
                                    </div>

                                    <i class="far fa-file-alt"></i>
                                    <h4 class="name">{{$item->title}}</h4>
                                    <span class="category">{{$item->title}}</span>
                                </figure>
                            @endforeach

                          @endforeach






                        </div>
                      </div>
                      <!-- End of Portfolio Content -->
                    </div>
                  </div>
                </div>
              </section>
              <!-- End of Portfolio Subpage -->

              {{-- <!-- Blog Subpage -->
              <section data-id="blog" class="animated-section">
                <div class="page-title">
                  <h2>Blog</h2>
                </div>

                <div class="section-content">
                  <div class="row">
                    <div class="col-xs-12 col-sm-12">
                      <div class="blog-masonry two-columns clearfix">
                        
                        <!-- Blog Post 1 -->
                        <div class="item post-1">
                          <div class="blog-card">
                            <div class="media-block">
                              <div class="category">
                                <a href="#" title="View all posts in Design">Design</a>
                              </div>
                              <a href="blog-post-1.html">
                                <img src="{{ asset('front')}}/img/blog/blog_post_1.jpg" class="size-blog-masonry-image-two-c" alt="Why I Switched to Sketch For UI Design" title="" />
                                <div class="mask"></div>
                              </a>
                            </div>
                            <div class="post-info">
                              <div class="post-date">05 Mar 2020</div>
                              <a href="blog-post-1.html">
                                <h4 class="blog-item-title">Why I Switched to Sketch For UI Design</h4>
                              </a>
                            </div>
                          </div>
                        </div>
                        <!-- End of Blog Post 1 -->

                        <!-- Blog Post 2 -->
                        <div class="item post-2">
                          <div class="blog-card">
                            <div class="media-block">
                              <div class="category">
                                <a href="#" title="View all posts in UI">UI</a>
                              </div>
                              <a href="{{route('blogpost')}}">
                                <img src="{{ asset('front')}}/img/blog/blog_post_2.jpg" class="size-blog-masonry-image-two-c" alt="Best Practices for Animated Progress Indicators" title="" />
                                <div class="mask"></div>
                              </a>
                            </div>
                            <div class="post-info">
                              <div class="post-date">23 Feb 2020</div>
                              <a href="{{route('blogpost')}}">
                                <h4 class="blog-item-title">Best Practices for Animated Progress Indicators</h4>
                              </a>
                            </div>
                          </div>
                        </div>
                        <!-- End of Blog Post 2 -->

                        <!-- Blog Post 3 -->
                        <div class="item post-1">
                          <div class="blog-card">
                            <div class="media-block">
                              <div class="category">
                                <a href="#" title="View all posts in Design">Design</a>
                              </div>
                              <a href="{{ asset('front')}}/">
                                <img src="{{ asset('front')}}/img/blog/blog_post_3.jpg" class="size-blog-masonry-image-two-c" alt="Designing the Perfect Feature Comparison Table" title="" />
                                <div class="mask"></div>
                              </a>
                            </div>
                            <div class="post-info">
                              <div class="post-date">06 Feb 2020</div>
                              <a href="{{ asset('front')}}/">
                                <h4 class="blog-item-title">Designing the Perfect Feature Comparison Table</h4>
                              </a>
                            </div>
                          </div>
                        </div>
                        <!-- End of Blog Post 3 -->

                        <!-- Blog Post 4 -->
                        <div class="item post-2">
                          <div class="blog-card">
                            <div class="media-block">
                              <div class="category">
                                <a href="#" title="View all posts in E-Commerce">UI</a>
                              </div>
                              <a href="{{route('blogpost')}}">
                                <img src="{{ asset('front')}}/img/blog/blog_post_4.jpg" class="size-blog-masonry-image-two-c" alt="An Overview of E-Commerce Platforms" title="" />
                                <div class="mask"></div>
                              </a>
                            </div>
                            <div class="post-info">
                              <div class="post-date">07 Jan 2020</div>
                              <a href="{{route('blogpost')}}">
                                <h4 class="blog-item-title">An Overview of E-Commerce Platforms</h4>
                              </a>
                            </div>
                          </div>
                        </div>
                        <!-- End of Blog Post 4 -->
                      </div>
                    </div>
                  </div>
                </div>


              </section>
              <!-- End of Blog Subpage --> --}}

              <!-- Contact Subpage -->
              <section data-id="contact" class="animated-section">
                <div class="page-title">
                  <h2>İletişim</h2>
                </div>

                <div class="section-content">

                  <div class="row">
                    @foreach ($iletisim as $i)
                      
                    <!-- Contact Info -->
                    <div class="col-xs-12 col-sm-4">
                      <div class="lm-info-block gray-default">
                        <i class="lnr lnr-map-marker"></i>
                        <h4>{{$i->adres}}</h4>
                        <span class="lm-info-block-value"></span>
                        <span class="lm-info-block-text"></span>
                      </div>

                      <div class="lm-info-block gray-default">
                        <i class="lnr lnr-phone-handset"></i>
                        <h4>{{$i->tel}}</h4>
                        <span class="lm-info-block-value"></span>
                        <span class="lm-info-block-text"></span>
                      </div>

                      <div class="lm-info-block gray-default">
                        <i class="lnr lnr-envelope"></i>
                        <h4>
                          <a href="mailto:{{$i->mail}}" class="__cf_email__" data-cfemail="90f1fcf5e8d0f5e8f1fde0fcf5bef3fffd">[{{$i->mail}}]</a></h4>
                        <span class="lm-info-block-value"></span>
                        <span class="lm-info-block-text"></span>
                      </div>

                      <div class="lm-info-block gray-default">
                        <i class="lnr lnr-checkmark-circle"></i>
                        <h4>{{$i->meslek}}</h4>
                        <span class="lm-info-block-value"></span>
                        <span class="lm-info-block-text"></span>
                      </div>


                    </div>
                    <!-- End of Contact Info -->

                    <!-- Contact Form -->
                    <div class="col-xs-12 col-sm-8">
                      <div id="map" class="map">
                          <div class="lmpixels-map">
                            {!!$i->harita!!}
                            </div>
                      </div>
                    @endforeach

                      <div class="block-title">
                        <h3>How Can I <span>Help You?</span></h3>
                      </div>

                      <form id="contact_form" class="contact-form" action="https://lmpixels.com/demo/breezycv/light/1/contact_form/contact_form.php" method="post">

                        <div class="messages"></div>

                        <div class="controls two-columns">
                          <div class="fields clearfix">
                            <div class="left-column">
                              <div class="form-group form-group-with-icon">
                                <input id="form_name" type="text" name="name" class="form-control" placeholder="" required="required" data-error="Name is required.">
                                <label>Full Name</label>
                                <div class="form-control-border"></div>
                                <div class="help-block with-errors"></div>
                              </div>

                              <div class="form-group form-group-with-icon">
                                <input id="form_email" type="email" name="email" class="form-control" placeholder="" required="required" data-error="Valid email is required.">
                                <label>Email Address</label>
                                <div class="form-control-border"></div>
                                <div class="help-block with-errors"></div>
                              </div>

                              <div class="form-group form-group-with-icon">
                                <input id="form_subject" type="text" name="subject" class="form-control" placeholder="" required="required" data-error="Subject is required.">
                                <label>Subject</label>
                                <div class="form-control-border"></div>
                                <div class="help-block with-errors"></div>
                              </div>
                            </div>
                            <div class="right-column">
                              <div class="form-group form-group-with-icon">
                                <textarea id="form_message" name="message" class="form-control" placeholder="" rows="7" required="required" data-error="Please, leave me a message."></textarea>
                                <label>Message</label>
                                <div class="form-control-border"></div>
                                <div class="help-block with-errors"></div>
                              </div>
                            </div>
                          </div>

                          <div class="g-recaptcha" data-sitekey="6LdqmCAUAAAAAMMNEZvn6g4W5e0or2sZmAVpxVqI"></div>
      
                          <input type="submit" class="button btn-send" value="Send message">
                        </div>
                      </form>
                    </div>
                    <!-- End of Contact Form -->
                  </div>

                </div>
              </section>
              <!-- End of Contact Subpage -->
            </div>
          </div>

      </div>
    </div>

    <script data-cfasync="false" src="../../../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
    <script src="{{asset('front')}}/js/jquery-2.1.3.min.js"></script>
    <script src="{{asset('front')}}/js/modernizr.custom.js"></script>
    <script src="{{asset('front')}}/js/animating.js"></script>

    <script src="{{asset('front')}}/js/imagesloaded.pkgd.min.js"></script>
    <script src='../../../../../www.google.com/recaptcha/api.js'></script>

    <script src='{{asset('front')}}/js/perfect-scrollbar.min.js'></script>
    <script src='{{asset('front')}}/js/jquery.shuffle.min.js'></script>
    <script src='{{asset('front')}}/js/masonry.pkgd.min.js'></script>
    <script src='{{asset('front')}}/js/owl.carousel.min.js'></script>
    <script src="{{asset('front')}}/js/jquery.magnific-popup.min.js"></script>

    <script src="{{asset('front')}}/js/validator.js"></script>
    <script src="{{asset('front')}}/js/main.js"></script>
  <script defer src="https://static.cloudflareinsights.com/beacon.min.js/v652eace1692a40cfa3763df669d7439c1639079717194" integrity="sha512-Gi7xpJR8tSkrpF7aordPZQlW2DLtzUlZcumS8dMQjwDHEnw9I7ZLyiOj/6tZStRBGtGgN6ceN6cMH8z7etPGlw==" data-cf-beacon='{"rayId":"70fcee0efdce50b1","version":"2021.12.0","r":1,"token":"94b99c0576dc45bf9d669fb5e9256829","si":100}' crossorigin="anonymous"></script>
</body>

</html>
