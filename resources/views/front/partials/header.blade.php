  <!-- Header -->
  <header class="header-container">
    <div class="header-top">
      <div class="container">
        <div class="row"> 
          <!-- Header Language -->
          <div class="col-xs-6">
            <div class="dropdown block-language-wrapper"> <a role="button" data-toggle="dropdown" data-target="#" class="block-language dropdown-toggle" href="index.html#"> <img src="{{asset('frontEnd/assets/images/english.png')}}" alt="language"> English <span class="caret"></span> </a>
              <ul class="dropdown-menu" role="menu">
                <li role="presentation"><a role="menuitem" tabindex="-1" href="index.html#"><img src="{{asset('frontEnd/assets/images/english.png')}}" alt="language"> English </a></li>
                <li role="presentation"><a role="menuitem" tabindex="-1" href="index.html#"><img src="{{asset('frontEnd/assets/images/francais.png')}}" alt="language"> French </a></li>
                <li role="presentation"><a role="menuitem" tabindex="-1" href="index.html#"><img src="{{asset('frontEnd/assets/images/german.png')}}" alt="language"> German </a></li>
              </ul>
            </div>
            
            <!-- End Header Language --> 
            
            <!-- Header Currency -->
            <div class="dropdown block-currency-wrapper"> <a role="button" data-toggle="dropdown" data-target="#" class="block-currency dropdown-toggle" href="index.html#"> USD <span class="caret"></span></a>
              <ul class="dropdown-menu" role="menu">
                <li role="presentation"><a role="menuitem" tabindex="-1" href="index.html#"> $ - Dollar </a></li>
                <li role="presentation"><a role="menuitem" tabindex="-1" href="index.html#"> £ - Pound </a></li>
                <li role="presentation"><a role="menuitem" tabindex="-1" href="index.html#"> € - Euro </a></li>
              </ul>
            </div>
            
            <!-- End Header Currency -->
            
            <div class="welcome-msg hidden-xs"> Default welcome msg! </div>
          </div>
          <div class="col-xs-6"> 
            
            <!-- Header Top Links -->
            <div class="toplinks">
              <div class="links">
                <div class="myaccount"><a title="My Account" href="login.html"><span class="hidden-xs">My Account</span></a></div>
                <div class="wishlist"><a title="My Wishlist"  href="wishlist.html"><span class="hidden-xs">Wishlist</span></a></div>
                <div class="check"><a title="Checkout" href="checkout.html"><span class="hidden-xs">Checkout</span></a></div>
                <div class="login"><a title="Login" href="login.html"><span  class="hidden-xs">Log In</span></a></div>
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
            <form action="http://htmldemo.magikcommerce.com/ecommerce/polo-html-template/Variation1/green/cat" method="POST" id="search_mini_form" name="Categories">
              <select name="category_id" class="cate-dropdown hidden-xs">
                <option value="0">All Categories</option>
                <option value="36">Camera</option>
                <option value="37">Electronics</option>
                <option value="42">&nbsp;&nbsp;&nbsp;Cell Phones</option>
                <option value="43">&nbsp;&nbsp;&nbsp;Cameras</option>
                <option value="44">&nbsp;&nbsp;&nbsp;Laptops</option>
                <option value="45">&nbsp;&nbsp;&nbsp;Hard Drives</option>
                <option value="46">&nbsp;&nbsp;&nbsp;Monitors</option>
                <option value="47">&nbsp;&nbsp;&nbsp;Mouse</option>
                <option value="48">&nbsp;&nbsp;&nbsp;Digital Cameras</option>
                <option value="38">Desktops</option>
                <option value="39">Computer Parts</option>
                <option value="40">Televisions</option>
                <option value="41">Featured</option>
              </select>
              <input type="text" placeholder="Search here..." value="" maxlength="70" class="" name="search" id="search">
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
                <div class="cart-box"><span class="title">cart</span><span id="cart-total">2 item </span></div>
                </a></div>
              <div>
                <div class="top-cart-content arrow_box">
                  <div class="block-subtitle">Recently added item(s)</div>
                  <ul id="cart-sidebar" class="mini-products-list">
                    <li class="item even"> <a class="product-image" href="index.html#" title="Downloadable Product "><img alt="Downloadable Product " src="{{asset('frontEnd/assets/products-images/product3.jpg')}}" width="80"></a>
                      <div class="detail-item">
                        <div class="product-details"> <a href="index.html#" title="Remove This Item" onClick="" class="glyphicon glyphicon-remove">&nbsp;</a> <a class="glyphicon glyphicon-pencil" title="Edit item" href="index.html#">&nbsp;</a>
                          <p class="product-name"> <a href="product_detail.html" title="Downloadable Product">Sample Product </a> </p>
                        </div>
                        <div class="product-details-bottom"> <span class="price">$100.00</span> <span class="title-desc">Qty:</span> <strong>1</strong> </div>
                      </div>
                    </li>
                    <li class="item last odd"> <a class="product-image" href="index.html#" title="  Sample Product "><img alt="  Sample Product " src="{{asset('frontEnd/assets/products-images/product2.jpg')}}" width="80"></a>
                      <div class="detail-item">
                        <div class="product-details"> <a href="index.html#" title="Remove This Item" onClick="" class="glyphicon glyphicon-remove">&nbsp;</a> <a class="glyphicon glyphicon-pencil" title="Edit item" href="index.html#">&nbsp;</a>
                          <p class="product-name"> <a href="index.html#" title="  Sample Product "> Sample Product </a> </p>
                        </div>
                        <div class="product-details-bottom"> <span class="price">$320.00</span> <span class="title-desc">Qty:</span> <strong>2</strong> </div>
                      </div>
                    </li>
                  </ul>
                  <div class="top-subtotal">Subtotal: <span class="price">$420.00</span></div>
                  <div class="actions">
                    <button class="btn-checkout" type="button"><span>Checkout</span></button>
                    <button class="view-cart" type="button"><span>View Cart</span></button>
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
  <nav>
    <div class="container">
      <div class="nav-inner">
        <div class="logo-small"> <a class="logo" title="Magento Commerce" href="index.html"><img alt="Magento Commerce" src="{{asset('frontEnd/assets/images/logo.png')}}"></a> </div>
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
                    <li class="level0 nav-6 level-top first parent"> <a class="level-top" href="index.html#"> <span>Pages</span> </a>
                      <ul class="level0">
                        <li class="level1 first"><a href="grid.html"><span>Grid</span></a></li>
                        <li class="level1 nav-10-2"> <a href="list.html"> <span>List</span> </a> </li>
                        <li class="level1 nav-10-3"> <a href="product_detail.html"> <span>Product Detail</span> </a> </li>
                        <li class="level1 nav-10-4"> <a href="shopping_cart.html"> <span>Shopping Cart</span> </a> </li>
                        <li class="level1 first"><a href="checkout.html"><span>Checkout</span></a> </li>
                        <li class="level1 nav-10-4"> <a href="wishlist.html"> <span>Wishlist</span> </a> </li>
                        <li class="level1"> <a href="dashboard.html"> <span>Dashboard</span> </a> </li>
                        <li class="level1"> <a href="multiple_addresses.html"> <span>Multiple Addresses</span> </a> </li>
                        <li class="level1"> <a href="about_us.html"> <span>About us</span> </a> </li>
                        <li class="level1"> <a href="compare.html"> <span>Compare</span> </a> </li>
                        <li class="level1"> <a href="faq.html"> <span>FAQ</span> </a> </li>
                        <li class="level1"> <a href="login.html"> <span>Login</span> </a> </li>
                        <li class="level1"> <a href="quick_view.html"> <span>Quick view</span> </a> </li>
                        <li class="level1"><a href="blog.html"><span>Blog</span></a> </li>
                        <li class="level1"><a href="contact_us.html"><span>Contact us</span></a> </li>
                        <li class="level1"><a href="404error.html"><span>404 Error Page</span></a> </li>
                      </ul>
                    </li>
                    <li class="level0 nav-7 level-top parent"> <a class="level-top" href="grid.html"> <span>Women</span> </a>
                      <ul class="level0">
                        <li class="level1 nav-1-1 first parent"> <a href="grid.html"> <span>Clothing</span> </a>
                          <ul class="level1">
                            <li class="level2 nav-1-1-1 first"> <a href="grid.html"> <span>Western Wear</span> </a> </li>
                            <li class="level2 nav-1-1-2"> <a href="grid.html"> <span>Night Wear</span> </a> </li>
                            <li class="level2 nav-1-1-3"> <a href="grid.html"> <span>Ethnic Wear</span> </a> </li>
                            <li class="level2 nav-1-1-4 last"> <a href="grid.html"> <span>Designer Wear</span> </a> </li>
                          </ul>
                        </li>
                        <li class="level1 nav-1-2 parent"> <a href="grid.html"> <span>Watches</span> </a>
                          <ul class="level1">
                            <li class="level2 nav-1-2-5 first"> <a href="grid.html"> <span>Fashion</span> </a> </li>
                            <li class="level2 nav-1-2-6"> <a href="grid.html"> <span>Dress</span> </a> </li>
                            <li class="level2 nav-1-2-7"> <a href="grid.html"> <span>Sports</span> </a> </li>
                            <li class="level2 nav-1-2-8 last"> <a href="grid.html"> <span>Casual</span> </a> </li>
                          </ul>
                        </li>
                        <li class="level1 nav-1-3 parent"> <a href="grid.html"> <span>Styliest Bag</span> </a>
                          <ul class="level1">
                            <li class="level2 nav-1-3-9 first"> <a href="grid.html"> <span>Clutch Handbags</span> </a> </li>
                            <li class="level2 nav-1-3-10"> <a href="grid.html"> <span>Diaper Bags</span> </a> </li>
                            <li class="level2 nav-1-3-11"> <a href="grid.html"> <span>Bags</span> </a> </li>
                            <li class="level2 nav-1-3-12 last"> <a href="grid.html"> <span>Hobo Handbags</span> </a> </li>
                          </ul>
                        </li>
                        <li class="level1 nav-1-4 last parent"> <a href="grid.html"> <span>Material Bag</span> </a>
                          <ul class="level1">
                            <li class="level2 nav-1-4-13 first"> <a href="grid.html"> <span>Beaded Handbags</span> </a> </li>
                            <li class="level2 nav-1-4-14"> <a href="grid.html"> <span>Fabric Handbags</span> </a> </li>
                            <li class="level2 nav-1-4-15"> <a href="grid.html"> <span>Handbags</span> </a> </li>
                            <li class="level2 nav-1-4-16 last"> <a href="grid.html"> <span>Leather Handbags</span> </a> </li>
                          </ul>
                        </li>
                      </ul>
                    </li>
                    <li class="level0 nav-8 level-top parent"> <a class="level-top" href="grid.html"> <span>Men</span> </a>
                      <ul class="level0">
                        <li class="level1 nav-2-1 first parent"> <a href="grid.html"> <span>Clothing</span> </a>
                          <ul class="level1">
                            <li class="level2 nav-2-1-1 first"> <a href="grid.html"> <span>Casual Wear</span> </a> </li>
                            <li class="level2 nav-2-1-2"> <a href="grid.html"> <span>Formal Wear</span> </a> </li>
                            <li class="level2 nav-2-1-3"> <a href="grid.html"> <span>Ethnic Wear</span> </a> </li>
                            <li class="level2 nav-2-1-4 last"> <a href="grid.html"> <span>Denims</span> </a> </li>
                          </ul>
                        </li>
                        <li class="level1 nav-2-2 parent"> <a href="grid.html"> <span>Shoes</span> </a>
                          <ul class="level1">
                            <li class="level2 nav-2-2-5 first"> <a href="grid.html"> <span>Formal Shoes</span> </a> </li>
                            <li class="level2 nav-2-2-6"> <a href="grid.html"> <span>Sport Shoes</span> </a> </li>
                            <li class="level2 nav-2-2-7"> <a href="grid.html"> <span>Canvas Shoes</span> </a> </li>
                            <li class="level2 nav-2-2-8 last"> <a href="grid.html"> <span>Leather Shoes</span> </a> </li>
                          </ul>
                        </li>
                        <li class="level1 nav-2-3 parent"> <a href="grid.html"> <span>Watches</span> </a>
                          <ul class="level1">
                            <li class="level2 nav-2-3-9 first"> <a href="grid.html"> <span>Digital</span> </a> </li>
                            <li class="level2 nav-2-3-10"> <a href="grid.html"> <span>Chronograph</span> </a> </li>
                            <li class="level2 nav-2-3-11"> <a href="grid.html"> <span>Sports</span> </a> </li>
                            <li class="level2 nav-2-3-12 last"> <a href="grid.html"> <span>Casual</span> </a> </li>
                          </ul>
                        </li>
                        <li class="level1 nav-2-4 parent"> <a href="grid.html"> <span>Jackets</span> </a>
                          <ul class="level1">
                            <li class="level2 nav-2-4-13 first"> <a href="grid.html"> <span>Coats</span> </a> </li>
                            <li class="level2 nav-2-4-14"> <a href="grid.html"> <span>Formal Jackets</span> </a> </li>
                            <li class="level2 nav-2-4-15"> <a href="grid.html"> <span>Leather Jackets</span> </a> </li>
                            <li class="level2 nav-2-4-16 last"> <a href="grid.html"> <span>Blazers</span> </a> </li>
                          </ul>
                        </li>
                        <li class="level1 nav-2-5 last parent"> <a href="grid.html"> <span>Sunglasses</span> </a>
                          <ul class="level1">
                            <li class="level2 nav-2-5-17 first"> <a href="grid.html"> <span>Ray Ban</span> </a> </li>
                            <li class="level2 nav-2-5-18"> <a href="grid.html"> <span>Fasttrack</span> </a> </li>
                            <li class="level2 nav-2-5-19"> <a href="grid.html"> <span>Police</span> </a> </li>
                            <li class="level2 nav-2-5-20 last"> <a href="grid.html"> <span>Oakley</span> </a> </li>
                          </ul>
                        </li>
                      </ul>
                    </li>
                    <li class="level0 nav-3 level-top parent"> <a href="grid.html" class="level-top"> <span>Jewellery</span> </a><em>+</em>
                      <ul class="level0">
                        <li class="level1 nav-3-1 first parent"> <a href="grid.html"> <span>Precious Jewellery</span> </a><em>+</em>
                          <ul class="level1">
                            <li class="level2 nav-3-1-1 first"> <a href="grid.html"> <span>Gitanjali</span> </a> </li>
                            <li class="level2 nav-3-1-2"> <a href="grid.html"> <span>Tara</span> </a> </li>
                            <li class="level2 nav-3-1-3"> <a href="grid.html"> <span>Orra</span> </a> </li>
                            <li class="level2 nav-3-1-4 last"> <a href="grid.html"> <span>Ahilya</span> </a> </li>
                          </ul>
                        </li>
                        <li class="level1 nav-3-2 parent"> <a href="grid.html"> <span>Fashion Jewellery</span> </a><em>+</em>
                          <ul class="level1">
                            <li class="level2 nav-3-2-5 first"> <a href="grid.html"> <span>Earrings</span> </a> </li>
                            <li class="level2 nav-3-2-6"> <a href="grid.html"> <span>Rings</span> </a> </li>
                            <li class="level2 nav-3-2-7"> <a href="grid.html"> <span>Bangles &amp; Bracelets</span> </a> </li>
                            <li class="level2 nav-3-2-8 last"> <a href="grid.html"> <span>Pendants</span> </a> </li>
                          </ul>
                        </li>
                        <li class="level1 nav-3-3 parent"> <a href="grid.html"> <span>Mens Jewellery</span> </a><em>+</em>
                          <ul class="level1">
                            <li class="level2 nav-3-3-9 first"> <a href="grid.html"> <span>Neck Wear</span> </a> </li>
                            <li class="level2 nav-3-3-10"> <a href="grid.html"> <span>Cufflinks</span> </a> </li>
                            <li class="level2 nav-3-3-11"> <a href="grid.html"> <span>Wrist Wear</span> </a> </li>
                            <li class="level2 nav-3-3-12 last"> <a href="grid.html"> <span>Rings</span> </a> </li>
                          </ul>
                        </li>
                        <li class="level1 nav-3-4 parent"> <a href="grid.html"> <span>Designer</span> </a><em>+</em>
                          <ul class="level1">
                            <li class="level2 nav-3-4-13 first"> <a href="grid.html"> <span>Bbling</span> </a> </li>
                            <li class="level2 nav-3-4-14"> <a href="grid.html"> <span>Ciana</span> </a> </li>
                            <li class="level2 nav-3-4-15"> <a href="grid.html"> <span>Bansri</span> </a> </li>
                            <li class="level2 nav-3-4-16 last"> <a href="grid.html"> <span>Arsya</span> </a> </li>
                          </ul>
                        </li>
                        <li class="level1 nav-3-5 last parent"> <a href="grid.html"> <span>Platinum</span> </a><em>+</em>
                          <ul class="level1">
                            <li class="level2 nav-3-5-17 first"> <a href="grid.html"> <span>Earrings</span> </a> </li>
                            <li class="level2 nav-3-5-18"> <a href="grid.html"> <span>Rings</span> </a> </li>
                            <li class="level2 nav-3-5-19"> <a href="grid.html"> <span>Bangles &amp; Bracelets</span> </a> </li>
                            <li class="level2 nav-3-5-20 last"> <a href="grid.html"> <span>Pendants</span> </a> </li>
                          </ul>
                        </li>
                      </ul>
                    </li>
                    <li class="level0 nav-10 level-top "> <a class="level-top" href="blog.html"> <span>Custom</span> </a> </li>
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
          <li class="level0 parent drop-menu"><a href="grid.html"><span>{{ $menu->name }} </span> 
            <!--<span class="category-label-hot">Hot</span> --> 
            </a>
            @if (count($menu->categories) > 0)
            <ul class="level1">
                @foreach ($menu->categories as $category)
                <li class="level1 first parent"><a href="http://htmldemo.magikcommerce.com/ecommerce/polo-html-template/Variation1/green/grid"><span>{{ $category->name }}</span></a>
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
