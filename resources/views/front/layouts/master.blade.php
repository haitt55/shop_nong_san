

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title>Shop Hoa Quả | ShopHoaQua.vn</title>
<meta name="keywords" content="shophoaqua.vn, shophoaqua, qua phat thu, buoi diem, buoi ho lo,buoi nam roi, buoi doan hung, buoi long co co, Bưởi da xanh (túi lưới),Bưởi da xanh (không túi lưới),Bưởi Diễn,Bưởi Năm roi,Bưởi Đường lá cam,Bưởi Đoan Hùng,Bưởi Sửu ( Bưởi Đoan Hùng),Bưởi Lông cổ cò,Bưởi Phúc Trạch,Bưởi hồ lô - in chữ Tài Lộc,Bưởi Tân Triều,Bưởi Thanh Trà - Huế,Vú sữa Lò rèn,Vú sữa Bơ hồng,Vú sữa tím,Mít siêu sớm,Xoài cát Hòa Lộc,Xoài Cát Chu,Na Đồng Mỏ,Thanh long ruột đỏ,Cam xoàn,Bơ sáp Trịnh Mười,Sapoche - Hồng xiêm Tiền Giang,Sầu riêng Ri 6 -cơm vàng hạt lép,Quả Kiwi vàng,Quả Kiwi xanh" />
<meta name="description" content="Bán buôn bán lẻ hoa quả, đặt hàng trực tuyến, giao hàng tận nhà miễn phí. Hoa quả sạch, theo tiêu chuẩn Viet gap và global gap. Uy tín, chất lượng" />
<link rel="stylesheet" href="/templates/front/style.css" type="text/css" media="screen" />
<link rel="stylesheet" href="/templates/front/themeslide/default/default.css" type="text/css" media="screen" />
<link rel="shortcut icon" href="/templates/front/images/ico.png" type="image/x-icon" />
<link rel="stylesheet" href="/templates/front/nivo-slider.css" type="text/css" media="screen" />
<link rel="stylesheet" href="/templates/front/menu.css" type="text/css" media="screen" />
<link rel="stylesheet" href="/templates/front/slider.css" type="text/css" media="screen" />
<link rel="stylesheet" href="/templates/front/news.css" type="text/css" media="screen" />
<link rel="stylesheet" href="/templates/front/viewimg.css" type="text/css" media="screen" />
<link rel="stylesheet" href="/templates/front/slideshowsp.css" type="text/css" media="screen" />
<meta name="google-site-verification" content="TYAhiODaJ8Yiwa3qIhl6rOnZNiRAo8wAm11ECGPG8Tk" />  <!-- Verify Mail Gooogle -->
<script type="text/javascript" src="/js/noimages.js"></script>
<script type="text/javascript" src="/js/jquery-1.7.1.min.js"></script>
<script type="text/javascript" src="/js/jquery.corner.js"></script>
<script type="text/javascript">
    $("div#nutchitiethome").corner();
    $("div#hotline").corner();
    $("div#titlehotline").corner();
    $("div#foottitleyenbai").corner();
    $("div#foottitlehanoi").corner();
    $("div#linktitlesp").corner();
    $("div#chinhsach").corner();
    $("div#huondanmua").corner();
    $("div#thanhtoan").corner();
    $("div#newshomespds").corner();
    $("div#titlenewshot").corner();
	$("div#sodeal").corner();
	$("div#capnews").corner();
	$("span.sodeal").corner();
</script>

<!-- slider -->
<script src="/js/slides.min.jquery.js"></script>
	<script>
		$(function(){
			$('#slides').slides({
				preload: true,
				preloadImage: 'img/loading.gif',
				play: 5000,
				pause: 2500,
				hoverPause: true,
				animationStart: function(current){
					$('.caption').animate({
						bottom:-35
					},100);
					if (window.console && console.log) {
						// example return of current slide number
						console.log('animationStart on slide: ', current);
					};
				},
				animationComplete: function(current){
					$('.caption').animate({
						bottom:0
					},200);
					if (window.console && console.log) {
						// example return of current slide number
						console.log('animationComplete on slide: ', current);
					};
				},
				slidesLoaded: function() {
					$('.caption').animate({
						bottom:0
					},200);
				}
			});
		});
	</script>

