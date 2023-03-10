@extends('web.layout.app')

@section('content')

 <!-- page title start -->
    <div
      class="breadcrumb-area bg-cover"
      style="background-image: url('./assets/img/bg/7.png')"
    >
      <div class="container">
        <div class="breadcrumb-inner">
          <div class="row justify-content-center">
            <div class="col-lg-6">
              <h2 class="page-title">Contact</h2>
            </div>
            <div class="col-lg-6 text-lg-end">
              <ul class="page-list">
                <li><a href="index.html">Home</a></li>
                <li>Contact</li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- page title end -->

    <!-- contact area start -->
    <div class="contact-area pd-top-120 pd-bottom-120">
      <div class="container">
        <div class="contact-page-inner bg-gray">
          <div class="section-title mb-4 pb-2">
            <h2 class="title">Direct contact us?</h2>
            <p class="content mb-0">
              For your car we will do everything advice, repairs and
              maintenance. We are the some preferred choice by many car owners
              because our experience and knowledge is selfe vident.For your car
              we will do som everything.
            </p>
          </div>
          <div class="row">
            <div class="col-md-12">
              <div class="single-input-inner">
                <input type="text" placeholder="Your Name" />
              </div>
            </div>
            <div class="col-md-12">
              <div class="single-input-inner">
                <input type="text" placeholder="Your Email" />
              </div>
            </div>
            <div class="col-md-12">
              <div class="single-input-inner">
                <input type="text" placeholder="Your Contact" />
              </div>
            </div>
            <div class="col-12">
              <div class="single-input-inner">
                <textarea placeholder="Message"></textarea>
              </div>
            </div>
            <div class="col-12 text-center">
              <button class="btn btn-base border-radius-5">Post Comment</button>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- contact area end -->

    <!-- contact list start -->
    <div class="contact-page-list">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-4 col-md-6">
            <div class="media single-contact-list">
              <div class="media-left">
                <img src="assets/img/icon/13.svg" alt="img" />
              </div>
              <div class="media-body">
                <h5>Contacts us</h5>
                <h6>88 01234 2345 12</h6>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6">
            <div class="media single-contact-list">
              <div class="media-left">
                <img src="assets/img/icon/14.svg" alt="img" />
              </div>
              <div class="media-body">
                <h5>Your Email</h5>
                <h6>Comism@mail.com</h6>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-md-6">
            <div class="media single-contact-list">
              <div class="media-left">
                <img src="assets/img/icon/15.svg" alt="img" />
              </div>
              <div class="media-body">
                <h5>Location</h5>
                <h6>99 united,America</h6>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- contact list start -->

    <!-- map start -->
    <div class="contact-g-map">
      <iframe
        src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d29208.601361499546!2d90.3598076!3d23.7803374!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sbd!4v1589109092857!5m2!1sen!2sbd"
      ></iframe>
    </div>
    <!-- map end -->
@endsection