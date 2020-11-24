@php Theme::layout('layout2') @endphp
<!--header section start-->
<section class="hero-section ptb-100 gradient-overlay"
         style="background: url('{!! Theme::asset()->url('img/header-bg-5.jpg') !!}')no-repeat center center / cover">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8 col-lg-7">
                <div class="page-header-content text-white text-center pt-sm-5 pt-md-5 pt-lg-0">
                    <h1 class="text-white mb-0">Our Services</h1>
                    <div class="custom-breadcrumb">
                        <ol class="breadcrumb d-inline-block bg-transparent list-inline py-0">
                            @foreach (Theme::breadcrumb()->getCrumbs() as $i => $crumb)
                                <li class="list-inline-item breadcrumb-item" >
                                        <a href="{{ $crumb['url'] }}">{!! $crumb['label'] !!}</a>
                                        {{-- <span class="divider">/</span> --}}
                                    </li>
                            @endforeach
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--header section end-->

<!--promo block with hover effect start-->
<section class="promo-block ptb-100">
    {!! do_shortcode('[promo-section][/promo-section]') !!}
</section>
<!--promo block with hover effect end-->

<!--services section start-->
<section class="services-section ptb-100 gray-light-bg">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="section-heading text-center mb-4">
                    <h2>First Class Business Solutions for You</h2>
                    <p class="lead">Efficiently aggregate end-to-end core competencies without maintainable ideas. Dynamically
                        foster tactical solutions without enabled value.</p>
                </div>
            </div>
        </div>
        {!! do_shortcode('[services-section][/services-section]') !!}
    </div>
</section>
<!--services section end-->