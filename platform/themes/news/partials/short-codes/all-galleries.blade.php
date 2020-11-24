<div class="container-fluid fh5co_video_news_bg pb-4">
    <div class="container animate-box" data-animate-effect="fadeIn">
        <div>
            <div class="fh5co_heading fh5co_heading_border_bottom pt-5 pb-2 mb-4  text-white">GALLERIES</div>
        </div>
        <div>
            <div class="owl-carousel owl-theme" id="slider3">
                @foreach(get_galleries(8) as $gallery)
                    <div class="item px-2">
                        <div class="fh5co_hover_news_img">
                            <div class="fh5co_news_img">
                                <a href="http://localhost:8000/galleries/perfect"><img src="http://localhost:8000/storage/{{ str_replace(".jpg","-540x360.jpg",$gallery->image) }}" alt="Perfect"></a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>