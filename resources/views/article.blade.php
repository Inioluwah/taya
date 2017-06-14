@extends('layouts.mother')

@section('content')

  <div class="post-cover">
      <div class="row row--full">
        <div class="column large-12">
          <div class="FlexEmbed FlexEmbed--2by1 cover-image cover-image--hero" style="background-image: url(../content/mypics/{{$article->image}})"></div>
        </div>
      </div>

    <div class=" post-cover__header ">
      <div class="row">
        <div class="column ">
          <div class="text-center post__header">
            <h2 class="post__title">{{$article->title}}</h2>
            <time class="post__date sans-serif uppercase" datetime="{{$article->created_at->diffForHumans()}}">{{$article->created_at->diffForHumans()}}</time>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="row">
    <div class="column column--center medium-10 large-7">
      <article class="post tag-travel tag-lifestyle featured">

        <div class="post__content">
          <p>{{$article->content}}</p>
        </div>

        <div class="row">
          <div class="column medium-10 large-10">
            <div class="post__tags">
              <!--<a href="../tag/lifestyle/index.html">lifestyle</a>-->
            </div>
          </div>
          <div class="column medium-2 large-2">
            <ul class="share-list list-bare">
  <li>
    <a class="share-list__link" title="Share on Twitter" href="https://twitter.com/share?text={{$article->title}}&amp;url={{Request::url()}}"
    onclick="window.open(this.href, 'twitter-share', 'width=550,height=235');return false;">
      <div data-icon="ei-sc-twitter" data-size="s" class="share-list__icon share-list__icon--twitter"></div>
    </a>
  </li>

  <li>
    <a class="share-list__link" title="Share on Facebook" href="https://www.facebook.com/sharer?text={{$article->title}}&amp;url={{Request::url()}}" onclick="window.open(this.href, 'facebook-share','width=580,height=296');return false;">
    <div data-icon="ei-sc-facebook" data-size="s" class="share-list__icon share-list__icon--facebook"></div>
    </a>
  </li>
</ul></div>
</div>
<hr>
<div class="box">
  
  <div class="box__body">
    <div class="box__title"> Comments </div>
    
    @foreach($comments as $c)
     <p class="box__text">{{$c->comment}}.</p> - <small><i>{{$c->name}}</i>  {{$c->created_at->diffForHumans()}}</small>
     @endforeach
    <hr>
     <form action="/uploadcomment" method="POST">
        {{ csrf_field() }}
        <div class="form-group">
          <input type="text" name="name" placeholder="Your name"><br>
          <textarea name="comment" placeholder="Your comment here"></textarea>
          
        </div>
        <input type="hidden" name="article_id" value="{{$article->id}}">
        <input type="submit" class="button" value="Add a comment"><br><br>
      </form>
  </div>
</div>

<hr>

        
  <div class="box">

      <figure class="author-image">
        <div class="img" style="background-image: url(/content/images/IMG-20160830-WA0035.jpg)"><span class="hidden">Inioluwa's Picture</span></div>
      </figure>

    <div class="box__body">

      <h4 class="box__title">
        <a href="/about">Inioluwa 'Dele</a>
      </h4>

        <p class="box__text">Author &amp; developer of VeBLoG. Minimalist. I love creating clean and minimal websites.Technical writer at SitePoint.</p>

      <div class="author-meta box__text">
          <div class="inline-block">
            <a href="https://twitter.com/inioluwahh" target="_blank">
              <span data-icon="ei-sc-twitter" data-size="s"></span>
            </a>
          </div>

          <div class="inline-block">
            <a href="https://www.facebook.com/Inidele" target="_blank">
              <span data-icon="ei-sc-facebook" data-size="s"></span>
            </a>
          </div>

          <div class="inline-block">
            <a href="/">
              <span data-icon="ei-link" data-size="s"></span>
            </a>
          </div>

          <div class="inline-block">
            <span data-icon="ei-location" data-size="s"></span>
            Nigeria
          </div>
      </div>

    </div>
  </div>

  <div class="row">
  <div class="post-prev-next-pagination post-list">
  @foreach ($darticle as $d)
    <article class="post-card-wrap column medium-6 large-4 medium-6 large-6 post-navigation prev">
  <div class="post-card ">

    <a href="/viewarticles{{$d->id}}" class="fadein post-card__image cover-image FlexEmbed FlexEmbed--4by3"  style="background-image: url(/content/mypics/{{$d->image}}) ">
    </a>

    <a href="/viewarticles{{$d->id}}" class="block post-card__info">
      <div class="post-card__meta">
        <time class="post-card__meta__date sans-serif uppercase" datetime="{{$d->created_at}}">{{$d->created_at->diffForHumans()}}</time>
      </div>

      <h2 class="post-card__title">
        {{$d->title}}
      </h2>
    </a>

  </div>
</article>@endforeach

  </div>
</div>
        <hr>

          <h5>Enter your email below to <em>join our newsletter</em></h5>

<div class="subscribe-form">
  <form method="POST" action="/postmail">
   {{csrf_field()}}

    <div class="form-group">
        <input type="email" name="email"  placeholder="Your email address" />
    </div>
    <button class="button" type="submit">Subscribe</button>
    <script type="text/javascript">(function(g,h,o,s,t){h[o]('.location')[s]=h[o]('.location')[s] || g.location.href;h[o]('.referrer')[s]=h[o]('.referrer')[s] || h.referrer;})(window,document,'querySelector','value');</script>
</form>


</div>          <hr>

       
      </article>

    </div> 
  </div> 
@endsection