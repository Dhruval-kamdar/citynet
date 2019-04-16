@extends('front_layouts.app')
@section('content')

    <body data-spy="scroll" data-target=".navbar-collapse">
        <!-- Preloader -->
        <div id="loading">
            <div id="loading-center">
                <div id="loading-center-absolute">
                    <div class="object" id="object_one"></div>
                    <div class="object" id="object_two"></div>
                    <div class="object" id="object_three"></div>
                    <div class="object" id="object_four"></div>
                </div>
            </div>
        </div><!--End off Preloader -->


        <div class="culmn">
            <!--Home page style-->


            <nav class="navbar navbar-default bootsnav navbar-fixed">
                <div class="navbar-top bg-grey fix">
                    <div class="container">
                        <div class="row">

                            <div class="col-md-12 ">
                                <div class="navbar-callus pull-right sm-text-center">
                                    <ul class="list-inline">
                                        <li><a href=""><i class="fa fa-phone"></i> Call us: : 65360790 / 65360239 / 64388704 </a></li>
                                        <li><a href=""><i class="fa fa-envelope-o"></i> Contact us: citynet0203@gmail.com</a></li>
                                    </ul>
                                </div>
                            </div>
                           
                        </div>
                    </div>
                </div>

          

                <div class="container"> 
                    

                    <!-- Start Header Navigation -->
                    <div class="navbar-header" style="height: 80px;">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
                            <i class="fa fa-bars"></i>
                        </button>
                        <a class="navbar-brand" href="#brand">
                           <img alt="img" style="margin-top:5px;height: 70px; width: 70px;" src="{{ url('uploads/city-net-logo.png') }}">
                           
                        </a>

                    </div>
                    <!-- End Header Navigation -->

                    <!-- navbar menu -->
                    <div class="collapse navbar-collapse" id="navbar-menu">
                        <ul class="nav navbar-nav navbar-right">
                            <li><a href="{{ route('home')}}">Home</a></li>                    
                            <li><a href="{{ route('home')}}">About</a></li> 
                            <li><a href="{{ route('home')}}">Service</a></li>
                            <li><a href="{{ route('home')}}">Staff </a></li>
                            <!--<li><a href="#partner">Partner</a></li>-->
                            <li><a href="{{ route('home')}}">Contact Us</a></li>
                            <li><a href="{{ route('blog') }}">Blog</a></li>
                        </ul>
                    </div><!-- /.navbar-collapse -->
                </div> 

            </nav>
      <br/><br/><br/><br/><br/><br/>   
 <!-- Start Blog  -->
 <section id="aa-blog" style="margin-bottom: 25px">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="aa-blog-area">
            <div class="row">
              <div class="col-md-12">
                <div class="aa-blog-content">
                  <div class="row">
                    <div class="col-md-12">
                      <article class="aa-blog-single aa-blog-details">
                        <figure class="aa-blog-img">
                           <a href="#">
                            @php
                                      $filename= url('uploads/blog/'.$blogArray['image']);
                                      $file_headers = @get_headers($filename);
                                    @endphp
                    
                                  @if($file_headers[0] == 'HTTP/1.1 200 OK')
                                    <img alt="img" src="{{ url('uploads/blog/'. $blogArray['image']) }}">
                                  @else
                                    <img alt="img" src="{{ url('uploads/blog/No-image.jpg') }}">
                                  @endif
                                  </a>
                          </a>
                          <br/>
                          <span class="aa-date-tag">{{ date('d F, y',strtotime($blogArray['created_at'])) }}</span>
                        </figure>
                        <div class="aa-blog-single-content">
                          <h2>{{ $blogArray['title'] }}</h2>
                          <div class="aa-blog-single-bottom">
                            <a class="aa-blog-author" href="#"><i class="fa fa-user"></i> Admin</a>
                          </div>
                          <p align="justify">{{ $blogArray['description'] }}</p>
                          
                        </div>                   
                      </article>
                    </div>
                    
                  </div>                                   
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- / Blog  -->

@endsection
