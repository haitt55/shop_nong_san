

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title>Shop Nông Sản | Shopnongsan.vn</title>
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
  js.src = "//connect.facebook.net/en_US/all.js#xfbml=1";
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
			<li><a href="/422/ve-chung-toi/">Giới thiệu</a></li>      
			<li><a href="/shop-hoa-qua/">Hoa quả</a></li>   
			<li><a href="/hoa-qua/16/rau-sach/">Rau sạch</a></li>
			<li><a href="/khuyen-mai/">Khuyến mại<span class="sodeal">5</span></a></li> 
			<li><a href="/420/chinh-sach-van-chuyen/">Giao hàng</a></li>        
			<li><a href="/421/phuong-thuc-thanh-toan/">Thanh toán</a></li>       
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
		<div id="sliderleft"><div id="hotline">
	<div id="titlehotline">Mua hàng</div>
	<table style="width: 100%">
		<tr>
			<td width="6%" height="30"><img src="/images/tele.png" align="absmiddle" height="25"  border="0"  /></td>
			<td colspan="3" width="94%"><b><span style="font-size: 14px">Bán lẻ: 096.6868.001</span></b></td>
		</tr>
		<tr>
			<td width="6%" height="30"><img src="/images/tele.png" align="absmiddle" height="25"  border="0"  /></td>
			<td colspan="3" width="44%"><b><span style="font-size: 14px">Đại lý: 096.6868.002</span></b></td>
		</tr>
		<tr>
			<td width="6%" height="35" style="padding-left: 3px;">
				<a href="ymsgr:SendIM?kd.shophoaqua"><img src="/images/yahoo.png" align="absmiddle" height="25" border="0" /></a></td>
			<td width="44%">
				<b>Chat Yahoo!</b></td>
			<td width="6%" height="30" style="padding-left: 3px;">
				<a href="skype:kd.shophoaqua?chat"><img src="/images/skype.png" align="absmiddle" height="25" border="0" /></a></td>
			<td width="44%">
				<b>Chat Skype</b></td>
		</tr>
		<tr>
			<td width="6%" height="30"><img src="/images/shopicon.png" height="25"  border="0"  /></td>
			<td colspan="3" width="94%"><span style="line-height: 150%; font-weight: bold; ">Số 123 Đặng Tiến Đông, Đống Đa, Hà Nội</span></td>
		</tr>
	</table>
