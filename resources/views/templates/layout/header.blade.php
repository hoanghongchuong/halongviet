<?php
    $setting = Cache::get('setting');
    $sliders = DB::table('slider')->where('com','gioi-thieu')->where('status',1)->get();
    $categories = \App\ProductCate::where('com','san-pham')->where('parent_id',0)->orderBy('id','desc')->get();
    $categories_menu = \App\ProductCate::where('com','san-pham')->where('show_menu',1)->take(3)->orderBy('id','desc')->get();
    $cate_sidebars = App\ProductCate::where('com','san-pham')->where('show_sidebar',1)->orderBy('id','desc')->get();
?>
<header id="header" class="">
    <div class="container">
        <div class="row">
            <div class="top_header">
                <div class="col-md-3 col-xs-12 tac">
                    <a href="{{ url('') }}" title=""><img src="{{asset('upload/hinhanh/'.$setting->photo)}}" class="logo-img" alt=""></a>
                </div>
                <div class="col-md-5 col-xs-12">
                    <div class="box-search">
                        <form action="{{route('search')}}" method="get" accept-charset="utf-8">
                            <input type="text" name="txtSearch" class="input-search text form-controll" value="" placeholder="Tìm kiếm...">
                            <input type="submit" class="btn-search" id="search_btn" name="">
                        </form>
                    </div>                    
                </div>
                <div class="col-md-1 col-xs-4 pdr-0 pdl-0">
                    <div class="mt-20">
                        <span><a href=""><img src="{{asset('public/images/vitri.png')}}" alt=""></a></span> &nbsp
                        <span><a href="{{url('gio-hang')}}"><img src="{{asset('public/images/cart.png')}}" alt=""></a></span>
                    </div>
                </div>
                <div class="col-md-3 col-xs-8">
                    <div class="media">
                        <a class="pull-left" href="#">
                            <img class="media-object" src="{{asset('public/images/phone.png')}}" alt="Image">
                        </a>
                        <div class="media-body">
                            <p><a href="tel:{{$setting->phone}}">{{$setting->phone}}</a> - <a href="tel:{{$setting->phone}}">{{$setting->hotline}}</a></p>
                            <p>Tư vấn bán hàng: 8h - 19h</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- menu-mobile -->                        
    </div>
</header><!-- /header -->
<div class="visible-xs visible-sm menu-mobile">
    <div class="vk-header__search">
        <div class="container">                
            <a href="#menuMobile" class="menu_Mobile" data-toggle="collapse" class="_btn d-lg-none menu_title"><i class="fa fa-bars"></i> Menu</a>
        </div>
    </div>
    <nav class="vk-header__menu-mobile">
        <ul class="vk-menu__mobile collapse" id="menuMobile">
            
            <li><a href="{{url('gioi-thieu')}}">Giới thiệu</a></li>
            <li>
                <a href="#">Sản phẩm</a>

                <a href="#menu2" data-toggle="collapse" class="_arrow-mobile"><i class="_icon fa fa-angle-down"></i></a>
                <ul class="collapse" id="menu2">
                    <li>
                        <a href="#">Công trình 1</a>
                        <a href="#menu3" data-toggle="collapse" class="_arrow-mobile"><i class="_icon fa fa-angle-down"></i></a>
                        <ul class="collapse" id="menu3">
                            <li><a href="#">Công trình 1</a></li>
                            <li><a href="#">Công trình 1</a></li>
                            <li><a href="#">Công trình 1</a></li>
                            <li><a href="#">Công trình 1</a></li>  
                        </ul>
                    </li>
                    <li><a href="#">Công trình 1</a></li>
                    <li><a href="#">Công trình 1</a></li>
                    <li><a href="#">Công trình 1</a></li>
                    <li><a href="#">Công trình 1</a></li>                       
                </ul>
            </li>
            <li><a href="{{url('khuyen-mai')}}">Khuyến mại</a></li>
            <li><a href="">Thiết bị phòng tắm</a></li>
            <li><a href="">Gạch ốp lát</a></li>
            <li><a href="">Thiết bị bếp</a></li>                            
            <li><a href="{{url('khach-hang-du-an')}}">Khách hàng dự án</a></li>                            
            <li><a href="{{url('tin-tuc')}}">Tin tức</a></li>                            
            <li><a href="{{url('lien-he')}}">Liên hệ</a></li>
        </ul>
    </nav>        
</div>
<div class="menu-cate visible-md visible-lg">        
    <div class="menu">
        <ul class="navi">
            <li class="category-product">
                <a href="javascript:;" class="cate">Danh mục sản phẩm <i class="fa fa-angle-down"></i></a>
                <ul class="menu-sidebar">
                    @foreach($cate_sidebars as $sidebar)
                    <li>
                        <span><img src="{{asset('upload/product/'.$sidebar->icon)}}" style="width: 20px;height: 20px;" alt=""></span><a href="{{url('san-pham/'.$sidebar->alias)}}">{{$sidebar->name}}</a>
                        <ul class="sidebar-child" style="@if($sidebar->background !='')background: url('{{asset('upload/product/'.$sidebar->background)}}') no-repeat scroll bottom right; background-size: cover @else background: #fff; @endif">
                            @foreach($sidebar->categoryChild() as $cate)
                            <li>
                                <a href="{{url('san-pham/'.$cate->alias)}}" class="a-parent">{{$cate->name}}</a>
                                <ul>
                                    @foreach($cate->categoryChild() as $child)
                                    <li><a href="{{url('san-pham/'.$child->alias)}}">{{$child->name}}</a></li>
                                    @endforeach()
                                </ul>
                            </li>
                            @endforeach()
                        </ul>
                    </li>
                    @endforeach
                </ul>
            </li>
            <li><a href="{{url('khuyen-mai')}}">Khuyến mại</a></li>
            @foreach($categories_menu as $menu)
            <li><a href="{{url('san-pham/'.$menu->alias)}}">{{$menu->name}}</a></li>
            @endforeach                        
            <li><a href="{{url('khach-hang-du-an')}}">Khách hàng dự án</a></li>                            
            <li><a href="{{url('tin-tuc')}}">Tin tức</a></li>                            
            <li><a href="{{url('lien-he')}}">Liên hệ</a></li>
        </ul>
    </div>
</div> 