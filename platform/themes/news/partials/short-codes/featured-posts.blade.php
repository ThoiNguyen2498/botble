@if (is_plugin_active('blog'))
    @php
        $featured = get_featured_posts(5, ['user', 'categories' => function ($query) { $query->limit(1); }]);
        $featuredList = [];
        if (!empty($featured)) {
            $featuredList = $featured->pluck('id')->all();
        }
    @endphp

    @if (!empty($featured))
        <section class="container-fluid paddding mb-5">
            <div class="row mx-0">
                @foreach ($featured as $featureItem)
                    @if ($loop->first)
                        <div class="col-md-6 col-12 paddding animate-box" data-animate-effect="fadeIn">
                            <div class="fh5co_suceefh5co_height"><a href="{{ $featureItem->url }}"><img src="{{ RvMedia::getImageUrl($featureItem->image, 'featured', false, RvMedia::getDefaultImage()) }}" alt="{{ $featureItem->name }}"></a>
                                <div class="fh5co_suceefh5co_height_position_absolute"></div>
                                <div class="fh5co_suceefh5co_height_position_absolute_font">
                                    <div class=""><a href="#" class="color_fff"> <i class="fa fa-clock-o"></i>&nbsp;&nbsp;{{ $featureItem->created_at->format('M d Y') }}
                                    </a></div>
                                    <div class=""><a href="{{ $featureItem->url }}" class="fh5co_good_font"> {{ $featureItem->name }} </a></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="row">
                                @else
                                <div class="col-md-6 col-6 paddding animate-box" data-animate-effect="fadeIn">
                                    <div class="fh5co_suceefh5co_height_2"><img src="{{ RvMedia::getImageUrl($featureItem->image, 'medium', false, RvMedia::getDefaultImage()) }}" alt="{{ $featureItem->name }}"/>
                                        <div class="fh5co_suceefh5co_height_position_absolute"></div>
                                        <div class="fh5co_suceefh5co_height_position_absolute_font_2">
                                            <div class=""><a href="{{ $featureItem->url }}" class="color_fff"> <i class="fa fa-clock-o"></i>&nbsp;&nbsp;{{ $featureItem->created_at->format('M d Y') }} </a></div>
                                            <div class=""><a href="{{ $featureItem->url }}" class="fh5co_good_font_2"> {{ $featureItem->name }} </a></div>
                                        </div>
                                    </div>
                                </div>
                                @if ($loop->last)
                            </div>
                        </div>
                    @endif
                    @endif
                @endforeach
            </div>
        </section>
    @endif
@endif