</div>
<div id="menuleft">
		<div id="titlemenu"><span class="titlemenutext "><a href="/hoa-qua/12/hoa-qua-viet-nam/">Hoa quả Việt Nam</a></span></div>
			<div id="contentmenu">
						<div class="scroll-pane">
				<ul class="list">
										<li class="dot"><img src="/images/dot.png" align="absmiddle" style="padding-right: 5px;"><a href="/chi-tiet/21/buoi-nam-roi/">Bưởi Năm roi</a></li>	
										<li class="dot"><img src="/images/dot.png" align="absmiddle" style="padding-right: 5px;"><a href="/chi-tiet/24/buoi-dien/">Bưởi Diễn</a></li>	
										<li class="dot"><img src="/images/dot.png" align="absmiddle" style="padding-right: 5px;"><a href="/chi-tiet/20/buoi-da-xanh/">Bưởi da xanh</a></li>	
										<li class="dot"><img src="/images/dot.png" align="absmiddle" style="padding-right: 5px;"><a href="/chi-tiet/25/buoi-da-xanh-loai-nho/">Bưởi da xanh loại nhỏ</a></li>	
										<li class="dot"><img src="/images/dot.png" align="absmiddle" style="padding-right: 5px;"><a href="/chi-tiet/26/thanh-long-ruot-do/">Thanh long ruột đỏ</a></li>	
										<li class="dot"><img src="/images/dot.png" align="absmiddle" style="padding-right: 5px;"><a href="/chi-tiet/27/vu-sua-lo-ren/">Vú sữa Lò rèn</a></li>	
										<li class="dot"><img src="/images/dot.png" align="absmiddle" style="padding-right: 5px;"><a href="/chi-tiet/30/bo-sap-dac-lac/">Bơ sáp Đắc Lắc</a></li>	
										<li class="dot"><img src="/images/dot.png" align="absmiddle" style="padding-right: 5px;"><a href="/chi-tiet/31/dua-xiem/">Dừa Xiêm</a></li>	
										<li class="dot"><img src="/images/dot.png" align="absmiddle" style="padding-right: 5px;"><a href="/chi-tiet/34/dua-hau-khong-hat/">Dưa hấu không hạt</a></li>	
										<li class="dot"><img src="/images/dot.png" align="absmiddle" style="padding-right: 5px;"><a href="/chi-tiet/39/xoai-cat-hoa-loc/">Xoài cát Hòa Lộc</a></li>	
										<li class="dot"><img src="/images/dot.png" align="absmiddle" style="padding-right: 5px;"><a href="/chi-tiet/40/buoi-suu-buoi-doan-hung-/">Bưởi Sửu ( Bưởi Đoan Hùng)</a></li>	
										<li class="dot"><img src="/images/dot.png" align="absmiddle" style="padding-right: 5px;"><a href="/chi-tiet/41/buoi-doan-hung/">Bưởi  Đoan Hùng</a></li>	
										<li class="dot"><img src="/images/dot.png" align="absmiddle" style="padding-right: 5px;"><a href="/chi-tiet/42/xoai-cat-chu/">Xoài Cát Chu</a></li>	
										<li class="dot"><img src="/images/dot.png" align="absmiddle" style="padding-right: 5px;"><a href="/chi-tiet/46/sau-rieng-ri-6-com-vang-hat-lep/">Sầu riêng Ri 6 -cơm vàng hạt lép</a></li>	
										<li class="dot"><img src="/images/dot.png" align="absmiddle" style="padding-right: 5px;"><a href="/chi-tiet/49/cam-xoan/">Cam xoàn</a></li>	
										<li class="dot"><img src="/images/dot.png" align="absmiddle" style="padding-right: 5px;"><a href="/chi-tiet/50/buoi-duong-la-cam/">Bưởi Đường lá cam</a></li>	
										<li class="dot"><img src="/images/dot.png" align="absmiddle" style="padding-right: 5px;"><a href="/chi-tiet/53/buoi-phuc-trach/">Bưởi Phúc Trạch</a></li>	
										<li class="dot"><img src="/images/dot.png" align="absmiddle" style="padding-right: 5px;"><a href="/chi-tiet/54/buoi-ho-lo-in-chu-tai-loc/">Bưởi hồ lô - in chữ Tài Lộc</a></li>	
										<li class="dot"><img src="/images/dot.png" align="absmiddle" style="padding-right: 5px;"><a href="/chi-tiet/56/buoi-thanh-tra-hue/">Bưởi Thanh Trà - Huế</a></li>	
										<li class="dot"><img src="/images/dot.png" align="absmiddle" style="padding-right: 5px;"><a href="/chi-tiet/57/chuoi-ngu-dai-hoang/">Chuối Ngự Đại hoàng</a></li>	
										<li class="dot"><img src="/images/dot.png" align="absmiddle" style="padding-right: 5px;"><a href="/chi-tiet/69/man-an-phuoc-qua-roi-/">Mận An Phước ( quả Roi)</a></li>	
										<li class="dot"><img src="/images/dot.png" align="absmiddle" style="padding-right: 5px;"><a href="/chi-tiet/70/chom-chom-nhan/">Chôm chôm nhãn</a></li>	
										<li class="dot"><img src="/images/dot.png" align="absmiddle" style="padding-right: 5px;"><a href="/chi-tiet/60/buoi-tan-trieu/">Bưởi Tân Triều</a></li>	
										<li class="dot"><img src="/images/dot.png" align="absmiddle" style="padding-right: 5px;"><a href="/chi-tiet/67/cam-sanh/">Cam sành</a></li>	
										<li class="dot"><img src="/images/dot.png" align="absmiddle" style="padding-right: 5px;"><a href="/chi-tiet/77/nho-do/">Nho đỏ</a></li>	
										<li class="dot"><img src="/images/dot.png" align="absmiddle" style="padding-right: 5px;"><a href="/chi-tiet/76/nho-xanh/">Nho xanh</a></li>	
										<li class="dot"><img src="/images/dot.png" align="absmiddle" style="padding-right: 5px;"><a href="/chi-tiet/28/vu-sua-bo-hong/">Vú sữa Bơ hồng</a></li>	
										<li class="dot"><img src="/images/dot.png" align="absmiddle" style="padding-right: 5px;"><a href="/chi-tiet/48/vu-sua-tim/">Vú sữa tím</a></li>	
										<li class="dot"><img src="/images/dot.png" align="absmiddle" style="padding-right: 5px;"><a href="/chi-tiet/47/sapoche-hong-xiem-tien-giang/">Sapoche - Hồng xiêm Tiền Giang</a></li>	
										<li class="dot"><img src="/images/dot.png" align="absmiddle" style="padding-right: 5px;"><a href="/chi-tiet/58/mit-nghe-chin-cay/">Mít nghệ chín cây</a></li>	
										<li class="dot"><img src="/images/dot.png" align="absmiddle" style="padding-right: 5px;"><a href="/chi-tiet/75/cam-cao-phong/">Cam Cao Phong</a></li>	
										<li class="dot"><img src="/images/dot.png" align="absmiddle" style="padding-right: 5px;"><a href="/chi-tiet/71/chuoi-cao/">Chuối cao</a></li>	
										<li class="dot"><img src="/images/dot.png" align="absmiddle" style="padding-right: 5px;"><a href="/chi-tiet/72/du-du-ruot-do/">Đu đủ ruột đỏ</a></li>	
										<li class="dot"><img src="/images/dot.png" align="absmiddle" style="padding-right: 5px;"><a href="/chi-tiet/61/oi-tien-giang/">Ổi Tiền Giang</a></li>	
										<li class="dot"><img src="/images/dot.png" align="absmiddle" style="padding-right: 5px;"><a href="/chi-tiet/29/na-dong-mo/">Na Đồng Mỏ</a></li>	
										<li class="dot"><img src="/images/dot.png" align="absmiddle" style="padding-right: 5px;"><a href="/chi-tiet/68/dua-hau-sai-gon/">Dưa hấu Sài Gòn</a></li>	
										<li class="dot"><img src="/images/dot.png" align="absmiddle" style="padding-right: 5px;"><a href="/chi-tiet/73/qua-sake/">Quả sake</a></li>	
										<li class="dot"><img src="/images/dot.png" align="absmiddle" style="padding-right: 5px;"><a href="/chi-tiet/32/qua-phat-thu/">Quả Phật Thủ</a></li>	
										<li class="dot"><img src="/images/dot.png" align="absmiddle" style="padding-right: 5px;"><a href="/chi-tiet/33/nai-chuoi-xanh-mam-ngu-qua/">Nải chuối xanh mâm ngũ quả</a></li>	
									</ul>
			</div>
					</div>
			<div id="titlemenu"><span class="titlemenutext "><a href="/hoa-qua/16/gio-hoa-qua/">Giỏ hoa quả</a></span></div>
			<div id="contentmenu">
						<div class="">
				<ul class="list">
									</ul>
			</div>
					</div>
			<div id="titlemenu"><span class="titlemenutext "><a href="/hoa-qua/11/hoa-qua-nhap-khau/">Hoa quả nhập khẩu</a></span></div>
			<div id="contentmenu">
						<div class="">
				<ul class="list">
										<li class="dot"><img src="/images/dot.png" align="absmiddle" style="padding-right: 5px;"><a href="/chi-tiet/44/qua-kiwi-xanh/">Quả Kiwi xanh</a></li>	
									</ul>
			</div>
					</div>
			<div id="endmenu"></div>