<!-- Xem anh -->
<script src="/js/jquery.viewimg.js"></script>
<script>
	$(document).ready(function(){
		//Examples of how to assign the ColorBox event to elements
		$(".group1").colorbox({rel:'group1'});
		$(".group2").colorbox({rel:'group2', transition:"fade"});
		$(".group3").colorbox({rel:'group3', transition:"none", width:"75%", height:"75%"});
		$(".group4").colorbox({rel:'group4', slideshow:true});
		$(".ajax").colorbox();
		$(".youtube").colorbox({iframe:true, innerWidth:425, innerHeight:344});
		$(".iframe").colorbox({iframe:true, width:"80%", height:"80%"});
		$(".inline").colorbox({inline:true, width:"50%"});
		$(".callbacks").colorbox({
			onOpen:function(){ alert('onOpen: colorbox is about to open'); },
			onLoad:function(){ alert('onLoad: colorbox has started to load the targeted content'); },
			onComplete:function(){ alert('onComplete: colorbox has displayed the loaded content'); },
			onCleanup:function(){ alert('onCleanup: colorbox has begun the close process'); },
			onClosed:function(){ alert('onClosed: colorbox has completely closed'); }
		});
		
		//Example of preserving a JavaScript event for inline calls.
		$("#click").click(function(){ 
			$('#click').css({"background-color":"#f00", "color":"#fff", "cursor":"inherit"}).text("Open this window again and this message will still be here.");
			return false;
		});
	});
</script>

<!-- Scroll bar left -->
<link type="text/css" href="/templates/front/jquery.jscrollpane.css" rel="stylesheet" media="all" />
<style type="text/css" id="page-css">
	/* Styles specific to this particular page */
	.scroll-pane
	{
		width: 225px;
		height: 450px;
		overflow: auto;
	}
</style>
<script type="text/javascript" src="/js/jquery.mousewheel.js"></script>
<script type="text/javascript" src="/js/jquery.jscrollpane.min.js"></script>
<script type="text/javascript" id="sourcecode">
	$(function()
	{
		$('.scroll-pane').jScrollPane();
	});
</script>
<!-- End Scroll bar left -->

<script type="text/javascript">
var currentImage;
var currentIndex = -1;
var interval;
function showImage(index){
    if(index < $('#bigPic img').length){
    	var indexImage = $('#bigPic img')[index]
        if(currentImage){   
        	if(currentImage != indexImage ){
                $(currentImage).css('z-index',2);
                clearTimeout(myTimer);
                $(currentImage).fadeOut(250, function() {
				    myTimer = setTimeout("showNext()", 3000);
				    $(this).css({'display':'none','z-index':1})
				});
            }
        }
        $(indexImage).css({'display':'block', 'opacity':1});
        currentImage = indexImage;
        currentIndex = index;
        $('#thumbs li').removeClass('active');
        $($('#thumbs li')[index]).addClass('active');
    }
}

function showNext(){
    var len = $('#bigPic img').length;
    var next = currentIndex < (len-1) ? currentIndex + 1 : 0;
    showImage(next);
}
 
var myTimer;

$(document).ready(function() {
    myTimer = setTimeout("showNext()", 3000);
	showNext(); //loads first image
    $('#thumbs li').bind('click',function(e){
    	var count = $(this).attr('rel');
    	showImage(parseInt(count)-1);
    });
});


</script>

<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v2.6&appId=988562257863005";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script> 
</head>

<body>
<div id="wrapper">
	<div id="headerfull">
		<div id="headerwide">
	<div id="header">
		<div id="logo"><!--<img width="980" height="140" src="images/thu 14.jpg" border="0">  --><object width="980" height="140" data="/images/logo.swf"></object></div> 
		<div id="logoright">
				
		</div>
	</div>
