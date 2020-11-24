@php Theme::layout('layout2') @endphp
<section class="hero-section ptb-100 gradient-overlay"
         style="background: url('{!! Theme::asset()->url('img/header-bg-5.jpg') !!}')no-repeat top center / cover">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8 col-lg-7">
                <div class="page-header-content text-white text-center pt-sm-5 pt-md-5 pt-lg-0">
                    <h1 class="text-white mb-0">{{ $data->name }}</h1>
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

<!--services details start-->
<section class="service-details-section ptb-100">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-8">
                <div class="service-details-wrap">
                    {!! $data->content !!}
                </div>
            </div>
            <div class="col-lg-4 col-md-4">
                <div class="sidebar-right pl-4">
                    <!--need help-->
                    <aside class="widget widget-categories">
                        <div class="widget-title">
                            <h5>Need Help?</h5>
                        </div>
                        <p>We are available in 24/7 hours for dedicated support</p>
                        <ul class="primary-list mt-25">
                            <li><span class="ti-location-pin mr-2 color-primary"></span> {{ theme_option('address') }}
                            </li>
                            <li><span class="ti-mobile mr-2 color-primary"></span> {{ theme_option('phone_number') }}</li>
                            <li><span class="ti-email mr-2 color-primary"></span> {{ theme_option('contact_email') }}</li>
                        </ul>
                    </aside>

                    <!-- Subscribe widget-->
                    <aside class="widget widget-categories">
                        <div class="widget-title">
                            <h5>Newsletter</h5>
                        </div>
                        <p>Enter your email address below to subscribe to my newsletter</p>
                        <form action="#" method="post"
                              class="d-none d-md-block d-lg-block">
                            <input type="text" class="form-control input" id="email-footer" name="email"
                                   placeholder="info@yourdomain.com">
                            <button type="submit" class="btn secondary-solid-btn btn-block btn-not-rounded mt-3">Subscribe
                            </button>
                        </form>
                    </aside>

                </div>
            </div>
        </div>
    </div>
</section>
<!--services details end-->

<!--call to action section start-->
<section class="call-to-action py-5 gray-light-bg">
    <div class="container">
        <div class="row justify-content-around align-items-center">
            <div class="col-md-7">
                <div class="subscribe-content">
                    <h3 class="mb-1">Consulting Agency for Your Business</h3>
                    <p>Rapidiously engage fully tested e-commerce with progressive architectures.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="action-btn text-lg-right text-sm-left">
                    <a href="#" class="btn secondary-solid-btn">Become a Client</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!--call to action section end-->

<style>
    .service-details-wrap img{
        max-width: 100%;
    }
</style>