</div>
<div id="thanhvienvip">
		<a href="http://shophoaqua.vn/406/the-uu-dai-thanh-vien/" border="0"><img src="/images/ads/1353922031_ads.png" class="imgthanhvienvip"></a></div>
<div id="spbanchay">
	<div id="titlebanchay">Hoa quả bán chạy</div>
	<div id="contentbanchay">
				<a href="/chi-tiet/20/buoi-da-xanh/"><img src="/media/anhhoaqua/shqbuoidaxanhC.png" class="imgspbanchay" /> </a>
		<h1 class="h1titlebanchay"><a href="/chi-tiet/20/buoi-da-xanh/">Bưởi da xanh</a></h1>
		<h2 class="h2giabanchay">
			85,000 VND		</h2>
		<div id="dottedbanchay"></div>
				<a href="/chi-tiet/27/vu-sua-lo-ren/"><img src="/media/anhhoaqua/shqvusualorenC.JPG" class="imgspbanchay" /> </a>
		<h1 class="h1titlebanchay"><a href="/chi-tiet/27/vu-sua-lo-ren/">Vú sữa Lò rèn</a></h1>
		<h2 class="h2giabanchay">
			75,000 VND		</h2>
		<div id="dottedbanchay"></div>
				<a href="/chi-tiet/34/dua-hau-khong-hat/"><img src="/media/anhhoaqua/shqduadaukhonghatC.jpg" class="imgspbanchay" /> </a>
		<h1 class="h1titlebanchay"><a href="/chi-tiet/34/dua-hau-khong-hat/">Dưa hấu không hạt</a></h1>
		<h2 class="h2giabanchay">
			21,000 VND		</h2>
		<div id="dottedbanchay"></div>
				<a href="/chi-tiet/39/xoai-cat-hoa-loc/"><img src="/media/anhhoaqua/shqxoaicathoalocC.png" class="imgspbanchay" /> </a>
		<h1 class="h1titlebanchay"><a href="/chi-tiet/39/xoai-cat-hoa-loc/">Xoài cát Hòa Lộc</a></h1>
		<h2 class="h2giabanchay">
			85,000 VND		</h2>
		<div id="dottedbanchay"></div>
				<a href="/chi-tiet/49/cam-xoan/"><img src="/media/anhhoaqua/shqcamxoanC.jpg" class="imgspbanchay" /> </a>
		<h1 class="h1titlebanchay"><a href="/chi-tiet/49/cam-xoan/">Cam xoàn</a></h1>
		<h2 class="h2giabanchay">
			75,000 VND		</h2>
		<div id="dottedbanchay"></div>
				<a href="/chi-tiet/57/chuoi-ngu-dai-hoang/"><img src="/media/anhhoaqua/shqchuoingudaihoangC.jpg" class="imgspbanchay" /> </a>
		<h1 class="h1titlebanchay"><a href="/chi-tiet/57/chuoi-ngu-dai-hoang/">Chuối Ngự Đại hoàng</a></h1>
		<h2 class="h2giabanchay">
			31,000 VND		</h2>
		<div id="dottedbanchay"></div>
				<a href="/chi-tiet/69/man-an-phuoc-qua-roi-/"><img src="/media/anhhoaqua/shqmananphuoc.jpg" class="imgspbanchay" /> </a>
		<h1 class="h1titlebanchay"><a href="/chi-tiet/69/man-an-phuoc-qua-roi-/">Mận An Phước ( quả Roi)</a></h1>
		<h2 class="h2giabanchay">
			60,000 VND		</h2>
		<div id="dottedbanchay"></div>
			</div>
