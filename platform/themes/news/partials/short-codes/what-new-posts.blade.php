@if (is_plugin_active('blog'))
<div class="container-fluid pt-3">
    <div class="container animate-box" data-animate-effect="fadeIn">
        <div>
            <div class="fh5co_heading fh5co_heading_border_bottom py-2 mb-4">{{ __("What's new ?") }}</div>
        </div>
        <div class="owl-carousel owl-theme js" id="slider1">
            @foreach (get_latest_posts(10, []) as $post)
            <div class="item px-2">
                <div class="fh5co_latest_trading_img_position_relative">
                    <div class="fh5co_latest_trading_img"><img src="{{ RvMedia::getImageUrl($post->image, 'medium', false, RvMedia::getDefaultImage()) }}" alt="" class="{{ $post->name }}"/></div>
                    <div class="fh5co_latest_trading_img_position_absolute"></div>
                    <div class="fh5co_latest_trading_img_position_absolute_1">
                        <a href="{{ $post->url }}" class="text-white"> {{ $post->name }} </a>
                        <div class="fh5co_latest_trading_date_and_name_color"> {{ $post->created_at->format('M d, Y') }}</div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
@endif