@extends('layout.common')

@include('layout.head')

@section('body_till_navbar')
    <!-- Page-->
    <div class="page text-center">
      <!-- Page Header-->
      <header class="page-head">
@endsection
@include('layout.navbar_light')
@section('main')
      <!-- Classic Breadcrumbs-->
      <section class="breadcrumb-classic">
        <div class="shell section-34 section-sm-50">
          <div class="range range-lg-middle">
            <div class="cell-lg-2 veil reveal-sm-block cell-lg-push-2"><span class="mdi mdi-arrange-send-to-back icon icon-white"></span></div>
            <div class="cell-lg-5 veil reveal-lg-block cell-lg-push-1 text-lg-left">
              <h2><span class="big">Blog</span></h2>
            </div>
            <div class="offset-top-0 offset-sm-top-10 cell-lg-5 offset-lg-top-0 small cell-lg-push-3 text-lg-right">
              <ul class="list-inline list-inline-dashed p">
                <li><a href="/">Home</a></li>
                <li><a href="/blog">Blog</a></li>
              </ul>
            </div>
          </div>
        </div>
        <svg class="svg-triangle-bottom" xmlns="http://www.w3.org/2000/svg" version="1.1">
          <defs>
            <lineargradient id="grad1" x1="0%" y1="0%" x2="100%" y2="0%">
              <stop offset="0%" style="stop-color:rgb(110,192,161);stop-opacity:1;"></stop>
              <stop offset="100%" style="stop-color:rgb(111,193,156);stop-opacity:1;"></stop>
            </lineargradient>
          </defs>
          <polyline points="0,0 60,0 29,29" fill="url(#grad1)"></polyline>
        </svg>
      </section>
      <!-- Page Content-->
      <main class="page-content section-98 section-sm-110">
        <div class="shell">
          <div class="range range-xs-center">
            <!-- posts -->
            <div class="cell-lg-9 cell-lg-push-2">
              <div class="inset-left-0 inset-md-left-20 inset-right-0 inset-md-right-20">
                <!-- Blog Default Single-->
                <section>
                    <!-- Post Wide-->
                    <div class="offset-top-66">
                                        <!-- Post Wide-->
                                        <article class="post post-default text-left">
                                        <!-- Post Header-->
                                        <div class="header post-header">
                                            <!-- Post Meta-->
                                            <ul class="post-controls list-inline list-inline-sm p text-dark">
                                            <li><span class="text-middle icon-xxs text-picton-blue mdi mdi-clock"></span>
                                                <time class="text-middle small" datetime="{{$post->created_at}}">{{$post->created_at}}</time>
                                            </li>
                                            <li><span class="text-middle icon-xxs text-picton-blue mdi mdi-account-outline">&nbsp;</span><span class="text-middle small">{{ $post->user->name }}</span></li>
                                            </li>
                                            </ul>
                                            <!-- Post Meta-->
                                            <h3 class="post-title"><a href="{{route('blog.post', $post->id)}}">{{$post->title}}</a></h3>
                                            <section class="post-content">
                                                {!! $post->description !!}
                                            </section>
                                            <!-- Post Media-->
                                            <div class="post-media offset-top-34">
                                            <header class="post-media">
                                                <div class="embed-responsive embed-responsive-16by9">
                                                    <img src="{{ ($post->photo) ? $post->photo->getUrl() : '' }}" alt="Photo" width="100%">
                                                </div>
                                            </header>
                                            </div>
                                        </div>
                                        <section class="post-content offset-top-34">
                                            <div class="group-xs">
                                                @foreach($post->tags as $tag)
                                                    <a class="badge badge-xs badge-default" href="{{route('blog.tag', $tag->id)}}">{{$tag->name}}</a>
                                                @endforeach
                                            </div>
                                        </section>
                                        <section class="post-content offset-top-34">
                                            {!! $post->content !!}
                                        </section>



                                        </article>
                    </div>



                </section>
              </div>
            </div>

            <!-- blog right section -->
            <div class="cell-lg-3 cell-lg-push-2 offset-top-66 offset-lg-top-0">


               <aside class="text-left">
                    <!-- Search Form-->
                    <h6 class="text-uppercase text-spacing-60">Search</h6>
                    <div class="text-subline"></div>
                    <div class="offset-top-34">
                                    <!-- RD Search Form-->
                                    <form class="form-search rd-search" action="#" method="GET">
                                      <div class="form-group">
                                        <label class="form-label form-search-label form-label-sm" for="blog-sidebar-3-form-search-widget">Search</label>
                                        <input class="form-search-input input-sm form-control input-sm" id="blog-sidebar-3-form-search-widget" type="text" name="search" autocomplete="off">
                                      </div>
                                      <button class="form-search-submit" type="submit"><span class="mdi mdi-magnify"></span></button>
                                    </form>
                    </div>

                <div class="range offset-top-41">
                  <div class="cell-xs-6 cell-lg-12">
                    <!-- Category-->
                    <h6 class="text-uppercase text-spacing-60">Category</h6>
                    <div class="text-subline"></div>
                    <ul class="list list-marked offset-top-30">
                      @foreach($categories as $category)
                        <li><a href="{{route('blog.category', $category->id)}}">{{$category->name}} <span class="text-dark">({{$category->posts->count()}})</span></a></li>
                      @endforeach
                    </ul>
                  </div>
                  <div class="cell-xs-6 cell-lg-12 offset-top-41 offset-xs-top-0 offset-lg-top-41">
                        <!-- Tags-->
                        <h6 class="offset-top-41 text-uppercase text-spacing-60">Tags</h6>
                        <div class="text-subline"></div>
                        <div class="offset-top-34">
                            <div class="group-xs">
                                @foreach($tags as $tag)
                                    <a class="btn btn-xs btn-default" href="{{route('blog.tag', $tag->id)}}">{{$tag->name}}</a>
                                @endforeach
                            </div>
                        </div>
                    </div>

                  <div class="cell-xs-6 cell-lg-12 offset-top-41 offset-xs-top-0 offset-lg-top-41">
                    <!-- Archive-->
                    <h6 class="text-uppercase text-spacing-60">Archive</h6>
                    <div class="text-subline"></div>
                    <ul class="list list-marked offset-top-30">
                      <li><a href="#">January 2016 <span class="text-dark">(17)</span></a></li>
                      <li><a href="#">December 2015 <span class="text-dark">(121)</span></a></li>
                      <li><a href="#">November 2015 <span class="text-dark">(19)</span></a></li>
                      <li><a href="#">October 2015 <span class="text-dark">(9)</span></a></li>
                      <li><a href="#">September 2015 <span class="text-dark">(25)</span></a></li>
                    </ul>
                  </div>
                </div>

              </aside>
            </div>
          </div>
        </div>



        <!--
        |‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒
        | Comments
        |‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒‒
        !-->
        <div class="section bg-white">
            <div class="container">

              <div class="row">
                <div class="col-lg-8 mx-auto">
                      <hr>

                      <div id="disqus_thread"></div>
                      <script>

                      /**
                      *  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
                      *  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables*/
                      /*
                      */
                      var disqus_config = function () {
                      this.page.url = "{{ config('app.url') }}/post/{{ $post->id }}";  // Replace PAGE_URL with your page's canonical URL variable
                      this.page.identifier = "{{ $post->id }}"; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
                      };

                      (function() { // DON'T EDIT BELOW THIS LINE
                      var d = document, s = d.createElement('script');
                      s.src = 'https://laraapp-blog.disqus.com/embed.js';
                      s.setAttribute('data-timestamp', +new Date());
                      (d.head || d.body).appendChild(s);
                      })();
                      </script>
                      <noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>



                </div>
              </div>

            </div>
          </div>



      </main>
@endsection
@include('layout.footer')
