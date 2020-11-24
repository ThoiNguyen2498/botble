@if (is_plugin_active('blog'))
<div class="container-fluid pb-4 pt-5">
    <div class="container animate-box">
        <div>
            <div class="fh5co_heading fh5co_heading_border_bottom py-2 mb-4">{{ __('Best for you') }}</div>
        </div>
        <div class="owl-carousel owl-theme" id="slider2">
            @foreach (get_featured_categories(2, ['slugable', 'posts', 'posts.slugable']) as $category)
                @foreach ($category->posts->take(3) as $post)
                    <div class="item px-2">
                        <div class="fh5co_hover_news_img">
                            <div class="fh5co_news_img"><img src="{{ RvMedia::getImageUrl($post->image, 'medium', false, RvMedia::getDefaultImage()) }}" alt="{{ $post->name }}"/></div>
                            <div>
                                <a href="{{ $post->url }}" class="d-block fh5co_small_post_heading"><span class="">{{ $post->name }}</span></a>
                                <div class="c_g"><i class="fa fa-clock-o"></i> {{ $post->created_at->format('M d, Y') }}</div>
                            </div>
                        </div>
                    </div>
                @endforeach
            @endforeach
        </div>
    </div>
</div>
@endif