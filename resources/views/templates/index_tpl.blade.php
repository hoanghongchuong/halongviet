@extends('index')
@section('content')

<?php
$setting = Cache::get('setting');
$sliders = DB::table('slider')->where('status',1)->where('com','gioi-thieu')->orderBy('id','desc')->get();
?>
<div class="slider">
    <div id="carousel-id1" class="carousel slide" data-ride="carousel">                    
        <div class="carousel-inner">
            @foreach($sliders as $k=>$slider)
            <div class="item @if($k == 0)active @endif">
                <img  alt="Third slide" src="{{asset('upload/hinhanh/'.$slider->photo)}}">                
            </div>
            @endforeach
        </div>
        <a class="left carousel-control" href="#carousel-id1" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
        <a class="right carousel-control" href="#carousel-id1" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
    </div>
</div>
<div class="slogan-home">
    <div class="col-md-3">
        <div class="media">
            <a class="pull-left" href="#">
                <img class="media-object" src="images/1.png" alt="Image">
            </a>
            <div class="media-body">
                <h4 class="media-heading name">Sản phẩm chính hãng</h4>
                <p>HÀ LONG VIỆT cam kết cung cấp 100% sản phẩm chính hãng từ các thương thiệu.</p>
            </div>
        </div>
        
    </div>
    <div class="col-md-3">
        <div class="media">
            <a class="pull-left" href="#">
                <img class="media-object" src="images/2.png" alt="Image">
            </a>
            <div class="media-body">
                <h4 class="media-heading name">Tận tâm phục vụ</h4>
                <p>Sứ mệnh của chúng tôi là tận tâm phục vụ. Chuyên nghiệp & nỗ lực không ngừng.</p>
            </div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="media">
            <a class="pull-left" href="#">
                <img class="media-object" src="images/3.png" alt="Image">
            </a>
            <div class="media-body">
                <h4 class="media-heading name">Tư vấn tối ưu ngân sách</h4>
                <p>HÀ LONG VIỆT cung cấp các gói giải pháp nhằm tối ưu ngân sách đầu tưu của khách hàng</p>
            </div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="media">
            <a class="pull-left" href="#">
                <img class="media-object" src="images/4.png" alt="Image">
            </a>
            <div class="media-body">
                <h4 class="media-heading name">Bảo hành kép 24/7</h4>
                <p>HÀ LONG VIỆT cam kết xử lý các trường hợp bảo hành khắc phục sự cố chậm nhất sau 24h.</p>
            </div>
        </div>
    </div>
