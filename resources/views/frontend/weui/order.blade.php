@extends('frontend.layouts.weui')

@section('header')
  @include('frontend.includes.title', ['title'=> '订单管理', 'fixed'=> true])
@endsection

@section('content')
  <div class="weui-tab">
    <div class="weui-navbar" style="position:fixed; top:44px; left:0; right:0; height:44px; background:#fff;">
      <a class="weui-navbar__item proinfo-tab-tit font-14 weui-bar__item--on" href="#tab1">全部</a>
      <a class="weui-navbar__item proinfo-tab-tit font-14" href="#tab2">待付款</a>
      <a class="weui-navbar__item proinfo-tab-tit font-14" href="#tab3">待发货</a>
      <a class="weui-navbar__item proinfo-tab-tit font-14" href="#tab4">待收货</a>
      <a class="weui-navbar__item proinfo-tab-tit font-14" href="#tab5">待评价</a>
    </div>
    <div class="weui-tab__bd proinfo-tab-con" style="padding-top:87px;">
      <div id="tab1" class="weui-tab__bd-item weui-tab__bd-item--active">
        <div class="weui-panel weui-panel_access">
          <div class="weui-panel__hd"><span>订单号：2132165457654545</span><span class="ord-status-txt-ts fr">交易成功</span></div>
          <div class="weui-media-box__bd  pd-10">
            <div class="weui-media-box_appmsg ord-pro-list">
              <div class="weui-media-box__hd"><a href="/product"><img class="weui-media-box__thumb" src="/img/pro3.jpg" alt=""></a></div>
              <div class="weui-media-box__bd">
                <h1 class="weui-media-box__desc"><a href="/product" class="ord-pro-link">蓝之蓝蓝色瓶装经典Q7浓香型白酒500ml52度高端纯粮食酒2瓶装包邮</a></h1>
                <p class="weui-media-box__desc">规格：<span>红色</span>，<span>23</span></p>
                <div class="clear mg-t-10">
                  <div class="wy-pro-pri fl">¥<em class="num font-15">296.00</em></div>
                  <div class="pro-amount fr"><span class="font-13">数量×<em class="name">1</em></span></div>
                </div>
              </div>
            </div>
            <div class="weui-media-box_appmsg ord-pro-list">
              <div class="weui-media-box__hd"><a href="/product"><img class="weui-media-box__thumb" src="/img/pro3.jpg" alt=""></a></div>
              <div class="weui-media-box__bd">
                <h1 class="weui-media-box__desc"><a href="/product" class="ord-pro-link">蓝之蓝蓝色瓶装经典Q7浓香型白酒500ml52度高端纯粮食酒2瓶装包邮</a></h1>
                <p class="weui-media-box__desc">规格：<span>红色</span>，<span>23</span></p>
                <div class="clear mg-t-10">
                  <div class="wy-pro-pri fl">¥<em class="num font-15">296.00</em></div>
                  <div class="pro-amount fr"><span class="font-13">数量×<em class="name">1</em></span></div>
                </div>
              </div>
            </div>
          </div>
          <div class="ord-statistics">
            <span>共<em class="num">2</em>件商品，</span>
            <span class="wy-pro-pri">总金额：¥<em class="num font-15">592.00</em></span>
            <span>(含运费<b>￥0.00</b>)</span>
          </div>
          <div class="weui-panel__ft">
            <div class="weui-cell weui-cell_access weui-cell_link oder-opt-btnbox">
              <a href="javascript:;" class="ords-btn-dele">删除订单</a><a href="/comment" class="ords-btn-com">评价</a>
            </div>
          </div>
        </div>

        <div class="weui-panel weui-panel_access">
          <div class="weui-panel__hd"><span>订单号：2132165457654545</span><span class="ord-status-txt-ts fr">交易成功</span></div>
          <div class="weui-media-box__bd  pd-10">
            <div class="weui-media-box_appmsg ord-pro-list">
              <div class="weui-media-box__hd"><a href="/product"><img class="weui-media-box__thumb" src="/img/pro3.jpg" alt=""></a></div>
              <div class="weui-media-box__bd">
                <h1 class="weui-media-box__desc"><a href="/product" class="ord-pro-link">蓝之蓝蓝色瓶装经典Q7浓香型白酒500ml52度高端纯粮食酒2瓶装包邮</a></h1>
                <p class="weui-media-box__desc">规格：<span>红色</span>，<span>23</span></p>
                <div class="clear mg-t-10">
                  <div class="wy-pro-pri fl">¥<em class="num font-15">296.00</em></div>
                  <div class="pro-amount fr"><span class="font-13">数量×<em class="name">1</em></span></div>
                </div>
              </div>
            </div>
          </div>
          <div class="ord-statistics">
            <span>共<em class="num">1</em>件商品，</span>
            <span class="wy-pro-pri">总金额：¥<em class="num font-15">296.00</em></span>
            <span>(含运费<b>￥0.00</b>)</span>
          </div>
          <div class="weui-panel__ft">
            <div class="weui-cell weui-cell_access weui-cell_link oder-opt-btnbox">
              <a href="javascript:;" class="ords-btn-dele">删除订单</a><a href="/comment" class="ords-btn-com">评价</a>
            </div>
          </div>
        </div>

      </div>
      <div id="tab2" class="weui-tab__bd-item">

        <div class="weui-panel weui-panel_access">
          <div class="weui-panel__hd"><span>订单号：2132165457654545</span><span class="ord-status-txt-ts fr">待付款</span></div>
          <div class="weui-media-box__bd  pd-10">
            <div class="weui-media-box_appmsg ord-pro-list">
              <div class="weui-media-box__hd"><a href="/product"><img class="weui-media-box__thumb" src="/img/pro3.jpg" alt=""></a></div>
              <div class="weui-media-box__bd">
                <h1 class="weui-media-box__desc"><a href="/product" class="ord-pro-link">蓝之蓝蓝色瓶装经典Q7浓香型白酒500ml52度高端纯粮食酒2瓶装包邮</a></h1>
                <p class="weui-media-box__desc">规格：<span>红色</span>，<span>23</span></p>
                <div class="clear mg-t-10">
                  <div class="wy-pro-pri fl">¥<em class="num font-15">296.00</em></div>
                  <div class="pro-amount fr"><span class="font-13">数量×<em class="name">1</em></span></div>
                </div>
              </div>
            </div>
            <div class="weui-media-box_appmsg ord-pro-list">
              <div class="weui-media-box__hd"><a href="/product"><img class="weui-media-box__thumb" src="/img/pro3.jpg" alt=""></a></div>
              <div class="weui-media-box__bd">
                <h1 class="weui-media-box__desc"><a href="/product" class="ord-pro-link">蓝之蓝蓝色瓶装经典Q7浓香型白酒500ml52度高端纯粮食酒2瓶装包邮</a></h1>
                <p class="weui-media-box__desc">规格：<span>红色</span>，<span>23</span></p>
                <div class="clear mg-t-10">
                  <div class="wy-pro-pri fl">¥<em class="num font-15">296.00</em></div>
                  <div class="pro-amount fr"><span class="font-13">数量×<em class="name">1</em></span></div>
                </div>
              </div>
            </div>
          </div>
          <div class="ord-statistics">
            <span>共<em class="num">2</em>件商品，</span>
            <span class="wy-pro-pri">总金额：¥<em class="num font-15">592.00</em></span>
            <span>(含运费<b>￥0.00</b>)</span>
          </div>
          <div class="weui-panel__ft">
            <div class="weui-cell weui-cell_access weui-cell_link oder-opt-btnbox">
              <a href="javascript:;" class="ords-btn-dele">删除订单</a><a href="/payment" class="ords-btn-com">去付款</a>
            </div>
          </div>
        </div>

        <div class="weui-panel weui-panel_access">
          <div class="weui-panel__hd"><span>订单号：2132165457654545</span><span class="ord-status-txt-ts fr">待付款</span></div>
          <div class="weui-media-box__bd  pd-10">
            <div class="weui-media-box_appmsg ord-pro-list">
              <div class="weui-media-box__hd"><a href="/product"><img class="weui-media-box__thumb" src="/img/pro3.jpg" alt=""></a></div>
              <div class="weui-media-box__bd">
                <h1 class="weui-media-box__desc"><a href="/product" class="ord-pro-link">蓝之蓝蓝色瓶装经典Q7浓香型白酒500ml52度高端纯粮食酒2瓶装包邮</a></h1>
                <p class="weui-media-box__desc">规格：<span>红色</span>，<span>23</span></p>
                <div class="clear mg-t-10">
                  <div class="wy-pro-pri fl">¥<em class="num font-15">296.00</em></div>
                  <div class="pro-amount fr"><span class="font-13">数量×<em class="name">1</em></span></div>
                </div>
              </div>
            </div>
          </div>
          <div class="ord-statistics">
            <span>共<em class="num">1</em>件商品，</span>
            <span class="wy-pro-pri">总金额：¥<em class="num font-15">296.00</em></span>
            <span>(含运费<b>￥0.00</b>)</span>
          </div>
          <div class="weui-panel__ft">
            <div class="weui-cell weui-cell_access weui-cell_link oder-opt-btnbox">
              <a href="javascript:;" class="ords-btn-dele">删除订单</a><a href="/payment" class="ords-btn-com">去付款</a>
            </div>
          </div>
        </div>

      </div>
      <div id="tab3" class="weui-tab__bd-item">

      <div class="weui-panel weui-panel_access">
          <div class="weui-panel__hd"><span>订单号：2132165457654545</span><span class="ord-status-txt-ts fr">待发货</span></div>
          <div class="weui-media-box__bd  pd-10">
            <div class="weui-media-box_appmsg ord-pro-list">
              <div class="weui-media-box__hd"><a href="/product"><img class="weui-media-box__thumb" src="/img/pro3.jpg" alt=""></a></div>
              <div class="weui-media-box__bd">
                <h1 class="weui-media-box__desc"><a href="/product" class="ord-pro-link">蓝之蓝蓝色瓶装经典Q7浓香型白酒500ml52度高端纯粮食酒2瓶装包邮</a></h1>
                <p class="weui-media-box__desc">规格：<span>红色</span>，<span>23</span></p>
                <div class="clear mg-t-10">
                  <div class="wy-pro-pri fl">¥<em class="num font-15">296.00</em></div>
                  <div class="pro-amount fr"><span class="font-13">数量×<em class="name">1</em></span></div>
                </div>
              </div>
            </div>
            <div class="weui-media-box_appmsg ord-pro-list">
              <div class="weui-media-box__hd"><a href="/product"><img class="weui-media-box__thumb" src="/img/pro3.jpg" alt=""></a></div>
              <div class="weui-media-box__bd">
                <h1 class="weui-media-box__desc"><a href="/product" class="ord-pro-link">蓝之蓝蓝色瓶装经典Q7浓香型白酒500ml52度高端纯粮食酒2瓶装包邮</a></h1>
                <p class="weui-media-box__desc">规格：<span>红色</span>，<span>23</span></p>
                <div class="clear mg-t-10">
                  <div class="wy-pro-pri fl">¥<em class="num font-15">296.00</em></div>
                  <div class="pro-amount fr"><span class="font-13">数量×<em class="name">1</em></span></div>
                </div>
              </div>
            </div>
          </div>
          <div class="ord-statistics">
            <span>共<em class="num">2</em>件商品，</span>
            <span class="wy-pro-pri">总金额：¥<em class="num font-15">592.00</em></span>
            <span>(含运费<b>￥0.00</b>)</span>
          </div>
          <div class="weui-panel__ft">
            <div class="weui-cell weui-cell_access weui-cell_link oder-opt-btnbox">
              商品正在打包中，请您耐心等待....
            </div>
          </div>
        </div>

        <div class="weui-panel weui-panel_access">
          <div class="weui-panel__hd"><span>订单号：2132165457654545</span><span class="ord-status-txt-ts fr">待发货</span></div>
          <div class="weui-media-box__bd  pd-10">
            <div class="weui-media-box_appmsg ord-pro-list">
              <div class="weui-media-box__hd"><a href="/product"><img class="weui-media-box__thumb" src="/img/pro3.jpg" alt=""></a></div>
              <div class="weui-media-box__bd">
                <h1 class="weui-media-box__desc"><a href="/product" class="ord-pro-link">蓝之蓝蓝色瓶装经典Q7浓香型白酒500ml52度高端纯粮食酒2瓶装包邮</a></h1>
                <p class="weui-media-box__desc">规格：<span>红色</span>，<span>23</span></p>
                <div class="clear mg-t-10">
                  <div class="wy-pro-pri fl">¥<em class="num font-15">296.00</em></div>
                  <div class="pro-amount fr"><span class="font-13">数量×<em class="name">1</em></span></div>
                </div>
              </div>
            </div>
          </div>
          <div class="ord-statistics">
            <span>共<em class="num">1</em>件商品，</span>
            <span class="wy-pro-pri">总金额：¥<em class="num font-15">296.00</em></span>
            <span>(含运费<b>￥0.00</b>)</span>
          </div>
          <div class="weui-panel__ft">
            <div class="weui-cell weui-cell_access weui-cell_link oder-opt-btnbox">
              商品正在打包中，请您耐心等待....
            </div>
          </div>
        </div>

        <div class="weui-panel weui-panel_access">
          <div class="weui-panel__hd"><span>订单号：2132165457654545</span><span class="ord-status-txt-ts fr">待发货</span></div>
          <div class="weui-media-box__bd  pd-10">
            <div class="weui-media-box_appmsg ord-pro-list">
              <div class="weui-media-box__hd"><a href="/product"><img class="weui-media-box__thumb" src="/img/pro3.jpg" alt=""></a></div>
              <div class="weui-media-box__bd">
                <h1 class="weui-media-box__desc"><a href="/product" class="ord-pro-link">蓝之蓝蓝色瓶装经典Q7浓香型白酒500ml52度高端纯粮食酒2瓶装包邮</a></h1>
                <p class="weui-media-box__desc">规格：<span>红色</span>，<span>23</span></p>
                <div class="clear mg-t-10">
                  <div class="wy-pro-pri fl">¥<em class="num font-15">296.00</em></div>
                  <div class="pro-amount fr"><span class="font-13">数量×<em class="name">1</em></span></div>
                </div>
              </div>
            </div>
          </div>
          <div class="ord-statistics">
            <span>共<em class="num">1</em>件商品，</span>
            <span class="wy-pro-pri">总金额：¥<em class="num font-15">296.00</em></span>
            <span>(含运费<b>￥0.00</b>)</span>
          </div>
          <div class="weui-panel__ft">
            <div class="weui-cell weui-cell_access weui-cell_link oder-opt-btnbox">
              商品正在打包中，请您耐心等待....
            </div>
          </div>
        </div>

      </div>
      <div id="tab4" class="weui-tab__bd-item">

        <div class="weui-panel weui-panel_access">
          <div class="weui-panel__hd"><span>订单号：2132165457654545</span><span class="ord-status-txt-ts fr">待收货</span></div>
          <div class="weui-media-box__bd  pd-10">
            <div class="weui-media-box_appmsg ord-pro-list">
              <div class="weui-media-box__hd"><a href="/product"><img class="weui-media-box__thumb" src="/img/pro3.jpg" alt=""></a></div>
              <div class="weui-media-box__bd">
                <h1 class="weui-media-box__desc"><a href="/product" class="ord-pro-link">蓝之蓝蓝色瓶装经典Q7浓香型白酒500ml52度高端纯粮食酒2瓶装包邮</a></h1>
                <p class="weui-media-box__desc">规格：<span>红色</span>，<span>23</span></p>
                <div class="clear mg-t-10">
                  <div class="wy-pro-pri fl">¥<em class="num font-15">296.00</em></div>
                  <div class="pro-amount fr"><span class="font-13">数量×<em class="name">1</em></span></div>
                </div>
              </div>
            </div>
            <div class="weui-media-box_appmsg ord-pro-list">
              <div class="weui-media-box__hd"><a href="/product"><img class="weui-media-box__thumb" src="/img/pro3.jpg" alt=""></a></div>
              <div class="weui-media-box__bd">
                <h1 class="weui-media-box__desc"><a href="/product" class="ord-pro-link">蓝之蓝蓝色瓶装经典Q7浓香型白酒500ml52度高端纯粮食酒2瓶装包邮</a></h1>
                <p class="weui-media-box__desc">规格：<span>红色</span>，<span>23</span></p>
                <div class="clear mg-t-10">
                  <div class="wy-pro-pri fl">¥<em class="num font-15">296.00</em></div>
                  <div class="pro-amount fr"><span class="font-13">数量×<em class="name">1</em></span></div>
                </div>
              </div>
            </div>
          </div>
          <div class="ord-statistics">
            <span>共<em class="num">2</em>件商品，</span>
            <span class="wy-pro-pri">总金额：¥<em class="num font-15">592.00</em></span>
            <span>(含运费<b>￥0.00</b>)</span>
          </div>
          <div class="weui-panel__ft">
            <div class="weui-cell weui-cell_access weui-cell_link oder-opt-btnbox">
              <a href="javascript:;" class="ords-btn-com receipt">确认收货</a>
            </div>
          </div>
        </div>

        <div class="weui-panel weui-panel_access">
          <div class="weui-panel__hd"><span>订单号：2132165457654545</span><span class="ord-status-txt-ts fr">待收货</span></div>
          <div class="weui-media-box__bd  pd-10">
            <div class="weui-media-box_appmsg ord-pro-list">
              <div class="weui-media-box__hd"><a href="/product"><img class="weui-media-box__thumb" src="/img/pro3.jpg" alt=""></a></div>
              <div class="weui-media-box__bd">
                <h1 class="weui-media-box__desc"><a href="/product" class="ord-pro-link">蓝之蓝蓝色瓶装经典Q7浓香型白酒500ml52度高端纯粮食酒2瓶装包邮</a></h1>
                <p class="weui-media-box__desc">规格：<span>红色</span>，<span>23</span></p>
                <div class="clear mg-t-10">
                  <div class="wy-pro-pri fl">¥<em class="num font-15">296.00</em></div>
                  <div class="pro-amount fr"><span class="font-13">数量×<em class="name">1</em></span></div>
                </div>
              </div>
            </div>
          </div>
          <div class="ord-statistics">
            <span>共<em class="num">1</em>件商品，</span>
            <span class="wy-pro-pri">总金额：¥<em class="num font-15">296.00</em></span>
            <span>(含运费<b>￥0.00</b>)</span>
          </div>
          <div class="weui-panel__ft">
            <div class="weui-cell weui-cell_access weui-cell_link oder-opt-btnbox">
              <a href="javascript:;" class="ords-btn-com receipt">确认收货</a>
            </div>
          </div>
        </div>

      </div>
      <div id="tab5" class="weui-tab__bd-item">

        <div class="weui-panel weui-panel_access">
          <div class="weui-panel__hd"><span>订单号：2132165457654545</span><span class="ord-status-txt-ts fr">待评价</span></div>
          <div class="weui-media-box__bd  pd-10">
            <div class="weui-media-box_appmsg ord-pro-list">
              <div class="weui-media-box__hd"><a href="/product"><img class="weui-media-box__thumb" src="/img/pro3.jpg" alt=""></a></div>
              <div class="weui-media-box__bd">
                <h1 class="weui-media-box__desc"><a href="/product" class="ord-pro-link">蓝之蓝蓝色瓶装经典Q7浓香型白酒500ml52度高端纯粮食酒2瓶装包邮</a></h1>
                <p class="weui-media-box__desc">规格：<span>红色</span>，<span>23</span></p>
                <div class="clear mg-t-10">
                  <div class="wy-pro-pri fl">¥<em class="num font-15">296.00</em></div>
                  <div class="pro-amount fr"><span class="font-13">数量×<em class="name">1</em></span></div>
                </div>
              </div>
            </div>
            <div class="weui-media-box_appmsg ord-pro-list">
              <div class="weui-media-box__hd"><a href="/product"><img class="weui-media-box__thumb" src="/img/pro3.jpg" alt=""></a></div>
              <div class="weui-media-box__bd">
                <h1 class="weui-media-box__desc"><a href="/product" class="ord-pro-link">蓝之蓝蓝色瓶装经典Q7浓香型白酒500ml52度高端纯粮食酒2瓶装包邮</a></h1>
                <p class="weui-media-box__desc">规格：<span>红色</span>，<span>23</span></p>
                <div class="clear mg-t-10">
                  <div class="wy-pro-pri fl">¥<em class="num font-15">296.00</em></div>
                  <div class="pro-amount fr"><span class="font-13">数量×<em class="name">1</em></span></div>
                </div>
              </div>
            </div>
          </div>
          <div class="ord-statistics">
            <span>共<em class="num">2</em>件商品，</span>
            <span class="wy-pro-pri">总金额：¥<em class="num font-15">592.00</em></span>
            <span>(含运费<b>￥0.00</b>)</span>
          </div>
          <div class="weui-panel__ft">
            <div class="weui-cell weui-cell_access weui-cell_link oder-opt-btnbox">
              <a href="/comment" class="ords-btn-com">去评价</a>
            </div>
          </div>
        </div>

        <div class="weui-panel weui-panel_access">
          <div class="weui-panel__hd"><span>订单号：2132165457654545</span><span class="ord-status-txt-ts fr">待评价</span></div>
          <div class="weui-media-box__bd  pd-10">
            <div class="weui-media-box_appmsg ord-pro-list">
              <div class="weui-media-box__hd"><a href="/product"><img class="weui-media-box__thumb" src="/img/pro3.jpg" alt=""></a></div>
              <div class="weui-media-box__bd">
                <h1 class="weui-media-box__desc"><a href="/product" class="ord-pro-link">蓝之蓝蓝色瓶装经典Q7浓香型白酒500ml52度高端纯粮食酒2瓶装包邮</a></h1>
                <p class="weui-media-box__desc">规格：<span>红色</span>，<span>23</span></p>
                <div class="clear mg-t-10">
                  <div class="wy-pro-pri fl">¥<em class="num font-15">296.00</em></div>
                  <div class="pro-amount fr"><span class="font-13">数量×<em class="name">1</em></span></div>
                </div>
              </div>
            </div>
          </div>
          <div class="ord-statistics">
            <span>共<em class="num">1</em>件商品，</span>
            <span class="wy-pro-pri">总金额：¥<em class="num font-15">296.00</em></span>
            <span>(含运费<b>￥0.00</b>)</span>
          </div>
          <div class="weui-panel__ft">
            <div class="weui-cell weui-cell_access weui-cell_link oder-opt-btnbox">
              <a href="/comment" class="ords-btn-com">去评价</a>
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>
@endsection

@push('after-scripts')
<script>
$(document).on("click", ".ords-btn-dele", function() {
  $.confirm("您确定要删除此订单吗?", "确认删除?", function() {
      $.toast("订单已经删除!");
    }, function() {
      //取消操作
    });
  });
  $(document).on("click", ".receipt", function() {
    $.alert("五星好评送蓝豆哦，赶快去评价吧！", "收货完成！");
  });
</script>
@endpush
