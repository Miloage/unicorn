@extends('frontend.layouts.weui')

@section('header')
    @include('frontend.includes.search')
@endsection

@section('content')
    @include('frontend.includes.banner')

    @include('frontend.includes.entrance')

    @include('frontend.includes.jingxuan')

    @include('frontend.includes.guess')

    <div class="weui-loadmore more">
      <i class="weui-loading"></i>
      <span class="weui-loadmore__tips">正在加载</span>
    </div>
    <div class="weui-loadmore weui-loadmore_line nomore">
      <span class="weui-loadmore__tips">没有了</span>
    </div>
@endsection

@section('footer')
    @include('frontend.includes.tabbar')
@endsection

@push('after-scripts')
<script>
$(".swiper-banner").swiper({
    loop: true,
    autoplay: 3000
});
$(".swiper-jingxuan").swiper({
    pagination: '.swiper-pagination',
    loop: true,
    paginationType:'fraction',
    slidesPerView:3,
    paginationClickable: true,
    spaceBetween: 2
});


var loading = false;
$(document.body).infinite().on("infinite", function() {
    var self  = $(this);
    if(loading) return;
    loading = true;
    setTimeout(function() {
      $("#wy-pro-list").append('<li> <a href="/product"> <div class="proimg"><img src="./img/pro1.jpg"></div> <div class="protxt"> <div class="name">洋河蓝色瓶装经典Q7浓香型白酒500ml52度高端纯粮食白酒2瓶装包邮</div> <div class="wy-pro-pri">¥<span>296.00</span></div> </div> </a> </li><li> <a href="/product"> <div class="proimg"><img src="./img/pro1.jpg"></div> <div class="protxt"> <div class="name">洋河蓝色瓶装经典Q7浓香型白酒500ml52度高端纯粮食白酒2瓶装包邮</div> <div class="wy-pro-pri">¥<span>296.00</span></div> </div> </a> </li><li> <a href="/product"> <div class="proimg"><img src="./img/pro1.jpg"></div> <div class="protxt"> <div class="name">洋河蓝色瓶装经典Q7浓香型白酒500ml52度高端纯粮食白酒2瓶装包邮</div> <div class="wy-pro-pri">¥<span>296.00</span></div> </div> </a> </li><li> <a href="/product"> <div class="proimg"><img src="./img/pro1.jpg"></div> <div class="protxt"> <div class="name">洋河蓝色瓶装经典Q7浓香型白酒500ml52度高端纯粮食白酒2瓶装包邮</div> <div class="wy-pro-pri">¥<span>296.00</span></div> </div> </a> </li>');
      loading = false;
      $(".more").hide();
      $(".nomore").show();
      self.destroyInfinite();
    }, 1500);
});
</script>
@endpush