</div>
<div class="category-box">
    <div class="container">
        <div class="row">
            <div class="top-box">
                <div class="pull-left">
                    <a href="" class="cate-name">Thiết bị phòng tắm</a>
                </div>
                <div class="pull-right">
                    <a href="" class="read-more">Xem tất cả <i class="fa fa-angle-right"></i></a>
                </div>
            </div>
            <div class="list-product-item">
                <div class="col-md-3 pdl-0">
                    <a href=""><img src="images/qc1.png" alt="" class="img-qc"></a>
                </div>
                <div class="col-md-9 pdr-0">
                    <div class="col-md-3 col-xs-6 item">
                        <a href="" title="Vách tắm kính Fendi FKP-1C2"><img src="images/p1.png" alt="" ></a>
                        <div class="sale-of"><span>-17%</span></div>
                        <p class="price"> 120 000 vnd</p>
                        <p class="price_old pull-left"> 120 000 vnd</p>
                        <p class="product_name"><a href="" title="">Vách tắm kính Fendi FKP-1C2</a></p>
                    </div>
                    <div class="col-md-3 col-xs-6 item">
                        <a href=""><img src="images/p2.png" alt=""></a>
                        <div class="sale-of"><span>-17%</span></div>
                        <p class="price"> 120 000 vnd</p>
                        <p class="price_old pull-left"> 120 000 vnd</p>
                        <p class="product_name">Vách tắm kính </p>
                    </div>
                    <div class="col-md-3 col-xs-6 item">
                        <a href=""><img src="images/p1.png" alt=""></a>
                        <div class="sale-of"><span>-17%</span></div>
                        <p class="price"> 120 000 vnd</p>
                        <p class="price_old pull-left"> 120 000 vnd</p>
                        <p class="product_name" title="Vách tắm kính Fendi FKP-1C2 Fendi FKP-1C2 Fendi FKP-1C2">Vách tắm kính Fendi FKP-1C2 Fendi FKP-1C2 Fendi FKP-1C2</p>
                    </div>
                    <div class="col-md-3 col-xs-6 item">
                        <a href=""><img src="images/p2.png" alt=""></a>
                        <div class="sale-of"><span>-17%</span></div>
                        <p class="price"> 120 000 vnd</p>
                        <p class="price_old pull-left"> 120 000 vnd</p>
                        <p class="product_name">Vách tắm kính Fendi FKP-1C2</p>
                    </div>
                    <div class="col-md-3 col-xs-6 item">
                        <a href=""><img src="images/p2.png" alt=""></a>
                        <div class="sale-of"><span>-17%</span></div>
                        <p class="price"> 120 000 vnd</p>
                        <p class="price_old pull-left"> 120 000 vnd</p>
                        <p class="product_name">Vách tắm kính Fendi FKP-1C2</p>
                    </div>
                    <div class="col-md-3 item col-xs-6">
                        <a href=""><img src="images/p2.png" alt=""></a>
                        <div class="sale-of"><span>-17%</span></div>
                        <p class="price"> 120 000 vnd</p>
                        <p class="price_old pull-left"> 120 000 vnd</p>
                        <p class="product_name">Vách tắm kính Fendi FKP-1C2</p>
                    </div>
                    <div class="col-md-3 col-xs-6 item">
                        <a href=""><img src="images/p2.png" alt=""></a>
                        <div class="sale-of"><span>-17%</span></div>
                        <p class="price"> 120 000 vnd</p>
                        <p class="price_old pull-left"> 120 000 vnd</p>
                        <p class="product_name">Vách tắm kính Fendi FKP-1C2</p>
                    </div>
                    <div class="col-md-3 col-xs-6 item">
                        <a href=""><img src="images/p2.png" alt=""></a>
                        <div class="sale-of"><span>-17%</span></div>
                        <p class="price"> 120 000 vnd</p>
                        <p class="price_old pull-left"> 120 000 vnd</p>
                        <p class="product_name">Vách tắm kính Fendi FKP-1C2</p>
                    </div>
                    
                </div>
            </div>
        </div>
        <div class="row">
            <div class="top-box">
                <div class="pull-left">
                    <a href="" class="cate-name">Gạch ốp lát</a>
                </div>
                <div class="pull-right">
                    <a href="" class="read-more">Xem tất cả <i class="fa fa-angle-right"></i></a>
                </div>
            </div>
            <div class="list-product-item">
                <div class="col-md-3 pdl-0">
                    <a href=""><img src="images/qc1.png" alt="" class="img-qc"></a>
                </div>
                <div class="col-md-9 pdr-0">
                    <div class="col-md-3 item">
                        <a href=""><img src="images/p1.png" alt=""></a>
                        <div class="sale-of"><span>-17%</span></div>
                        <p class="price"> 120 000 vnd</p>
                        <p class="price_old pull-left"> 120 000 vnd</p>
                        <p class="product_name">Vách tắm kính Fendi FKP-1C2</p>
                    </div>
                    <div class="col-md-3 item">
                        <a href=""><img src="images/p2.png" alt=""></a>
                        <div class="sale-of"><span>-17%</span></div>
                        <p class="price"> 120 000 vnd</p>
                        <p class="price_old pull-left"> 120 000 vnd</p>
                        <p class="product_name">Vách tắm kính Fendi FKP-1C2</p>
                    </div>
                    <div class="col-md-3 item">
                        <a href=""><img src="images/p1.png" alt=""></a>
                        <div class="sale-of"><span>-17%</span></div>
                        <p class="price"> 120 000 vnd</p>
                        <p class="price_old pull-left"> 120 000 vnd</p>
                        <p class="product_name">Vách tắm kính Fendi FKP-1C2</p>
                    </div>
                    <div class="col-md-3 item">
                        <a href=""><img src="images/p2.png" alt=""></a>
                        <div class="sale-of"><span>-17%</span></div>
                        <p class="price"> 120 000 vnd</p>
                        <p class="price_old pull-left"> 120 000 vnd</p>
                        <p class="product_name">Vách tắm kính Fendi FKP-1C2</p>
                    </div>
                    <div class="col-md-3 item">
                        <a href=""><img src="images/p2.png" alt=""></a>
                        <div class="sale-of"><span>-17%</span></div>
                        <p class="price"> 120 000 vnd</p>
                        <p class="price_old pull-left"> 120 000 vnd</p>
                        <p class="product_name">Vách tắm kính Fendi FKP-1C2</p>
                    </div>
                    <div class="col-md-3 item">
                        <a href=""><img src="images/p2.png" alt=""></a>
                        <div class="sale-of"><span>-17%</span></div>
                        <p class="price"> 120 000 vnd</p>
                        <p class="price_old pull-left"> 120 000 vnd</p>
                        <p class="product_name">Vách tắm kính Fendi FKP-1C2</p>
                    </div>
                    <div class="col-md-3 item">
                        <a href=""><img src="images/p2.png" alt=""></a>
                        <div class="sale-of"><span>-17%</span></div>
                        <p class="price"> 120 000 vnd</p>
                        <p class="price_old pull-left"> 120 000 vnd</p>
                        <p class="product_name">Vách tắm kính Fendi FKP-1C2</p>
                    </div>
                    <div class="col-md-3 item">
                        <a href=""><img src="images/p2.png" alt=""></a>
                        <div class="sale-of"><span>-17%</span></div>
                        <p class="price"> 120 000 vnd</p>
                        <p class="price_old pull-left"> 120 000 vnd</p>
                        <p class="product_name">Vách tắm kính Fendi FKP-1C2</p>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</div>
