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
                            <div class="col-md-2">
                                <div class="navbar-callus text-left sm-text-center">
                                    <img alt="img" style="height: 50px;" src="{{ url('uploads/city-net-logo.jpg') }}">
                                </div>
                            </div> <div class="col-md-6">
                                <div class="navbar-callus text-left sm-text-center">
                                    <ul class="list-inline">
                                        <li><a href=""><i class="fa fa-phone"></i> Call us: 8460526226</a></li>
                                        <li><a href=""><i class="fa fa-envelope-o"></i> Contact us: citynetemployment@gmail.com</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="navbar-socail text-right sm-text-center">
                                    <ul class="list-inline">
                                        <li><a href="https://www.facebook.com/"><i class="fa fa-facebook"></i></a></li>
                                        <li><a href="https://twitter.com/login?lang=en"><i class="fa fa-twitter"></i></a></li>
                                        <li><a href="https://in.linkedin.com/"><i class="fa fa-linkedin"></i></a></li>
                                        <li><a href="https://plus.google.com/discover"><i class="fa fa-google-plus"></i></a></li>
                                        <li><a href="https://www.behance.net/"><i class="fa fa-behance"></i></a></li>
                                        <li><a href="https://dribbble.com/"><i class="fa fa-dribbble"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

          

                <div class="container"> 
                    

                    <!-- Start Header Navigation -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
                            <i class="fa fa-bars"></i>
                        </button>
                        <a class="navbar-brand" href="#brand">
                            <img src="{{ asset('assets/images/rsz_untitled-2.png') }}" class="logo"  alt="">
                           
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
<!--                            <div class="col-md-6">
                                <div class="business_slid">
                                    <div class="slid_shap bg-grey"></div>
                                    <div class="business_items text-center">
                                        <div class="business_item">
                                            <div class="business_img">
                                                <img src="assets/images/Engineer.png" style="width:600px;height:368px;" alt="" />
                                            </div>
                                        </div>

                                        <div class="business_item">
                                            <div class="business_img">
                                                <img src="assets/images/lowyer.jpg" style="width:600px;height:368px;" alt="" />
                                            </div>
                                        </div>

                                        <div class="business_item">
                                            <div class="business_img">
                                                <img src="assets/images/web-designing.jpg" style="width:600px;height:368px;" alt="" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>-->
                            
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

            <!--Service section-->
            <!-- <section id="service" class="test bg-grey roomy-60 fix">
                <div class="container">
                    <div class="row">                        
                        <div class="main_test fix">

                            <div class="col-md-12 col-sm-12 col-xs-12">
                                <div class="head_title text-center fix">
                                    <h2 class="text-uppercase">Our Services</h2>
                                     <h5>We provide a wide range of services.</h5>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="test_item fix">
                                    <div class="item_img">
                                        <img class="img-circle" src="assets/images/services.png" alt="" />
                                        <i class="fa fa-quote-left"></i>
                                    </div>

                                    <div class="item_text">
                                        <h5>Main Services</h5>
                                       <ul>
                                            <li><i class="fa fa-arrow-circle-right"></i> Engineers.</li>
                                            <li><i class="fa  fa-arrow-circle-right"></i> Workres.</li>
                                            <li><i class="fa  fa-arrow-circle-right"></i> Management Person.</li>
                                            <li><i class="fa  fa-arrow-circle-right"></i> Advisor.</li>
                                            
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="test_item fix sm-m-top-30">
                                    <div class="item_img">
                                        <img class="img-circle" src="assets/images/services1.png" alt="" />
                                        <i class="fa fa-quote-left"></i>
                                    </div>

                                    <div class="item_text">
                                        <h5>Our Consultancy Sevices</h5>
                                        <ul>
                                        <li><i class="fa fa-arrow-circle-right"></i> BCA/SLOTS application and related services.</li>
                                        <li><i class="fa  fa-arrow-circle-right"></i> CPF  services.</li>
                                        <li><i class="fa  fa-arrow-circle-right"></i> WDA services.</li>
                                        <li><i class="fa  fa-arrow-circle-right"></i> ICA services.</li>
                                        <li><i class="fa  fa-arrow-circle-right"></i> Setting up of Company – ACRA related services.</li>
                                    </ul>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section> --><!-- End off test section -->

        <section id="service" class="features bg-grey">
            <div class="container">
              <div class="row">
                <div class="main_features fix roomy-70">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="head_title text-center fix">
                            <h2 class="text-uppercase">Our Main Services</h2>
                            <h5>We provide a wide range of services.</h5>
                        </div>
                    </div>
                  <div class="col-md-4">
                    <div class="features_item sm-m-top-30">
                      <div class="f_item_icon"><i class="fa fa-users"></i></div>
                      <div class="f_item_text">
                        <h3>Work Permit Applications</h3>
                        <p>SERVICES INCLUDE : ONLINE APPLICATION AND ISSUANCE, APPEAL FOR REJECTED APPLICATIONS, WP QUOTA CHECKING, NEW ACCOUNT OPENING AND CONSULTANCY SERVICES, THUMB PRINTING SERVICES, OTHER RELATED SERVICES  VIZ., MEDICAL NSURANCE AND WORKMEN INJURY COMPENSATION INSURANCE FOR WORKERS, MEDICAL CHECK UP FOR WORKES (ONE STOP EXPRESSED REPORT ON NEXT WORKING DAY)</p>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="features_item sm-m-top-30">
                      <div class="f_item_icon" ><i class="fa fa-universal-access" ></i></div>
                      <div class="f_item_text">
                        <h3>S Pass Applications</h3>
                        <p>SERVICES INCLUDE : ONLINE APPLICATION AND ISSUANCE, APPEAL FOR REJECTED APPLICATIONS, S PASS QUOTA CHECKING AND CONSULTANCY SERVICES, THUMB PRINTING SERVICES, OTHER RELATED SERVICES VIZ., MEDICAL NSURANCE AND WORKMEN INJURY COMPENSATION INSURANCE FOR WORKERS, MEDICAL CHECK UP FOR WORKES (ONE STOP EXPRESSED REPORT ON NEXT WORKING DAY)</p>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="features_item sm-m-top-30">
                      <div class="f_item_icon"><i class="fa fa-sliders"></i></div>
                      <div class="f_item_text">
                        <h3>Employment Pass Applications</h3>
                        <p>SERVICES INCLUDE: ONLINE APPLICATION AND ISSUANCE, JOB BANK CONSULTANCY SERVICS, JOB BANK POSTING AND MONITORING SERVICES, APPEAL FOR REJECTED APPLICATIONS, THUMB PRINTING SERVICES. HIGH SUCCESS RATE FOR APPLICATIONS.  TRUSTED AGENCY FOR CONSULTANCY SERVICES ON EP MATTERS.  CONSULTANCY FOR ALTERNATIVE SOLUTIONS.</p>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="features_item sm-m-top-30">
                      <div class="f_item_icon"><i class="fa fa-ambulance"></i></div>
                      <div class="f_item_text">
                        <h3>LOC (Letter of Consent)</h3>
                        <p>SERVICES INCLUDE : ONLINE APPLICATIONS AND CONSULTANCY SERVICES.</p>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="features_item sm-m-top-30">
                      <div class="f_item_icon"><i class="fa fa-book"></i></div>
                      <div class="f_item_text">
                        <h3>Dependent Pass Applications</h3>
                        <p>SERVICES INCLUDE : ONLINE APPLICATIONS AND ISSUANCE, THUMB PRINTING SERVICES  AND  CONSULTANCY SERVICES.</p>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="features_item sm-m-top-30">
                      <div class="f_item_icon"><i class="fa fa-diamond"></i></div>
                      <div class="f_item_text">
                        <h3>Permanent Residence Applications</h3>
                        <p>SERVICES INCLUDE : ONLINE APPLICATIONS AND CONSULTANCY SERVICES. HIGH SUCCESS RATE ASSURED.</p>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="main_features fix">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="head_title text-center fix">
                            <h2 class="text-uppercase">CITIZENSHIPS APPLICATIONS :</h2>
                            <h5>SERVICES INCLUDE : ONLINE APPLICATIONS AND CONSULTANCY SERVICES. HIGH SUCCCESS RATE ASSURED.</h5>
                        </div>
                    </div>  
                   <!--  <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="head_title text-center fix">
                            <h2 class="text-uppercase">Our Consultancy Services</h2>
                            <h5>We provide a wide range of services.</h5>
                        </div>
                    </div> -->
                  <div class="col-md-4">
                    <div class="features_item sm-m-top-30">
                      <div class="f_item_icon"><i class="fa fa-users"></i></div>
                      <div class="f_item_text">
                        <h3>BCA/SLOTS application and related services</h3>
                        <p>ONLINE APPLICATOINS FOR NEW APPLICATION, RENEWAL APPLICATION AND CONSULTANCY SERVICES.</p>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="features_item sm-m-top-30">
                      <div class="f_item_icon" ><i class="fa fa-universal-access" ></i></div>
                      <div class="f_item_text">
                        <h3>WDA services</h3>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since.</p>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="features_item sm-m-top-30">
                      <div class="f_item_icon"><i class="fa fa-sliders"></i></div>
                      <div class="f_item_text">
                        <h3>ICA services</h3>
                        <p>PERMANENT RESIDENCE APPLICATIONS :
