<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Cake Template">
    <meta name="keywords" content="Cake, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cake | Template</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;500;600;700;800;900&display=swap"
    rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700;800;900&display=swap"
    rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('css/flaticon.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('css/barfiller.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('css/magnific-popup.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('css/font-awesome.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('css/elegant-icons.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('css/nice-select.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('css/owl.carousel.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('css/slicknav.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('css/style.css')}}" type="text/css">

    {{-- bootsrap cdn --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

<style>
    *:root{
     --color: #fff;
     --back-ground-color :#7d8035;
     --back-ground-color1 :#898c41;
    }
    .navsection{
    height:40px !important;
    background-color: var(--back-ground-color) !important;
}
    .navsection2{
    height: 5rem !important;
    background-color: var(--back-ground-color1) !important;
}
.navsection ul li{
        list-style: none;
        color: var(--color);
        text-decoration: none;
    /* background-color: var(--back-ground-color); */
    }
    .andeer ul li{
        text-decoration: none;
        list-style: none!important;
    }
</style>
</head>

<body>

    @php
    // $user = auth()->user();
      @endphp
    <!-- Page Preloder -->
    {{-- <div id="preloder">
        <div class="loader"></div>
    </div> --}}

    <!-- Offcanvas Menu Begin -->
     {{-- <div class="offcanvas-menu-overlay"></div> --}}
    {{-- <div class="offcanvas-menu-wrapper">
        <div class="offcanvas__cart">
            <div class="offcanvas__cart__links">
                <a href="#" class="search-switch"><img src="img/icon/search.png" alt=""></a>
                <a href="#"><img src="img/icon/heart.png" alt=""></a>
            </div>
            <div class="offcanvas__cart__item">
                <a href="#"><img src="img/icon/cart.png" alt=""> <span>0</span></a>
                <div class="cart__price">Cart: <span>$0.00</span></div>
            </div> --}}
              {{-- rigth here logout logic --}}
              {{-- @if ($user)
              <div class="header__top__right__cart mt-2">
                <a href="{{url('/logout')}}">  <button class="btn-danger btn">Logout</button></a>
              </div>
               @endif
        </div>
        <div class="offcanvas__logo">
            <a href="./index.html"><img src="img/logo.png" alt=""></a>
        </div>
        <div id="mobile-menu-wrap"></div>
        <div class="offcanvas__option">
            <ul>
                <li>USD <span class="arrow_carrot-down"></span>
                    <ul>
                        <li>EUR</li>
                        <li>USD</li>
                    </ul>
                </li>
                <li>ENG <span class="arrow_carrot-down"></span>
                    <ul>
                        <li>Spanish</li>
                        <li>ENG</li>
                    </ul>
                </li>
               
                @if ($user)
                                        
                <li>{{$user->name}}</li>
                @else
                <li><a href="{{url('/signin')}}">Sign in</a> <span class="arrow_carrot-down"></span></li>
                @endif
            </ul>
        </div>
    </div>  --}}
    <!-- Offcanvas Menu End -->

    <!-- Header Section Begin -->
    {{-- <header class="header">
        <div class="header__top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="header__top__inner">
                            <div class="header__top__left">
                                <ul>
                                    <li>USD <span class="arrow_carrot-down"></span>
                                        <ul>
                                            <li>EUR</li>
                                            <li>USD</li>
                                        </ul>
                                    </li>
                                    <li>ENG <span class="arrow_carrot-down"></span>
                                        <ul>
                                            <li>Spanish</li>
                                            <li>ENG</li>
                                        </ul>
                                    </li>
                                    @if ($user)
                                        
                                    <li>{{$user->name}}</li>
                                    @else
                                    <li><a href="{{url('/signin')}}">Sign in</a> <span class="arrow_carrot-down"></span></li>
                                    @endif
                                </ul>
                            </div>
                            <div class="header__logo">
                                <a href="./index.html"><img src="img/logo.png" alt=""></a>
                            </div>
                            <div class="header__top__right">
                                <div class="header__top__right__links">
                                    <a href="#" class="search-switch"><img src="img/icon/search.png" alt=""></a>
                                    <a href="#"><img src="img/icon/heart.png" alt=""></a>
                                </div>
                                <div class="header__top__right__cart">
                                    <a href="#"><img src="img/icon/cart.png" alt=""> <span>0</span></a>
                                    <div class="cart__price">Cart: <span>$0.00</span></div>
                                </div>
                               
                                @if ($user)
                                <div class="header__top__right__cart ml-2">
                                  <a href="{{url('/logout')}}">  <button class="btn-danger btn">Logout</button></a>
                                </div>
                                 @endif

                            </div>
                        </div>
                    </div>
                </div>
             
                <div class="canvas__open"><i class="fa fa-bars"></i></div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <nav class="header__menu mobile-menu">
                        <ul>
                            <li class="active"><a href="/">Home</a></li>
                            <li><a href="{{url('/about')}}">About</a></li>
                            <li><a href="{{url('/shop')}}">Shop</a></li>
                            <li><a href="#">Pages</a>
                                <ul class="dropdown">
                                    <li><a href="{{url('/shop_details')}}">Shop Details</a></li>
                                    <li><a href="{{url('/shoping_cart')}}">Shoping Cart</a></li>
                                    <li><a href="{{url('/check_out')}}">Check Out</a></li>
                                    <li><a href="{{url('/wiss_list')}}">Wisslist</a></li>
                                    <li><a href="{{url('/class')}}">Class</a></li>
                                    <li><a href="{{url('/blog_details')}}">Blog Details</a></li>
                                </ul>
                            </li>
                            <li><a href="{{url('/blog')}}">Blog</a></li>
                            <li><a href="{{url('/contact')}}">Contact</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </header> -
     --}}

     {{-- new navbar for experiment --}}
     <div class="container-fluid bg-dark navsection text-center py-3">
        <div class="row">
            <!-- First column: Irresistible Cakes text -->
            <div class="col-md-6 text-start text-white">
                <p><strong>Irresistible Cakes</strong>, Since 1962 .... "Taste the Difference"</p>
            </div>
            <!-- Second column: Navigation links -->
            <div class="col-md-6 text-end">
                <ul class="list-inline mb-0">
                    <li class="list-inline-item">
                        <a href="#" class="text-white">Login</a>
                    </li>
                    <li class="list-inline-item">
                        <a href="#" class="text-white">Sign Up</a>
                    </li>
                    <li class="list-inline-item">
                        <a href="#" class="text-white">Location</a>
                    </li>
                    <li class="list-inline-item">
                        <a href="#" class="text-white">Appointment</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />

    <nav class="navbar navsection2 navbar-light bg-body-tertiary px-3">
        <!-- Left side: Face icon and search input -->
        <div class="d-flex align-items-center">
            <span class="material-symbols-outlined me-2">
                face
            </span>
            <input type="search" class="form-control form-control-lg col-12" placeholder="Search">
        </div>
    
        <!-- Right side: Cart and Account icons -->
        <div class="d-flex align-items-center">
            <!-- Cart section -->
            <div class="d-flex align-items-center me-3">
                <span class="material-symbols-outlined me-1">
                    shopping_cart
                </span>
                <p class="mb-0">Cart</p>
            </div>
            <!-- Account section -->
            <div class="d-flex align-items-center">
                <span class="material-symbols-outlined me-1">
                    account_circle
                </span>
                <p class="mb-0">Hi Guest</p>
            </div>
        </div>
    </nav>
    