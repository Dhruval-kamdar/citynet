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
                           
                        </a>

                    </div>
                    <!-- End Header Navigation -->

                    <!-- navbar menu -->
                    <div class="collapse navbar-collapse" id="navbar-menu">
                        <ul class="nav navbar-nav navbar-right">
                            <li><a href="#home">Home</a></li>                    
                            <li><a href="#business">About</a></li> 
                            <li><a href="#service">Service</a></li>
                            <li><a href="#staff">Staff </a></li>
                            <!--<li><a href="#partner">Partner</a></li>-->
                            <li><a href="#contact">Contact Us</a></li>
                            <li><a href="{{ route('blog') }}">Blog</a></li>
                        </ul>
                    </div><!-- /.navbar-collapse -->
                </div> 

            </nav>

            <!--Home Sections-->

            <section id="home" class="home bg-black fix">
                <div class="overlay"></div>
                <div class="container">
                    <div class="row">
                        <div class="main_home text-center">
                            <div class="col-md-12">
                                <div class="hello_slid">
                                    <div class="slid_item">
                                        <div class="home_text ">
                                            <h2 class="text-white">Welcome to <strong>City Net Employment</strong></h2>
                                            <h1 class="text-white">where the best manpower reigns</h1>
                                        </div>
                                    </div>

                                    <div class="slid_item">
                                        <div class="home_text ">
                                            <h2 class="text-white">We are Here <strong>For</strong></h2>
                                            <h1 class="text-white">To solve the unsolvable</h1>
                                        </div>

                                    </div>

                                    <div class="slid_item">
                                        <div class="home_text ">
                                            <h2 class="text-white">Our motto <strong>is</strong></h2>
                                            <h1 class="text-white">To reflect the ground sentiments to the authorities</h1>
                                        </div>
                                    </div><!-- End off slid item -->
                                </div>
                            </div>

                        </div>


                    </div><!--End off row-->
                </div><!--End off container -->
            </section> <!--End off Home Sections-->


            <!--Business Section-->
            <section id="business" class="business roomy-70">
                <div class="container">
                    <div class="row">
                        <div class="main_business">
                            
                            <div class="col-md-12">
                                <div class="business_item sm-m-top-50">
                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                        <div class="head_title text-center fix">
                                            <h2 class="text-uppercase">About Us</h2>
                                            <h5>Who we are?</h5>
                                        </div>
                                    </div>
                                    <h2 class="text-uppercase text-center"><strong>Welcome </strong>to City Net Employment Agency Pte Ltd.</h2>
                                    <p>City Net was founded by John Lai, Lim Peng Siang and Virginia Lee in 1995.  In our earlier years of operation, the company undertook primarily the foreign domestic workers business.  However, the company decided to deviate from the foreign domestic recruitment business in 2006, after about 10 years of operations, due to changes in MOM policy.</p>
                                    <p>The company now provides mainly work pass applications and related services to our clients.  We also provide consultancy services to new companies, for the setting up of accounts, maintenance of the accounts, linking up with the various government agencies so as to ensure smooth flow of operations.  We provide services to companies from the construction, service and manufacturing industries.</p>
                                    <p>The company has more than 1000 accounts to date.  In the years ahead, we look forward to more meaningful interactions with our clients, embracing the constantly changing environment with enthusiasm.</p>
                                    <p><strong>Our motto & role in Manpower Industry are:</strong></p>
                                    <ul>
                                        <li><i class="fa fa-arrow-circle-right"></i> To solve the unsolvable</li>
                                        <li><i class="fa  fa-arrow-circle-right"></i> To reflect the ground sentiments to the authorities</li>
                                        <li><i class="fa  fa-arrow-circle-right"></i> To grow and contribute to the good of the society.</li>
                                    </ul>
                                    <h2 class="m-top-20">MOM Licence</h2>
                                    <p>We are registered with MOM under this Licence  Number: <strong>03C5185</strong></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section><!-- End off Business section -->

  

        <section id="service" class="features bg-grey" style="padding-bottom: 35px">
            <div class="container">
              <div class="row">
                <div class="main_features fix roomy-70">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="head_title text-center fix">
                            <h2 class="text-uppercase">Our Main Services</h2>
                            <h5>We provide a wide range of services.</h5>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                          <div class="features_item sm-m-top-30">
                              <div class="f_item_icon"><img src="{{ url('uploads/logo/wp.png') }}"></div>
                            <div class="business_item f_item_text">
                              <h3 >Work Permit Applications</h3>
                              <p align="justify">Online application and issuance, appeal for rejected applications, wp quota checking, new account opening and consultancy services, thumb printing services, other related services  viz., medical nsurance and workmen injury compensation insurance for workers, medical check up for workes (one stop expressed report on next working day)</p>
                            </div>
                          </div>
                        </div>
                        
                        <div class="col-md-4">
                          <div class="features_item sm-m-top-30">
                            <div class="f_item_icon" ><img src="{{ url('uploads/logo/SP.png') }}"></div>
                            <div class=" business_item f_item_text">
                              <h3>S Pass Applications</h3>
                              <p align="justify">Online application and issuance, appeal for rejected applications, s pass quota checking and consultancy services, thumb printing services, other related services viz., medical nsurance and workmen injury compensation insurance for workers, medical check up for workes (one stop expressed report on next working day)</p>
                            </div>
                          </div>
                        </div>
                        
                        <div class="col-md-4">
                          <div class="features_item sm-m-top-30">
                            <div class="f_item_icon"><img src="{{ url('uploads/logo/EP.png') }}"></div>
                            <div class="business_item f_item_text">
                              <h3>Employment Pass Applications</h3>
                              <p align="justify">Online application and issuance, job bank consultancy servics, job bank posting and monitoring services, appeal for rejected applications, thumb printing services. High success rate for applications.  Trusted agency for consultancy services on ep matters.  Consultancy for alternative solutions.</p>
                            </div>
                          </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4" style="margin-top:40px">
                          <div class="features_item sm-m-top-30">
                            <div class="f_item_icon"><img src="{{ url('uploads/logo/LOC.png') }}"></div>
                            <div class="business_item f_item_text">
                              <h3>LOC (Letter of Consent)</h3>
                              <p align="justify">Online applications and consultancy services.</p>
                            </div>
                          </div>
                        </div>
                        
                        <div class="col-md-4" style="margin-top:40px">
                          <div class="features_item sm-m-top-30">
                            <div class="f_item_icon"><img src="{{ url('uploads/logo/DP.png') }}"></div>
                            <div class="business_item f_item_text">
                              <h3>Dependent Pass Applications</h3>
                              <p align="justify">Online applications and issuance, thumb printing services  and  consultancy services.</p>
                            </div>
                          </div>
                        </div>
                        
                        <div class="col-md-4" style="margin-top:40px">
                          <div class="features_item sm-m-top-30">
                            <div class="f_item_icon"><img src="{{ url('uploads/logo/PR.png') }}"></div>
                            <div class="business_item f_item_text">
                              <h3>Permanent Residence Applications</h3>
                              <p align="justify">Online applications and consultancy services. High success rate assured.</p>
                            </div>
                          </div>
                        </div>

                    </div>
                    <div class="row">
                        <div class="col-md-2" style="margin-top:40px">
                          <div class="features_item sm-m-top-30">
                            
                          </div>
                        </div>
                   

                        <div class="col-md-4" style="margin-top:40px">
                              <div class="features_item sm-m-top-30">
                                <div class="f_item_icon"><img src="{{ url('uploads/logo/CA.png') }}"></div>
                                <div class="business_item f_item_text">
                                  <h3>Citizenships Applications</h3>
                                  <p align="justify">Online applications and consultancy services. High succcess rate assured.</p>
                                </div>
                              </div>
                        </div>
                        
                        <div class="col-md-4" style="margin-top:40px">
                          <div class="features_item sm-m-top-30">
                            <div class="f_item_icon"><img src="{{ url('uploads/logo/CR.png') }}"></div>
                            <div class="business_item f_item_text">
                              <h3>Contractors Registration System (Crs) – BCA</h3>
                              <p align="justify">Online applicatoins for new application, renewal application and consultancy services.</p>
                            </div>
                          </div>
                        </div>    

                        <div class="col-md-2" style="margin-top:40px">
                          <div class="features_item sm-m-top-30">
                            
                          </div>
                        </div>
                    </div>
                </div>
                <div class="main_features fix">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="head_title text-center fix">
                            <h2 class="text-uppercase">ICA SERVICES</h2>
                            
                        </div>
                    </div>  
                    <div class="row">
                        <div class="col-md-4">
                          <div class="features_item sm-m-top-30">
                            <div class="f_item_icon"><img src="{{ url('uploads/logo/CA.png') }}"></div>
                            <div class="business_item f_item_text">
                              <h3>Citizenships Applications </h3>
                              <p align="justify">Online applications and consultancy services. High succcess rate assured.</p>
                              
                            </div>
                          </div>
                        </div>

                        <div class="col-md-4" >
                          <div class="features_item sm-m-top-30">
                            <div class="f_item_icon"><img src="{{ url('uploads/logo/LT.png') }}"></div>
                            <div class="business_item f_item_text">
                              <h3>Long Term Visit Pass Applications</h3>
                              <p align="justify">Online applications and consultancy services. High succcess rate assured.</p>
                            </div>
                          </div>
                        </div>

                        <div class="col-md-4" >
                          <div class="features_item sm-m-top-30">
                            <div class="f_item_icon"><img src="{{ url('uploads/logo/TS.png') }}"></div>
                            <div class="business_item f_item_text">
                              <h3>Tax Services</h3>
                              <p align="justify">Online applications and consultancy services for individual and corporate entities.</p>
                            </div>
                          </div>
                        </div>
                    
                    </div>
                    
                </div>
              </div>
            </div>
        </section>

            <!--product section-->
            <section id="staff" class="product">
                <div class="container">
                    <div class="main_product roomy-50">
                        <div class="head_title text-center fix">
                            <h2 class="text-uppercase">Staff </h2>
                            <h5>Founding Members of City Net Employment Agency Pte Ltd</h5>
                        </div>

                        <div class="container">
                            
                            <div class='row'>
                              <div class='col-md-12'>
                                <div class="carousel slide media-carousel" id="media">
                                  <div class="carousel-inner">
                                    <div class="item  active">
                                      <div class="row">
                                        <div class="col-md-4">
                                            <div class="port_img">
                                                <img src="assets/images/team/Lai tau.jpg" style="height:240px;width: 360px" alt="" />
                                                <div class="port_overlay text-center">
                                                    <a href="assets/images/team/Lai tau.jpg" class="popup-img">+</a>
                                                </div>
                                            </div>
                                            <div class="port_caption m-top-20">
                                                <h5>JOHN LAI</h5>
                                            </div>
                                            <div class="port_caption m-top-20">
                                                <h5>Reg No : R1105211</h5>
                                            </div>
                                        </div>    
                                          
                                        <div class="col-md-4">
                                            <div class="port_img">
                                                <img src="assets/images/team/lim.jpeg" style="height:240px;width: 360px" alt="" />
                                                <div class="port_overlay text-center">
                                                    <a href="assets/images/team/lavpuav.jpg" class="popup-img">+</a>
                                                </div>
                                            </div>
                                            <div class="port_caption m-top-20">
                                                <h5>LIM PENG SIANG</h5>
                                                
                                            </div>
                                            <div class="port_caption m-top-20">
                                                <h5>Reg No : R1104808</h5>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="port_img">
                                                <img src="assets/images/team/Lee Ai.jpg" style="height:240px;width: 360px" alt="" />
                                                <div class="port_overlay text-center">
                                                    <a href="assets/images/team/Lee Ai.jpg" class="popup-img">+</a>
                                                </div>
                                            </div>
                                            <div class="port_caption m-top-20">
                                                <h5>VIRIGINIA LEE</h5>
                                                
                                            </div>
                                            <div class="port_caption m-top-20">
                                                <h5>Reg No : R1104807</h5>
                                            </div>
                                        </div>        
                                      </div>
                                    </div>
                                    <div class="item">
                                      <div class="row">
                                        <div class="col-md-4">
                                            <div class="port_img">
                                                <img src="assets/images/team/Lim hvee kia.jpg" alt="" />
                                                <div class="port_overlay text-center">
                                                    <a href="assets/images/team/Lim hvee kia.jpg" class="popup-img">+</a>
                                                </div>
                                            </div>
                                            <div class="port_caption m-top-20">
                                                <h5>ESME LIM</h5>
                                                
                                            </div>
                                            <div class="port_caption m-top-20">
                                                <h5>Reg No : R1652787</h5>
                                            </div>
                                        </div>          
                                        <div class="col-md-4">
                                          <div class="port_img">
                                                <img src="assets/images/team/lavpuav.jpg" style="height:240px;width: 360px" alt="" />
                                                <div class="port_overlay text-center">
                                                    <a href="assets/images/team/Lim hvee kia.jpg" class="popup-img">+</a>
                                                </div>
                                            </div>
                                            <div class="port_caption m-top-20">
                                                <h5>JENNY LAI</h5>
                                            </div>
                                            
                                        </div>
                                               
                                      </div>
                                    </div>
                                   
                                  </div>
                                  <a data-slide="prev" href="#media" class="left carousel-control">‹</a>
                                  <a data-slide="next" href="#media" class="right carousel-control">›</a>
                                </div>                          
                              </div>
                            </div>
                          </div>
                    </div><!-- End off row -->
                    
                </div><!-- End off container -->
            </section><!-- End off Product section -->


@endsection
