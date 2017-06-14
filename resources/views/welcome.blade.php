<!doctype html>
<html lang="en">

<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="description" content="Thoughts, stories and ideas">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>VeBLoG</title>

  <link rel="shortcut icon" href="assets/favicon.ico">

  <script type="text/javascript">
    document.documentElement.className = ' fade-out';
  </script>

  <link href="https://fonts.googleapis.com/css?family=Muli:300,400" rel="stylesheet">
  <link rel="stylesheet" href="assets/css/app.minb392.css?v=9d1181f046">

 
</head>
<body class="home-template">

  <div class="off-canvas-container">
    
  <div class="site-cover cover-image cover-image--hero" style="background-image: url(content/images/2016/08/miriam_ponsaf0907.jpg)">
    <div class="site-cover__content">
      <div class="site-cover__title">
        THE VeBLoG
      </div>
      <div class="site-cover__description">
        Thoughts, stories and ideas
      </div>
    </div>
  </div>

<header class="site-header cover-exist">

  <div class="row row--full">

    <div class="column small-8 medium-3 large-3">
      <h1 class="logo"><a href="index.html">VeBLoG</a></h1>
    </div>

    <label class="off-canvas-toggle"><span data-icon="ei-navicon" data-size="s"></span></label>

    <div class="off-canvas-content">
      <div class="column medium-9 large-9">
        <nav class="navigation navigation--header">
          <ul class="list-bare">
            <li class="nav-home nav-current" role="presentation"><a href="/">Home</a></li>
            <li class="nav-about" role="presentation"><a href="/about">About</a></li>

          </ul>
        </nav>
      </div>
    </div>

  </div> 

</header>
    
<div class="wrapper">
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
</div>

    <footer class="footer">
  <div class="row row--full">

    <div class="column large-12 footer__section">
      <nav class="navigation">
        <ul class="list-bare footer__nav text-center">
          <li class="nav-home nav-current" role="presentation"><a href="/">Home</a></li>
        <li class="nav-about" role="presentation"><a href="/about">About</a></li>
        </ul>
      </nav>
    </div>

    <div class="column large-12 footer__section">
      <ul class="list-bare footer__nav social-icons text-center">
          <li>
            <a href="https://twitter.com/inioluwa" target="_blank">
              <span data-icon="ei-sc-twitter" data-size="s"></span>
            </a>
          </li>
          <li>
            <a href="https://www.facebook.com/Inidele" target="_blank">
              <span data-icon="ei-sc-facebook" data-size="s"></span>
            </a>
          </li>
        <li>
          <a href="https://instagram.com/inioluwahhh" target="_blank">
            <span data-icon="ei-sc-instagram" data-size="s"></span>
          </a>
        </li>
        <li>
      </ul>
    </div>

    <div class="column large-12 footer__section">
      <div class="text-center">
        <div class="font-tiny">
          &copy; 2017
           VeBLoG
        </div>
      </div>
    </div>

    </div>
</footer>
</div>
<script type="text/javascript" src="assets/js/app.minb392.js?v=9d1181f046"></script>
</body>
</html>