<div class="category-box">
    <div class="container">
        <div class="row">
            <div class="top-box">
                <div class="pull-left">
                    <a href="" class="cate-name">Khách hàng dự án</a>
                </div>
            </div>
                <div class="list-box-item">
                    <div class="col-md-3 col-xs-6 pdl-0 item pdr-0">
                        <div class="box">
                            <a href="" title=""><img src="images/duan.png" alt="">
                                <p class="project_name">Trung tâm bán hàng dự án KIDOASA</p>
                                <div class="des-project">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                consequat.</div>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-3 col-xs-6 pdl-0 item pdr-0">
                        <div class="box">
                            <a href="" title=""><img src="images/duan.png" alt=""></a>
                            <p class="project_name">Trung tâm bán hàng dự án KIDOASA</p>
                            <div class="des-project">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                            consequat.</div>
                        </div>
                    </div>
                    <div class="col-md-3 col-xs-6 pdl-0 item pdr-0">
                        <div class="box">
                            <a href="" title=""><img src="images/duan.png" alt=""></a>
                            <p class="project_name">Trung tâm bán hàng dự án KIDOASA</p>
                            <div class="des-project">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                            consequat.</div>
                        </div>
                    </div>
                    <div class="col-md-3 col-xs-6 pdl-0 item pdr-0">
                        <div class="box">
                            <a href="" title=""><img src="images/duan.png" alt=""></a>
                            <p class="project_name">Trung tâm bán hàng dự án KIDOASA</p>
                            <div class="des-project">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                            consequat.</div>
                        </div>
                    </div>
                </div>
            
        </div>
    </div>
</div>
<div class="category-box">
    <div class="container">
        <div class="row">
            <div class="top-box">
                <div class="pull-left">
                    <a href="" class="cate-name">Các đối tác</a>
                </div>
            </div>
            <div class="owl-carousel owl-theme owl-carousel-partner">                        
                <div class="item">
                    <img src="images/partner.png" alt="">
                    
                </div>
                <div class="item">
                    <img src="images/partner.png" alt="">
                    
                </div>
                <div class="item">
                    <img src="images/partner.png" alt="">
                    
                </div>
                <div class="item">
                    <img src="images/partner.png" alt="">
                    
                </div>
                <div class="item">
                    <img src="images/partner.png" alt="">
                    
                </div>
                <div class="item">
                    <img src="images/partner.png" alt="">
                    
                </div>
                <div class="item">
                    <img src="images/partner.png" alt="">
                    
                </div>
                <div class="item">
                    <img src="images/partner.png" alt="">
                    
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
