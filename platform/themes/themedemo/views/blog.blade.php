@php Theme::layout('layout2') @endphp
<!--header section start-->
<section class="hero-section ptb-100 gradient-overlay"
         style="background: url('{{ Theme::asset()->url('img/header-bg-5.jpg') }}')no-repeat center center / cover">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8 col-lg-7">
                <div class="page-header-content text-white text-center pt-sm-5 pt-md-5 pt-lg-0">
                    <h1 class="text-white mb-0">Blog</h1>
                    <div class="custom-breadcrumb">
                        <ol class="breadcrumb d-inline-block bg-transparent list-inline py-0">
                            @foreach (Theme::breadcrumb()->getCrumbs() as $i => $crumb)
                                <li class="list-inline-item breadcrumb-item" >
                                    <a href="{{ $crumb['url'] }}">{!! $crumb['label'] !!}</a>{{-- <span class="divider">/</span> --}}
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

<!--blog section start-->
<div class="module ptb-100">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-8">
                @foreach(get_all_posts(true,5) as $post)
                <div class="row row-post-thumbnail">
                    <!-- Post-->
                    <article class="post row align-items-center">
                        <div class="col-md-5">
                            <div class="post-preview"><a href="{{ $post->url }}"><img src="{{ RvMedia::getImageUrl($post->image, 'medium', false, RvMedia::getDefaultImage()) }}" alt="article" class="img-fluid"/></a></div>
                        </div>
                        <div class="col-md-7">
                            <div class="post-wrapper">
                                <div class="post-header">
                                    <h2 class="post-title"><a href="{{ $post->url }}">{{ $post->name }}</a></h2>
                                    <ul class="post-meta">
                                        <li>
                                            <span class="created__month">{{ $post->created_at->format('M') }}</span>
                                            <span class="created__date">{{ $post->created_at->format('d') }}</span>
                                            <span class="created__year">{{ $post->created_at->format('Y') }}</span>
                                        </li>
                                        <li><a href="#">{{ $post->categories[0]->name }}</a></li>
                                        <li><a href="#">3 Comments</a></li>
                                    </ul>
                                </div>
                                <div class="post-content">
                                    <p>See how your users experience your website in realtime or view trends to see any changes in performance over time.</p>
                                    <a href="{{ $post->url }}" class="detail-link">Read more <span class="ti-arrow-right"></span></a>
                                </div>
                            </div>
                        </div>
                    </article>
                    <!-- Post end-->
                </div>
                @endforeach

                <!-- Page Navigation-->
                <div class="row">
                    <div class="col-md-12">
                        <nav class="custom-pagination-nav">
                            {{ get_all_posts(true,5)->links() }}
                        </nav>
                    </div>
                </div>
                <!-- Page Navigation end-->
            </div>
            <div class="col-lg-4 col-md-4">
                <div class="sidebar-right pl-4">

                    <!-- Search widget-->
                    <aside class="widget widget-search">
                        <form>
                            <input class="form-control" type="search" placeholder="Type Search Words">
                            <button class="search-button" type="submit"><span class="ti-search"></span></button>
                        </form>
                    </aside>


                    <!-- Categories widget-->

                    {!! dynamic_sidebar('primary_sidebar') !!}
                    
                </div>
            </div>
        </div>
    </div>
</div>
<!--blog section end-->