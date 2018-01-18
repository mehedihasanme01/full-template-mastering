<div class="header">
<div class="header-top">
    <div class="container">
        <div class="top-left">
            <a href="#"> Help  <i class="glyphicon glyphicon-phone" aria-hidden="true"></i> +8801677109107</a>
        </div>
        <div class="top-right">
            <ul>
                <li><a href="{{route('/checkOut')}}">Checkout</a></li>
                <li><a href="{{route('/logIn')}}">Login</a></li>
                <li><a href="{{route('/registerUser')}}"> Create Account </a></li>
            </ul>
        </div>
        <div class="clearfix"></div>
    </div>
</div>
<div class="heder-bottom">
    <div class="container">
        <div class="logo-nav">
            <div class="logo-nav-left">
                <h1><a href="{{asset('/')}}">New Shop <span>Shop anywhere</span></a></h1>
            </div>
            <div class="logo-nav-left1">
                <nav class="navbar navbar-default">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header nav_2">
                        <button type="button" class="navbar-toggle collapsed navbar-toggle1" data-toggle="collapse" data-target="#bs-megadropdown-tabs">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div>
                    <div class="collapse navbar-collapse" id="bs-megadropdown-tabs">
                        <ul class="nav navbar-nav">
                            <li class="active"><a href="{{asset('/')}}" class="act">Home</a></li>
                            <!-- Mega Menu -->
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Women<b class="caret"></b></a>
                                <ul class="dropdown-menu multi-column columns-3">
                                    <div class="row">
                                        <div class="col-sm-3  multi-gd-img">
                                            <ul class="multi-column-dropdown">
                                                <h6>Submenu1</h6>
                                                <li><a href="{{route('/products')}}">Clothing</a></li>
                                                <li><a href="{{route('/products')}}">Wallets</a></li>
                                                <li><a href="{{route('/products')}}">Shoes</a></li>
                                                <li><a href="{{route('/products')}}">Watches</a></li>
                                                <li><a href="{{route('/products')}}"> Underwear </a></li>
                                                <li><a href="{{route('/products')}}">Accessories</a></li>
                                            </ul>
                                        </div>
                                        <div class="col-sm-3  multi-gd-img">
                                            <ul class="multi-column-dropdown">
                                                <h6>Submenu2</h6>
                                                <li><a href="{{route('/products')}}">Sunglasses</a></li>
                                                <li><a href="{{route('/products')}}">Wallets,Bags</a></li>
                                                <li><a href="{{route('/products')}}">Footwear</a></li>
                                                <li><a href="{{route('/products')}}">Watches</a></li>
                                                <li><a href="{{route('/products')}}">Accessories</a></li>
                                                <li><a href="{{route('/products')}}">Jewellery</a></li>
                                            </ul>
                                        </div>
                                        <div class="col-sm-3  multi-gd-img">
                                            <a href="products.html"><img src="{{asset('public/frontEnd/images')}}/woo.jpg" alt=" "/></a>
                                        </div>
                                        <div class="col-sm-3  multi-gd-img">
                                            <a href="products.html"><img src="{{asset('public/frontEnd/images')}}/woo1.jpg" alt=" "/></a>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                </ul>
                            </li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Men <b class="caret"></b></a>
                                <ul class="dropdown-menu multi-column columns-3">
                                    <div class="row">
                                        <div class="col-sm-3  multi-gd-img">
                                            <ul class="multi-column-dropdown">
                                                <h6>Submenu1</h6>
                                                <li><a href="{{route('/products1')}}">Clothing</a></li>
                                                <li><a href="{{route('/products1')}}">Wallets</a></li>
                                                <li><a href="{{route('/products1')}}">Shoes</a></li>
                                                <li><a href="{{route('/products1')}}">Watches</a></li>
                                                <li><a href="{{route('/products1')}}">wear </a></li>
                                                <li><a href="{{route('/products1')}}">Accessories</a></li>
                                            </ul>
                                        </div>
                                        <div class="col-sm-3  multi-gd-img">
                                            <ul class="multi-column-dropdown">
                                                <h6>Submenu2</h6>
                                                <li><a href="{{route('/products1')}}">Sunglasses</a></li>
                                                <li><a href="{{route('/products1')}}">Wallets,Bags</a></li>
                                                <li><a href="{{route('/products1')}}">Footwear</a></li>
                                                <li><a href="{{route('/products1')}}">Watches</a></li>
                                                <li><a href="{{route('/products1')}}">ories</a></li>
                                                <li><a href="{{route('/products1')}}">Jewellery</a></li>
                                            </ul>
                                        </div>
                                        <div class="col-sm-3  multi-gd-img">
                                            <a href="products1.html"><img src="{{asset('public/frontEnd/images')}}/woo3.jpg" alt=" "/></a>
                                        </div>
                                        <div class="col-sm-3  multi-gd-img">
                                            <a href="products1.html"><img src="{{asset('public/frontEnd/images')}}/woo4.jpg" alt=" "/></a>
                                        </div>
                                        <div class="clearfix"></div>
                                    </div>
                                </ul>
                            </li>
                            <li><a href="{{route('/codes')}}">Short Codes</a></li>
                            <li><a href="{{route('/mailUs')}}">Mail Us</a></li>
                        </ul>
                    </div>
                </nav>
            </div>
            <div class="logo-nav-right">
                <ul class="cd-header-buttons">
                    <li><a class="cd-search-trigger" href="#cd-search"> <span></span></a></li>
                </ul> <!-- cd-header-buttons -->
                <div id="cd-search" class="cd-search">
                    <form action="#" method="post">
                        <input name="Search" type="search" placeholder="Search...">
                    </form>
                </div>
            </div>
            <div class="header-right2">
                <div class="cart box_1">
                    <a href="{{route('/checkOut')}}">
                        <h3> <div class="total">
                                <span class="simpleCart_total"></span> (<span id="simpleCart_quantity" class="simpleCart_quantity"></span> items)</div>
                            <img src="{{asset('public/frontEnd/images')}}/bag.png" alt="" />
                        </h3>
                    </a>
                    <p><a href="javascript:;" class="simpleCart_empty">Empty Cart</a></p>
                    <div class="clearfix"> </div>
                </div>
            </div>
            <div class="clearfix"> </div>
        </div>
    </div>
</div>
</div>