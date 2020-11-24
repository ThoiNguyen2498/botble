@php Theme::layout('layout2') @endphp
<section class="hero-section ptb-100 gradient-overlay"
         style="background: url('{{ Theme::asset()->url('img/header-bg-5.jpg') }}')no-repeat center center / cover">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8 col-lg-7">
                <div class="page-header-content text-white text-center pt-sm-5 pt-md-5 pt-lg-0">
                    <h1 class="text-white mb-0">{{ $post->name }}</h1>
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
                <!-- Post-->
                <article class="post">
                    <div class="post-preview"><img src="{{ RvMedia::getImageUrl($post->image, 'featured', false, RvMedia::getDefaultImage()) }}" alt="article" class="img-fluid"/></div>
                    <div class="post-wrapper">
                        <div class="post-header">
                            <h1 class="post-title">{{ $post->name }}</h1>
                            <ul class="post-meta">
                                <li>
                                    <span class="created__month">{{ $post->created_at->format('M') }}</span>
                                    <span class="created__date">{{ $post->created_at->format('d') }}</span>
                                    <span class="created__year">{{ $post->created_at->format('Y') }}</span>
                                </li>
                                <li>In <a href="#">{{ $post->categories[0]->name }}</a></li>
                                {{-- <li>   <a href="#">3 Comments</a></li> --}}
                            </ul>
                        </div>
                        <div class="post-content">
                            {!! $post->content !!}
                        </div>
                    </div>
                </article>
                <!-- Post end-->
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


                    {!! dynamic_sidebar('primary_sidebar') !!}
                </div>
            </div>
        </div>
    </div>
</div>
<style>
    .post-content img{
        max-width: 100%;
    }
</style>