<b>SERVICES INCLUDE</b> : ONLINE APPLICATIONS AND CONSULTANCY SERVICES. HIGH SUCCESS RATE ASSURED.
<b>CITIZENSHIPS APPLICATIONS</b> :
<strong>SERVICES INCLUDE</strong> : ONLINE APPLICATIONS AND CONSULTANCY SERVICES. HIGH SUCCCESS RATE ASSURED.
<strong>LONG TERM VISIT PASS APPLICATIONS</strong>: 
SERVICES INCLUDE : ONLINE APPLICATIONS AND CONSULTANCY SERVICES. HIGH SUCCCESS RATE ASSURED.</p>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="features_item sm-m-top-30">
                      <div class="f_item_icon"><i class="fa fa-ambulance"></i></div>
                      <div class="f_item_text">
                        <h3>Setting up of Company – ACRA related services</h3>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since.</p>
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
                    <div class="main_product roomy-80">
                        <div class="head_title text-center fix">
                            <h2 class="text-uppercase">Staff </h2>
                            <h5>Founding Members of City Net Employment Agency Pte Ltd</h5>
                        </div>

                        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                            <!-- Indicators -->
                            <ol class="carousel-indicators">
                                <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                                <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                                <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                            </ol>

                            <!-- Wrapper for slides -->
                            <div class="carousel-inner" role="listbox">
                                <div class="item active">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-sm-3">
                                                <div class="port_item xs-m-top-30">
                                                    <div class="port_img">
                                                        <img src="assets/images/team/Lai tau.jpg" alt="" />
                                                        <div class="port_overlay text-center">
                                                            <a href="assets/images/team/Lai tau.jpg" class="popup-img">+</a>
                                                        </div>
                                                    </div>
                                                    <div class="port_caption m-top-20">
                                                        <h5>Lai Tau Lim</h5>
                                                        <h6>Lic No. C666201J </h6>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-3">
                                                <div class="port_item xs-m-top-30">
                                                    <div class="port_img">
                                                        <img src="assets/images/team/lavpuav.jpg" alt="" />
                                                        <div class="port_overlay text-center">
                                                            <a href="assets/images/team/lavpuav.jpg" class="popup-img">+</a>
                                                        </div>
                                                    </div>
                                                    <div class="port_caption m-top-20">
                                                        <h5>Lai Puay Fang </h5>
                                                        <h6>Lic No. C666201J</h6>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-3">
                                                <div class="port_item xs-m-top-30">
                                                    <div class="port_img">
                                                        <img src="assets/images/team/Lee Ai.jpg" alt="" />
                                                        <div class="port_overlay text-center">
                                                            <a href="assets/images/team/Lee Ai.jpg" class="popup-img">+</a>
                                                        </div>
                                                    </div>
                                                    <div class="port_caption m-top-20">
                                                        <h5>Lai Al Hiang</h5>
                                                        <h6>Lic No. C666201J </h6>
                                                    </div>
                                                </div>
                                            </div>  
                                            <div class="col-sm-3">
                                                <div class="port_item xs-m-top-30">
                                                    <div class="port_img">
                                                        <img src="assets/images/team/Lim hvee kia.jpg" alt="" />
                                                        <div class="port_overlay text-center">
                                                            <a href="assets/images/team/Lim hvee kia.jpg" class="popup-img">+</a>
                                                        </div>
                                                    </div>
                                                    <div class="port_caption m-top-20">
                                                        <h5>Lim Hwee Kia Esme (Lin Huojia Esme)</h5>
                                                        <h6>Lic No. C666201J     </h6>
                                                    </div>
                                                </div>
                                            </div>
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Controls -->
                            <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                                <i class="fa fa-angle-left" aria-hidden="true"></i>
                                <span class="sr-only">Previous</span>
                            </a>

                            <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                                <i class="fa fa-angle-right" aria-hidden="true"></i>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                    </div><!-- End off row -->
                    <div class="main_product">
                        <div class="head_title text-center fix">
                            <!--<h2 class="text-uppercase">Staff </h2>-->
                            <h5>Our Staff, Working Partners & People who have contributed</h5>
                        </div>

                        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                            <!-- Indicators -->
                            <ol class="carousel-indicators">
                                <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                                <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                                <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                            </ol>

                            <!-- Wrapper for slides -->
                            <div class="carousel-inner" role="listbox">
                                <div class="item active">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-sm-3">
                                                <div class="port_item xs-m-top-30">
                                                    <div class="port_img">
                                                        <img src="assets/images/team/team10.jpg" alt="" />
                                                        <div class="port_overlay text-center">
                                                            <a href="assets/images/team/team10.jpg" class="popup-img">+</a>
                                                        </div>
                                                    </div>
                                                    <div class="port_caption m-top-20">
                                                        <h5>Jenny Lai</h5>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-3">
                                                <div class="port_item xs-m-top-30">
                                                    <div class="port_img">
                                                        <img src="assets/images/team/team12.jpg" alt="" />
                                                        <div class="port_overlay text-center">
                                                            <a href="assets/images/team/team12.jpg" class="popup-img">+</a>
                                                        </div>
                                                    </div>
                                                    <div class="port_caption m-top-20">
                                                        <h5>Esme Lim </h5>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-3">
                                                <div class="port_item xs-m-top-30">
                                                    <div class="port_img">
                                                        <img src="assets/images/team/team11.jpg" alt="" />
                                                        <div class="port_overlay text-center">
                                                            <a href="assets/images/team/team11.jpg" class="popup-img">+</a>
                                                        </div>
                                                    </div>
                                                    <div class="port_caption m-top-20">
                                                        <h5>Susan Lau</h5>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-3">
                                                <div class="port_item xs-m-top-30">
                                                    <div class="port_img">
                                                        <img src="assets/images/team/team9.jpg" alt="" />
                                                        <div class="port_overlay text-center">
                                                            <a href="assets/images/team/team9.jpg" class="popup-img">+</a>
                                                        </div>
                                                    </div>
                                                    <div class="port_caption m-top-20">
                                                        <h5>Loo Hooi Suang</h5>
                                                    </div>
                                                </div>
                                            </div>
                                            
                                        </div>
                                    </div>
                                </div>
                                <div class="item">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-sm-3">
                                                <div class="port_item xs-m-top-30">
                                                    <div class="port_img">
                                                        <img src="assets/images/team/team5.jpg" alt="" />
                                                        <div class="port_overlay text-center">
                                                            <a href="assets/images/team/team5.jpg" class="popup-img">+</a>
                                                        </div>
                                                    </div>
                                                    <div class="port_caption m-top-20">
                                                        <h5>Janice Lai</h5>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-3">
                                                <div class="port_item xs-m-top-30">
                                                    <div class="port_img">
                                                        <img src="assets/images/team/team6.jpg" alt="" />
                                                        <div class="port_overlay text-center">
                                                            <a href="assets/images/team/team6.jpg" class="popup-img">+</a>
                                                        </div>
                                                    </div>
                                                    <div class="port_caption m-top-20">
                                                        <h5>Henry Lim </h5>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-3">
                                                <div class="port_item xs-m-top-30">
                                                    <div class="port_img">
                                                        <img src="assets/images/team/team7.jpg" alt="" />
                                                        <div class="port_overlay text-center">
                                                            <a href="assets/images/team/team7.jpg" class="popup-img">+</a>
                                                        </div>
                                                    </div>
                                                    <div class="port_caption m-top-20">
                                                        <h5>Chong Soo Ching</h5>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-sm-3">
                                                <div class="port_item xs-m-top-30">
                                                    <div class="port_img">
                                                        <img src="assets/images/team/team8.jpg" alt="" />
                                                        <div class="port_overlay text-center">
                                                            <a href="assets/images/team/team8.jpg" class="popup-img">+</a>
                                                        </div>
                                                    </div>
                                                    <div class="port_caption m-top-20">
                                                        <h5>Christina Khoo/ Victor Kam</h5>
                                                    </div>
                                                </div>
                                            </div>
                                            
                                        </div>
                                    </div>
                                </div>
                             

                            </div>

                            <!-- Controls -->
                            <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                                <i class="fa fa-angle-left" aria-hidden="true"></i>
                                <span class="sr-only">Previous</span>
                            </a>

                            <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                                <i class="fa fa-angle-right" aria-hidden="true"></i>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                    </div><!-- End off row -->
                </div><!-- End off container -->
            </section><!-- End off Product section -->



            <!--Brand Section-->
