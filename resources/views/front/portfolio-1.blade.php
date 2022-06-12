@foreach ($proje as $p)
    
<div id="ajax-page" class="ajax-page-content">
    <div class="ajax-page-wrapper">
        <div class="ajax-page-nav">
            {{-- <div class="nav-item ajax-page-prev-next">
                <a class="ajax-page-load" href="{{ route('protfoy2')}}"><i class="lnr lnr-chevron-left"></i></a>
                <a class="ajax-page-load" href="{{ route('protfoy3')}}"><i class="lnr lnr-chevron-right"></i></a>
            </div> --}}
            <div class="nav-item ajax-page-close-button">
                <a id="ajax-page-close-button" href="#"><i class="lnr lnr-cross"></i></a>
            </div>
        </div>

        <div class="ajax-page-title">
            <h1>{{$p->getProje->kategori_adi}}</h1>
        </div>

        <div class="row">
            <div class="col-sm-8 col-md-8 portfolio-block">
                <div class="owl-carousel portfolio-page-carousel">
                    <div class="item">
                        <img src="{{asset($p->image1)}}" alt="" />
                    </div>
                    <div class="item">
                        <img src="{{asset($p->image2)}}" alt="" />
                    </div>
                    <div class="item">
                        <img src="{{asset($p->image3)}}" alt="" />
                    </div>
                </div>

                {{-- <div class="portfolio-page-video embed-responsive embed-responsive-16by9">
                  <iframe class="embed-responsive-item" src="https://player.vimeo.com/video/97102654?autoplay=0"></iframe>
                </div> --}}

                <script type="text/javascript">
                    jQuery(document).ready(function($){
                        $('.portfolio-page-carousel').imagesLoaded(function(){
                            $('.portfolio-page-carousel').owlCarousel({
                                smartSpeed:1200,
                                items: 1,
                                loop: true,
                                dots: true,
                                nav: true,
                                navText: false,
                                margin: 10,
                                autoHeight:true
                            });
                        });
                    });
                </script>
            </div>

            <div class="col-sm-4 col-md-4 portfolio-block">
                <!-- Project Description -->
                <div class="project-description">
                    <div class="block-title">
                        <h3>{{$p->title}}</h3>
                    </div>
                    <ul class="project-general-info">
                        <li><p><i class="fa fa-user"></i> {{$p->ad_soyad}}</p></li>
                        <li><p><i class="fa fa-globe"></i> <a href="{{$p->link}}" target="_blank">{{$p->link}}</a></p></li>
                        <li><p><i class="fa fa-calendar"></i> {{$p->created_at->diffForHumans()}}</p></li>
                    </ul>

                    <p class="text-justify">{{$p->description}}</p>
                    <!-- /Project Description -->

                    {{-- <!-- Technology -->
                    <div class="tags-block">
                        <div class="block-title">
                            <h3>Technology</h3>
                        </div>
                        <ul class="tags">
                            <li><a>HTML5</a></li>
                            <li><a>CSS3</a></li>
                            <li><a>jQuery</a></li>
                            <li><a>Ajax</a></li>
                            <li><a>PHP5</a></li>
                        </ul>
                    </div>
                    <!-- /Technology -->

                    <!-- Share Buttons -->
                    <div class="btn-group share-buttons">
                        <div class="block-title">
                            <h3>Share</h3>
                        </div>
                        <a href="#" target="_blank" class="btn"><i class="fab fa-facebook-f"></i> </a>
                        <a href="#" target="_blank" class="btn"><i class="fab fa-twitter"></i> </a>
                        <a href="#" target="_blank" class="btn"><i class="fab fa-dribbble"></i> </a>
                    </div>
                    <!-- /Share Buttons --> --}}
                </div>
                <!-- Project Description -->
            </div>
        </div>
    </div>
</div>
@endforeach