</div></div>
		<div id="contentwrapper">
			<div id="slideshow">
	<div class="slider-wrapper theme-default">
		<div id="slider" class="nivoSlider">
						<img src="/media/1.png" data-thumb="/media/1.png" title="Nho mỹ" border="0" width="690" height="300"/>
									<a href="http://shophoaqua.vn/chi-tiet/24/buoi-dien/#.UM31uaz4KSo" ><img src="/media/anhslider/buoidiennhacoV.png" data-thumb="/media/anhslider/buoidiennhacoV.png" title="" border="0" /></a>
									<img src="/media/3.png" data-thumb="/media/3.png" title="Dâu tây" border="0" width="690" height="300"/>
								</div>
	</div>
	<script type="text/javascript" src="/js/jquery.nivo.slider.pack.js"></script>
	<script type="text/javascript">
	$(window).load(function() {
		$('#slider').nivoSlider();
	});
	</script>
</div>
<div id="tinhot">
		<ul class="listtinhot">
		<li class="dottinhot"><img src="/images/dotted.png" align="absmiddle" style="float: left; height: 12px; padding: 5px 5px 0 0;"><a href="/tin-chi-tiet/447/loi-ich-khong-ngo-tu-mit-nghe-tien-giang/">Lợi ích không ngờ từ Mít nghệ Tiền Giang</a></li>
	</ul>
		<ul class="listtinhot">
		<li class="dottinhot"><img src="/images/dotted.png" align="absmiddle" style="float: left; height: 12px; padding: 5px 5px 0 0;"><a href="/tin-chi-tiet/446/tac-dung-cua-chuoi-trong-doi-song-hang-ngay/">Tác dụng của chuối trong đời sống hàng ngày</a></li>
	</ul>
		<ul class="listtinhot">
		<li class="dottinhot"><img src="/images/dotted.png" align="absmiddle" style="float: left; height: 12px; padding: 5px 5px 0 0;"><a href="/tin-chi-tiet/445/thai-san-gan-mat-cua-ban-bang-nuoc-ep-hoa-qua-trong-mot-ngay/">Thải sạn gan,mật của bạn bằng nước ép hoa quả trong một ngày</a></li>
	</ul>
		<ul class="listtinhot">
		<li class="dottinhot"><img src="/images/dotted.png" align="absmiddle" style="float: left; height: 12px; padding: 5px 5px 0 0;"><a href="/tin-chi-tiet/443/danh-muc-trai-cay-trong-tai-tinh-tien-giang-quy-cach-hang-mua-vu-va-cac-mat-hang-ban-chay/">Danh mục trái cây  trồng tại Tỉnh Tiền Giang, quy cách hàng, mùa vụ  và các mặt hàng bán chạy</a></li>
	</ul>
		<ul class="listtinhot">
		<li class="dottinhot"><img src="/images/dotted.png" align="absmiddle" style="float: left; height: 12px; padding: 5px 5px 0 0;"><a href="/tin-chi-tiet/442/shophoaqua-chuyen-xuat-khau-10-loai-trai-cay-chu-luc-cua-tinh-tien-giang-di-nuoc-ngoai/">Shophoaqua chuyên xuất khẩu 10 loại trái cây chủ lực của Tỉnh Tiền Giang đi nước ngoài</a></li>
	</ul>
		<ul class="listtinhot">
		<li class="dottinhot"><img src="/images/dotted.png" align="absmiddle" style="float: left; height: 12px; padding: 5px 5px 0 0;"><a href="/tin-chi-tiet/441/shophoaqua-cap-giay-chung-nhan-dai-ly-cap-1-cua-htx-vu-sua-lo-ren-vinh-kim-cho-cac-dai-ly-tai-ha-noi/">shophoaqua cấp giấy chứng nhận đại lý cấp 1 của HTX Vú sữa lò rèn Vĩnh kim cho các đại lý tại Hà Nội</a></li>
	</ul>
		<ul class="listtinhot">
		<li class="dottinhot"><img src="/images/dotted.png" align="absmiddle" style="float: left; height: 12px; padding: 5px 5px 0 0;"><a href="/tin-chi-tiet/440/shophoaqua-chuyen-ban-buon-ban-le-hoa-qua-sach-xuat-xu-tien-giang-theo-tieu-chuan-vietgap-va-global-gap/">Shophoaqua chuyên bán buôn, bán lẻ hoa quả sạch xuất xứ Tiền Giang theo tiêu chuẩn Vietgap và global gap</a></li>
	</ul>
		<ul class="listtinhot">
		<li class="dottinhot"><img src="/images/dotted.png" align="absmiddle" style="float: left; height: 12px; padding: 5px 5px 0 0;"><a href="/tin-chi-tiet/439/shophoaqua-chuyen-ban-le-giao-hang-tan-nha-cho-khach-hang-mua-le-voi-gia-tot-nhat-ha-noi/">Shophoaqua chuyên bán lẻ, giao hàng tận nhà cho khách hàng mua lẻ với giá tốt nhất Hà Nội</a></li>
	</ul>
		<ul class="listtinhot">
		<li class="dottinhot"><img src="/images/dotted.png" align="absmiddle" style="float: left; height: 12px; padding: 5px 5px 0 0;"><a href="/tin-chi-tiet/438/shophoaqua-chuyen-ban-buon-hoa-qua-cho-cac-sieu-thi-lon-nho-mini-mart-shop-thuc-pham-sach-cua-hang-chuyen-ban-trai-cay-nha-hang-khach-san-karaoke-vvv/">Shophoaqua chuyên bán buôn hoa quả cho các siêu thị lớn, nhỏ, mini mart, shop thực phẩm sạch, cửa hàng chuyên bán trái cây, nhà hàng, khách sạn, karaoke ....vvv</a></li>
	</ul>
		<ul class="listtinhot">
		<li class="dottinhot"><img src="/images/dotted.png" align="absmiddle" style="float: left; height: 12px; padding: 5px 5px 0 0;"><a href="/tin-chi-tiet/431/shophoaqua-la-dai-dien-thuong-mai-cua-htx-vu-sua-lo-ren-vinh-kim-tai-mien-bac/">Shophoaqua là đại diện thương mại của HTX Vú sữa Lò Rèn Vĩnh Kim tại miền Bắc</a></li>
	</ul>
	</div>
