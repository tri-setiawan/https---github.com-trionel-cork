<!DOCTYPE html>
<html lang="zxx" class="no-js">
<head>
    <!-- Mobile Specific Meta -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Favicon-->
    <link rel="shortcut icon" href="{{asset('/depan')}}/img/fav.png">
    <!-- Author Meta -->
    <meta name="author" content="colorlib">
    <!-- Meta Description -->
    <meta name="description" content="">
    <!-- Meta Keyword -->
    <meta name="keywords" content="">
    <!-- meta character set -->
    <meta charset="UTF-8">
    <!-- Site Title -->
    <title>Education</title>

    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,400,300,500,600,700" rel="stylesheet"> 
        <!--
        CSS
        ============================================= -->
        <link rel="stylesheet" href="{{asset('/depan')}}/css/linearicons.css">
        <link rel="stylesheet" href="{{asset('/depan')}}/css/font-awesome.min.css">
        <link rel="stylesheet" href="{{asset('/depan')}}/css/bootstrap.css">
        <link rel="stylesheet" href="{{asset('/depan')}}/css/magnific-popup.css">
        <link rel="stylesheet" href="{{asset('/depan')}}/css/nice-select.css">							
        <link rel="stylesheet" href="{{asset('/depan')}}/css/animate.min.css">
        <link rel="stylesheet" href="{{asset('/depan')}}/css/owl.carousel.css">			
        <link rel="stylesheet" href="{{asset('/depan')}}/css/jquery-ui.css">			
        <link rel="stylesheet" href="{{asset('/depan')}}/css/main.css">
    </head>
    <body>	
      <header id="header" id="home">
          <div class="header-top">
              <div class="container">
                  <div class="row">
                      <div class="col-lg-6 col-sm-6 col-8 header-top-left no-padding">
                          <ul>
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                            <li><a href="#"><i class="fa fa-behance"></i></a></li>
                          </ul>			
                      </div>
                      <div class="col-lg-6 col-sm-6 col-4 header-top-right no-padding">
                          <a href="tel:+953 012 3654 896"><span class="lnr lnr-phone-handset"></span> <span class="text">+953 012 3654 896</span></a>
                          <a href="mailto:support@colorlib.com"><span class="lnr lnr-envelope"></span> <span class="text">support@colorlib.com</span></a>			
                      </div>
                  </div>			  					
              </div>
        </div>
        <div class="container main-menu">
            <div class="row align-items-center justify-content-between d-flex">
              <div id="logo">
                <a href="index.html"><img src="{{asset('/depan')}}/img/logo.png" alt="" title="" /></a>
              </div>
              <nav id="nav-menu-container">
                <ul class="nav-menu">
                  <li><a href="index.html">Home</a></li>
                  <li><a href="/about">About</a></li>
                  <li><a href="courses.html">Courses</a></li>
                  <li><a href="events.html">Events</a></li>
                  <li><a href="gallery.html">Gallery</a></li>
                  <li class="menu-has-children"><a href="">Blog</a>
                    <ul>
                      <li><a href="blog-home.html">Blog Home</a></li>
                      <li><a href="blog-single.html">Blog Single</a></li>
                    </ul>
                  </li>	
                  <li class="menu-has-children"><a href="">Pages</a>
                    <ul>
                          <li><a href="course-details.html">Course Details</a></li>		
                          <li><a href="event-details.html">Event Details</a></li>		
                        <li><a href="elements.html">Elements</a></li>
                          <li class="menu-has-children"><a href="">Level 2 </a>
                            <ul>
                              <li><a href="#">Item One</a></li>
                              <li><a href="#">Item Two</a></li>
                            </ul>
                          </li>					                		
                    </ul>
                  </li>					          					          		          
                  <li><a href="contact.html">Contact</a></li>
                </ul>
              </nav><!-- #nav-menu-container -->		    		
            </div>
        </div>
      </header><!-- #header -->
      @yield('content')
        <!-- start footer Area -->		
        <footer class="footer-area section-gap">
            <div class="container">
                <div class="row">
                    <div class="col-lg-2 col-md-6 col-sm-6">
                        <div class="single-footer-widget">
                            <h4>Top Products</h4>
                            <ul>
                                <li><a href="#">Managed Website</a></li>
                                <li><a href="#">Manage Reputation</a></li>
                                <li><a href="#">Power Tools</a></li>
                                <li><a href="#">Marketing Service</a></li>
                            </ul>								
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-6 col-sm-6">
                        <div class="single-footer-widget">
                            <h4>Quick links</h4>
                            <ul>
                                <li><a href="#">Jobs</a></li>
                                <li><a href="#">Brand Assets</a></li>
                                <li><a href="#">Investor Relations</a></li>
                                <li><a href="#">Terms of Service</a></li>
                            </ul>								
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-6 col-sm-6">
                        <div class="single-footer-widget">
                            <h4>Features</h4>
                            <ul>
                                <li><a href="#">Jobs</a></li>
                                <li><a href="#">Brand Assets</a></li>
                                <li><a href="#">Investor Relations</a></li>
                                <li><a href="#">Terms of Service</a></li>
                            </ul>								
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-6 col-sm-6">
                        <div class="single-footer-widget">
                            <h4>Resources</h4>
                            <ul>
                                <li><a href="#">Guides</a></li>
                                <li><a href="#">Research</a></li>
                                <li><a href="#">Experts</a></li>
                                <li><a href="#">Agencies</a></li>
                            </ul>								
                        </div>
                    </div>																		
                    <div class="col-lg-4  col-md-6 col-sm-6">
                        <div class="single-footer-widget">
                            <h4>Newsletter</h4>
                            <p>Stay update with our latest</p>
                            <div class="" id="mc_embed_signup">
                                 <form target="_blank" action="https://spondonit.us12.list-manage.com/subscribe/post?u=1462626880ade1ac87bd9c93a&amp;id=92a4423d01" method="get">
                                  <div class="input-group">
                                    <input type="text" class="form-control" name="EMAIL" placeholder="Enter Email Address" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Email Address '" required="" type="email">
                                    <div class="input-group-btn">
                                      <button class="btn btn-default" type="submit">
                                        <span class="lnr lnr-arrow-right"></span>
                                      </button>    
                                    </div>
                                        <div class="info"></div>  
                                  </div>
                                </form> 
                            </div>
                        </div>
                    </div>											
                </div>
                <div class="footer-bottom row align-items-center justify-content-between">
                    <p class="footer-text m-0 col-lg-6 col-md-12"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                    <div class="col-lg-6 col-sm-12 footer-social">
                        <a href="#"><i class="fa fa-facebook"></i></a>
                        <a href="#"><i class="fa fa-twitter"></i></a>
                        <a href="#"><i class="fa fa-dribbble"></i></a>
                        <a href="#"><i class="fa fa-behance"></i></a>
                    </div>
                </div>						
            </div>
        </footer>	
        <!-- End footer Area -->	


        <script src="{{asset('/depan')}}/js/vendor/jquery-2.2.4.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <script src="{{asset('/depan')}}/js/vendor/bootstrap.min.js"></script>			
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBhOdIF3Y9382fqJYt5I_sswSrEw5eihAA"></script>
        <script src="{{asset('/depan')}}/js/easing.min.js"></script>			
        <script src="{{asset('/depan')}}/js/hoverIntent.js"></script>
        <script src="{{asset('/depan')}}/js/superfish.min.js"></script>	
        <script src="{{asset('/depan')}}/js/jquery.ajaxchimp.min.js"></script>
        <script src="{{asset('/depan')}}/js/jquery.magnific-popup.min.js"></script>	
        <script src="{{asset('/depan')}}/js/jquery.tabs.min.js"></script>						
        <script src="{{asset('/depan')}}/js/jquery.nice-select.min.js"></script>	
        <script src="{{asset('/depan')}}/js/owl.carousel.min.js"></script>									
        <script src="{{asset('/depan')}}/js/mail-script.js"></script>	
        <script src="{{asset('/depan')}}/js/main.js"></script>	
    </body>
</html>