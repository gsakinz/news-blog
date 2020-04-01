@extends('layouts.app')

@section('content')
<section class="top-header overlay">
    <div class="container">
        <div class="row justify-content-md-center">
            <div class="col-md-10">
                <h1 class="pb-3 top-header-h1">
                    WELCOME !!!
                </h1>
                <p class="pb-3 top-hrader-p">
                    Here in our forum, we will serve you with the truth through the word of God.
                </p>
            </div>
        </div>
    </div>
</section>

<section class="home-article">
    <div class="container">
        <hr class="line">
            <div class="article-text">
                Whether it is love of family, friends, spouse, or the love between God and man, there is a Biblical answer for the question.<br>
                Love is one of the most pervasive themes in Scripture, and it is the foundation for understanding the message of the Gospel.
            </div>
         <hr class="line">
    </div>
</section>

<section class="carousel">
  <div id="forum" class="carousel slide" data-ride="carousel">

    <!-- Indicators -->
      <ul class="carousel-indicators">
        <li data-target="#forum" data-slide-to="0" class="active"></li>
        <li data-target="#forum" data-slide-to="1"></li>
        <li data-target="#forum" data-slide-to="2"></li>
      </ul>

    <!-- The slideshow -->
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="/images/image0.jpeg" alt="image0">
          <div class="carousel-caption carousel-style">
            <h3>Investing</h3>
            <p>We had such a great time investing!</p>
          </div>
        </div>
        <div class="carousel-item">
          <img src="/images/image1.jpg" alt="image1">
          <div class="carousel-caption carousel-style">
            <h3>Every Penny Counts</h3>
            <p>We had such a great giving</p>
          </div>
        </div>
        <div class="carousel-item">
          <img src="/images/image2.jpg" alt="image2">
          <div class="carousel-caption carousel-style">
            <h3>Get Along</h3>
            <p>We had such a great time together</p>
          </div>
        </div>
      </div>

    <!-- Left and right controls -->
      <a class="carousel-control-prev" href="#forum" data-slide="prev">
        <span class="carousel-control-prev-icon"></span>
      </a>
      <a class="carousel-control-next" href="#forum" data-slide="next">
        <span class="carousel-control-next-icon"></span>
      </a>
  </div>
</section>

<section class="about-us">
    <div class="container pt-4 pb-3 mt-2">
        <h2 class="pb-3 tittle">
            WHY JOIN US
        </h2>
        <h3 class="pb-5 sub-tittle">
            Always Current
        </h3>
        <div class="media-container">
            <div class="media-block-img m-auto">
                <div class="img-card">
                    <img src="/images/img-122.jpeg">
                </div>
            </div>
            <div class="text-block">
                <div class="text-card">
                    <div class="t-card px-3 col-12">
                        <div class="p-4 d-flex align-items-start">
                            <div class="card-img pr-3">
                                <h3 class="text-img d-flex align-items-center justify-content-center">1</h3>
                            </div>
                            <div class="card-text">
                                <h4 class="card-subtittle">Honest And Dependable</h4>
                                <p class="card-text">
                                    To be honest with someone else, we must know ourselves. We have to understand what we really think and feel about the world around us.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="t-card px-3 col-12">
                        <div class="p-4 d-flex align-items-start">
                            <div class="card-img pr-3">
                                <h3 class="text-img d-flex align-items-center justify-content-center">2</h3>
                            </div>
                            <div class="card-text">
                                <h4 class="card-subtittle">We Are Always Improving</h4>
                                <p class="card-text">
                                    Teams are complex systems of individuals with different preferences, skills, experiences, perspectives, and habits.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="t-card px-3 col-12">
                        <div class="p-4 d-flex align-items-start">
                            <div class="card-img pr-3">
                                <h3 class="text-img d-flex align-items-center justify-content-center">3
                                </h3>
                            </div>
                            <div class="card-text">
                                <h4 class="card-subtittle">We are Passionate</h4>
                                <p class="card-text">
                                    Members of a winning team care for the needs of their team members, show empathy, sincerely appreciate others, make them feel valued, and strive to help them succeed.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<footer>
    <section class="top-footer">
        <div class="container">
            <div class="social-row">
                <div class="text-center col-md-8">
                <!--Facebook-->
                    <span class="btn mx-2 fab">
                        <a href="#" class="fa fa-facebook"></a>
                    </span>
                <!--Twitter-->
                    <span class="btn mx-2 fab">
                        <a href="#" class="fa fa-twitter"></a>
                    </span>
                <!--Google +-->
                    <span class="btn mx-2 fab">
                        <a href="#" class="fa fa-google"></a>
                    </span>
                </div>
            </div>
        </div>
    </section>
    <section class="lower-footer">
        <div class="container">
            <div class="text-center">
                <div class="col-12">
                    <p class="display-p">
                    © Copyright 2020 GSAkinz - All Rights Reserved
                </p>
                </div>
            </div>
        </div>
    </section>
</footer>

@endsection
