@extends('front.layouts.master')

@section('content')
	@include('front.layouts.sliderleft')
	<div id="contentwrapper">
		<div id="homecontent">
			<div id="linktitlesp">
				<div id="iconhome"><a href="../../../index.html"><img src="/images/icontrangchu.png" border="0"></a></div>
				<!-- <div id="sptexthome"><span class="sptexthometext"> <a href="/">Trang chu</a></span></div> -->
				<div id="spblankds"></div>
				<div id="nameds"><span class="linktitle "><a href="../../../shop-hoa-qua/index.html">Hoa quả</a></span></div>
				<div id="spblankds"></div>
				<div id="nameds"><span class="linktitle">
					<a href='../../../hoa-qua/25/index.html'>Hoa quả Việt Nam</a>			</span>
				</div>
			</div>
			<div id="contentds">
				<div id="chitietsp">
					<div id="chitietsp-left">
						<div id="bigPic">
							@foreach($product->images as $key => $image)
							  	<a class="group1" href="/{!! $image->path !!}" title=""> <img class="thumbslarge" alt="" src="/{!! $image->path !!}"  /></a>
						   	@endforeach
						</div> 
						<div id="borderthumbs"> 
							<ul id="thumbs">
								@foreach($product->images as $key => $image)
									<li class="active" rel="{!! $key + 1 !!}"><img alt="" src="/{!! $image->path !!}" /> </li>
								@endforeach
							</ul>
						</div>
					</div>
					<div id="chitietsp-right">	
						<table style="width: 100%">
							<tr>
								<td colspan="2" valign="top"><span class="titlectds">{!! $product->name !!}</span></td>
							</tr>
							<tr>
								<td width="28%" class="textspctds">Xuất xứ:</td>
								<td width="70%" class="textspctds1">{{ $product->made_in }}</td>
							</tr>
							<tr>
								<td class="textspctdsgia">Giá bán:</td>
								<td class="textspctdsgia1">{{ $product->price ? display_money($product->price) : '' }}</td>
							</tr>
							<tr>
								<td class="textspctdsgia">Đơn vị:</td>
								<td class="textspctdsgia1"><span class="donvids"></span></td>
							</tr>
							<tr>
								<td class="textspctds">Khuyến mại:</td>
								<td class="textspctds2">{{ $product->discount }}%</td>
							</tr>
							<tr>
								<td class="textspctds">Tình trạng:</td>
								@if($product->status == 1)
									<td class="textspctds1">Còn hàng</td>
								@else 
									<td class="textspctds1">Hết hàng</td>
								@endif
							</tr>
						</table>
						<div id="hotlinespct">
							<table style="width: 100%">
								<tr>
									<td width="150"> 
										<table style="width: 100%">
											<tr>
												<td width="10%" height="30"><img src="/images/tele.png" align="absmiddle" height="25"  border="0"  /></td>
												<td width="90%"><b><span style="font-size: 14px">Bán lẻ: 096.6868.001</span></b></td>
											</tr>
											<tr>
												<td width="10%" height="30"><img src="/images/tele.png" align="absmiddle" height="25"  border="0"  /></td>
												<td width="90%"><b><span style="font-size: 14px">Đại lý: 096.6868.002</span></b></td>
											</tr>
											<tr>
												<td width="10%" height="30" style="padding-left: 3px;"><a href="ymsgr:SendIM?kd.shophoaqua"><img src="/images/yahoo.png" align="absmiddle" height="25" border="0" /></a></td>
												<td width="90%"><b>Chat Yahoo!</b></td>
											</tr>
											<tr>
												<td height="35"><a href="skype:kd.shophoaqua?chat"><img src="/images/skype.png" align="absmiddle" height="25" border="0"/></a></td>
												<td><b>Chat Skype</b></td>
											</tr>
										</table>
									</td>
									<td width="180">
										<table style="width: 100%; padding-left: 5px;">
											<tr>									
												<td >
													<div id="thanhtoan">
														<span class="chinhsachgiaohang">
															{!! link_to_route('front.home.payment', 'Thanh toán') !!}
														</span>
													</div>
												</td>
											</tr>
											<tr>									
												<td >
													<div id="huondanmua">
														<span class="chinhsachgiaohang">
															{!! link_to_route('front.home.buy_guide', 'Hướng dẫn mua hàng') !!}
														</span>
													</div>
												</td>
											</tr>
											<tr>
												<td >
													<div id="chinhsach">
														<span class="chinhsachgiaohang">
															{!! link_to_route('front.home.delivery', 'Chính sách giao hàng') !!}
														</span>
													</div>
												</td>
											</tr>
										</table>
									</td>
								</tr>
							</table>
						</div>	
						<table style="width: 328px">			
							<tr>
								<td height="40" class="textspctds"></td>			
							</tr>
							<tr>
								<td height="40" class="textspctds"><!-- AddThis Button BEGIN -->
									<div class="addthis_toolbox addthis_default_style ">
									<a class="addthis_button_facebook_like" fb:like:layout="button_count"></a>
									<a class="addthis_counter addthis_pill_style"></a>
									</div>
									<script type="text/javascript">var addthis_config = {"data_track_addressbar":false};</script>
									<script type="text/javascript" src="../../../../s7.addthis.com/js/300/addthis_widget.js#pubid=livefuz"></script>
									<!-- AddThis Button END --></td>			
							</tr>
						</table>
					</div>
				</div>
				<div id="infosp">
					<div id="infotitlesp">Thông tin về hoa quả</div>	
					{!! $product->detail !!}	
				</div>
				<br/><br/>
				<div id="splienquan">Trao đổi trực tuyến với khách hàng bằng tài khoản Facebook</div>
				<div id="commemsFB">
					<div class="fb-comments" data-href="{!! route('front.products.detail', $product->id) !!}" data-num-posts="10" data-width="686"></div>
				</div>
				<div id="splienquan">Hoa quả liên quan</div>
				<div id="contenthonesp">
				@if(count($listProducts) > 0)
					@foreach($listProducts as $eachProduct)
						<div id="sphomele">
							<h1 class="h1tensp">{!! link_to_route('front.products.detail', $eachProduct->name, $eachProduct->id) !!}</h1>
							<a href="{!! route('front.products.detail', $eachProduct->id) !!}">
								<img src="{!! $eachProduct->images->first() ? $eachProduct->images->first()->path : '' !!}" class="imgsphomele" onerror="loadErrorImage(this,'/images/noimg.png');"  />
							</a>
							<div id="h1giasphomele">
								<span class='giakmhome'>
									<p class='xuongdong'></p>
									{!! $eachProduct->price !!}
								</span>
							</div>
							<div id="nutchitiethome">
								<span class="nutchitiethometext">
									<span class="nutchitiethometext">
										{!! link_to_route('front.products.detail', 'Chi tiết', $eachProduct->id) !!}
									</span>
								</span>
							</div>	
						</div>
					@endforeach
				@else
					Không có sản phẩm liên quan
				@endif
				</div>
			</div>
		</div>
	</div>
@endsection