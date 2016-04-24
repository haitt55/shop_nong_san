<div id="sliderleft">
	<div id="hotline">
		<div id="titlehotline">Mua hàng</div>
		<table style="width: 100%">
			<tr>
				<td width="6%" height="30"><img src="images/tele.png" align="absmiddle" height="25"  border="0"  /></td>
				<td colspan="3" width="94%"><b><span style="font-size: 14px">Bán lẻ: 096.6868.001</span></b></td>
			</tr>
			<tr>
				<td width="6%" height="30"><img src="images/tele.png" align="absmiddle" height="25"  border="0"  /></td>
				<td colspan="3" width="44%"><b><span style="font-size: 14px">Đại lý: 096.6868.002</span></b></td>
			</tr>
			<tr>
				<td width="6%" height="35" style="padding-left: 3px;">
					<a href="ymsgr:SendIM?kd.shophoaqua"><img src="images/yahoo.png" align="absmiddle" height="25" border="0" /></a></td>
				<td width="44%">
					<b>Chat Yahoo!</b></td>
				<td width="6%" height="30" style="padding-left: 3px;">
					<a href="skype:kd.shophoaqua?chat"><img src="images/skype.png" align="absmiddle" height="25" border="0" /></a></td>
				<td width="44%">
					<b>Chat Skype</b></td>
			</tr>
			<tr>
				<td width="6%" height="30"><img src="images/shopicon.png" height="25"  border="0"  /></td>
				<td colspan="3" width="94%"><span style="line-height: 150%; font-weight: bold; ">Số 123 Đặng Tiến Đông, Đống Đa, Hà Nội</span></td>
			</tr>
		</table>
	</div>
	<div id="menuleft">
		<div id="titlemenu">
			<span class="titlemenutext ">
				<a href="hoa-qua/12/hoa-qua-viet-nam/index.html">Hoa quả Việt Nam</a>
			</span>
		</div>
		<div id="contentmenu">
			<div class="scroll-pane">
				<ul class="list">
				@foreach ($__products as $product)
					<li class="dot">
						<img src="images/dot.png" align="absmiddle" style="padding-right: 5px;">
						<a href="chi-tiet/21/buoi-nam-roi/index.html"> {!! $product->name !!} </a>
					</li>
				@endforeach
				</ul>
			</div>
		</div>
		<div id="titlemenu">
			<span class="titlemenutext ">
				<a href="hoa-qua/16/gio-hoa-qua/index.html">Giỏ hoa quả</a>
			</span>
		</div>
		<div id="contentmenu">
			<div class="">
				<ul class="list">
								</ul>
			</div>
		</div>
		<div id="titlemenu">
			<span class="titlemenutext ">
				<a href="hoa-qua/11/hoa-qua-nhap-khau/index.html">Hoa quả nhập khẩu</a>
			</span>
		</div>
		<div id="contentmenu">
			<div class="">
				<ul class="list">
					<li class="dot">
						<img src="images/dot.png" align="absmiddle" style="padding-right: 5px;"><a href="chi-tiet/44/qua-kiwi-xanh/index.html">Quả Kiwi xanh</a>
					</li>	
				</ul>
			</div>
		</div>
		<div id="endmenu"></div>
	</div>
	<div id="thanhvienvip">
		<a href="406/the-uu-dai-thanh-vien/index.html" border="0"><img src="images/ads/1353922031_ads.png" class="imgthanhvienvip"></a>
	</div>
	<div id="spbanchay">
		<div id="titlebanchay">Hoa quả bán chạy</div>
		<div id="contentbanchay">
			@foreach ($__products as $product)
				<a href="chi-tiet/20/buoi-da-xanh/index.html"><img src="{!! $product->image !!}" class="imgspbanchay" /> </a>
				<h1 class="h1titlebanchay"><a href="chi-tiet/20/buoi-da-xanh/index.html">{!! $product->name !!}</a></h1>
				<h2 class="h2giabanchay">
					{!! $product->price !!}		
				</h2>
				<div id="dottedbanchay"></div>
			@endforeach
		</div>
	</div>
</div>