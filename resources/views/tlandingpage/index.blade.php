<x-guest-layout>
    <div class="wpo-blog-hero-area">
        <div class="container">
            <div class="sortable-gallery">
                <div class="gallery-filters"></div>
                <div class="row">
                    <div class="col-lg-12">
                        <section class="wpo-hero-slider mb-3">
                            <div class="swiper-container">
                                <div class="swiper-wrapper">
                                    @foreach ($Banner->where('isActive', True) as $Banners)
                                    <div class="swiper-slide">
                                        <div class="slide-inner slide-bg-image"
                                            data-background="{{ asset($Banners->gambar) }}">
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                                <!-- end swiper-wrapper -->

                                <!-- swipper controls -->
                                <div class="swiper-pagination"></div>
                            </div>
                        </section>
                        <div class="wpo-blog-grids gallery-container clearfix">
                            <div class="grid">
                                <div class="img-holder">
                                    <img src="tlandingpage/assets/images/hero/img-1.jpg" alt class="img img-responsive">
                                    <div class="wpo-blog-content">
                                        <h2><a href="blog-single.html">What’s In Trend In Women's Fashion
                                                Summer?</a></h2>
                                        <p>You can customize the view Blog posts with a simple mouse click and
                                            immediately see the result of your changes. </p>
                                        <ul>
                                            <li><img src="tlandingpage/assets/images/blog/blog-avater/img-1.jpg "
                                                    alt=""></li>
                                            <li>By <a href="blog-single.html">Robert</a></li>
                                            <li>20 Nov 2022</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="grid">
                                <div class="img-holder">
                                    <img src="tlandingpage/assets/images/hero/img-2.jpg" alt class="img img-responsive">
                                    <div class="wpo-blog-content">
                                        <h2><a href="blog-single.html">Traveling Makes You More Interesting</a>
                                        </h2>
                                        <ul>
                                            <li>By <a href="blog-single.html">Robert</a></li>
                                            <li>20 Nov 2022</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="grid s2">
                                <div class="img-holder">
                                    <img src="tlandingpage/assets/images/hero/img-3.jpg" alt class="img img-responsive">
                                    <div class="wpo-blog-content">
                                        <h2><a href="blog-single.html">Top 10 Healthy Food</a></h2>
                                        <ul>
                                            <li>By <a href="blog-single.html">Robert</a></li>
                                            <li>20 Nov 2022</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="img-holder">
                                    <img src="tlandingpage/assets/images/hero/img-4.jpg" alt class="img img-responsive">
                                    <div class="wpo-blog-content">
                                        <h2><a href="blog-single.html">What Makes a Leader?</a></h2>
                                        <ul>
                                            <li>By <a href="blog-single.html">Robert</a></li>
                                            <li>20 Nov 2022</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="wpo-blog-pg-section section-padding">
        <div class="container">
            <div class="row">
                <div class="col col-lg-6 col-12">
                    <div class="wpo-blog-content">
                        <div class="post format-video">
                            <div class="entry-media video-holder">
                                <img src="{{ asset('tlandingpage/assets/images/lifestyle/img-3.jpg') }}" alt>
                                <a href="https://www.youtube.com/embed/JttPYJF6SdI" class="video-btn"
                                    data-type="iframe">
                                    <i class="fi flaticon-play"></i>
                                </a>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="col col-lg-6 col-12">
                    <h5 class="fs-5 text-secondary">Selamat Datang di</h5>
                    <h2 class="fw-bolder">DPMPTSP Mahakam Ulu</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eius sunt laborum alias atque.
                        Necessitatibus culpa cumque, quisquam quo laboriosam, excepturi fugit voluptas placeat
                        distinctio, rem alias temporibus, id consectetur soluta. Lorem ipsum dolor sit amet, consectetur
                        adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad
                        minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat
                    </p>
                </div>
            </div>
        </div>
    </section>

    <div class="wpo-breacking-news section-padding">
        <div class="container">
            <div class="row">
                <div class="b-title"><span>Pelayanan Kami</span></div>
                <div class="wpo-breacking-wrap owl-carousel">
                    <div class="wpo-breacking-item s1">
                        <div class="wpo-breacking-img">
                            <img src="tlandingpage/assets/images/breaking-news/img-1.jpg" alt="">
                        </div>
                        <div class="wpo-breacking-text">
                            <h3 class="fw-bolder">IMB</h3>
                            <p>Pelayanan dalam Izin Membuat Usaha (IMB)</a>
                            </p>
                        </div>
                    </div>
                    <div class="wpo-breacking-item s1">
                        <div class="wpo-breacking-img">
                            <img src="tlandingpage/assets/images/breaking-news/img-1.jpg" alt="">
                        </div>
                        <div class="wpo-breacking-text">
                            <h3 class="fw-bolder">Izin Usaha</h3>
                            <p>Pelayanan dalam pembuatan Izin Usaha</a>
                            </p>
                        </div>
                    </div>
                    <div class="wpo-breacking-item s1">
                        <div class="wpo-breacking-img">
                            <img src="tlandingpage/assets/images/breaking-news/img-1.jpg" alt="">
                        </div>
                        <div class="wpo-breacking-text">
                            <h3 class="fw-bolder">Izin Jasa Konstruksi</h3>
                            <p>Pelayanan dalam pembuatan Izin Jasa Konstruksi</a>
                            </p>
                        </div>
                    </div>
                    <div class="wpo-breacking-item s1">
                        <div class="wpo-breacking-img">
                            <img src="tlandingpage/assets/images/breaking-news/img-1.jpg" alt="">
                        </div>
                        <div class="wpo-breacking-text">
                            <h3 class="fw-bolder">Izin Reklame</h3>
                            <p>Pelayanan dalam pembuatan Izin Reklame</a>
                            </p>
                        </div>
                    </div>
                    <div class="wpo-breacking-item s1">
                        <div class="wpo-breacking-img">
                            <img src="tlandingpage/assets/images/breaking-news/img-1.jpg" alt="">
                        </div>
                        <div class="wpo-breacking-text">
                            <h3 class="fw-bolder">Praktik Kesehatan</h3>
                            <p>Pelayanan dalam pembuatan Izin Praktik Kesehatan</a>
                            </p>
                        </div>
                    </div>
                    <div class="wpo-breacking-item s1">
                        <div class="wpo-breacking-img">
                            <img src="tlandingpage/assets/images/breaking-news/img-1.jpg" alt="">
                        </div>
                        <div class="wpo-breacking-text">
                            <h3 class="fw-bolder">Izin Gangguan</h3>
                            <p>Pelayanan dalam pembuatan Izin Gangguan</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="wpo-blog-highlights-section section-padding">
        <div class="container">

            <div class="row">
                <div class="col col-lg-9 col-12">
                    <div class="mb-5">
                        <div class="wpo-section-title">
                            <h2>Berita Terkini</h2>
                        </div>
                        <!-- start wpo-blog-section -->
                        <div class="wpo-blog-highlights-wrap">
                            <div class="wpo-blog-items">
                                <div class="row">
                                    @foreach ($Berita as $Beritas)
                                        <div class="col col-lg-6 col-md-6 col-12">
                                            <div class="wpo-blog-item">
                                                <div class="wpo-blog-img">
                                                    <img src="{{ asset($Beritas->gambar) }}" alt="">
                                                </div>
                                                <div class="wpo-blog-content">
                                                    <h2><a href="blog-single.html">{{ $Beritas->judul }}</a></h2>
                                                    <ul>
                                                        <li><img src="tlandingpage/assets/images/blog/blog-avater/img-1.jpg "
                                                                alt="">
                                                        </li>
                                                        <li>By <a
                                                                href="blog-single.html">{{ $Beritas->User->name }}</a>
                                                        </li>
                                                        <li>{{ $Beritas->created_at->Format('D, M Y') }}</li>
                                                    </ul>
                                                    <p>{!! $Beritas->deskripsi_singkat !!} </p>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                    <div class="text-center">
                                        <a href="{{ route('landingpage-berita') }}" class="theme-btn">Berita
                                            Lainnya</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="mb-5">
                        <div class="wpo-section-title">
                            <h2>Jadwal Pelayanan</h2>
                        </div>
                        <div class="row">
                            <div class="col-lg-7 col-12">
                                <img src="tlandingpage/assets/images/blog/img-2.jpg" alt="" width="100%">
                            </div>
                            <div class="col-lg-5 col-12">
                                {{-- <h5 class="fs-5 text-secondary">DPMPTSP Mahakam Ulu</h5>
                                <h2 class="fw-bolder">DPMPTSP Mahakam Ulu</h2> --}}
                                <h3 class="fw-bolder mb-3">Mudah, Cepat, dan Ramah</h3>
                                <p>DPMPTSP Kabupaten Mahakam Ulu siap dalam memberi pelayanan terbaik kepada masyarakat
                                    pada jadwal dan waktu kerja sebagai berikut.</p>
                                <ul class="jadwal-pelayanan">
                                    <li>
                                        <h5 class="fw-bolder text-secondary">Senin - Kamis</h5>
                                        <p>07.30 - 16.00 WITA</p>
                                    </li>
                                    <li>
                                        <h5 class="fw-bolder text-secondary">Jum'at</h5>
                                        <p>07.30 - 11.30 WITA</p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- end wpo-blog-section -->
                </div>
                <div class="col col-lg-3 col-12">
                    <div class="blog-sidebar">
                        <div class="widget about-widget">
                            <div class="img-holder">
                                <img src="{{ asset('tlandingpage/assets/images/blog/about-widget.jpg') }}" alt>
                            </div>
                            <h4>Jenny Watson</h4>
                            <p>Kepala Dinas DPMPTSP Mahakam Ulu</p>
                            <div class="social">
                                <ul class="clearfix">
                                    <li><a href="#"><i class="ti-facebook"></i></a></li>
                                    <li><a href="#"><i class="ti-twitter-alt"></i></a></li>
                                    <li><a href="#"><i class="ti-linkedin"></i></a></li>
                                    <li><a href="#"><i class="ti-pinterest"></i></a></li>
                                </ul>
                            </div>
                            <div class="aw-shape">
                                <img src="assets/images/blog/ab.png" alt="">
                            </div>
                        </div>
                        <div class="widget recent-post-widget">
                            <h3>Berita Populer</h3>
                            <div class="posts">
                                <div class="post">
                                    <div class="img-holder">
                                        <img src="tlandingpage/assets/images/recent-posts/img-1.jpg" alt>
                                    </div>
                                    <div class="details">
                                        <span class="date">19 Jun 2022 </span>
                                        <h4><a href="blog-single.html">Perfect Photo Clicking Idea You Must
                                                Know.</a></h4>
                                    </div>
                                </div>
                                <div class="post">
                                    <div class="img-holder">
                                        <img src="tlandingpage/assets/images/recent-posts/img-2.jpg" alt>
                                    </div>
                                    <div class="details">
                                        <span class="date">22 May 2022 </span>
                                        <h4><a href="blog-single.html">Best tourism site all over the world.</a>
                                        </h4>
                                    </div>
                                </div>
                                <div class="post">
                                    <div class="img-holder">
                                        <img src="tlandingpage/assets/images/recent-posts/img-3.jpg" alt>
                                    </div>
                                    <div class="details">
                                        <span class="date">12 Apr 2022 </span>
                                        <h4><a href="blog-single.html">Whats In Trend in Now Woman Fashion.</a>
                                        </h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="wpo-add-widget mb-4">
                            <a href="#"><img src="tlandingpage/assets/images/add.jpg" alt=""></a>
                        </div>
                        <div class="wpo-contact-widget widget">
                            <h2>Survey Kepuasan Masyarakat</h2>
                            <p>Yuk bantu kami dalam meningkatkan kualitas pelayanan</p>
                            <a href="contact.html">Survey</a>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- end container -->
    </section>
    <br>
</x-guest-layout>
