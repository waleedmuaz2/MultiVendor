    <header>
        <!-- top Header -->
        <div id="top-header">
            <div class="container">
                <div class="pull-left">
                    <span>Welcome to E-shop!</span>
                </div>
                <div class="pull-right">
                    <ul class="header-top-links">
                       @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                             <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} </span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right logout_butn" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item " href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                        <li><a href="#">FAQ</a></li>
                       
                        
                    </ul>
                </div>
            </div>
        </div>
        <!-- /top Header -->

        <!-- header -->
        <div id="header">
            <div class="container">
                <div class="pull-left">
                    <!-- Logo -->
                    <div class="header-logo">
                        <a class="logo" href="{{url('/')}}">
                            <img src="{{URL::asset('./img/logo.png')}}" alt="" >
                        </a>
                    </div>
                    <!-- /Logo -->

                    <!-- Search -->
                    <div class="header-search">
                        <form>
                            <input class="input search-input" type="text" placeholder="Enter your keyword">
                            <select class="input search-categories">
                                <option value="0">All Categories</option>
                                <option value="1">Category 01</option>
                                <option value="1">Category 02</option>
                            </select>
                            <button class="search-btn"><i class="fa fa-search"></i></button>
                        </form>
                    </div>
                    <!-- /Search -->
                </div>
                <div class="pull-right">
                    <ul class="header-btns">
                        <!-- Account -->
                        <li class="header-account dropdown default-dropdown">
                            <div class="dropdown-toggle" role="button" data-toggle="dropdown" aria-expanded="true">
                                
                                <strong class="text-uppercase">My Account <i class="fa fa-caret-down"></i></strong>
                            </div>
                          
                            <ul class="custom-menu">
                                <li><a href="{{url('/wishlist')}}"><i class="fa fa-heart-o"></i>My Wishlist</a></li>
                              @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}"><i class="fa fa-user-o"></i>{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                     <a class="nav-link" href="{{ route('register') }}"><i class="fa fa-user-o"></i>{{ __('Register') }}</a>
                                </li>
                            @endif
                             @else
                                <li class="nav-item dropdown">
                                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="{{ route('home') }}" role="" data-toggle="" aria-haspopup="true" aria-expanded="false" v-pre><i class="fa fa-user-o"></i>
                                        {{ Auth::user()->name }} </span>
                                    </a>
                                        
                                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                        
                                    </div>
                                </li>
                                <hr width="100%">
                                <li><a href="{{url('/addvendor')}}"
                                    id="navbarDropdown" class="nav-link dropdown-toggle" href="{{ route('home') }}" role="" data-toggle="" aria-haspopup="true" aria-expanded="false" v-pre><i class="fa fa-user-o"></i>
                                      Add a Vender </span>
                                    </a>
                                </li>
                             @endguest
                            </ul>
                        </li>
                        <!-- /Account -->

                        <!-- Cart -->
    <li class="header-cart dropdown default-dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
                                <div class="header-btns-icon">
                                    <i class="fa fa-shopping-cart"></i>
                                    <span class="qty">3</span>
                                </div>
                                <strong class="text-uppercase">My Cart:</strong>
                                <br>
                                <span>35.20$</span>
                            </a>                    
        <div class="custom-menu">
        <div id="shopping-cart"></div>                      
                                    <div class="shopping-cart-list">
                                        <div class="product product-widget">
                                            <div class="product-thumb">
                                                <img src="{{URL::asset('./img/thumb-product01.jpg')}}" alt="">
                                            </div>
                                            <div class="product-body">
                                                <h3 class="product-price">$32.50 <span class="qty">x3</span></h3>
                                                <h2 class="product-name"><a href="#">Product Name Goes Here</a></h2>
                                            </div>
                                            <button class="cancel-btn"><i class="fa fa-trash"></i></button>
                                        </div>
                                        <div class="product product-widget">
                                            <div class="product-thumb">
                                                <img src="{{URL::asset('./img/thumb-product01.jpg')}}" alt="">
                                            </div>
                                            <div class="product-body">
                                                <h3 class="product-price">$32.50 <span class="qty">x3</span></h3>
                                                <h2 class="product-name"><a href="#">Product Name Goes Here</a></h2>
                                            </div>
                                            <button class="cancel-btn"><i class="fa fa-trash"></i></button>
                                        </div>
                                    </div>
                                    <div class="shopping-cart-btns">
                                        <button class="main-btn"><a href="{{url('checkout')}}">View Cart</a></button>
                                        <button class="primary-btn"><a href="{{url('checkout')}}">Check Out</a> <i class="fa fa-arrow-circle-right"></i></button>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <!-- /Cart -->

                        <!-- Mobile nav toggle-->
                        <li class="nav-toggle">
                            <button class="nav-toggle-btn main-btn icon-btn"><i class="fa fa-bars"></i></button>
                        </li>
                        <!-- / Mobile nav toggle -->
                    </ul>
                </div>
            </div>
            <!-- header -->
        </div>
        <!-- container -->
    </header>
    <!-- /HEADER -->

    <!-- NAVIGATION -->
    <div id="navigation">
        <!-- container -->
        <div class="container">
            <div id="responsive-nav">
                <!-- category nav -->
                <div class="category-nav show-on-click">
                    <span class="category-header">Categories <i class="fa fa-list"></i></span>
                    <ul class="category-list">
                        <li class="dropdown side-dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">LED & LIGHTENING <i class="fa fa-angle-right"></i></a>
                            <div class="custom-menu">
                                <div class="row">
                                    <div class="col-md-4">
                                        <ul class="list-links">
                                            <li>
                                                <h3 class="list-links-title">Categories</h3></li>
                                            <li><a href="#">Dome/ Roof SMD & LED</a></li>
                                            <li><a href="#">Parking SMD & LED</a></li>
                                            <li><a href="#">EL Glow Wires</a></li>
                                            <li><a href="#">LED Bar Lights</a></li>
                                            <li><a href="#">Bumper Fog Lamps</a></li>
                                        </ul>
                                        <hr class="hidden-md hidden-lg">
                                    </div>
                                    <div class="col-md-4">
                                        <ul class="list-links">
                                            <li>
                                                <h3 class="list-links-title">Categories</h3></li>
                                            <li><a href="#">Flasher Lights</a></li>
                                            <li><a href="#">LED & SMD Lights</a></li>
                                            <li><a href="#">Side Marker Lamps</a></li>
                                            <li><a href="#">HID Lights</a></li>
                                            <li><a href="#">Switch & Buttons</a></li>
                                        </ul>
                                        <hr class="hidden-md hidden-lg">
                                    </div>
                                    <div class="col-md-4">
                                        <ul class="list-links">
                                            <li>
                                                <h3 class="list-links-title">Categories</h3></li>
                                            <li><a href="#">Head Lights & Back Lights</a></li>
                                            <li><a href="#">LED Sill Plates</a></li>
                                            <li><a href="#">Police Lights</a></li>
                                            
                                        </ul>
                                    </div>
                                </div>
                                <div class="row hidden-sm hidden-xs">
                                    <div class="col-md-12">
                                        <hr>
                                        <a class="banner banner-1" href="#">
                                            <img src="{{URL::asset('./img/banner05.jpg')}}" alt="">
                                            <div class="banner-caption text-center">
                                                <h2 class="white-color">NEW COLLECTION</h2>
                                                <h3 class="white-color font-weak">HOT DEAL</h3>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="dropdown side-dropdown"><a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">Exterior<i class="fa fa-angle-right"></i></a>
                            <div class="custom-menu">
                                <div class="row">
                                    <div class="col-md-4">
                                        <ul class="list-links">
                                            <li>
                                                <h3 class="list-links-title">Categories</h3></li>
                                            <li><a href="#"></a>Air Flows</a></li>
                                            <li><a href="#">Roof Racks & Rails</a></li>
                                            <li><a href="#">Door Mouldings</a></li>
                                            <li><a href="#">Double Sided Tapes</a></li>
                                            <li><a href="#">Bumper Protectors</a></li>
                                        </ul>
                                        <hr>
                                        <ul class="list-links">
                                            <li>
                                                <h3 class="list-links-title">Categories</h3></li>
                                            <li><a href="#">Chrome Handle Cover</a></li>
                                            <li><a href="#">Chrome Trim & Accessories</a></li>
                                            <li><a href="#">Number Plate Tilter</a></li>
                                            <li><a href="#">License Number Plates & Frames</a></li>
                                            <li><a href="#">Grille</a></li>
                                        </ul>
                                        <hr class="hidden-md hidden-lg">
                                    </div>
                                    <div class="col-md-4">
                                        <ul class="list-links">
                                            <li>
                                                <h3 class="list-links-title">Categories</h3></li>
                                            <li><a href="#">Antenna</a></li>
                                            <li><a href="#">Door Guards</a></li>
                                            <li><a href="#">Air Press & Sunvisors</a></li>
                                            <li><a href="#">Jewelry & Watches</a></li>
                                            <li><a href="#">Bags & Shoes</a></li>
                                        </ul>
                                        <hr>
                                        <ul class="list-links">
                                            <li>
                                                <h3 class="list-links-title">Categories</h3></li>
                                            <li><a href="#">Sticker Monograms & Emblems</a></li>
                                            
                                        </ul>
                                    </div>
                                    <div class="col-md-4 hidden-sm hidden-xs">
                                        <a class="banner banner-2" href="#">
                                            <img src="{{URL::asset('./img/banner04.jpg')}}" alt="">
                                            <div class="banner-caption">
                                                <h3 class="white-color">NEW<br>COLLECTION</h3>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="dropdown side-dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">INTERIOR <i class="fa fa-angle-right"></i></a>
                            <div class="custom-menu">
                                <div class="row">
                                    <div class="col-md-4">
                                        <ul class="list-links">
                                            <li>
                                                <h3 class="list-links-title">Categories</h3></li>
                                            <li><a href="#">
                                            Seat belts and Accessories
                                                </a></li>
                                            <li><a href="#">Interior Chrome Trim & Accessories</a></li>
                                            <li><a href="#">Anti-Skid Nonslip Dashboard Mats</a></li>
                                            <li><a href="#">Car Organizers & Accessories</a></li>
                                            <li><a href="#">    Arm Rests</a></li>
                                        </ul>
                                        <hr class="hidden-md hidden-lg">
                                    </div>
                                    <div class="col-md-4">
                                        <ul class="list-links">
                                            <li>
                                                <h3 class="list-links-title">Categories</h3></li>
                                            <li><a href="#">Seat Belt Clips</a></li>
                                            <li><a href="#">    LED Lights</a></li>
                                            <li><a href="#">    Tissue Box</a></li>
                                            <li><a href="#">Sun Shades</a></li>
                                            <li><a href="#">Dashboard Carpet</a></li>
                                        </ul>
                                        <hr class="hidden-md hidden-lg">
                                    </div>
                                    <div class="col-md-4">
                                        <ul class="list-links">
                                            <li>
                                                <h3 class="list-links-title">Categories</h3></li>
                                            <li><a href="#">Interior Protection Mats</a></li>
                                            <li><a href="#">    Hangings</a></li>
                                            <li><a href="#">Back & Neck Care</a></li>
                                            <li><a href="#">Ashtray</a></li>
                                            
                                        </ul>
                                    </div>
                                </div>
                                <div class="row hidden-sm hidden-xs">
                                    <div class="col-md-12">
                                        <hr>
                                        <a class="banner banner-1" href="#">
                                            <img src="{{URL::asset('./img/banner05.jpg')}}" alt="">
                                            <div class="banner-caption text-center">
                                                <h2 class="white-color">NEW COLLECTION</h2>
                                                <h3 class="white-color font-weak">HOT DEAL</h3>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </li>
                        
                        <li class="dropdown side-dropdown">
                                <a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">Car Care <i class="fa fa-angle-right"></i></a>
                                <div class="custom-menu">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <ul class="list-links">
                                                <li>
                                                    <h3 class="list-links-title">Categories</h3></li>
                                                <li><a href="#">
                                                        Trims Restorer and Cleaner
                                                        </a></li>
                                                <li><a href="#">Windshield & Glass Wash</a></li>
                                                <li><a href="#">Scratch & Swirls Restore</a></li>
                                                <li><a href="#">Car Polish & Wax</a></li>
                                                <li><a href="#">Wheel & Tyre</a></li>
                                            </ul>
                                            <hr class="hidden-md hidden-lg">
                                        </div>
                                        <div class="col-md-4">
                                            <ul class="list-links">
                                                <li>
                                                    <h3 class="list-links-title">Categories</h3></li>
                                                <li><a href="#">Car Care Gadgets</a></li>
                                                <li><a href="#">Paste & Waxs</a></li>
                                                <li><a href="#">Polisher Machine & Buffers</a></li>
                                                <li><a href="#">Color Specified Wax</a></li>
                                                <li><a href="#">Detailing Car Washers and Machines</a></li>
                                            </ul>
                                            <hr class="hidden-md hidden-lg">
                                        </div>
                                        <div class="col-md-4">
                                            <ul class="list-links">
                                                <li>
                                                    <h3 class="list-links-title">Categories</h3></li>
                                                <li><a href="#">Micro Fiber Cloth & Accessories</a></li>
                                                <li><a href="#">Radiator Coolants</a></li>
                                                
                                                
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="row hidden-sm hidden-xs">
                                        <div class="col-md-12">
                                            <hr>
                                            <a class="banner banner-1" href="#">
                                                <img src="{{URL::asset('./img/banner05.jpg')}}" alt="">
                                                <div class="banner-caption text-center">
                                                    <h2 class="white-color">NEW COLLECTION</h2>
                                                    <h3 class="white-color font-weak">HOT DEAL</h3>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </li>
            
                        <li class="dropdown side-dropdown">
                            <a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">Performance <i class="fa fa-angle-right"></i></a>
                            <div class="custom-menu">
                                <div class="row">
                                    <div class="col-md-4">
                                        <ul class="list-links">
                                            <li>
                                                <h3 class="list-links-title">Categories</h3></li>
                                            <li><a href="#">
                                                Ground Wiring & Volt Stabilizer</a></li>
                                            <li><a href="#">Additives & Lubricants</a></li>
                                            <li><a href="#">    Oil Performance</a></li>
                                            <li><a href="#">Spark Plugs & Filters</a></li>
                                            <li><a href="#">    Pedal Covers</a></li>
                                        </ul>
                                        <hr>
                                        
                                        <hr class="hidden-md hidden-lg">
                                    </div>
                                    
                                    <div class="col-md-4">
                                        <ul class="list-links">
                                            <li>
                                                <h3 class="list-links-title">Categories</h3></li>
                                            <li><a href="#">    Oil & Radiator Caps</a></li>
                                            <li><a href="#">Volt Stabilizer</a></li>
                                            <li><a href="#">Cold Air Intake System</a></li>
                                            
                                        </ul>
                                        <hr>
                                        
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="dropdown side-dropdown">
                                <a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">Gadgets <i class="fa fa-angle-right"></i></a>
                                <div class="custom-menu">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <ul class="list-links">
                                                <li>
                                                    <h3 class="list-links-title">Categories</h3></li>
                                                <li><a href="#">Camera</a></li>
                                                 <li><a href="#">Clocks</a></li>
                                                <li><a href="#">Other Gadgets Accessories</a></li>
                                                <li><a href="#">Jump Starters</a></li>
                                                <li><a href="#">Multimedia LCD Panels</a></li>
                                            </ul>
                                            <hr class="hidden-md hidden-lg">
                                        </div>
                                        <div class="col-md-4">
                                            <ul class="list-links">
                                                <li>
                                                    <h3 class="list-links-title">Categories</h3></li>
                                                <li><a href="#">Projector Screens & Presenters</a></li>
                                                <li><a href="#">Smart Watches & Headphones</a></li>
                                                <li><a href="#">Power Inverters</a></li>
                                                <li><a href="#">Air Compressor Inflators</a></li>
                                                <li><a href="#">Emergency Kits</a></li>
                                            </ul>
                                            <hr class="hidden-md hidden-lg">
                                        </div>
                                        <div class="col-md-4">
                                            <ul class="list-links">
                                                <li>
                                                    <h3 class="list-links-title">Categories</h3></li>
                                                <li><a href="#">Music & Stereo ProductsMusic & Stereo Products</a></li>
                                                
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="row hidden-sm hidden-xs">
                                        <div class="col-md-12">
                                            <hr>
                                            <a class="banner banner-1" href="#">
                                                <img src="{{URL::asset('./img/banner05.jpg')}}" alt="">
                                                <div class="banner-caption text-center">
                                                    <h2 class="white-color">NEW COLLECTION</h2>
                                                    <h3 class="white-color font-weak">HOT DEAL</h3>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="dropdown side-dropdown">
                                    <a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">Modification<i class="fa fa-angle-right"></i></a>
                                    <div class="custom-menu">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <ul class="list-links">
                                                    <li>
                                                        <h3 class="list-links-title">Categories</h3></li>
                                                    <li><a href="#">
                                                            Auto Gauges & Meters</a></li>
                                                     <li><a href="#">JDM Accessories</a></li>
                                                    <li><a href="#">    Exhaust Systems</a></li>
                                                    <li><a href="#">Muffler Tips & Pipes</a></li>
                                                    <li><a href="#">Fender Clips & Washers</a></li>
                                                </ul>
                                                <hr class="hidden-md hidden-lg">
                                            </div>
                                            <div class="col-md-4">
                                                <ul class="list-links">
                                                    <li>
                                                        <h3 class="list-links-title">Categories</h3></li>
                                                    <li><a href="#">Rear Bumper Diffusers</a></li>
                                                    <li><a href="#">Fancy Side Mirrors</a></li>
                                                    <li><a href="#">Steering & Accessories</a></li>
                                                    <li><a href="#">Rubber Lip & Extensions</a></li>
                                                    <li><a href="#">Trunk And Roof Spoilers</a></li>
                                                </ul>
                                                <hr class="hidden-md hidden-lg">
                                            </div>
                                            <div class="col-md-4">
                                                <ul class="list-links">
                                                    <li>
                                                        <h3 class="list-links-title">Categories</h3></li>
                                                    <li><a href="#">Tow Hooks</a></li>
                                                    <li><a href="#">Suspension Parts</a></li>
                                                    <li><a href="#">Body Kits & Extensions</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="row hidden-sm hidden-xs">
                                            <div class="col-md-12">
                                                <hr>
                                                <a class="banner banner-1" href="#">
                                                    <img src="{{URL::asset('./img/banner05.jpg')}}" alt="">
                                                    <div class="banner-caption text-center">
                                                        <h2 class="white-color">NEW COLLECTION</h2>
                                                        <h3 class="white-color font-weak">HOT DEAL</h3>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="dropdown side-dropdown">
                                        <a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">wheels <i class="fa fa-angle-right"></i></a>
                                        <div class="custom-menu">
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <ul class="list-links">
                                                        <li>
                                                            <h3 class="list-links-title">Categories</h3></li>
                                                            <li><a href="#">Wheel Accessories</a></li>

                                                            <li><a href="#">Hydraulic jacks</a></li>
                                                           <li><a href="#">Tyre Guages</a></li>
                                                           <li><a href="#">Alloy Rims & Tyres</a></li>
                                                           <li><a href="#">Wheel Covers</a></li>
                                                    </ul>
                                                    <hr>
                                                    
                                                    <hr class="hidden-md hidden-lg">
                                                </div>
                                                
                                                <div class="col-md-4">
                                                    <ul class="list-links">
                                                        <li>
                                                            <h3 class="list-links-title">Categories</h3></li>
                                                            <li><a href="#">Wheel Centre Caps</a></li>
                                                            <li><a href="#">Tyre Valve Air Caps</a></li>
                                                            <li><a href="#">Wheel Lugnuts</a></li>
                                                            <li><a href="#">Brake Caliper Covers</a></li>
                                                        
                                                    </ul>
                                                    <hr>
                                                    
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="dropdown side-dropdown">
                                            <a class="dropdown-toggle" data-toggle="dropdown">Security Gadgets <i class="fa fa-angle-right"></i></a>
                                            <div class="custom-menu">
                                                <div class="row">
                                                    <div class="col-md-4">
                                                        <ul class="list-links">
                                                            <li>
                                                                <h3 class="list-links-title">Categories</h3></li>
                                                                <li><a href="#">Anti-Theft Locks</a></li>
                                                                <li><a href="#">Parking Sensors</a></li>
                                                               <li><a href="#">Spy Camera</a></li>
                                                               <li><a href="#">Car Alarm</a></li>
                                                               
                                                        </ul>
                                                        
                                                        
                                                        
                                                    </div>
                                                    
                                                    
                                                </div>
                                            </div>
                                        </li>
                        <li><a href="#">View All</a></li>
                    </ul>
                </div>
                <!-- /category nav -->

                <!-- menu nav -->
                <div class="menu-nav">
                    <span class="menu-header">Menu <i class="fa fa-bars"></i></span>
                    <ul class="menu-list">
                        <li><a href="{{url('/')}}">Home</a></li>
                        <li class="dropdown mega-dropdown full-width"><a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">Car Care <i class="fa fa-caret-down"></i></a>
                            <div class="custom-menu">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <ul class="list-links">
                                                <li>
                                                    <h3 class="list-links-title">Categories</h3></li>
                                                <li><a href="#">
                                                        Trims Restorer and Cleaner
                                                        </a></li>
                                                <li><a href="#">Windshield & Glass Wash</a></li>
                                                <li><a href="#">Scratch & Swirls Restore</a></li>
                                                <li><a href="#">Car Polish & Wax</a></li>
                                                <li><a href="#">Wheel & Tyre</a></li>
                                            </ul>
                                            <hr class="hidden-md hidden-lg">
                                        </div>
                                        <div class="col-md-4">
                                            <ul class="list-links">
                                                <li>
                                                    <h3 class="list-links-title">Categories</h3></li>
                                                <li><a href="#">Car Care Gadgets</a></li>
                                                <li><a href="#">Paste & Waxs</a></li>
                                                <li><a href="#">Polisher Machine & Buffers</a></li>
                                                <li><a href="#">Color Specified Wax</a></li>
                                                <li><a href="#">Detailing Car Washers and Machines</a></li>
                                            </ul>
                                            <hr class="hidden-md hidden-lg">
                                        </div>
                                        <div class="col-md-4">
                                            <ul class="list-links">
                                                <li>
                                                    <h3 class="list-links-title">Categories</h3></li>
                                                <li><a href="#">Micro Fiber Cloth & Accessories</a></li>
                                                <li><a href="#">Radiator Coolants</a></li>
                                                
                                                
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="row hidden-sm hidden-xs">
                                        <div class="col-md-12">
                                            <hr>
                                            <a class="banner banner-1" href="#">
                                                <img src="{{URL::asset('./img/banner05.jpg')}}" alt="">
                                                <div class="banner-caption text-center">
                                                    <h2 class="white-color">NEW COLLECTION</h2>
                                                    <h3 class="white-color font-weak">HOT DEAL</h3>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </li>
            
                            <li class="dropdown mega-dropdown full-width"><a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">Led & Lightening <i class="fa fa-caret-down"></i></a>
                            <div class="custom-menu">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <ul class="list-links">
                                                <li>
                                                    <h3 class="list-links-title">Categories</h3></li>
                                                <li><a href="#">Dome/ Roof SMD & LED</a></li>
                                                <li><a href="#">Parking SMD & LED</a></li>
                                                <li><a href="#">EL Glow Wires</a></li>
                                                <li><a href="#">LED Bar Lights</a></li>
                                                <li><a href="#">Bumper Fog Lamps</a></li>
                                            </ul>
                                            <hr class="hidden-md hidden-lg">
                                        </div>
                                        <div class="col-md-4">
                                            <ul class="list-links">
                                                <li>
                                                    <h3 class="list-links-title">Categories</h3></li>
                                                <li><a href="#">Flasher Lights</a></li>
                                                <li><a href="#">LED & SMD Lights</a></li>
                                                <li><a href="#">Side Marker Lamps</a></li>
                                                <li><a href="#">HID Lights</a></li>
                                                <li><a href="#">Switch & Buttons</a></li>
                                            </ul>
                                            <hr class="hidden-md hidden-lg">
                                        </div>
                                        <div class="col-md-4">
                                            <ul class="list-links">
                                                <li>
                                                    <h3 class="list-links-title">Categories</h3></li>
                                                <li><a href="#">Head Lights & Back Lights</a></li>
                                                <li><a href="#">LED Sill Plates</a></li>
                                                <li><a href="#">Police Lights</a></li>
                                                
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="row hidden-sm hidden-xs">
                                        <div class="col-md-12">
                                            <hr>
                                            <a class="banner banner-1" href="#">
                                                <img src="{{URL::asset('./img/banner05.jpg')}}" alt="">
                                                <div class="banner-caption text-center">
                                                    <h2 class="white-color">NEW COLLECTION</h2>
                                                    <h3 class="white-color font-weak">HOT DEAL</h3>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        <li class="dropdown mega-dropdown full-width"><a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">Interior <i class="fa fa-caret-down"></i></a>
                            <div class="custom-menu">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <ul class="list-links">
                                                <li>
                                                    <h3 class="list-links-title">Categories</h3></li>
                                                <li><a href="#">
                                                Seat belts and Accessories
                                                    </a></li>
                                                <li><a href="#">Interior Chrome Trim & Accessories</a></li>
                                                <li><a href="#">Anti-Skid Nonslip Dashboard Mats</a></li>
                                                <li><a href="#">Car Organizers & Accessories</a></li>
                                                <li><a href="#">    Arm Rests</a></li>
                                            </ul>
                                            <hr class="hidden-md hidden-lg">
                                        </div>
                                        <div class="col-md-4">
                                            <ul class="list-links">
                                                <li>
                                                    <h3 class="list-links-title">Categories</h3></li>
                                                <li><a href="#">Seat Belt Clips</a></li>
                                                <li><a href="#">    LED Lights</a></li>
                                                <li><a href="#">    Tissue Box</a></li>
                                                <li><a href="#">Sun Shades</a></li>
                                                <li><a href="#">Dashboard Carpet</a></li>
                                            </ul>
                                            <hr class="hidden-md hidden-lg">
                                        </div>
                                        <div class="col-md-4">
                                            <ul class="list-links">
                                                <li>
                                                    <h3 class="list-links-title">Categories</h3></li>
                                                <li><a href="#">Interior Protection Mats</a></li>
                                                <li><a href="#">    Hangings</a></li>
                                                <li><a href="#">Back & Neck Care</a></li>
                                                <li><a href="#">Ashtray</a></li>
                                                
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="row hidden-sm hidden-xs">
                                        <div class="col-md-12">
                                            <hr>
                                            <a class="banner banner-1" href="#">
                                                <img src="{{URL::asset('./img/banner05.jpg')}}" alt="">
                                                <div class="banner-caption text-center">
                                                    <h2 class="white-color">NEW COLLECTION</h2>
                                                    <h3 class="white-color font-weak">HOT DEAL</h3>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li class="dropdown mega-dropdown full-width"><a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">Exterior <i class="fa fa-caret-down"></i></a>
                                <div class="custom-menu">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <ul class="list-links">
                                                        <li>
                                                                <h3 class="list-links-title">Categories</h3></li>
                                                            <li><a href="#"></a>Air Flows</a></li>
                                                            <li><a href="#">Roof Racks & Rails</a></li>
                                                            <li><a href="#">Door Mouldings</a></li>
                                                            <li><a href="#">Double Sided Tapes</a></li>
                                                            <li><a href="#">Bumper Protectors</a></li>
