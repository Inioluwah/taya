@extends('layouts.mother')

@section('content')

  <div class="row row--full">
    <div class="post-list">

    @foreach($articles as $article)
      
<article class="post-card-wrap column medium-6 large-4 ">
  <div class="post-card  post-card--featured ">

    <a href="/viewarticles{{$article->id}}" class="fadein post-card__image cover-image FlexEmbed FlexEmbed--4by3"  style="background-image: url(content/mypics/{{$article->image}}) ">
      <span title="Featured Post">
        <span class="post-card--featured__icon" data-icon="ei-star" data-size="s"></span>
      </span>
    </a>

    <a href="/viewarticles{{$article->id}}" class="block post-card__info">
      <div class="post-card__meta">
        <time class="post-card__meta__date sans-serif uppercase" datetime="2015-12-22">22 December 2015</time>
      </div>

      <h2 class="post-card__title">
        {{$article->title}}
      </h2>
    </a>

  </div>
</article>

@endforeach


    </div>
  </div>
  <div class="row row--full">
    <div class="pagination clearfix">
  <div class="column medium-6 large-6 right">
    <a class="older-posts sans-serif uppercase" href="page/2/index.html"><span>{{$articles->links()}}
</span> <div data-icon="ei-chevron-right"></div></a>
  </div>
</div>
  </div>

@endsection