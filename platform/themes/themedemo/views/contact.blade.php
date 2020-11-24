@php Theme::layout('layout2') @endphp

<!--header section start-->
<section class="hero-section ptb-100 gradient-overlay" style="background: url('{!! Theme::asset()->url('img/header-bg-5.jpg') !!}')no-repeat center center / cover">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8 col-lg-7">
                <div class="page-header-content text-white text-center pt-sm-5 pt-md-5 pt-lg-0">
                    <h1 class="text-white mb-0">Contact</h1>
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

<!--contact us promo start-->
<section class="contact-us-promo pt-100">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="card single-promo-card single-promo-hover text-center shadow-sm">
                    <div class="card-body py-5">
                        <div class="pb-2">
                            <span class="ti-mobile icon-sm color-secondary"></span>
                        </div>
                        <div><h5 class="mb-0">Call Us</h5>
                            <p class="text-muted mb-0">{{ theme_option('phone_number') }}</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="card single-promo-card single-promo-hover text-center shadow-sm">
                    <div class="card-body py-5">
                        <div class="pb-2">
                            <span class="ti-location-pin icon-sm color-secondary"></span>
                        </div>
                        <div><h5 class="mb-0">Visit Us</h5>
                            <p class="text-muted mb-0">{{ theme_option('address') }}</p></div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="card single-promo-card single-promo-hover text-center shadow-sm">
                    <div class="card-body py-5">
                        <div class="pb-2">
                            <span class="ti-email icon-sm color-secondary"></span>
                        </div>
                        <div><h5 class="mb-0">Mail Us</h5>
                            <p class="text-muted mb-0">{{ theme_option('contact_email') }}</p></div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="card single-promo-card single-promo-hover text-center shadow-sm">
                    <div class="card-body py-5">
                        <div class="pb-2">
                            <span class="ti-headphone-alt icon-sm color-secondary"></span>
                        </div>
                        <div><h5 class="mb-0">Live Chat</h5>
                            <p class="text-muted mb-0">Chat with Us 24/7</p></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--contact us promo end-->

<!--contact us section start-->
<section class="contact-us-section ptb-100">
    <div class="container contact">
        <div class="col-12 pb-3 message-box d-none">
            <div class="alert alert-danger"></div>
        </div>
        <div class="row justify-content-around">
            <div class="col-md-6">
                <div class="contact-us-form gray-light-bg rounded p-5">
                    <h4>Ready to get started?</h4>
                    <form action="" method="POST" id="contactForm" class="contact-us-form">
                        <div class="form-row">
                            <div class="col-12">
                                <div class="form-group">
                                    <input type="text" class="form-control" name="name" placeholder="Enter name" required="required">
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <input type="email" class="form-control" name="email" placeholder="Enter email" required="required">
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <textarea name="message" id="message" class="form-control" rows="7" cols="25" placeholder="Message"></textarea>
                                </div>
                            </div>
                            <div class="col-sm-12 mt-3">
                                <button type="submit" class="btn secondary-solid-btn" id="btnContactUs">
                                    Send Message
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-md-5">
                <div class="contact-us-content">
                    <h2>Looking for a excellent Business idea?</h2>
                    <p class="lead">Seamlessly deliver pandemic e-services and next-generation initiatives.</p>

                    <a href="#" class="btn outline-btn align-items-center">Get Directions <span class="ti-arrow-right pl-2"></span></a>

                    <hr class="my-5">

                    <h5>Our Headquarters</h5>
                    <address>
                        {{ theme_option('address') }}
                    </address>
                    <br>
                    <span>Phone: {{ theme_option('phone_number') }}</span> <br>
                    <span>Email: <a href="mailto:{{ theme_option('contact_email') }}" class="link-color">{{ theme_option('contact_email') }}</a></span>

                </div>
            </div>
        </div>
    </div>
</section>
<!--contact us section end-->

<!--google map block start-->
<div class="google-map">
	{!! dynamic_sidebar('google_map') !!}
</div>
<!--google map block end-->