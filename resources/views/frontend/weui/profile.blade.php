@extends('frontend.layouts.weui')

@section('content')
  <div class="wy-center-top">
    <div class="weui-media-box weui-media-box_appmsg">
      <div class="weui-media-box__hd"><img class="weui-media-box__thumb" src="/img/profile.jpg" alt=""></div>
      <div class="weui-media-box__bd">
        <h4 class="weui-media-box__title user-name">飞翔的小土豆</h4>
        <p class="user-grade">等级：暂无</p>
      </div>
    </div>
  </div>

    <div class="weui-panel weui-panel_access">
    <div class="weui-panel__hd">
      <a href="/order" class="weui-cell weui-cell_access center-alloder">
        <div class="weui-cell__bd wy-cell">
          <div class="weui-cell__hd"><img src="/img/center-icon-order-all.png" alt="" class="center-list-icon"></div>
          <div class="weui-cell__bd weui-cell_primary"><p class="center-list-txt">全部订单</p></div>
        </div>
        <span class="weui-cell__ft"></span>
      </a>
    </div>
    <div class="weui-panel__bd">
      <div class="weui-flex">
        <div class="weui-flex__item">
          <a href="all_orders.html" class="center-ordersModule">
            <span class="weui-badge" style="position: absolute;top:5px;right:10px; font-size:10px;">2</span>
            <div class="imgicon"><img src="/img/center-icon-order-dfk.png" /></div>
            <div class="name">待付款</div>
          </a>
        </div>
        <div class="weui-flex__item">
          <a href="all_orders.html" class="center-ordersModule">
            <span class="weui-badge" style="position: absolute;top:5px;right:10px; font-size:10px;">1</span>
            <div class="imgicon"><img src="/img/center-icon-order-dfh.png" /></div>
            <div class="name">待发货</div>
          </a>
        </div>
        <div class="weui-flex__item">
          <a href="all_orders.html" class="center-ordersModule">
            <div class="imgicon"><img src="/img/center-icon-order-dsh.png" /></div>
            <div class="name">待收货</div>
          </a>
        </div>
        <div class="weui-flex__item">
          <a href="orders.html" class="center-ordersModule">
            <span class="weui-badge" style="position: absolute;top:5px;right:10px; font-size:10px;">2</span>
            <div class="imgicon"><img src="/img/center-icon-order-dpj.png" /></div>
            <div class="name">待评价</div>
          </a>
        </div>
      </div>
    </div>
  </div>

  <div class="weui-panel">
        <div class="weui-panel__bd">
          <div class="weui-media-box weui-media-box_small-appmsg">
            <div class="weui-cells">
              <a class="weui-cell weui-cell_access" href="shoucang.html">
                <div class="weui-cell__hd"><img src="/img/center-icon-sc.png" alt="" class="center-list-icon"></div>
                <div class="weui-cell__bd weui-cell_primary">
                  <p class="center-list-txt">我的收藏</p>
                </div>
                <span class="weui-cell__ft"></span>
              </a>
              <a class="weui-cell weui-cell_access" href="/address">
                <div class="weui-cell__hd"><img src="/img/center-icon-dz.png" alt="" class="center-list-icon"></div>
                <div class="weui-cell__bd weui-cell_primary">
                  <p class="center-list-txt">地址管理</p>
                </div>
                <span class="weui-cell__ft"></span>
              </a>
           <!--    <a class="weui-cell weui-cell_access" href="/password">
                <div class="weui-cell__hd"><img src="/img/center-icon-dlmm.png" alt="" class="center-list-icon"></div>
                <div class="weui-cell__bd weui-cell_primary">
                  <p class="center-list-txt">密码修改</p>
                </div>
                <span class="weui-cell__ft"></span>
              </a> -->
              <a class="weui-cell weui-cell_access" href="#">
                <div class="weui-cell__hd"><img src="/img/center-icon-out.png" alt="" class="center-list-icon"></div>
                <div class="weui-cell__bd weui-cell_primary">
                  <p class="center-list-txt">退出账号</p>
                </div>
                <span class="weui-cell__ft"></span>
              </a>
            </div>
          </div>
        </div>
      </div>
@endsection

@section('footer')
    @include('frontend.includes.tabbar')
@endsection
