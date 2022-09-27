<!DOCTYPE html>
<html lang="en">

@include('tlandingpage.partials.head')l

<body>

    <!-- start page-wrapper -->
    <div class="page-wrapper">
        <header id="header" class="wpo-site-header">
            <div class="topbar">
                <div class="container">
                    <div class="row">
                        <div class="col col-lg-10 col-md-9 col-sm-12 col-12">
                            <div class="contact-intro">
                                <ul>
                                    <li class="update"><span>Pengumuman</span></li>
                                    <li width="900">

                                        <marquee>
                                            @foreach ($Pengumuman as $item)
                                                {{-- <a href="{{ $item->link }}"> </a>  --}}
                                                {{ $item->judul }} |
                                            @endforeach
                                        </marquee>

                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col  col-lg-2 col-md-3 col-sm-12 col-12">
                            <div class="contact-info">
                                <ul>
                                    <li><a href="#"><i class="ti-facebook"></i></a></li>
                                    <li><a href="#"><i class="ti-twitter-alt"></i></a></li>
                                    <li><a href="#"><i class="ti-instagram"></i></a></li>
                                    <li><a href="#"><i class="ti-google"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end topbar -->
            @include('tlandingpage.partials.navbar')
        </header>
        {{ $slot }}
        @include('tlandingpage.partials.footer')
        <!-- end of wpo-site-footer-section -->
    </div>
    <!-- end of page-wrapper -->

    <!-- All JavaScript files
    ================================================== -->
    @include('tlandingpage.partials.scripts')
</body>

</html>
