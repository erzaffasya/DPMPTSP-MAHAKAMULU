<x-guest-layout>
    <div class="wpo-breadcumb-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="wpo-breadcumb-wrap">
                        <h2>Underestimating the challenge of raising Series A funding</h2>
                        <ul>
                            <li><a href="index.html">Home</a></li>
                            <li><span>Berita</span></li>
                            <li><span>Underestimating the challenge of raising Series A funding</span></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end of wpo-breadcumb-section-->


    <!-- start wpo-blog-single-section -->
    <section class="wpo-blog-single-section section-padding">
        <div class="container">
            <div class="row">
                <div class="col col-lg-8 col-12">
                    <div class="wpo-blog-content">
                        <div class="post format-standard-image">
                            <div class="entry-media">
                                <img src="{{ asset($Berita->gambar) }}" alt style="max-height: 500px; object-fit: cover;">
                            </div>
                            <div class="entry-meta">
                                <ul>
                                    <li><i class="fi flaticon-user"></i> By <a
                                            href="#">{{ $Berita->User->name }}</a> </li>
                                    <li><i class="fi flaticon-calendar"></i>
                                        {{ $Berita->created_at->Format('D, d M Y') }}</li>
                                </ul>
                            </div>
                            <h2>{{ $Berita->judul }}</h2>
                            {!! $Berita->isi !!}
                            <br>
                            <div class="gallery">
                                <div>
                                    <img src="{{ asset('tlandingpage/assets/images/blog/img-3.jpg') }}" alt="" style="height: 250px; object-fit: cover;">
                                </div>
                                <div>
                                    <img src="{{ asset('tlandingpage/assets/images/blog/img-2.jpg') }}" alt="" style="height: 250px; object-fit: cover;">
                                </div>
                            </div>
                        </div>
                        <div class="more-posts">
                            <div class="previous-post">
                                <a href="#">
                                    <span class="post-control-link">Berita Sebelumnya</span>
                                    <span class="post-name">At vero eos et accusamus et iusto odio dignissimos
                                        ducimus qui blanditiis praesentium.</span>
                                </a>
                            </div>
                            <div class="next-post">
                                <a href="0">
                                    <span class="post-control-link">Berita Selanjutnya</span>
                                    <span class="post-name">Dignissimos ducimus qui blanditiis praesentiu deleniti
                                        atque corrupti quos dolores</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col col-lg-4 col-12">
                    <div class="blog-sidebar">
                        <div class="widget search-widget">
                            <form>
                                <div>
                                    <input type="text" class="form-control" placeholder="Search Post..">
                                    <button type="submit"><i class="ti-search"></i></button>
                                </div>
                            </form>
                        </div>
                        <div class="widget recent-post-widget">
                            <h3>Berita Terbaru</h3>
                            <div class="posts">

                                @foreach ($RelatedPost as $item)
                                    <div class="post">
                                        <div class="img-holder">
                                            <img src="{{ asset($item->gambar) }}" alt>
                                        </div>
                                        <div class="details">
                                            <span class="date">{{ $item->created_at->Format('D, d M Y') }} </span>
                                            <h4><a href="{{ route('detail-berita', $item->id) }}">{{ $item->judul }}</a>
                                            </h4>
                                        </div>
                                    </div>
                                @endforeach

                            </div>
                        </div>
                        <div class="wpo-contact-widget widget">
                            <h2>Survey Kepuasan Masyarakat</h2>
                            <p>Yuk bantu kami dalam melakukan evaluasi terhadap berbagai segi pelayanan</p>
                            <a href="contact.html">Survey</a>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- end container -->
    </section>
</x-guest-layout>
