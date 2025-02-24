<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">

    <title> {{ $title ?? "Shop" }} </title>


    <!-- Additional CSS Files -->
    <link rel="stylesheet" type="text/css" href="{{ asset("css/bootstrap.min.css")}}">

    <link rel="stylesheet" type="text/css" href="{{ asset("css/font-awesome.css")}}">

    <link rel="stylesheet" href="{{ asset("css/templatemo-hexashop.css")}}">

    <link rel="stylesheet" href="{{ asset("css/owl-carousel.css")}} ">

    <link rel="stylesheet" href="{{ asset("css/lightbox.css")}}">
<!--

TemplateMo 571 Hexashop

https://templatemo.com/tm-571-hexashop

-->
    </head>
    
    <body>
    
    <!-- ***** Preloader Start ***** -->
    <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>  
    <!-- ***** Preloader End ***** -->
    
    
    <!-- ***** Header Area Start ***** -->
    <header class="header-area header-sticky">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="main-nav">
                        <!-- ***** Logo Start ***** -->
                        <a href="{{ route("main") }}" class="logo">
                            <img src="img/logo.png">
                        </a>
                        <!-- ***** Logo End ***** -->
                        <!-- ***** Menu Start ***** -->
                        <ul class="nav">
                            <li class="scroll-to-section"><a href="{{ route("main") }}">Bosh sahifa</a></li>
                            <li class="scroll-to-section"><a href="{{ route("ManUnd") }}">Man Und</a></li>
                            <li class="scroll-to-section"><a href="{{ route("ManCity") }}">Man City</a></li>
                            <li class="scroll-to-section"><a href="{{ route("Liverpool") }}">Liverpool</a></li>
                            <li class="submenu">
                                <a href="javascript:;">Pages</a>
                                <ul>
                                    <li><a href="{{ route("about") }}">Biz haqimizda</a></li>
                                    <li><a href="{{ route("products.index") }}">Mahsulotlar</a></li>
                                    <li><a href="{{ route("contact")}}">Kontakt</a></li>
                                </ul>
                            </li>
                            {{-- <li class="submenu">
                                <a href="javascript:;">Features</a>
                                <ul>
                                    <li><a href="#">Features Page 1</a></li>
                                    <li><a href="#">Features Page 2</a></li>
                                    <li><a href="#">Features Page 3</a></li>
                                    <li><a rel="nofollow" href="https://templatemo.com/page/4" target="_blank">Template Page 4</a></li>
                                </ul> --}}
                                
                                @auth   
                                @can('admin')
                                    
                                
                                    
                                
                                <li class="scroll-to-section"><a href=" {{ route("products.create")}} " class=" btn btn-primary"><i class="fa fa-plus-square" aria-hidden="true">Mahsulot qo'shish</i></a></li>
                                <a href="" class="btn btn-dark"> Dashboard </a>
                                @endcan
                               
                                <a href="{{ route("user.profile") }}" class="btn btn-dark mr-2"> <i class="fa fa-home" aria-hidden="true">Profil</i> </a>
                                <form action="{{ route("logout")}}" method="POST">
                                    @csrf
                                    
                                    <button type="submit" class="btn btn-dark"><i class="fa fa-sign-out" aria-hidden="true">Chiqish</i>  </button>
                                </form>                               
                                @else
                                
                                <li class="scroll-to-section"><a href=" {{ route("login")}} " class=" btn btn-primary"> 
                                    <i class="fa fa-user" aria-hidden="true"> Kirish </i> </a>
                                </li>

                                @endauth
                  
                        
                        <a class='menu-trigger'>
                            <span>Menu</span>
                        </a>
                        <!-- ***** Menu End ***** -->
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- ***** Header Area End ***** -->


{{ $slot }}



    <!-- ***** Footer Start ***** -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="first-item">
                        <div class="logo">
                            <img src="img/white-logo.png" alt="hexashop ecommerce templatemo">
                        </div>
                        <ul>
                            <li><a href="#">16501 Collins Ave, Sunny Isles Beach, FL 33160, United States</a></li>
                            <li><a href="#">hexashop@company.com</a></li>
                            <li><a href="#">010-020-0340</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3">
                    <h4>Shopping &amp; Categories</h4>
                    <ul>
                        <li><a href="{{ route("ManUnd") }}">Man Und</a></li>
                        <li><a href="{{ route("ManCity") }}">Man City</a></li>
                        <li><a href="{{ route("Liverpool") }}">Liverpool</a></li>
                    </ul>
                </div>
                <div class="col-lg-3">
                    <h4>Useful Links</h4>
                    <ul>
                        <li><a href="#">Homepage</a></li>
                        <li><a href="#">About Us</a></li>
                        <li><a href="#">Help</a></li>
                        <li><a href="#">Contact Us</a></li>
                    </ul>
                </div>
                <div class="col-lg-3">
                    <h4>Help &amp; Information</h4>
                    <ul>
                        <li><a href="#">Help</a></li>
                        <li><a href="#">FAQ's</a></li>
                        <li><a href="#">Shipping</a></li>
                        <li><a href="#">Tracking ID</a></li>
                    </ul>
                </div>
                <div class="col-lg-12">
                    <div class="under-footer">
                        <p>Copyright © 2025 HexaShop Co., Ltd. All Rights Reserved. 
                        
                        <br>Design: <a href="https://templatemo.com" target="_parent" title="free css templates">TemplateMo</a></p>
                        <ul>
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="https://linkedin.com/in/abdurahim-abdujalilov-79a6ba31b"><i class="fa fa-linkedin"></i></a></li>
                            <li><a href="https://github.com/Abdujalilov-Abdurahim"><i class="fa fa-github"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- jQuery -->
    <script src="{{ asset("js/jquery-2.1.0.min.js")}}" ></script>

    <!-- Bootstrap -->
    <script src="{{ asset("js/popper.js")}}" ></script>
    <script src="{{ asset("js/bootstrap.min.js")}}" ></script>

    <!-- Plugins -->
    <script src="{{ asset("js/owl-carousel.js")}}" ></script>
    <script src="{{ asset("js/accordions.js")}}" ></script>
    <script src="{{ asset("js/datepicker.js")}}" ></script>
    <script src="{{ asset("js/scrollreveal.min.js")}}" ></script>
    <script src="{{ asset("js/waypoints.min.js")}}" ></script>
    <script src="{{ asset("js/jquery.counterup.min.js")}}" ></script>
    <script src="{{ asset("js/imgfix.min.js")}}" ></script> 
    <script src="{{ asset("js/slick.js")}}" ></script> 
    <script src="{{ asset("js/lightbox.js")}}" ></script> 
    <script src="{{ asset("js/isotope.js")}}" ></script> 
    <script src="{{ asset("js/quantily.js")}}" ></script> 
    
    <!-- Global Init -->
    <script src="{{ asset("js/custom.js")}}" ></script>

    <script>

        $(function() {
            var selectedClass = "";
            $("p").click(function(){
            selectedClass = $(this).attr("data-rel");
            $("#portfolio").fadeTo(50, 0.1);
                $("#portfolio div").not("."+selectedClass).fadeOut();
            setTimeout(function() {
              $("."+selectedClass).fadeIn();
              $("#portfolio").fadeTo(50, 1);
            }, 500);
                
            });
        });

    </script>

  </body>
</html>
