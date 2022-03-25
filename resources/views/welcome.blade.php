

@extends('layouts.app')
@section('content')
<!-- ======= Hero Section ======= -->
<section id="hero" class="clearfix">
    <div class="container d-flex h-100">
      <div class="row justify-content-center align-self-center" data-aos="fade-up">
        <div class="col-lg-6 intro-info order-lg-first order-last" data-aos="zoom-in" data-aos-delay="100">
          <h2>Get your best branding <br><span>with a little</span><br><span>Moore Advice!</span></h2>
          <div>
            <a href="{{ '/news' }}" class="btn-get-started scrollto">Get Started</a>
          </div>
        </div>

        <div class="col-lg-6 intro-img order-lg-last order-first" data-aos="zoom-out" data-aos-delay="200">
          <img src="{{ asset('assets/img/intro-img.svg') }}" alt="Background Image" class="img-fluid">
        </div>
      </div>

    </div>
    
  </section><!-- End Hero -->
  <section id="news" class="news">
    <div class="container" data-aos="fade-up">
      {{-- @include('layouts.partials.messages') --}}
      <div class="row">

        <div class="col-lg-5 col-md-6">
          <div class="news-img" data-aos="fade-right" data-aos-delay="100">
            <img src="{{ asset('assets/img/about-img.jpg') }}" alt="" >

          </div>
        </div>
        <div class="col-lg-7 col-md-6">
            <div class="news-content" data-aos="fade-left" data-aos-delay="100">
              <h2>What we offer</h2>
              <p style="text-align: justify">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dolores eius dignissimos 
                  laboriosam sunt quaerat id quis tempore vitae perspiciatis, autem dolorem, qui culpa 
                  mollitia excepturi, libero amet ratione labore consectetur.
                  Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam suscipit nemo molestias saepe, obcaecati voluptas vitae necessitatibus cumque impedit repellat itaque corrupti laborum velit hic omnis repellendus architecto at tempore.
                  Lorem ipsum dolor sit amet consectetur adipisicing elit. Exercitationem repellendus voluptates consequuntur libero quos ipsum laboriosam ea ipsam, dolor laudantium dolorum eligendi commodi atque aut, odio ab? Dicta, ducimus voluptas
                  Lorem ipsum dolor sit amet consectetur adipisicing elit. Excepturi, corrupti eius maiores voluptatibus maxime at repellendus distinctio porro voluptatum ut magnam alias ipsum fugiat expedita harum? Voluptates temporibus fugit inventore.
                  Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur at provident odio adipisci, repellendus aut exercitationem vero sed tempore suscipit. Quam saepe neque delectus ex nihil voluptatem eligendi adipisci qui.

                </p>
            </div>
          </div>

        <div class="col-lg-7 col-md-6">
          <div class="news-content" data-aos="fade-left" data-aos-delay="100">
            
            <p style="text-align: justify">{{'' }}</p>
            
          </div>
        </div>
      </div>

    </div>
  </section>
@endsection
        </div>
    </body>
</html>
