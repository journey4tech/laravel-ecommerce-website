@php
  $carts = \Gloudemans\Shoppingcart\Facades\Cart::content() ;
  $carts_count = \Gloudemans\Shoppingcart\Facades\Cart::count() ;
  $menus = \App\Models\Menu::with('categories')->get();
@endphp

<!-- Header -->
  <header class="header-container">
    <div class="header-top">
      <div class="container">
        <div class="row"> 
          <!-- Header Language -->
          <div class="col-xs-6">
            <div class="dropdown block-language-wrapper"> <a role="button" data-toggle="dropdown" data-target="#" class="block-language dropdown-toggle" href="index.html#"> <img src="{{asset('frontEnd/assets/images/english.png')}}" alt="language"> Bangla </a>
              <ul class="dropdown-menu" role="menu">
                <li role="presentation"><a role="menuitem" tabindex="-1" href="index.html#"><img src="{{asset('frontEnd/assets/images/english.png')}}" alt="language"> English </a></li>
                {{--<li role="presentation"><a role="menuitem" tabindex="-1" href="index.html#"><img src="{{asset('frontEnd/assets/images/francais.png')}}" alt="language"> French </a></li>--}}
                {{--<li role="presentation"><a role="menuitem" tabindex="-1" href="index.html#"><img src="{{asset('frontEnd/assets/images/german.png')}}" alt="language"> German </a></li>--}}
              </ul>
            </div>
            
            <!-- End Header Language -->

            <!-- Header Currency -->
            <div class="dropdown block-currency-wrapper"> <a role="button" data-toggle="dropdown" data-target="#" class="block-currency dropdown-toggle" href="index.html#"> Taka </a>
              {{--<ul class="dropdown-menu" role="menu">--}}
                {{--<li role="presentation"><a role="menuitem" tabindex="-1" href="index.html#"> $ - Dollar </a></li>--}}
                {{--<li role="presentation"><a role="menuitem" tabindex="-1" href="index.html#"> £ - Pound </a></li>--}}
                {{--<li role="presentation"><a role="menuitem" tabindex="-1" href="index.html#"> € - Euro </a></li>--}}
              {{--</ul>--}}
            </div>

            <!-- End Header Currency -->

            <div class="welcome-msg hidden-xs"> Welcome, Our Valuable Customer ! </div>
          </div>
          <div class="col-xs-6">

            <!-- Header Top Links -->
            <div class="toplinks">
              <div class="links">
                {{--<div class="myaccount"><a title="My Account" href="login.html"><span class="hidden-xs">My Account</span></a></div>--}}
                {{--<div class="wishlist"><a title="My Wishlist"  href="wishlist.html"><span class="hidden-xs">Wishlist</span></a></div>--}}
                {{--<div class="check"><a title="Checkout" href="checkout.html"><span class="hidden-xs">Checkout</span></a></div>--}}
                {{--<div class="login"><a title="Login" href="login.html"><span  class="hidden-xs">Log In</span></a></div>--}}
              </div>
            </div>
            <!-- End Header Top Links -->
          </div>
        </div>
      </div>
    </div>
    <div class="header container">
      <div class="row">
        <div class="col-lg-2 col-sm-3 col-md-2"> 
          <!-- Header Logo --> 
          <a class="logo" title="Magento Commerce" href="{{ route('home') }}"><img alt="Magento Commerce" src="{{asset('frontEnd/assets/images/logo.png')}}"></a>
          <!-- End Header Logo --> 
        </div>
        <div class="col-lg-8 col-sm-6 col-md-8"> 
          <!-- Search-col -->
          <div class="search-box">
            <form action="{{ route('search') }}" method="POST" >
              @csrf
              <select  name="sub_category_id" class="cate-dropdown hidden-xs">
                <option value="0">Choose Category</option>
                @foreach(\App\Models\SubCategory::all() as $subcategory)
                  <option value="{{ $subcategory->id }}">{{ $subcategory->name }}</option>
                @endforeach
              </select>
              <input type="text" placeholder="Search here..."  name="term" id="search">
              <button id="submit-button" class="search-btn-bg"><span>Search</span></button>
            </form>
          </div>
          <!-- End Search-col --> 
        </div>
        <!-- Top Cart -->
        <div class="col-lg-2 col-sm-3 col-md-2">
          <div class="top-cart-contain">
            <div class="mini-cart">
              <div data-toggle="dropdown" data-hover="dropdown" class="basket dropdown-toggle"> <a href="index.html#"> <i class="glyphicon glyphicon-shopping-cart"></i>
                <div class="cart-box"><span class="title">cart</span><span id="cart-total">

                   @if($carts_count>1)
                      {{ $carts_count }} Items
                     @elseif ($carts_count==1)
                        {{ $carts_count }} Item
                    @else
                      No Item
                    @endif

                  </span></div>
                </a></div>
              <div>
                <div class="top-cart-content arrow_box">
                  <div class="block-subtitle">Recently added item(s)</div>
                  <ul id="cart-sidebar" class="mini-products-list">

                    @foreach($carts as $cart)

                      <li class="item even"> <a class="product-image" href="{{route('cart.item')}}" title="Downloadable Product "><img alt="Downloadable Product " src="{{ asset('uploads/documents/productimages/'.$cart->options->images) }}" width="80"></a>
                        <div class="detail-item">
                          <div class="product-details">

                            <a href="{{ route('cart.item.remove',$cart->rowId) }}" title="Remove This Item"  class="glyphicon glyphicon-remove">&nbsp;</a>

                            <p class="product-name"> <a href="{{route('cart.item')}}" title="Downloadable Product">{{ $cart->name }}</a> </p>
                          </div>
                          <div class="product-details-bottom"> <span class="price">Tk. {{ $cart->price }}</span> <span class="title-desc">Qty:</span> <strong>{{ $cart->qty }}</strong> </div>
                        </div>
                      </li>

                    @endforeach

                    {{--<li class="item last odd"> <a class="product-image" href="index.html#" title="  Sample Product "><img alt="  Sample Product " src="{{asset('frontEnd/assets/products-images/product2.jpg')}}" width="80"></a>--}}
                      {{--<div class="detail-item">--}}
                        {{--<div class="product-details"> <a href="index.html#" title="Remove This Item" onClick="" class="glyphicon glyphicon-remove">&nbsp;</a> <a class="glyphicon glyphicon-pencil" title="Edit item" href="index.html#">&nbsp;</a>--}}
                          {{--<p class="product-name"> <a href="index.html#" title="  Sample Product "> Sample Product </a> </p>--}}
                        {{--</div>--}}
                        {{--<div class="product-details-bottom"> <span class="price">$320.00</span> <span class="title-desc">Qty:</span> <strong>2</strong> </div>--}}
                      {{--</div>--}}
                    {{--</li>--}}
                  </ul>
                  <div class="top-subtotal">Subtotal: <span class="price">Tk. {{Cart::subtotal()}}</span></div>
                  <div class="actions">
                    <a id="checkoutButtonHeader" href="{{route('checkout.product')}}"><button class="btn-checkout" type="button"><span>Checkout</span></button></a>
                    <a  id="cartButtonHeader" href="{{route('cart.item')}}"><button class="view-cart" type="button"><span>View Cart</span></button></a>

                  </div>
                </div>
              </div>
            </div>
            <div id="ajaxconfig_info"> <a href="index.html#/"></a>
              <input value="" type="hidden">
              <input id="enable_module" value="1" type="hidden">
              <input class="effect_to_cart" value="1" type="hidden">
              <input class="title_shopping_cart" value="Go to shopping cart" type="hidden">
            </div>
          </div>
        </div>
        <!-- End Top Cart -->
      </div>
    </div>
  </header>
  <!-- end header --> 
   <!-- Navbar -->
  <nav  style="margin-bottom: 50px;">
    <div class="container">
      <div class="nav-inner">
        <div class="logo-small"> <a class="logo" title="Home" href="{{route('home')}}"><img alt="Magento Commerce" src="{{asset('frontEnd/assets/images/logo.png')}}"></a> </div>
        <!-- mobile-menu -->
        <div class="hidden-desktop" id="mobile-menu">
          <ul class="navmenu">
            <li>
              <div class="menutop">
                <div class="toggle"> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span></div>
                <h2>Menu</h2>
              </div>
              <ul class="submenu">
                <li>
                  <ul class="topnav">
                    {{--<li class="level0 nav-6 level-top first parent"> <a class="level-top" href="index.html#"> <span>Pages</span> </a>--}}
                      {{--<ul class="level0">--}}
                        {{--<li class="level1 first"><a href="grid.html"><span>Grid</span></a></li>--}}
                        {{--<li class="level1 nav-10-2"> <a href="list.html"> <span>List</span> </a> </li>--}}
                        {{--<li class="level1 nav-10-3"> <a href="product_detail.html"> <span>Product Detail</span> </a> </li>--}}
                        {{--<li class="level1 nav-10-4"> <a href="shopping_cart.html"> <span>Shopping Cart</span> </a> </li>--}}
                        {{--<li class="level1 first"><a href="checkout.html"><span>Checkout</span></a> </li>--}}
                        {{--<li class="level1 nav-10-4"> <a href="wishlist.html"> <span>Wishlist</span> </a> </li>--}}
                        {{--<li class="level1"> <a href="dashboard.html"> <span>Dashboard</span> </a> </li>--}}
                        {{--<li class="level1"> <a href="multiple_addresses.html"> <span>Multiple Addresses</span> </a> </li>--}}
                        {{--<li class="level1"> <a href="about_us.html"> <span>About us</span> </a> </li>--}}
                        {{--<li class="level1"> <a href="compare.html"> <span>Compare</span> </a> </li>--}}
                        {{--<li class="level1"> <a href="faq.html"> <span>FAQ</span> </a> </li>--}}
                        {{--<li class="level1"> <a href="login.html"> <span>Login</span> </a> </li>--}}
                        {{--<li class="level1"> <a href="quick_view.html"> <span>Quick view</span> </a> </li>--}}
                        {{--<li class="level1"><a href="blog.html"><span>Blog</span></a> </li>--}}
                        {{--<li class="level1"><a href="contact_us.html"><span>Contact us</span></a> </li>--}}
                        {{--<li class="level1"><a href="404error.html"><span>404 Error Page</span></a> </li>--}}
                      {{--</ul>--}}
                    {{--</li>--}}

                    @foreach($menus as $menu)
                    <li class="level0 nav-7 level-top parent"> <a class="level-top"href="{{route('home')}}"><span>{{ $menu->name }} </span> </a>
                      <ul class="level0">
                        @foreach($menu->categories as $category)
                        <li class="level1 nav-1-1 first parent"> <a href="{{route('home')}}"><span>{{ $category->name }}</span> </a>
                          <ul class="level1">
                            @foreach ($category->sub_category as $sub_category)
                              <li class="level2 nav-1-1-1 first"> <a href="{{ route('sub_category',$sub_category->slug) }}"><span>{{ $sub_category->name }}</span> </a> </li>
                            @endforeach
                          </ul>
                        </li>
                        @endforeach
                      </ul>
                    </li>

                    @endforeach
                    {{--<li class="level0 nav-10 level-top "> <a class="level-top" href="blog.html"> <span>Custom</span> </a> </li>--}}
                  </ul>
                </li>
              </ul>
            </li>
          </ul>
          <!--navmenu--> 
        </div>
        
        <!--End mobile-menu -->
        <ul id="nav" class="hidden-xs">

        @foreach ($menus as $menu)
          <li class="level0 parent drop-menu"><a href="{{route('home')}}"><span>{{ $menu->name }} </span>
            <!--<span class="category-label-hot">Hot</span> --> 
            </a>
            @if (count($menu->categories) > 0)
            <ul class="level1">
                @foreach ($menu->categories as $category)
                <li class="level1 first parent"><a href="{{route('home')}}"><span>{{ $category->name }}</span></a>
                  @if (count($category->sub_category) > 0)
                  <ul class="level2">
                    @foreach ($category->sub_category as $sub_category)
                    <li class="level2 first"><a href="{{ route('sub_category',$sub_category->slug) }}"><span>{{ $sub_category->name }}</span></a></li>
                    @endforeach
                  </ul>
                  @endif
                </li>
                @endforeach

              </ul>
            @endif
          </li> 
          @endforeach
         
         
        </ul>
      </div>
    </div>
  </nav>
  <!-- end nav --> 
