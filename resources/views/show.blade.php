<!DOCTYPE html>
<html>
<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type">
<meta charset="utf-8">
<meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" name="viewport">
<meta content="yes" name="apple-mobile-web-app-capable">
<meta content="black" name="apple-mobile-web-app-status-bar-style">
<meta content="telephone=no" name="format-detection">
<title>{{ $product->title }}</title>

<style type="text/css">
.wxqrcodedecodedia{position:absolute;top:50%;left:50%;z-index:10000;background:#FFF;visibility:hidden;border-radius:10px;  box-shadow: 0px 0px 4px rgba(0,0,0,0.6);}
.wxqrcodedecodebg{position:fixed;top:0;left:0;width:100%;height:100%;display:none;background:rgba(0,0,0,0.6);z-index:9999;}
.wxdecodeqrcodediv{width:250px;height250px;margin:5px auto;display:none;text-align:center;line-height:250px;position: relative;height:250px;  margin-bottom: 25px;}		
.wxdecodeqrcodediv img{width:100%;height:100%;position:absolute;top:0;left:0}		
.wxqrcodetitle{  height: 56px;font-size: 20px;line-height: 28px;margin-top: 8px;text-align:center}
.wxqrcodeinfo{position:absolute;bottom:-40px;text-align:center;width: 100%;}		
.wxqrcodeinfo a{color:#FFF;font-size:16px;}		
.wxqrcodeinfo a:after {display: inline-block;content: "";width: 10px;height: 16px;background: url(http://wxtest.cli.im/Public/images/enter.png);background-size: 8px;background-repeat: no-repeat;margin-left: 10px;vertical-align: middle;margin-top: -1px;}
.wxdecodediaclose{display:none;position:absolute;width:40px;height:40px;background:url(http://wxtest.cli.im/Public/images/diaclose.png);right:0;top:0;right: -20px;top: -20px;background-size: 40px 40px;}		
@keyframes img1{0% {opacity:0}25%{opacity:1}75% {opacity:1}100%{opacity:0}}		
@-webkit-keyframes img1{0% {opacity:0}25%{opacity:1}75% {opacity:1}100%{opacity:0}}		
@keyframes img2{0%,25%{opacity:0}50% {opacity:1}100%{opacity:0}}		
@-webkit-keyframes img2{0%,25%{opacity:0}50% {opacity:1}100%{opacity:0}}		
.vague{-moz-filter: blur(8px);-webkit-filter: blur(8px);-o-filter: blur(8px);-ms-filter: blur(8px);filter: blur(8px);}
</style>

</head>
<body mycollectionplug="bind">
<div id="cli_content" style="padding-bottom: 20px;">
 <div id="wrapper"><section id="content">
  <div class="content-scroll">
   <div class="cl"></div>
   <div class="content_tree type_vcard_biz">
    <div class="tree_box">
     <div class="vcard_biz">
      <div class="vcard_biz_head tc" databg="/Public/images/vcardbg11.jpg" style="background-image: url(http://biz.cli.im/Public/images/vcardbg11.jpg);">
	   <div id="mcover_vard_face" class="mcover_vard_face tc" onclick="show_info();"></div>
	   <div class="vcard_biz_face_wrap clearfloat">
		<div class="vcard_biz_face fl" id="vcard_biz_face">
		 <a onclick="show_face();"><div id="vcard_biz_face_img_show" style="background-image:url({{ url('/') }}/images/logo.jpg)"></div></a>
		</div>
		<div class="vcard_biz_career" id="vcard_career">
		 <div id="vcard_biz_name">{{ $product->title }}</div>
		 <div class="vcard_career_title1 ">{{ $product->brand }}</div>
		 <div class="vcard_career_name1">{{ $product->model }}</div>
		 <div class="cl"></div>
		</div>
	   </div>
	  </div>

<div style="position:relative;">
 <div class="vcardlist ">
  <ul>
   @if (!empty($product->brand))<li class="info"><a href="#"><div class="vcard_data_txt clearfloat"><span class="vcard_data_title vcard_data_value_mr">品牌</span><span class="vcard_data_value vcard_data_value_mr">{{ $product->brand }}</span></div></a></li>@endif
   @if (!empty($product->model))<li class="info"><a href="#"><div class="vcard_data_txt clearfloat"><span class="vcard_data_title vcard_data_value_mr">型号</span><div class="vcard_data_value vcard_data_value_mr clearfloat"><span>{{ $product->model }}</span></div></div></a></li>@endif
   @if (!empty($product->price))<li class="info"><a href="#"><div class="vcard_data_txt clearfloat"><span class="vcard_data_title vcard_data_value_mr">价格</span><div class="vcard_data_value vcard_data_value_mr clearfloat"><span>{{ $product->price }}</span></div></div></a></li>@endif
   @if (!empty($product->capacity))<li class="info"><a href="#"><div class="vcard_data_txt clearfloat"><span class="vcard_data_title vcard_data_value_mr">容量</span><div class="vcard_data_value vcard_data_value_mr clearfloat"><span>{{ $product->capacity }}</span></div></div></a></li>@endif
   @if (!empty($product->company))<li class="info"><a href="#"><div class="vcard_data_txt clearfloat"><span class="vcard_data_title vcard_data_value_mr">生产厂家</span><div class="vcard_data_value vcard_data_value_mr clearfloat"><span>{{ $product->company }}</span></div></div></a></li>@endif
   @if (!empty($product->website))<li class="info"><a href="{{ $product->price }}"><div class="vcard_data_txt clearfloat"><span class="vcard_data_title vcard_data_value_mr">网址</span><div class="vcard_data_value vcard_data_value_mr clearfloat" style="position:relative">{{ $product->website }}</div></div></a></li>@endif
   @if (!empty($product->weight))<li class="info"><a href="#"><div class="vcard_data_txt clearfloat"><span class="vcard_data_title vcard_data_value_mr">重量</span><div class="vcard_data_value vcard_data_value_mr clearfloat" style="position:relative">{{ $product->weight }}</div></div></a></li>@endif
   @if (!empty($product->input))<li class="info"><a href="#"><div class="vcard_data_txt clearfloat"><span class="vcard_data_title vcard_data_value_mr">输入</span><div class="vcard_data_value vcard_data_value_mr clearfloat" style="position:relative">{{ $product->input }}</div></div></a></li>@endif
   @if (!empty($product->output))<li class="info"><a href="#"><div class="vcard_data_txt clearfloat"><span class="vcard_data_title vcard_data_value_mr">输出</span><div class="vcard_data_value vcard_data_value_mr clearfloat" style="position:relative">{{ $product->output }}</div></div></a></li>@endif
   @if (!empty($product->address))<li class="info"><a href="#"><div class="vcard_data_txt clearfloat"><span class="vcard_data_title vcard_data_value_mr">地址</span><div class="vcard_data_value vcard_data_value_mr clearfloat" style="position:relative">{{ $product->address }}</div></div></a></li>@endif
   @if (!empty($product->phone))<li class="info"><a href="tel:{{ $product->phone }}"><div class="vcard_data_txt clearfloat"><span class="vcard_data_title vcard_data_value_mr">客服热线</span><div class="vcard_data_value vcard_data_value_mr clearfloat" style="position:relative">{{ $product->phone }}</div></div></a></li>@endif
   @if (!empty($product->color))<li class="info"><a href="#"><div class="vcard_data_txt clearfloat"><span class="vcard_data_title vcard_data_value_mr">颜色</span><div class="vcard_data_value vcard_data_value_mr clearfloat" style="position:relative">{{ $product->color }}</div></div></a></li>@endif
   @if (!empty($product->size))<li class="info"><a href="#"><div class="vcard_data_txt clearfloat"><span class="vcard_data_title vcard_data_value_mr">尺寸</span><div class="vcard_data_value vcard_data_value_mr clearfloat" style="position:relative">{{ $product->size }}</div></div></a></li>@endif

  </ul>
 </div>
</div>
</div>
</div>
</div>

<div class="content_tree type_rich_text" style="margin-bottom: 10px;">
 <div class="tree_box">
  <div class="tree_box_title rich-txt  hider" onclick="show_content(this)" style="margin-top: 0px;">
   <h2>产品介绍</h2>
  </div>
  <div style=" display:none ">
   <div class="tree_box_content">
    <div class="desc">
     <div class="rich_text">
      {!! $product->intropro !!}
	 </div>
	</div>
   </div>
  </div>
 </div>
</div>

<div class="content_tree type_rich_text">
 <div class="tree_box">
  <div class="tree_box_title rich-txt  hider" onclick="show_content(this)">
   <h2>公司介绍</h2>
  </div>
  <div style=" display:none ">
   <div class="tree_box_content">
    <div class="desc">
	 <div class="rich_text">
	  {!! $product->introcom !!}
     </div>
	</div>
   </div>
  </div>
 </div>
</div>

<link href="/css/style.css" media="screen" rel="stylesheet" type="text/css">
<script src="http://libs.baidu.com/jquery/1.8.3/jquery.min.js"></script>

<style type="text/css">
#vcard_biz_bottom{font-size: 14px;border-top: 1px solid #dcdcdc;position: fixed;bottom: 0px;width:100%;text-align: center;
background-color: #FFF;z-index: 1999;}
.info .vcard_data_txt{font-size: 14px;}
.halfwid{width:100%;height: 50px;text-align: center;display: block;}
#vcard_download {height: 50px;}
.borderright{border-right:1px solid #e4e4e4;}
.borderbottom{border-bottom:1px solid #e4e4e4;}
.heightallper{height: 100%}
.halfwid .marginimg{vertical-align:middle; color: #666666;height: 50px;line-height: 50px;text-align: left;padding-left: 10px;}
.bottom_more{  position: absolute;width: 60px;height: 50px;top: 0px;right: 0px;background: url(/Public/images/bottom_more.png?v=20150602) center center;background-size: 24px;background-repeat: no-repeat;}
.more_container{background: #FFF;position: absolute;left: 0;-webkit-transform: translateY(-100%);transform:translateY(-100%);top: 0;width: 100%;border-bottom: 1px solid #dddddd;display: none;}
.more_container .more_item{height: 60px;}
.more_container .more_item .item_name{height: 60px;margin-left: 84px;text-align: left;padding-left: 10px;line-height: 60px;border-bottom: 1px solid #eaeaea;}
.more_item a,.more_item .more_item a:-webkit-any-link,.more_item a:visited,.more_item a:link,.more_item a:hover,.more_item a:active{border: 0;text-decoration:none;}
.more_item a .item_name,.more_item a:visited .item_name,.more_item a:link .item_name,.more_item a:hover .item_name,.more_item a:active .item_name{border-bottom: 1px solid #eaeaea;}
.vcard_icon{  width: 60px;padding-left: 20px;height: 100%;text-align: left;}
.vcard_icon img{width: 48px;  margin-top: 6px;}
#more_bg{position: fixed;top:0;left: 0;width: 100%;height: 100%;z-index: 1998;display: none;background: rgba(0, 0, 0, 0.6)}
</style>

<script type="text/javascript">
    var more_container=document.getElementById('more_container'),
        more_bg=document.getElementById('more_bg');
    document.getElementById('bottom_more').onclick=function(){
        var state=more_container.style.display=="none"?"block":"none";
        more_container.style.display=state;
        more_bg.style.display=state;
    }
    more_bg.onclick=function(){
        more_container.style.display="none";
        more_bg.style.display="none";
    }
</script>
<script type="text/javascript" src="http://biz.cli.im/reso/flow/67571dde73eafcc05c5c2cc1110ad0e3/javascript.js"></script>
</body>
</html>