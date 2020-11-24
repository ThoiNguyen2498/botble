<aside class="widget widget-tag-cloud">
    <div class="widget-title">
        <h6>{{ $config['name'] }}</h6>
    </div>
    <div class="tag-cloud">
    	@foreach(get_popular_tags($config['number']) as $tag)
    		<a href="#">{{ $tag->name }}</a>
    	@endforeach
    </div>
</aside>

{{-- <div class="aside-box">
    <div class="aside-box-header">
        <h4>{{ $config['name'] }}</h4>
    </div>
    <div class="aside-box-content">
        <p>This is example content for widget</p>
    </div>
</div> --}}
