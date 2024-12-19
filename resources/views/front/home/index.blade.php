@extends('layouts.frontend.app')

@section('title', 'Sistem Pakar Diagnosa Penyakit Ginjal')

@section('content')

<!-- banner-style-two -->
<section class="banner-style-two">
    <div class="pattern-layer" style="background-image: url(assets/images/shape/pattern-2.png)"></div>
    <div class="auto-container">
        <div class="content-box">
            <h1>Sistem Pakar Diagnosa Penyakit Ginjal Dengan Menggunakan Algoritma Bayes</h1>
            <div class="image-box">
            <div class="pattern-layer" style="background-image: url({{ asset('assets/frontend') }}/images/shape/pattern-9.png);"></div>
                <figure class="image image-1"><img src="{{ asset('assets/frontend') }}/images/banner/banner-2-1.png" alt=""></figure>
                <figure class="image image-2"><img src="{{ asset('assets/frontend') }}/images/banner/banner-2-2.png" alt=""></figure>
                <figure class="image image-3 wow bounceInDown" data-wow-delay="00ms" data-wow-duration="1500ms"><img src="{{ asset('assets/frontend') }}/images/banner/banner-2-3.png" alt=""></figure>
                <figure class="image image-4 float-bob-y"><img src="{{ asset('assets/frontend') }}/images/banner/banner-2-4.png" alt=""></figure>
                <figure class="image image-5"><img src="{{ asset('assets/frontend') }}/images/banner/banner-2-5.png" alt=""></figure>
                <figure class="image image-6"><img src="{{ asset('assets/frontend') }}/images/banner/banner-2-6.png" alt=""></figure>
                <figure class="image image-7"><img src="{{ asset('assets/frontend') }}/images/banner/banner-2-7.png" alt=""></figure>
                <figure class="image image-8 float-bob-y"><img src="{{ asset('assets/frontend') }}/images/banner/banner-2-8.png" alt=""></figure>
                <figure class="image image-9 wow bounceInDown" data-wow-delay="00ms" data-wow-duration="1500ms"><img src="{{ asset('assets/frontend') }}/images/banner/banner-2-9.png" alt=""></figure>
                <figure class="image image-10 wow bounceInDown" data-wow-delay="500ms" data-wow-duration="1500ms"><img src="{{ asset('assets/frontend') }}/images/banner/banner-2-10.png" alt=""></figure>
                <figure class="image image-11 wow bounceInDown" data-wow-delay="500ms" data-wow-duration="1500ms"><img src="{{ asset('assets/frontend') }}/images/banner/banner-2-11.png" alt=""></figure>
            </div>
        </div>
    </div>
</section>
<!-- banner-style-two end -->

<!-- feature-section -->
<section class="feature-section home-2">
    <div class="auto-container">
        <div class="row">
            <div class="col-lg-4 col-md-6 col-sm-12 feature-block">
                <div class="feature-block-one wow flipInY" data-wow-delay="0ms" data-wow-duration="1500ms">
                    <div class="inner-box js-tilt">
                        <div class="icon-box">
                            <div class="anim-icon">
                                <span class="icon icon-1"></span>
                                <span class="icon icon-2"></span>
                                <span class="icon icon-3"></span>
                            </div>
                            <i class="flaticon-checked"></i>
                        </div>
                        <h3><a href="index-2.html">Keamanan Data</a></h3>
                        <p>Data Anda aman tersimpan di database kami, kapanpun dan dimanapun Anda dapat memantaunya.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 feature-block">
                <div class="feature-block-one wow flipInY" data-wow-delay="300ms" data-wow-duration="1500ms">
                    <div class="inner-box js-tilt">
                        <div class="icon-box">
                            <div class="anim-icon">
                                <span class="icon icon-1"></span>
                                <span class="icon icon-2"></span>
                                <span class="icon icon-3"></span>
                            </div>
                            <i class="flaticon-tools-and-utensils"></i>
                        </div>
                        <h3><a href="index-2.html">Sistem Pakar</a></h3>
                        <p>Membantu Memprediksi Objek penyakit Ginjal dengan AI dibidang Computer Science, serta dapat diakses kapanpun.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 feature-block">
                <div class="feature-block-one wow flipInY" data-wow-delay="600ms" data-wow-duration="1500ms">
                    <div class="inner-box js-tilt">
                        <div class="icon-box">
                            <div class="anim-icon">
                                <span class="icon icon-1"></span>
                                <span class="icon icon-2"></span>
                                <span class="icon icon-3"></span>
                            </div>
                            <i class="flaticon-pie-chart"></i>
                        </div>
                        <h3><a href="index-2.html">Meneliti Bersama</a></h3>
                        <p>Meneliti sendiri maupun bersama dengan fitur pemilihan gejala, konsultasi penyakit, dan lain sebagainya...</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- feature-section end -->

