<aside class="widget widget-recent-entries-custom">
    <div class="widget-title">
        <h6>{{ $config['name'] }}</h6>
    </div>
    <ul>
    	@foreach(get_recent_posts($config['limit']) as $post)
		<li class="clearfix">
            <div class="wi"><a href="{{ $post->url }}"><img src="{{ get_image_url($post->image, 'medium') }}" alt="recent post" class="img-fluid rounded"/></a></div>
            <div class="wb"><a href="{{ $post->url }}">{{ $post->name }}</a><span class="post-date">May 8, 2016</span></div>
        </li>
    	@endforeach
    </ul>
</aside>
