@extends('frontend.layouts.weui')

@section('header')
    @include('frontend.includes.search')
@endsection

@section('content')
<div class="pro-sort" style="position: relative;z-index: 200">
  <div class="weui-flex">
    <div class="weui-flex__item"><div class="placeholder NormalCss">综合</div></div>
    <div class="weui-flex__item"><div class="placeholder SortAscCss">按销量</div></div>
    <div class="weui-flex__item"><div class="placeholder SortDescCss">按价格</i></div></div>
  </div>
</div>

  <div id="list" class='demos-content-padded proListWrap'>
    <!--产品列表--滑动加载-->
  <div class="weui-pull-to-refresh__layer">
    <div class='weui-pull-to-refresh__arrow'></div>
    <div class='weui-pull-to-refresh__preloader'></div>
    <div class="down">下拉刷新</div>
    <div class="up">释放刷新</div>
    <div class="refresh">正在刷新</div>
  </div>

    <div class="pro-items">
      <a href="/product" class="weui-media-box weui-media-box_appmsg">
        <div class="weui-media-box__hd"><img class="weui-media-box__thumb" src="/img/pro3.jpg" alt=""></div>
        <div class="weui-media-box__bd">
          <h1 class="weui-media-box__desc">由各种物质组成的巨型球状天体，叫做星球。星球有一定的形状，有自己的运行轨道。</h1>
          <div class="wy-pro-pri">¥<em class="num font-15">296.00</em></div>
          <ul class="weui-media-box__info prolist-ul">
            <li class="weui-media-box__info__meta"><em class="num">0</em>条评价</li>
            <li class="weui-media-box__info__meta"><em class="num">100%</em>好评</li>
          </ul>
        </div>
      </a>
    </div>
    <div class="pro-items">
      <a href="/product" class="weui-media-box weui-media-box_appmsg">
        <div class="weui-media-box__hd"><img class="weui-media-box__thumb" src="/img/pro3.jpg" alt=""></div>
        <div class="weui-media-box__bd">
          <h1 class="weui-media-box__desc">由各种物质组成的巨型球状天体，叫做星球。星球有一定的形状，有自己的运行轨道。</h1>
          <div class="wy-pro-pri">¥<em class="num font-15">296.00</em></div>
          <ul class="weui-media-box__info prolist-ul">
            <li class="weui-media-box__info__meta"><em class="num">0</em>条评价</li>
            <li class="weui-media-box__info__meta"><em class="num">100%</em>好评</li>
          </ul>
        </div>
      </a>
    </div>
    <div class="pro-items">
      <a href="/product" class="weui-media-box weui-media-box_appmsg">
        <div class="weui-media-box__hd"><img class="weui-media-box__thumb" src="/img/pro3.jpg" alt=""></div>
        <div class="weui-media-box__bd">
          <h1 class="weui-media-box__desc">由各种物质组成的巨型球状天体，叫做星球。星球有一定的形状，有自己的运行轨道。</h1>
          <div class="wy-pro-pri">¥<em class="num font-15">296.00</em></div>
          <ul class="weui-media-box__info prolist-ul">
            <li class="weui-media-box__info__meta"><em class="num">0</em>条评价</li>
            <li class="weui-media-box__info__meta"><em class="num">100%</em>好评</li>
          </ul>
        </div>
      </a>
    </div>
    <div class="pro-items">
      <a href="/product" class="weui-media-box weui-media-box_appmsg">
        <div class="weui-media-box__hd"><img class="weui-media-box__thumb" src="/img/pro3.jpg" alt=""></div>
        <div class="weui-media-box__bd">
          <h1 class="weui-media-box__desc">由各种物质组成的巨型球状天体，叫做星球。星球有一定的形状，有自己的运行轨道。</h1>
          <div class="wy-pro-pri">¥<em class="num font-15">296.00</em></div>
          <ul class="weui-media-box__info prolist-ul">
            <li class="weui-media-box__info__meta"><em class="num">0</em>条评价</li>
            <li class="weui-media-box__info__meta"><em class="num">100%</em>好评</li>
          </ul>
        </div>
      </a>
    </div>
    <div class="pro-items">
      <a href="/product" class="weui-media-box weui-media-box_appmsg">
        <div class="weui-media-box__hd"><img class="weui-media-box__thumb" src="/img/pro3.jpg" alt=""></div>
        <div class="weui-media-box__bd">
          <h1 class="weui-media-box__desc">由各种物质组成的巨型球状天体，叫做星球。星球有一定的形状，有自己的运行轨道。</h1>
          <div class="wy-pro-pri">¥<em class="num font-15">296.00</em></div>
          <ul class="weui-media-box__info prolist-ul">
            <li class="weui-media-box__info__meta"><em class="num">0</em>条评价</li>
            <li class="weui-media-box__info__meta"><em class="num">100%</em>好评</li>
          </ul>
        </div>
      </a>
    </div>
    <div class="pro-items">
      <a href="/product" class="weui-media-box weui-media-box_appmsg">
        <div class="weui-media-box__hd"><img class="weui-media-box__thumb" src="/img/pro3.jpg" alt=""></div>
        <div class="weui-media-box__bd">
          <h1 class="weui-media-box__desc">由各种物质组成的巨型球状天体，叫做星球。星球有一定的形状，有自己的运行轨道。</h1>
          <div class="wy-pro-pri">¥<em class="num font-15">296.00</em></div>
          <ul class="weui-media-box__info prolist-ul">
            <li class="weui-media-box__info__meta"><em class="num">0</em>条评价</li>
            <li class="weui-media-box__info__meta"><em class="num">100%</em>好评</li>
          </ul>
        </div>
      </a>
    </div>

  </div>
  <div class="weui-loadmore">
    <i class="weui-loading"></i>
    <span class="weui-loadmore__tips">正在加载</span>
  </div>

@endsection

@push('after-scripts')
<script>
      $("#list").pullToRefresh().on("pull-to-refresh", function() {
        setTimeout(function() {
          $("#time").text(new Date);
          $("#list").pullToRefreshDone();
        }, 2000);
      });
      // infinite
      var loading = false;
      $(document.body).infinite().on("infinite", function() {
        if(loading) return;
        loading = true;
        setTimeout(function() {
          $("#list").append('<div class="pro-items"><a href="/product" class="weui-media-box weui-media-box_appmsg"><div class="weui-media-box__hd"><img class="weui-media-box__thumb" src="/img/pro3.jpg" alt=""></div><div class="weui-media-box__bd"><h1 class="weui-media-box__desc">由各种物质组成的巨型球状天体，叫做星球。星球有一定的形状，有自己的运行轨道。</h1><div class="wy-pro-pri">¥<em class="num font-15">296.00</em></div><ul class="weui-media-box__info prolist-ul"><li class="weui-media-box__info__meta"><em class="num">0</em>条评价</li><li class="weui-media-box__info__meta"><em class="num">100%</em>好评</li></ul></div></a></div>');
          loading = false;
        }, 2000);
      });
</script>
@endpush