<div id="homecontent">
	<div id="titlehomesp">Hoa quả đang trong mùa vụ&nbsp;&nbsp;&nbsp;&nbsp;<span class="chitiethoaquaall"><a href="/hoa-qua-mua-vu/hoa-qua-dang-trong-mua-vu/">Xem tất cả&nbsp;&gt;&gt;</a></span></div>
	<div id="contenthonesp">
				<div id="sphomele">
			<h1 class="h1tensp"><a href="/chi-tiet/21/buoi-nam-roi/">Bưởi Năm roi</a></h1>
			<a href="/chi-tiet/21/buoi-nam-roi/"><img src="/media/anhhoaqua/shqbuoinamroi2.jpeg" class="imgsphomele" onerror="loadErrorImage(this,'/images/noimg.png');" /></a>
						<div id="h1giasphomele">
				<span class='giakmhome'><p class='xuongdong'></p>58,000 VND</span>			</div>
			<div id="nutchitiethome"><span class="nutchitiethometext"><span class="nutchitiethometext"><a href="/chi-tiet/21/buoi-nam-roi/">Chi tiết</a></span></span></div>		
		</div>
				<div id="sphomele">
			<h1 class="h1tensp"><a href="/chi-tiet/20/buoi-da-xanh/">Bưởi da xanh</a></h1>
			<a href="/chi-tiet/20/buoi-da-xanh/"><img src="/media/anhhoaqua/shqbuoidaxanhC.png" class="imgsphomele" onerror="loadErrorImage(this,'/images/noimg.png');" /></a>
						<div id="h1giasphomele">
				<span class='giakmhome'><p class='xuongdong'></p>85,000 VND</span>			</div>
			<div id="nutchitiethome"><span class="nutchitiethometext"><span class="nutchitiethometext"><a href="/chi-tiet/20/buoi-da-xanh/">Chi tiết</a></span></span></div>		
		</div>
				<div id="sphomele">
			<h1 class="h1tensp"><a href="/chi-tiet/25/buoi-da-xanh-loai-nho/">Bưởi da xanh loại nhỏ</a></h1>
			<a href="/chi-tiet/25/buoi-da-xanh-loai-nho/"><img src="/media/anhhoaqua/shqbuoidaxanhkotlC.jpg" class="imgsphomele" onerror="loadErrorImage(this,'/images/noimg.png');" /></a>
						<div id="h1giasphomele">
				<span class='giakmhome'><p class='xuongdong'></p>65,000 VND</span>			</div>
			<div id="nutchitiethome"><span class="nutchitiethometext"><span class="nutchitiethometext"><a href="/chi-tiet/25/buoi-da-xanh-loai-nho/">Chi tiết</a></span></span></div>		
		</div>
				<div id="sphomele">
			<h1 class="h1tensp"><a href="/chi-tiet/26/thanh-long-ruot-do/">Thanh long ruột đỏ</a></h1>
			<a href="/chi-tiet/26/thanh-long-ruot-do/"><img src="/media/anhhoaqua/shqthanhlongruotdoC.jpg" class="imgsphomele" onerror="loadErrorImage(this,'/images/noimg.png');" /></a>
						<div id="h1giasphomele">
				<span class='giakmhome'><p class='xuongdong'></p>65,000 VND</span>			</div>
			<div id="nutchitiethome"><span class="nutchitiethometext"><span class="nutchitiethometext"><a href="/chi-tiet/26/thanh-long-ruot-do/">Chi tiết</a></span></span></div>		
		</div>
				<div id="sphomele">
			<h1 class="h1tensp"><a href="/chi-tiet/27/vu-sua-lo-ren/">Vú sữa Lò rèn</a></h1>
			<a href="/chi-tiet/27/vu-sua-lo-ren/"><img src="/media/anhhoaqua/shqvusualorenC.JPG" class="imgsphomele" onerror="loadErrorImage(this,'/images/noimg.png');" /></a>
						<div id="h1giasphomele">
				<span class='giakmhome'><p class='xuongdong'></p>75,000 VND</span>			</div>
			<div id="nutchitiethome"><span class="nutchitiethometext"><span class="nutchitiethometext"><a href="/chi-tiet/27/vu-sua-lo-ren/">Chi tiết</a></span></span></div>		
		</div>
				<div id="sphomele">
			<h1 class="h1tensp"><a href="/chi-tiet/28/vu-sua-bo-hong/">Vú sữa Bơ hồng</a></h1>
			<a href="/chi-tiet/28/vu-sua-bo-hong/"><img src="/media/anhhoaqua/shqvusuabohongC.jpg" class="imgsphomele" onerror="loadErrorImage(this,'/images/noimg.png');" /></a>
						<div id="h1giasphomele">
				<span class='giakmhome'><p class='xuongdong'></p>67,000 VND</span>			</div>
			<div id="nutchitiethome"><span class="nutchitiethometext"><span class="nutchitiethometext"><a href="/chi-tiet/28/vu-sua-bo-hong/">Chi tiết</a></span></span></div>		
		</div>
				<div id="sphomele">
			<h1 class="h1tensp"><a href="/chi-tiet/30/bo-sap-dac-lac/">Bơ sáp Đắc Lắc</a></h1>
			<a href="/chi-tiet/30/bo-sap-dac-lac/"><img src="/media/anhhoaqua/shqbotrinhmuoiC.jpg" class="imgsphomele" onerror="loadErrorImage(this,'/images/noimg.png');" /></a>
						<div id="h1giasphomele">
				<span class='giakmhome'><p class='xuongdong'></p>75,000 VND</span>			</div>
			<div id="nutchitiethome"><span class="nutchitiethometext"><span class="nutchitiethometext"><a href="/chi-tiet/30/bo-sap-dac-lac/">Chi tiết</a></span></span></div>		
		</div>
				<div id="sphomele">
			<h1 class="h1tensp"><a href="/chi-tiet/31/dua-xiem/">Dừa Xiêm</a></h1>
			<a href="/chi-tiet/31/dua-xiem/"><img src="/media/anhhoaqua/shqduaxiemC.jpg" class="imgsphomele" onerror="loadErrorImage(this,'/images/noimg.png');" /></a>
						<div id="h1giasphomele">
				<span class='giakmhome'><p class='xuongdong'></p>22,000 VND</span>			</div>
			<div id="nutchitiethome"><span class="nutchitiethometext"><span class="nutchitiethometext"><a href="/chi-tiet/31/dua-xiem/">Chi tiết</a></span></span></div>		
		</div>
				<div id="sphomele">
			<h1 class="h1tensp"><a href="/chi-tiet/34/dua-hau-khong-hat/">Dưa hấu không hạt</a></h1>
			<a href="/chi-tiet/34/dua-hau-khong-hat/"><img src="/media/anhhoaqua/shqduadaukhonghatC.jpg" class="imgsphomele" onerror="loadErrorImage(this,'/images/noimg.png');" /></a>
						<div id="h1giasphomele">
				<span class='giakmhome'><p class='xuongdong'></p>21,000 VND</span>			</div>
			<div id="nutchitiethome"><span class="nutchitiethometext"><span class="nutchitiethometext"><a href="/chi-tiet/34/dua-hau-khong-hat/">Chi tiết</a></span></span></div>		
		</div>
				<div id="sphomele">
			<h1 class="h1tensp"><a href="/chi-tiet/39/xoai-cat-hoa-loc/">Xoài cát Hòa Lộc</a></h1>
			<a href="/chi-tiet/39/xoai-cat-hoa-loc/"><img src="/media/anhhoaqua/shqxoaicathoalocC.png" class="imgsphomele" onerror="loadErrorImage(this,'/images/noimg.png');" /></a>
						<div id="h1giasphomele">
				<span class='giakmhome'><p class='xuongdong'></p>85,000 VND</span>			</div>
			<div id="nutchitiethome"><span class="nutchitiethometext"><span class="nutchitiethometext"><a href="/chi-tiet/39/xoai-cat-hoa-loc/">Chi tiết</a></span></span></div>		
		</div>
				<div id="sphomele">
			<h1 class="h1tensp"><a href="/chi-tiet/47/sapoche-hong-xiem-tien-giang/">Sapoche - Hồng xiêm Tiền Giang</a></h1>
			<a href="/chi-tiet/47/sapoche-hong-xiem-tien-giang/"><img src="/media/anhhoaqua/shqsapocheC.jpg" class="imgsphomele" onerror="loadErrorImage(this,'/images/noimg.png');" /></a>
						<div id="h1giasphomele">
				<span class='giakmhome'><p class='xuongdong'></p>45,000 VND</span>			</div>
			<div id="nutchitiethome"><span class="nutchitiethometext"><span class="nutchitiethometext"><a href="/chi-tiet/47/sapoche-hong-xiem-tien-giang/">Chi tiết</a></span></span></div>		
		</div>
				<div id="sphomele">
			<h1 class="h1tensp"><a href="/chi-tiet/42/xoai-cat-chu/">Xoài Cát Chu</a></h1>
			<a href="/chi-tiet/42/xoai-cat-chu/"><img src="/media/anhhoaqua/shqxoaicatchuC.jpg" class="imgsphomele" onerror="loadErrorImage(this,'/images/noimg.png');" /></a>
			<div id='deal1'><span class='textdeal'>Khuyến mại</span></div>			<div id="h1giasphomele">
				<span class='giakmhome'>65,000 VND</span><p class='brdong'></p><span class='giahqhometext'>KM: mua 5 kg tặng 1kg</span>			</div>
			<div id="nutchitiethome"><span class="nutchitiethometext"><span class="nutchitiethometext"><a href="/chi-tiet/42/xoai-cat-chu/">Chi tiết</a></span></span></div>		
		</div>
				<div id="sphomele">
			<h1 class="h1tensp"><a href="/chi-tiet/43/qua-kiwi-vang/">Quả Kiwi vàng</a></h1>
			<a href="/chi-tiet/43/qua-kiwi-vang/"><img src="/media/anhhoaqua/shqkiwivangC.jpg" class="imgsphomele" onerror="loadErrorImage(this,'/images/noimg.png');" /></a>
						<div id="h1giasphomele">
				<span class='giakmhome'><p class='xuongdong'></p>155,000 VND</span>			</div>
			<div id="nutchitiethome"><span class="nutchitiethometext"><span class="nutchitiethometext"><a href="/chi-tiet/43/qua-kiwi-vang/">Chi tiết</a></span></span></div>		
		</div>
				<div id="sphomele">
			<h1 class="h1tensp"><a href="/chi-tiet/44/qua-kiwi-xanh/">Quả Kiwi xanh</a></h1>
			<a href="/chi-tiet/44/qua-kiwi-xanh/"><img src="/media/anhhoaqua/shqkiwixanhC.jpg" class="imgsphomele" onerror="loadErrorImage(this,'/images/noimg.png');" /></a>
						<div id="h1giasphomele">
				<span class='giakmhome'><p class='xuongdong'></p>95,000 VND</span>			</div>
			<div id="nutchitiethome"><span class="nutchitiethometext"><span class="nutchitiethometext"><a href="/chi-tiet/44/qua-kiwi-xanh/">Chi tiết</a></span></span></div>		
		</div>
				<div id="sphomele">
			<h1 class="h1tensp"><a href="/chi-tiet/46/sau-rieng-ri-6-com-vang-hat-lep/">Sầu riêng Ri 6 -cơm vàng hạt lép</a></h1>
			<a href="/chi-tiet/46/sau-rieng-ri-6-com-vang-hat-lep/"><img src="/media/anhhoaqua/shqsauriengRi6C.jpg" class="imgsphomele" onerror="loadErrorImage(this,'/images/noimg.png');" /></a>
						<div id="h1giasphomele">
				<span class='giakmhome'><p class='xuongdong'></p>110,000 VND</span>			</div>
			<div id="nutchitiethome"><span class="nutchitiethometext"><span class="nutchitiethometext"><a href="/chi-tiet/46/sau-rieng-ri-6-com-vang-hat-lep/">Chi tiết</a></span></span></div>		
		</div>
				<div id="sphomele">
			<h1 class="h1tensp"><a href="/chi-tiet/48/vu-sua-tim/">Vú sữa tím</a></h1>
			<a href="/chi-tiet/48/vu-sua-tim/"><img src="/media/anhhoaqua/shqvusuatimc.jpg" class="imgsphomele" onerror="loadErrorImage(this,'/images/noimg.png');" /></a>
						<div id="h1giasphomele">
				<span class='giakmhome'><p class='xuongdong'></p>63,000 VND</span>			</div>
			<div id="nutchitiethome"><span class="nutchitiethometext"><span class="nutchitiethometext"><a href="/chi-tiet/48/vu-sua-tim/">Chi tiết</a></span></span></div>		
		</div>
				<div id="sphomele">
			<h1 class="h1tensp"><a href="/chi-tiet/49/cam-xoan/">Cam xoàn</a></h1>
			<a href="/chi-tiet/49/cam-xoan/"><img src="/media/anhhoaqua/shqcamxoanC.jpg" class="imgsphomele" onerror="loadErrorImage(this,'/images/noimg.png');" /></a>
						<div id="h1giasphomele">
				<span class='giakmhome'><p class='xuongdong'></p>75,000 VND</span>			</div>
			<div id="nutchitiethome"><span class="nutchitiethometext"><span class="nutchitiethometext"><a href="/chi-tiet/49/cam-xoan/">Chi tiết</a></span></span></div>		
		</div>
				<div id="sphomele">
			<h1 class="h1tensp"><a href="/chi-tiet/57/chuoi-ngu-dai-hoang/">Chuối Ngự Đại hoàng</a></h1>
			<a href="/chi-tiet/57/chuoi-ngu-dai-hoang/"><img src="/media/anhhoaqua/shqchuoingudaihoangC.jpg" class="imgsphomele" onerror="loadErrorImage(this,'/images/noimg.png');" /></a>
						<div id="h1giasphomele">
				<span class='giakmhome'><p class='xuongdong'></p>31,000 VND</span>			</div>
			<div id="nutchitiethome"><span class="nutchitiethometext"><span class="nutchitiethometext"><a href="/chi-tiet/57/chuoi-ngu-dai-hoang/">Chi tiết</a></span></span></div>		
		</div>
				<div id="sphomele">
			<h1 class="h1tensp"><a href="/chi-tiet/58/mit-nghe-chin-cay/">Mít nghệ chín cây</a></h1>
			<a href="/chi-tiet/58/mit-nghe-chin-cay/"><img src="/media/anhhoaqua/shqmitsieusomC.jpg" class="imgsphomele" onerror="loadErrorImage(this,'/images/noimg.png');" /></a>
						<div id="h1giasphomele">
				<span class='giakmhome'><p class='xuongdong'></p>49,000 VND</span>			</div>
			<div id="nutchitiethome"><span class="nutchitiethometext"><span class="nutchitiethometext"><a href="/chi-tiet/58/mit-nghe-chin-cay/">Chi tiết</a></span></span></div>		
		</div>
				<div id="sphomele">
			<h1 class="h1tensp"><a href="/chi-tiet/69/man-an-phuoc-qua-roi-/">Mận An Phước ( quả Roi)</a></h1>
			<a href="/chi-tiet/69/man-an-phuoc-qua-roi-/"><img src="/media/anhhoaqua/shqmananphuoc.jpg" class="imgsphomele" onerror="loadErrorImage(this,'/images/noimg.png');" /></a>
						<div id="h1giasphomele">
				<span class='giakmhome'><p class='xuongdong'></p>60,000 VND</span>			</div>
			<div id="nutchitiethome"><span class="nutchitiethometext"><span class="nutchitiethometext"><a href="/chi-tiet/69/man-an-phuoc-qua-roi-/">Chi tiết</a></span></span></div>		
		</div>
				<div id="sphomele">
			<h1 class="h1tensp"><a href="/chi-tiet/70/chom-chom-nhan/">Chôm chôm nhãn</a></h1>
			<a href="/chi-tiet/70/chom-chom-nhan/"><img src="/media/anhhoaqua/shqchomchomnhanc.jpg" class="imgsphomele" onerror="loadErrorImage(this,'/images/noimg.png');" /></a>
						<div id="h1giasphomele">
				<span class='giakmhome'><p class='xuongdong'></p>55,000 VND</span>			</div>
			<div id="nutchitiethome"><span class="nutchitiethometext"><span class="nutchitiethometext"><a href="/chi-tiet/70/chom-chom-nhan/">Chi tiết</a></span></span></div>		
		</div>
				<div style="clear:both;"><table border="0" width="680" align="center" cellpadding="2" cellspacing="2" style="padding-top:0px;"><tr><td bgcolor="#fff" align=center style="border:#cccccc 0px solid; padding-top:2px; padding-bottom:2px;"><table border="0"  align="center" cellpadding="1" cellspacing="1" ><tr><td bgcolor="#f5f5f5"  width=80px align=center style="border:#cccccc 1px solid; padding-top:2px; padding-bottom:3px;"> Trang 1/3 </td><td bgcolor="#f5f5f5" width=10px align=center class="tdpage" ><a href="/hoa-qua-trong-vu/trang-1/" style=color:#000000;text-decoration:none  >&nbsp;&nbsp;1&nbsp;&nbsp;</a></td><td bgcolor="#f5f5f5" width=10px align=center class="tdpage" ><a href="/hoa-qua-trong-vu/trang-2/" style=color:#000000;text-decoration:none  >&nbsp;&nbsp;2&nbsp;&nbsp;</a></td><td bgcolor="#f5f5f5" width=10px align=center class="tdpage" ><a href="/hoa-qua-trong-vu/trang-3/" style=color:#000000;text-decoration:none  >&nbsp;&nbsp;3&nbsp;&nbsp;</a></td></tr></table></td></tr></table></div>	</div>
