<?php
    $setting = Cache::get('setting');
    $chinhanh = DB::table('chinhanh')->get();
?>
<footer>
    <div class="container">
        <div class="row">
           <div class="col-md-5 col-xs-4">
               <a href="{{url('')}}" title=""><img src="{{asset('upload/hinhanh/'.$setting->photo_footer)}}" class="logo-img" alt=""></a>
           </div>
           
           <div class="col-md-4 col-xs-12 pdl-0">
               <div class="news-letter">
                    <form action="{{route('postNewsletter')}}" method="post" accept-charset="utf-8">
                    {{csrf_field()}}
                        <input type="text" name="txtEmail" required="" class="input-news-letter" placeholder="Địa chỉ email của bạn">
                        <button type="submit" class="btn-newsletter">Đăng ký</button>
                    </form>
               </div>
           </div>
           <div class="col-md-3"></div>
        </div>
        <div class="row bottom-footer" style="margin-top: 20px; margin-bottom: 30px;">
            <div class="col-md-4 col-xs-12">
                <h4 class="f-title"><span>{{$setting->company}}</span></h4>
                <p class="f-address">Địa chỉ: {{$setting->address}}</p>                    
                <p class="f-hotline"><a href="#" title="">Hotline: {{$setting->phone}} - {{$setting->hotline}}</a></p>
                <p class="f-hotline">Email: {{$setting->email}}</p>
            </div>
            <div class="col-md-4 col-xs-12">
                <h4 class="f-title"><span>Bản đồ</span></h4>
                <div class="box-map-footer">
                  {!! $setting->iframemap !!}
                </div>
            </div>
            <div class="col-md-4 col-xs-12">
                <h4 class="f-title"><span>Fan page</span></h4>
                <div class="box-page-facebook">
                    <div class="fb-page" data-href="https://www.facebook.com/facebook" data-tabs="timeline" data-width="350px" data-height="130px" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/facebook" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/facebook">Facebook</a></blockquote></div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 box-bottom-f">
              <div class="col-md-3">
                <a href="" title="">Hướng dẫn đặt hằng</a>
              </div>
              <div class="col-md-3">
                <a href="" title="">Góp ý và khiếu nại</a>
              </div>
              <div class="col-md-3">
                <a href="" title="">Chính sách đổi trả</a>
              </div>
              <div class="col-md-3">
                <a href="" title="">Chính sách đại lý</a>
              </div>                
            </div>
        </div>
        <div class="row">
          <p style="text-align: center; color: #fff; margin-top: 15px;">Designed by hungthinhads.vn</p>
        </div>
    </div>
</footer>