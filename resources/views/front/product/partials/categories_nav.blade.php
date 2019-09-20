<div class="sb-widget d-none d-lg-block no-padding">
    <div class="sb-menu sb-mwnu-with-half-border">

        <h5 class="sb-title">Categories</h5>

        <ul class="categories-menu">

            <?php
                $product_menus = Helper::getMenus();
            ?>

            @foreach($product_menus as $menu)

            <li class="dropdown">

                <a href="" class="dropdown-link">
                    <span>{{$menu->name}}</span>
                </a>

                @if(count($menu->categories) > 0)
                <span class="expand"></span>

                <ul class="dropdown-menu">

                    @foreach($menu->categories as $category)
                    <li class="dropdown sb-dropdown-submenu">

                        <a href="" class="dropdown-link">
                            <span>{{$category->name}}</span>
                        </a>

                        @if(count($category->sub_category) > 0)

                        <span class="expand"></span>

                        <ul class="dropdown-menu">

                            @foreach($category->sub_category as $sub_c)
                            <li>
                                <a href="{{route('sub_category',$sub_c->slug)}}">
                                    <span>{{$sub_c->name}}</span>
                                </a>
                            </li>
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