</div>
<div id="newshome">
	<div id="newshomespds">
	<div id="titlenewshot">Các bài viết về Shop Hoa Quả</div>
	<ul class="list">
				<li class="dot"><img src="/images/dot.png" align="absmiddle" style="padding-right: 5px;"><a href="/tin-chi-tiet/430/thuong-hieu-buoi-ngot-doan-hung-dang-bi-loi-dung/">Thương hiệu bưởi ngọt Đoan Hùng đang bị lợi dụng</a></li>						
				<li class="dot"><img src="/images/dot.png" align="absmiddle" style="padding-right: 5px;"><a href="/tin-chi-tiet/428/lang-dac-san-buoi-dien-diu-hiu-ngay-giap-tet/">Làng đặc sản bưởi Diễn đìu hiu ngày giáp Tết</a></li>						
				<li class="dot"><img src="/images/dot.png" align="absmiddle" style="padding-right: 5px;"><a href="/tin-chi-tiet/427/nha-cung-cap-buoi-da-xanh-lon-nhat-ben-tre-co-so-huong-mien-tay-dong-hanh-cung-nong-dan/">Nhà cung cấp bưởi da xanh lớn nhất Bến Tre- cơ sơ Hương Miền Tây đồng hành cùng nông dân</a></li>						
				<li class="dot"><img src="/images/dot.png" align="absmiddle" style="padding-right: 5px;"><a href="/tin-chi-tiet/423/che-shan-tuyet-300-tuoi/">Chè Shan tuyết 300 tuổi</a></li>						
				<li class="dot"><img src="/images/dot.png" align="absmiddle" style="padding-right: 5px;"><a href="/tin-chi-tiet/416/man-tam-hoa-mu-cang-chai/">Mận tam hoa Mù Cang Chải</a></li>						
			</ul>
	<div id="newshotmore"><span class="more"><a href="/tin-tuc/">Xem thêm tin khác &gt;&gt;</a></span></div>
</div></div>
		</div>
	</div>
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