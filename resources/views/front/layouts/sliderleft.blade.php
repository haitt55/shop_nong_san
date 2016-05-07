<div id="sliderleft">
	<div id="hotline">
		<div id="titlehotline">Mua hàng</div>
		<table style="width: 100%">
			<tr>
				<td width="6%" height="30"><img src="/images/tele.png" align="absmiddle" height="25"  border="0"  /></td>
				<td colspan="3" width="94%"><b><span style="font-size: 14px">Bán lẻ: {!! app_settings('retail_phone') !!}</span></b></td>
			</tr>
			<tr>
				<td width="6%" height="30"><img src="/images/tele.png" align="absmiddle" height="25"  border="0"  /></td>
				<td colspan="3" width="44%"><b><span style="font-size: 14px">Đại lý: {!! app_settings('whole_phone') !!}</span></b></td>
			</tr>
			<tr>
				<td width="6%" height="35" style="padding-left: 3px;">
					<a href="ymsgr:SendIM?kd.shophoaqua"><img src="/images/yahoo.png" align="absmiddle" height="25" border="0" /></a></td>
				<td width="44%">
					<b>Chat Yahoo!</b></td>
				<td width="6%" height="30" style="padding-left: 3px;">
					<a href="skype:haitt55?chat"><img src="/images/skype.png" align="absmiddle" height="25" border="0" /></a></td>
				<td width="44%">
					<b>Chat Skype</b></td>
			</tr>
			<tr>
				<td width="6%" height="30"><img src="/images/shopicon.png" height="25"  border="0"  /></td>
				<td colspan="3" width="94%"><span style="line-height: 150%; font-weight: bold; ">{!! app_settings('address') !!}</span></td>
			</tr>
		</table>
	</div>
	<div id="menuleft">
		@foreach($__productCategories as $category)
			<div id="titlemenu">
				<span class="titlemenutext ">
				{!! link_to_route('front.categories.index', $category->name, $category->id) !!}
				</span>
			</div>
			<div id="contentmenu">
				<div class="scroll-pane">
					<ul class="list">
					@foreach (get_product_by_category($category->id) as $product)
						<li class="dot">
							<img src="/images/dot.png" align="absmiddle" style="padding-right: 5px;">
							{!! link_to_route('front.products.detail', $product->name, $product->id) !!}
						</li>
					@endforeach
					</ul>
				</div>
			</div>
		@endforeach
		<div id="endmenu"></div>
	</div>
	<div id="thanhvienvip">
		<a href="{!! route('front.home.preference') !!}" border="0"><img src="/images/ads/1353922031_ads.png" class="imgthanhvienvip"></a>
	</div>
	<div id="spbanchay">
		<div id="titlebanchay">Sản phẩm bán chạy</div>
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