</div>
<div id="overslideshow">
	<div id="icontrangchu"><a href="/"><img align="absmiddle"  src="/images/icontrangchu.png" border="0"></a></div>
	<div id="menu">	
		<ul id="nav">
			<li>{!! link_to_route('front.home.about', 'Giới thiệu') !!}</li>      
			<li>{!! link_to_route('front.products.index', 'Sản phẩm') !!}</li>   
			<li><a href="{!! route('front.products.discount') !!}">Khuyến mại<span class="sodeal">{!! count($__productDiscounts) !!}</span></a></li> 
			<li>{!! link_to_route('front.home.transport', 'Giao hàng') !!}</li>        
			<li>{!! link_to_route('front.home.payment', 'Thanh toán') !!}</li>       
		</ul>
	</div>
	<div id="logoright">
		<form action="/timkiem.php" method="get">
			<input style="color: #444" type="text" id="search" name="search" value="Quả gì?" onblur="if(this.value == '') {this.style.color='#444'; this.value='Quả gì?'}" onfocus="if (this.value == 'Quả gì?') {this.style.color='#444'; this.value=''}" class="inputtext">
			<input type ="submit"  value="" class="inputbutton">
		</form>
	</div>
</div>	</div>
	<div id="wrappercontent">
	@yield('content')
	<div id="footer">
		<div id="bgtopfooter"></div>
<div id="foottop">
	<span class="menubot"><a href="/421/phuong-thuc-thanh-toan/">Phương thức thanh toán</a></span>
	<span class="menubot"><a href="/418/huong-dan-mua-hang/">Hướng dẫn mua hàng</a></span>
	<span class="menubot"><a href="/425/chuong-trinh-khuyen-mai/">Chương trình khuyến mại</a></span>
	<span class="menubot"><a href="/420/chinh-sach-van-chuyen/">Chính sách giao hàng</a></span>
	<span class="menubot"><a href="/406/the-uu-dai-thanh-vien/">Thẻ ưu đãi thành viên</a></span>
</div>
<div id="hrfooter"></div>
<div id="footeraddress">
	<div id="footyenbai">
		<div id="foottitleyenbai">CÔNG TY TNHH THƯƠNG MẠI VÀ PHÂN PHỐI ĐÔNG DƯƠNG</div>
		<table cellpadding="5"  class="fontaddfot" style="width: 100%">
			<tr>
				<td height="20">Địa chỉ: Số 123 Đặng Tiến Đông, Đống Đa, Hà Nội</td>
			</tr>
			<tr>
				<td height="20">Điện thoại: </td>
			</tr>
			<tr>
				<td height="20">&nbsp;&nbsp;&nbsp;-&nbsp;Bán lẻ: 0966868001 - 0466886633</td>
			</tr>
			<tr>
				<td height="20">&nbsp;&nbsp;&nbsp;-&nbsp;Bán buôn: 0966868002 - 0466886611</td>
			</tr>
			<tr>
				<td height="20">&nbsp;&nbsp;&nbsp;-&nbsp;Nguồn hàng: 0466886644</td>
			</tr>
			<tr>
				<td height="20">Email: kd.shophoaqua@gmail.com</td>
			</tr>
		</table>
	</div>
	<div id="foothanoi">
		<table cellpadding="5" class="fontaddfot" style="width: 100%">
			<tr>
				<td height="20">&nbsp;</td>
			</tr>
			<tr>
				<td height="20">&nbsp;</td>
			</tr>
			<tr>
				<td height="20">&nbsp;</td>
			</tr>
			<tr>
				<td height="20">&nbsp;</td>
			</tr>
			<tr>
				<td height="20">Copyright @ 2012 <B>Shop Hoa Qua</B></td>
			</tr>
			<tr>
				<td height="20"><span class="linkfoot">Design by <a target="_blank" href="http://mrkhoa.net">Mr.Khoa</a> and <a target="_blank" href="http://shophoaqua.vn">Tuanck</a></span></td>
			</tr>
		</table>
	</div>
</div>	</div>
</div>
<div style="display:none !important;">	
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-37447373-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
	<script id="_wau761">var _wau = _wau || []; _wau.push(["small", "wh7t8s4hwzag", "761"]);
(function() {var s=document.createElement("script"); s.async=true;
s.src="http://widgets.amung.us/small.js";
document.getElementsByTagName("head")[0].appendChild(s);
})();</script>
</div>
</body>
</html>