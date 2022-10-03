<x-guest-layout>
    <section class="wpo-blog-single-section mt-4 mb-5">
        <div class="container">
            <div class="row">
                <div class="col col-lg-8 col-12">
                    <h2 class="fw-bolder mb-3">{{$HalamanMenu->judul??null}}</h2>
                    <p>
                        @if ($HalamanMenu->file ?? null)
                            <iframe height="800" src="{{ asset($HalamanMenu->file) }}" width="100%"></iframe>
                        @endif
                    </p>
                </div>
                <div class="col col-lg-4 col-12">
                    <div class="blog-sidebar">
                        <div class="widget recent-post-widget">
                            <h3>Berita Terbaru</h3>
                            <div class="posts">
                                <div class="post">
                                    <div class="img-holder">
                                        <img src="{{ asset('tlandingpage/assets/images/recent-posts/img-1.jpg') }}" alt>
                                    </div>
                                    <div class="details">
                                        <span class="date">19 Jun 2022 </span>
                                        <h4><a href="blog-single.html">Perfect Photo Clicking Idea You Must
                                                Know.</a></h4>
                                    </div>
                                </div>
                                <div class="post">
                                    <div class="img-holder">
                                        <img src="{{ asset('tlandingpage/assets/images/recent-posts/img-2.jpg') }}" alt>
                                    </div>
                                    <div class="details">
                                        <span class="date">22 May 2022 </span>
                                        <h4><a href="blog-single.html">Best tourism site all over the world.</a>
                                        </h4>
                                    </div>
                                </div>
                                <div class="post">
                                    <div class="img-holder">
                                        <img src="{{ asset('tlandingpage/assets/images/recent-posts/img-3.jpg') }}" alt>
                                    </div>
                                    <div class="details">
                                        <span class="date">12 Apr 2022 </span>
                                        <h4><a href="blog-single.html">Whats In Trend in Now Woman Fashion.</a></h4>
                                    </div>
                                </div>
                                <div class="post">
                                    <div class="img-holder">
                                        <img src="{{ asset('tlandingpage/assets/images/recent-posts/img-4.jpg') }}" alt>
                                    </div>
                                    <div class="details">
                                        <span class="date">12 Apr 2022 </span>
                                        <h4><a href="blog-single.html">Top 10 Healthy Food of Your Menu.</a></h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="widget recent-post-widget">
                            <h3>Berita Populer</h3>
                            <div class="posts">
                                <div class="post">
                                    <div class="img-holder">
                                        <img src="{{ asset('tlandingpage/assets/images/recent-posts/img-1.jpg') }}" alt>
                                    </div>
                                    <div class="details">
                                        <span class="date">19 Jun 2022 </span>
                                        <h4><a href="blog-single.html">Perfect Photo Clicking Idea You Must
                                                Know.</a></h4>
                                    </div>
                                </div>
                                <div class="post">
                                    <div class="img-holder">
                                        <img src="{{ asset('tlandingpage/assets/images/recent-posts/img-2.jpg') }}" alt>
                                    </div>
                                    <div class="details">
                                        <span class="date">22 May 2022 </span>
                                        <h4><a href="blog-single.html">Best tourism site all over the world.</a>
                                        </h4>
                                    </div>
                                </div>
                                <div class="post">
                                    <div class="img-holder">
                                        <img src="{{ asset('tlandingpage/assets/images/recent-posts/img-3.jpg') }}" alt>
                                    </div>
                                    <div class="details">
                                        <span class="date">12 Apr 2022 </span>
                                        <h4><a href="blog-single.html">Whats In Trend in Now Woman Fashion.</a></h4>
                                    </div>
                                </div>
                                <div class="post">
                                    <div class="img-holder">
                                        <img src="{{ asset('tlandingpage/assets/images/recent-posts/img-4.jpg') }}" alt>
                                    </div>
                                    <div class="details">
                                        <span class="date">12 Apr 2022 </span>
                                        <h4><a href="blog-single.html">Top 10 Healthy Food of Your Menu.</a></h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- end container -->
    </section>
</x-guest-layout>