<!--            <section id="partner" class="brand fix roomy-80 bg-grey">
                <div class="container">
                    <div class="head_title text-center fix">
                            <h2 class="text-uppercase">Partner List</h2>
                           
                        </div>
                    <div class="row">
                        <div class="main_brand text-center">
                            <div class="col-md-2 col-sm-4 col-xs-6">
                                <div class="brand_item sm-m-top-20">
                                    <img src="assets/images/brand/cbrand-img1.png" alt="" />
                                </div>
                            </div>
                            <div class="col-md-2 col-sm-4 col-xs-6">
                                <div class="brand_item sm-m-top-20">
                                    <img src="assets/images/brand/cbrand-img2.png" alt="" />
                                </div>
                            </div>
                            <div class="col-md-2 col-sm-4 col-xs-6">
                                <div class="brand_item sm-m-top-20">
                                    <img src="assets/images/brand/cbrand-img3.png" alt="" />
                                </div>
                            </div>
                            <div class="col-md-2 col-sm-4 col-xs-6">
                                <div class="brand_item sm-m-top-20">
                                    <img src="assets/images/brand/cbrand-img4.png" alt="" />
                                </div>
                            </div>
                            <div class="col-md-2 col-sm-4 col-xs-6">
                                <div class="brand_item sm-m-top-20">
                                    <img src="assets/images/brand/cbrand-img5.png" alt="" />
                                </div>
                            </div>
                            <div class="col-md-2 col-sm-4 col-xs-6">
                                <div class="brand_item sm-m-top-20">
                                    <img src="assets/images/brand/cbrand-img6.png" alt="" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section> End off Brand section -->


@endsection