<!-- process-style-two -->
<section class="process-style-two text-center bg-color-1"> 
    <div class="auto-container">
        <div class="sec-title">
            <p>BAGAIMANA ITU BEKERJA</p>
            <h2>Bagaimana Cara Kerja Sistem ?</h2>
        </div>
        <div class="row clearfix">
            <div class="col-lg-4 col-md-6 col-sm-12 single-column">
                <div class="single-item wow fadeInUp animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                    <div class="shape-layer" style="background-image: url({{ asset('assets/frontend') }}/images/shape/shap-3.png);"></div>
                    <div class="icon-box">
                        <div class="count-box"><span>1</span></div>
                        <i class="flaticon-database"></i>
                    </div>
                    <h3>Penerimaan Pengetahuan</h3>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 single-column">
                <div class="single-item wow fadeInUp animated" data-wow-delay="300ms" data-wow-duration="1500ms">
                    <div class="shape-layer" style="background-image: url({{ asset('assets/frontend') }}/images/shape/shap-4.png);"></div>
                    <div class="icon-box">
                        <div class="count-box"><span>2</span></div>
                        <i class="flaticon-robot"></i>
                    </div>
                    <h3>Konsultasi</h3>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-sm-12 single-column">
                <div class="single-item wow fadeInUp animated" data-wow-delay="600ms" data-wow-duration="1500ms">
                    <div class="icon-box">
                        <div class="count-box"><span>3</span></div>
                        <i class="flaticon-search"></i>
                    </div>
                    <h3>Penjelasan</h3>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- process-style-two end -->

<!-- news-section -->
<section class="news-section">
    <div class="pattern-layer wow slideInRight animated" data-wow-delay="500ms" data-wow-duration="1500ms" style="background-image: url({{ asset('assets/frontend') }}/images/shape/pattern-2.png)"></div>
    <div class="auto-container">
        <div class="sec-title text-center">
            <p>Recent Article</p>
            <h2>Blog Terbaru</h2>
        </div>
        <div class="row clearfix">

            @foreach ($posts as $post)
                <div class="col-lg-4 col-md-6 col-sm-12 news-block">
                    <div class="news-block-one wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                        <div class="inner-box">
                            <div class="image-holder">
                                <figure class="image-box"><img src="{{ asset('storage/posts/' . $post->image) }}" alt=""></figure>
                                <div class="post-date"><i class="fas fa-calendar-alt"></i><p>{{ $post->created_at->diffForHumans() }}</p></div>
                                <div class="link"><a href="/blog/{{ $post->slug }}"><i class="fas fa-arrow-right"></i></a></div>
                            </div>
                            <div class="lower-content">
                                <ul class="post-info">
                                    <li><i class="fas fa-user"></i>&nbsp; {{ $post->user->name }}</li>
                                    <li><a href="/blog/{{ $post->slug }}">{{ $post->comments->count() }} Comments</a></li>
                                </ul>
                                <h3><a href="/blog/{{ $post->slug }}">{{ substr($post->title, 0, 20) }}</a></h3>
                                <p>{!! substr ($post->content, 0, 60) !!}</p>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach

        </div>
    </div>
</section>
<!-- news-section end -->

@guest
<!-- Modal -->
<div class="modal fade" id="doctModal" tabindex="-1" aria-labelledby="doctModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-md">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="doctModalLabel">Langkah langkah sebelum mendiagnosa</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>1. Pastikan sudah <code>registrasi</code>, jika belum klik <a href="{{ url('/register') }}" class="badge badge-info">disini</a></p>
                <p>2. Klik tombol <code>login</code> yang terdapat pada sebelah kanan atas</p>
                <p>3. Masukan <code>username</code> dan <code>password</code> jika sudah punya akun</p>
                <p>4. Klik <code>login</code></p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-info" data-dismiss="modal">Mengerti</button>
            </div>
        </div>
    </div>
</div>
@endguest

@endsection

@push('js')
    <script>
        setTimeout(() => {
            $('#doctModal').modal('show');
        }, 1500)
    </script>
@endpush
