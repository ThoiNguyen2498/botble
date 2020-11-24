<aside class="widget widget-categories">
    <div class="widget-title">
        <h6>{{ $config['name'] }}</h6>
    </div>
    <ul>
    	@foreach(get_featured_categories(5) as $categories)
    		<li><a href="#">{{ $categories->name }} <span class="float-right">{{ count(get_posts_by_category($categories->id)) }}</span></a></li>
    	@endforeach
    </ul>
</aside>
