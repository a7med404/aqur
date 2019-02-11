@extends('layouts.app')

@section('title')
    Welcome Page
@endsection


@section('content')

    <header class="masthead text-center text-white d-flex">
          
      <div class="container my-auto">
        <div class="row">
          <div class="col-lg-10 mx-auto">
            <h1 class="text-uppercase">
              <strong>Your Favorite Source of Good Aqur </strong>
            </h1>
            <hr>
          </div>
          <div class="col-lg-8 mx-auto">
            <p class="text-faded mb-5">Whether you are looking to rent, buy or sell your home, Aqur's directory of local sudan agents and brokers in Winfield!</p>
            <a class="btn btn-primary btn-xl js-scroll-trigger" href="{{ route('user-create-build') }}">Add Aqur</a>
          </div>
        </div>
      </div>   

    </header>

    <section class="bg-primary" id="about">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 mx-auto text-center">
            <h2 class="section-heading text-white">We've got what you need!</h2>
            <hr class="light my-4">
            <p class="text-faded mb-4">Whether you are looking to rent, buy or sell your home, Aqur's directory of local sudan agents and brokers in Winfield, KS connects you with professionals who can help meet your needs. Because the Winfield real estate market is unique, buying or selling your next home. Our directory helps you find real estate professionals who specialize in buying, selling, among many other options. Alternatively, you could work with a local agent or real estate broker who provides an entire suite of buying and selling services. </p>
            <a class="btn btn-light btn-xl js-scroll-trigger" href="#services">Get Started!</a>
          </div>
        </div>
      </div>
    </section>

    <section id="services">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading">At Your Service</h2>
            <hr class="my-4">
          </div>
        </div>
      </div>
      <div class="container">
        <div class="row">
          <div class="col-lg-3 col-md-6 text-center">
            <div class="service-box mt-5 mx-auto">
              <i class="fa fa-4x fa-map text-primary mb-3 sr-icons"></i>
              <h4 class="mb-3">Find places anywhere in the sudan</h4>
              <p class="text-muted mb-0">Our templates are updated regularly so they don't break.</p>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 text-center">
            <div class="service-box mt-5 mx-auto">
              <i class="fa fa-4x fa-users text-primary mb-3 sr-icons"></i>
              <h4 class="mb-3">We have agents with experience</h4>
              <p class="text-muted mb-0">You can use this theme as is, or you can make changes!</p>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 text-center">
            <div class="service-box mt-5 mx-auto">
              <i class="fa fa-4x fa-home text-primary mb-3 sr-icons"></i>
              <h4 class="mb-3">Buy or rent beautiful properties</h4>
              <p class="text-muted mb-0">We update dependencies to keep things fresh.</p>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 text-center">
            <div class="service-box mt-5 mx-auto">
              <i class="fa fa-4x fa-heart text-primary mb-3 sr-icons"></i>
              <h4 class="mb-3">With agent account you can list properties</h4>
              <p class="text-muted mb-0">You have to make your websites with love these days!</p>
            </div>
          </div>
        </div>
      </div>
    </section>


    <section id="contact">
      <div class="container">
        <div class="row">
          <div class="col-lg-8 mx-auto text-center">
            <h2 class="section-heading">Let's Get In Touch!</h2>
            <hr class="my-4">
            <p class="mb-5">Ready to start your next project with us? That's great! Give us a call or send us an email and we will get back to you as soon as possible!</p>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-4 ml-auto text-center">
            <i class="fa fa-phone fa-3x mb-3 sr-contact"></i>
            <p>{{ getSetting('mobile') }}</p>
          </div>
          <div class="col-lg-4 mr-auto text-center">
            <i class="fa fa-envelope-o fa-3x mb-3 sr-contact"></i>
            <p>
              <a href="mailto:{{ getSetting('email') }}"> Contact Us E-mail </a>
            </p>
          </div>
        </div>
      </div>
    </section>

      <div class="copy-section">
        <div class="container">
          <p>© 2018 Aqur. All rights reserved | Design by <a href="http://a7med404.com">a7med 404</a></p>
        </div>
      </div>

@endsection
