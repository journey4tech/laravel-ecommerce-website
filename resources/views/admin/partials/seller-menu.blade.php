<ul class="metismenu" id="side-menu">

    <li class="menu-title">Yinimini</li>

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

            </ul>
        </li>

        <li>
            <a href="javascript: void(0);">
                <i class="la la-cube"></i>
                <span> Profile </span>
                <span class="menu-arrow"></span>
            </a>
            <ul class="nav-second-level" aria-expanded="false">
                <li>
                    <a href="{{route('admin.seller-profiles.create')}}">Add Complete Profile</a>
                </li>
                <li>
                    <a href="{{route('admin.seller-profiles.index')}}">Manage Profile</a>
                </li>

            </ul>
        </li>

        <li>
            <a href="javascript: void(0);">
                <i class="la la-diamond"></i>
                <span class="badge badge-danger float-right">New</span>
                <span>Orders </span>
            </a>
            <ul class="nav-second-level" aria-expanded="false">
                <li>
                    <a href="{{route('admin.seller-order')}}">Pendding Orders</a>
                </li>

                <li>
                    <a href="{{route('admin.confrimed_order')}}">Confirm Orders</a>
                </li>
                <li>
                    <a href="{{route('admin.delivered_order')}}">Deliverd Orders</a>
                </li>

            </ul>
        </li>

  </ul>