</li>
                                                </ul>
                                                <hr class="hidden-md hidden-lg">
                                            </div>
                                            <div class="col-md-4">
                                                <ul class="list-links">
                                                        <li>
                                                                <h3 class="list-links-title">Categories</h3></li>
                                                            <li><a href="#">Chrome Handle Cover</a></li>
                                                            <li><a href="#">Chrome Trim & Accessories</a></li>
                                                            <li><a href="#">Number Plate Tilter</a></li>
                                                            <li><a href="#">License Number Plates & Frames</a></li>
                                                            <li><a href="#">Grille</a></li>
                                                </ul>
                                                <hr class="hidden-md hidden-lg">
                                            </div>
                                            <div class="col-md-4">
                                                <ul class="list-links">
                                                        <li>
                                                                <h3 class="list-links-title">Categories</h3></li>
                                                            <li><a href="#">Antenna</a></li>
                                                            <li><a href="#">Door Guards</a></li>
                                                            <li><a href="#">Air Press & Sunvisors</a></li>
                                                            <li><a href="#">Sticker Monograms & Emblems</a></li>
                                                    
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="row hidden-sm hidden-xs">
                                            <div class="col-md-12">
                                                <hr>
                                                <a class="banner banner-1" href="#">
                                                    <img src="{{URL::asset('./img/banner05.jpg')}}" alt="">
                                                    <div class="banner-caption text-center">
                                                        <h2 class="white-color">NEW COLLECTION</h2>
                                                        <h3 class="white-color font-weak">HOT DEAL</h3>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                            
                                    <li class="dropdown mega-dropdown full-width"><a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">Modification <i class="fa fa-caret-down"></i></a>
                        <div class="custom-menu">
                                <div class="row">
                                    <div class="col-md-4">
                                        <ul class="list-links">
                                            <li>
                                                <h3 class="list-links-title">Categories</h3></li>
                                            <li><a href="#">
                                                    Auto Gauges & Meters</a></li>
                                             <li><a href="#">JDM Accessories</a></li>
                                            <li><a href="#">    Exhaust Systems</a></li>
                                            <li><a href="#">Muffler Tips & Pipes</a></li>
                                            <li><a href="#">Fender Clips & Washers</a></li>
                                        </ul>
                                        <hr class="hidden-md hidden-lg">
                                    </div>
                                    <div class="col-md-4">
                                        <ul class="list-links">
                                            <li>
                                                <h3 class="list-links-title">Categories</h3></li>
                                            <li><a href="#">Rear Bumper Diffusers</a></li>
                                            <li><a href="#">Fancy Side Mirrors</a></li>
                                            <li><a href="#">Steering & Accessories</a></li>
                                            <li><a href="#">Rubber Lip & Extensions</a></li>
                                            <li><a href="#">Trunk And Roof Spoilers</a></li>
                                        </ul>
                                        <hr class="hidden-md hidden-lg">
                                    </div>
                                    <div class="col-md-4">
                                        <ul class="list-links">
                                            <li>
                                                <h3 class="list-links-title">Categories</h3></li>
                                            <li><a href="#">Tow Hooks</a></li>
                                            <li><a href="#">Suspension Parts</a></li>
                                            <li><a href="#">Body Kits & Extensions</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="row hidden-sm hidden-xs">
                                    <div class="col-md-12">
                                        <hr>
                                        <a class="banner banner-1" href="#">
                                            <img src="{{URL::asset('./img/banner05.jpg')}}" alt="">
                                            <div class="banner-caption text-center">
                                                <h2 class="white-color">NEW COLLECTION</h2>
                                                <h3 class="white-color font-weak">HOT DEAL</h3>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li><a href="#">Other</a></li>
                        
                    </ul>
                </div>
                <!-- menu nav -->
            </div>
        </div>
        <!-- /container -->
    </div>
    <!-- /NAVIGATION -->
