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
<!--                            <div class="col-md-2">
                                <div class="navbar-callus text-left sm-text-center">
                                    <img alt="img" style="height: 50px;" src="{{ url('uploads/city-net-logo.jpg') }}">
                                </div>
                                
                            </div> -->
                            <!--<div class="col-md-"></div>-->
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
                        <a class="navbar-brand" href="{{ route('home')}}">
                           <img alt="img" style="margin-top:5px;height: 70px; width: 70px;" src="{{ url('uploads/city-net-logo.png') }}">
                            <h3 style="font-size: 1.3rem;color: #325992;margin-top: -50px;margin-left: 90px;">City Net Employement Agency</h3>
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

            <!--Home Sections-->

            <section id="home" class="home bg-black fix" style="height:10px!important">
                <div class="overlay"></div>
                <div class="container">
                    <div class="row">
                        <div class="main_home text-center">
                            <div class="col-md-12">
                                <div class="hello_slid">
                                    <div class="slid_item">
                                        <div class="home_text ">
                                            <h2 class="text-white"><strong>Blogs</strong></h2>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                    </div><!--End off row-->
                </div><!--End off container -->
            </section> <!--End off Home Sections-->
            <br><br><br>
            <section id="aa-blog">
                <div class="container">
                  <div class="row">
                    <div class="col-md-12">
                      <div class="aa-blog-area">
                        <div class="row">
                          <div class="col-md-12">
                            <div class="aa-blog-content">
                              <div class="row">
                                @foreach($blogArray as $row =>$val)
                                @php
                                  $filename= url('uploads/blog/'.$val['image']);
                                  $file_headers = @get_headers($filename);
                                @endphp
                                <a href="{{ route('blog-detail',array('id' => $val['id'])) }}">
                                <div class="col-md-4 col-sm-4" style="margin-top:20px;margin-bottom:25px">
                                  
                                  <article class="aa-blog-single">
                                    <figure class="aa-blog-img">
                                      @if($val['image'] != '')
                                        <img alt="img" style="width:360px;height: 240px;" src="{{ url('uploads/blog/'. $val['image']) }}">
                                        @else
                                        <img alt="img" style="width:360px;height: 240px;" src="{{ url('uploads/blog/No-image.jpg') }}">
                                      @endif
                                      
                                      <br/>
                                      <span class="aa-date-tag">
                                        {{ date('d F, y',strtotime($val['created_at'])) }}
                                      </span>
                                    </figure>
                                      <br>
                                    <div class="aa-blog-single-content">
                                      <h3>{{ $val['title'] }}</h3>
                                      <p align="justify">
                                          @if(strlen($val['description']) > 250)
                                            {{ substr($val['description'], 0, 250)."....."}}
                                          @else
                                            {{ $val['description'] }}
                                          @endif
                                      </p>
                                      <div class="aa-blog-single-bottom">
                                        <p class="aa-blog-author" ><i class="fa fa-user"></i> Admin</p>
                                      </div>
                                      
                                    </div>                   
                                  </article>
                                  
                                </div>
                                </a>
                                @endforeach
                              </div>

                            </div>
                          </div>
                          <!-- Start blog sidebar -->
                          
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </section>

     <style type="text/css">
        .home {
              background: url({{ url('assets/images/blog.jpg') }}) no-repeat scroll center center;
        }
       .aa-blog-single .aa-blog-img .aa-date-tag {
            color: #fff;
            padding: 5px 8px;
            font-weight: bold;
            position: absolute;
            left: 0;
            top: 15px;
        }
        .aa-blog-single .aa-date-tag {
            background-color: #59abe3;
        }

        .aa-blog-single {
              background-color: #f8f8f8;
              display: inline;
              float: left;
              width: 100%;
          }

        .aa-blog-single .aa-blog-img {
            display: inline;
            float: left;
            position: relative;
            width: 100%;
        }

        .aa-blog-single .aa-blog-single-content {
            display: inline;
            float: left;
            padding: 10px;
            width: 100%;
            padding-bottom: 20px;
        }

        .aa-blog-single .aa-blog-single-bottom {
            border-top: 1px solid #ccc;
            padding: 10px;
            display: inline;
            margin-top: 10px;
            float: left;
            width: 100%;
        }

        .aa-blog-single .aa-blog-single-bottom .aa-blog-author {
            float: left;
            font-size: 14px;
            font-weight: bold;
            letter-spacing: 0.5px;
        }

        a {
            text-decoration: none;
            color: #333333;
        }

        #aa-blog .aa-blog-area .aa-blog-content .aa-blog-single {
            margin-bottom: 30px;
        }

        .aa-blog-details {
            padding: 20px;
        }
        .aa-blog-single {
            background-color: #f8f8f8;
            display: inline;
            float: left;
            width: 100%;
        }

        .aa-blog-single .aa-blog-single-content {
          height: 240px;}
     </style>     

@endsection
