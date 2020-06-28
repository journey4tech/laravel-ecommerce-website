<ul class="metismenu" id="side-menu">

    <li class="menu-title">Yinimini</li>

    </li>


    <li>
        <a href="javascript: void(0);">
            <i class="la la-diamond"></i>

            <span>Add Role </span>
            <span class="menu-arrow"></span>
        </a>
        <ul class="nav-second-level" aria-expanded="false">
            <li>
                <a href="{{route('admin.sellers.create')}}">Add Role Orders</a>
            </li>

            <li>
                <a href="{{route('admin.sellers.index')}}">Manage Seller</a>
            </li>


        </ul>
    </li>

    <li>
        <a href="javascript: void(0);">
            <i class="la la-cube"></i>
            <span> Category </span>
            <span class="menu-arrow"></span>
        </a>
        <ul class="nav-second-level" aria-expanded="false">
            <li>
                <a href="{{route('admin.categories.create')}}">Categories</a>
            </li>
            <!-- <li>
                <a href="{{route('admin.menus.index')}}">Manage Menu  </a>
            </li>
            <li>
                <a href="{{route('admin.categories.index')}}">Manage Category </a>
            </li>
            <li>
                <a href="{{route('admin.sub-categories.index')}}">Manage Sub-Category </a>
            </li> -->

        </ul>
    </li>

    <li>
        <a href="javascript: void(0);">
            <i class="la la-clone"></i>
            <span> Product </span>
            <span class="menu-arrow"></span>
        </a>
        <ul class="nav-second-level" aria-expanded="false">
            <li>
                <a href="{{route('admin.products.create')}}">Add Product</a>
            </li>

            <li>
                <a href="{{route('admin.products.index')}}">Manage Product</a>
            </li>
            <li>
                <a href="{{route('admin.reviews.index')}}">Manage Review</a>
            </li>

        </ul>
    </li>

    <li>
        <a href="javascript: void(0);">
            <i class="la la-clone"></i>
            <span> Ads </span>
            <span class="menu-arrow"></span>
        </a>
        <ul class="nav-second-level" aria-expanded="false">
            <li>
                <a href="{{route('admin.ads.create')}}">Add Ads</a>
            </li>

            <li>
                <a href="{{route('admin.ads.index')}}">Manage Ads</a>
            </li>

        </ul>
    </li>

    {{--<li>--}}
        {{--<a href="javascript: void(0);">--}}
            {{--<i class="la la-cogs"></i>--}}
            {{--<span> Homepage Setting </span>--}}
            {{--<span class="menu-arrow"></span>--}}
        {{--</a>--}}
        {{--<ul class="nav-second-level" aria-expanded="false">--}}
            {{--<li> <a href="{{route('admin.products.advance-products.daily-deals')}}">Deals of the Day</a> </li>--}}

        {{--</ul>--}}
        {{--<ul class="nav-second-level" aria-expanded="false">--}}
            {{--<li> <a href="{{route('admin.popular-category')}}">Popular Categories</a> </li>--}}

        {{--</ul>--}}
    {{--</li>--}}

    {{--<li class="menu-title mt-2">System</li>--}}

    {{--<li>--}}
        {{--<a href="javascript: void(0);">--}}
            {{--<i class="la la-cube"></i>--}}
            {{--<span> Cupon </span>--}}
            {{--<span class="menu-arrow"></span>--}}
        {{--</a>--}}
        {{--<ul class="nav-second-level" aria-expanded="false">--}}
            {{--<li>--}}
                {{--<a href="{{route('admin.coupons.create')}}">Add Cupon</a>--}}
            {{--</li>--}}
            {{--<li>--}}
                {{--<a href="{{route('admin.coupons.index')}}">Manage Cupon</a>--}}
            {{--</li>--}}

        {{--</ul>--}}
    {{--</li>--}}

    <li>
        <a href="javascript: void(0);">
            <i class="la la-file-text-o"></i>
            <span> Slider </span>
            <span class="menu-arrow"></span>
        </a>
        <ul class="nav-second-level" aria-expanded="false">
            <li>
                <a href="{{route('admin.sliders.create')}}">Add Slider</a>
            </li>
            <li>
                <a href="{{route('admin.sliders.index')}}">Manage Slider</a>
            </li>

        </ul>
    </li>
    {{--<li>--}}
        {{--<a href="javascript: void(0);">--}}
            {{--<i class="la la-file-text-o"></i>--}}
            {{--<span> Payment Method </span>--}}
            {{--<span class="menu-arrow"></span>--}}
        {{--</a>--}}
        {{--<ul class="nav-second-level" aria-expanded="false">--}}
            {{--<li>--}}
                {{--<a href="{{route('admin.payment-methods.create')}}">Add Payment Method</a>--}}
            {{--</li>--}}
            {{--<li>--}}
                {{--<a href="{{route('admin.payment-methods.index')}}">Manage  Method</a>--}}
            {{--</li>--}}

        {{--</ul>--}}
    {{--</li>--}}

    {{--<li>--}}
        {{--<a href="javascript: void(0);">--}}
            {{--<i class="la la-file-text-o"></i>--}}
            {{--<span> Shipping Zone </span>--}}
            {{--<span class="menu-arrow"></span>--}}
        {{--</a>--}}
        {{--<ul class="nav-second-level" aria-expanded="false">--}}
            {{--<li>--}}
                {{--<a href="{{route('admin.shipping-zone.create')}}">Add Shipping Zone</a>--}}
            {{--</li>--}}
            {{--<li>--}}
                {{--<a href="{{route('admin.shipping-zone.index')}}">Manage  Zone </a>--}}
            {{--</li>--}}

        {{--</ul>--}}
    {{--</li>--}}

    <li>
        <a href="javascript: void(0);">
            <i class="la la-diamond"></i>
            <span>Orders </span>
            <span class="menu-arrow"></span>
        </a>
        <ul class="nav-second-level" aria-expanded="false">
            <li>
                <a href="{{route('admin.orders.index')}}">Pendding Orders</a>
            </li>

            <li>
                <a href="{{route('admin.completed.order')}}">Completed Orders</a>
            </li>
            {{--<li>--}}
                {{--<a href="{{route('admin.delivered_order')}}">Deliverd Orders</a>--}}
            {{--</li>--}}

        </ul>
    </li>

    {{--<li>--}}
        {{--<a href="{{route('admin.contact')}}">--}}
            {{--<i class="la la-diamond"></i>--}}
            {{--<span class="badge badge-danger float-right">New</span>--}}
            {{--<span>Contact </span>--}}
        {{--</a>--}}

    {{--</li>--}}

    {{--<li>--}}
        {{--<a href="{{route('admin.users')}}">--}}
            {{--<i class="la la-diamond"></i>--}}
            {{--<span class="badge badge-danger float-right">New</span>--}}
            {{--<span>Users </span>--}}
        {{--</a>--}}

    {{--</li>--}}
    {{--<li>--}}
        {{--<a href="{{route('admin.seller-product')}}">--}}
            {{--<i class="la la-diamond"></i>--}}
            {{--<span class="badge badge-danger float-right">New</span>--}}
            {{--<span>Seller Product  </span>--}}
        {{--</a>--}}

    {{--</li>--}}


    {{--<li>--}}
        {{--<a href="javascript: void(0);">--}}
            {{--<i class="la la-diamond"></i>--}}
            {{--<span> Feedback </span>--}}
            {{--<span class="menu-arrow"></span>--}}
        {{--</a>--}}
        {{--<ul class="nav-second-level" aria-expanded="false">--}}
            {{--<li>--}}
                {{--<a href="ui-buttons.html">Ratting</a>--}}
            {{--</li>--}}
            {{--<li>--}}
                {{--<a href="ui-cards.html">Report</a>--}}
            {{--</li>--}}
            {{--<li>--}}

        {{--</ul>--}}
        {{--</li>--}}


</ul>
</li>

</ul>
