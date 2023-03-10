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
              <h2 class="page-title">Blog</h2>
            </div>
            <div class="col-lg-6 text-lg-end">
              <ul class="page-list">
                <li><a href="index.html">Home</a></li>
                <li>Blog</li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- page title end -->

    <!-- blog area start -->
    <div class="blog-area pd-top-120 pd-bottom-120">
      <div class="container">
        <div class="row">
          <div class="col-lg-8">
            <div class="single-blog-inner">
              <div class="thumb">
                <img src="assets/img/blog/1.png" alt="img" />
                <span class="date">15 DEC</span>
              </div>
              <div class="details">
                <ul class="blog-meta">
                  <li><i class="far fa-user"></i> By Admin</li>
                  <li><i class="far fa-folder-open"></i> Category</li>
                </ul>
                <h2 class="title">
                  <a href="blog-details.html"
                    >A Beginner's Guide to Running a Successful Agricultural</a
                  >
                </h2>
                <p>
                  It is a long established fact that a reader will be distracted
                  by the readable content of a page when looking at its layout.
                  The point of using Lorem Ipsum is that it has a more-or-less
                  normal distribut It is a long established fact that a reader
                  will be distracted by the readable content of a page when
                  looking at its layout.
                </p>
                <a class="btn btn-border-base mt-3" href="service-details.html"
                  >Touch More <i class="fa fa-plus"></i
                ></a>
              </div>
            </div>
            <div class="single-blog-inner">
              <div class="thumb">
                <img src="assets/img/blog/2.png" alt="img" />
                <span class="date">15 DEC</span>
              </div>
              <div class="details">
                <ul class="blog-meta">
                  <li><i class="far fa-user"></i> By Admin</li>
                  <li><i class="far fa-folder-open"></i> Category</li>
                </ul>
                <h2 class="title">
                  <a href="blog-details.html"
                    >Successful Agricultural Guide to Running Beginner</a
                  >
                </h2>
                <p>
                  It is a long established fact that a reader will be distracted
                  by the readable content of a page when looking at its layout.
                  The point of using Lorem Ipsum is that it has a more-or-less
                  normal distribut It is a long established fact that a reader
                  will be distracted by the readable content of a page when
                  looking at its layout.
                </p>
                <a class="btn btn-border-base mt-3" href="service-details.html"
                  >Touch More <i class="fa fa-plus"></i
                ></a>
              </div>
            </div>
            <div class="single-blog-inner">
              <div class="thumb">
                <img src="assets/img/blog/3.png" alt="img" />
                <span class="date">15 DEC</span>
              </div>
              <div class="details">
                <ul class="blog-meta">
                  <li><i class="far fa-user"></i> By Admin</li>
                  <li><i class="far fa-folder-open"></i> Category</li>
                </ul>
                <h2 class="title">
                  <a href="blog-details.html"
                    >A Beginner's Guide to Running a Successful Agricultural</a
                  >
                </h2>
                <p>
                  It is a long established fact that a reader will be distracted
                  by the readable content of a page when looking at its layout.
                  The point of using Lorem Ipsum is that it has a more-or-less
                  normal distribut It is a long established fact that a reader
                  will be distracted by the readable content of a page when
                  looking at its layout.
                </p>
                <a class="btn btn-border-base mt-3" href="service-details.html"
                  >Touch More <i class="fa fa-plus"></i
                ></a>
              </div>
            </div>
            <div class="pagination">
              <a class="prev page-numbers" href="http://icare.local/"
                ><i class="fa fa-angle-left"></i
              ></a>
              <a class="page-numbers" href="http://icare.local/">1</a>
              <span class="page-numbers current">2</span>
              <a class="page-numbers" href="http://icare.local/page/3/">3</a>
              <a class="page-numbers" href="http://icare.local/page/4/">4</a>
              <a class="next page-numbers" href="http://icare.local/page/3/"
                ><i class="fa fa-angle-right"></i
              ></a>
            </div>
          </div>
          <div class="col-lg-4 col-12">
            <div class="td-sidebar">
              <div class="widget widget_author text-center">
                <div class="thumb">
                  <img src="assets/img/about/7.png" alt="img" />
                </div>
                <div class="details">
                  <h5>Leslie Alexander</h5>
                  <h6>(480) 555-0103</h6>
                  <ul class="social-media">
                    <li>
                      <a href="#">
                        <i class="fab fa-facebook-f"></i>
                      </a>
                    </li>
                    <li>
                      <a href="#">
                        <i class="fab fa-twitter"></i>
                      </a>
                    </li>
                    <li>
                      <a href="#">
                        <i class="fab fa-instagram"></i>
                      </a>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="widget widget_search">
                <form class="search-form">
                  <div class="form-group">
                    <input type="text" placeholder="Key word" />
                  </div>
                  <button class="submit-btn" type="submit">
                    <i class="fas fa-chevron-right"></i>
                  </button>
                </form>
              </div>
              <div class="widget widget-recent-post">
                <h4 class="widget-title">Recent News</h4>
                <ul>
                  <li>
                    <div class="media">
                      <div class="media-left">
                        <img src="assets/img/widget/1.png" alt="blog" />
                      </div>
                      <div class="media-body align-self-center">
                        <h6 class="title">
                          <a href="blog-details.html"
                            >Empowering future with solar.</a
                          >
                        </h6>
                        <div class="post-info">
                          <i class="far fa-calendar-alt"></i
                          ><span>15 October</span>
                        </div>
                      </div>
                    </div>
                  </li>
                  <li>
                    <div class="media">
                      <div class="media-left">
                        <img src="assets/img/widget/2.png" alt="blog" />
                      </div>
                      <div class="media-body align-self-center">
                        <h6 class="title">
                          <a href="blog-details.html"
                            >Marketing For Base market watch</a
                          >
                        </h6>
                        <div class="post-info">
                          <i class="far fa-calendar-alt"></i
                          ><span>15 October</span>
                        </div>
                      </div>
                    </div>
                  </li>
                  <li>
                    <div class="media">
                      <div class="media-left">
                        <img src="assets/img/widget/3.png" alt="blog" />
                      </div>
                      <div class="media-body align-self-center">
                        <h6 class="title">
                          <a href="blog-details.html"
                            >Condtum Integer urna at faucibus</a
                          >
                        </h6>
                        <div class="post-info">
                          <i class="far fa-calendar-alt"></i
                          ><span>15 October</span>
                        </div>
                      </div>
                    </div>
                  </li>
                </ul>
              </div>
              <div class="widget widget_catagory">
                <h4 class="widget-title">Catagory</h4>
                <ul class="catagory-items">
                  <li>
                    <a href="blog.html">Business <span>3</span></a>
                  </li>
                  <li>
                    <a href="blog.html">Finance <span>7</span></a>
                  </li>
                  <li>
                    <a href="blog.html">Web Design <span>2</span></a>
                  </li>
                  <li>
                    <a href="blog.html">Counsiling <span>3</span></a>
                  </li>
                  <li>
                    <a href="blog.html">IT Service <span>5</span></a>
                  </li>
                </ul>
              </div>
              <div class="widget widget_tag_cloud mb-0">
                <h4 class="widget-title">Tags</h4>
                <div class="tagcloud">
                  <a href="#">Information</a>
                  <a href="#">Learn</a>
                  <a href="#">ICT</a>
                  <a href="#">Business</a>
                  <a href="#">Portfolio</a>
                  <a href="#">Project</a>
                  <a href="#">Personal</a>
                  <a href="#">Server</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- blog area end -->

@endsection