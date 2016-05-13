@extends('front.layouts.master')

@section('title', $product->name)

@section('keywords', $product->meta_keyword)

@section('description', $product->meta_description)

@section('content')
	@include('front.layouts.sliderleft')
	<div id="contentwrapper">
		<div id="homecontent">
			@include('front.layouts.linktitlesp', ['linkRoute' => route('front.products.index'), 'name' => 'Sản phẩm'])
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
												<td width="90%"><b><span style="font-size: 14px">Bán lẻ: {!! app_settings('retail_phone') !!}</span></b></td>
											</tr>
											<tr>
												<td width="10%" height="30"><img src="/images/tele.png" align="absmiddle" height="25"  border="0"  /></td>
												<td width="90%"><b><span style="font-size: 14px">Đại lý: {!! app_settings('whole_phone') !!}</span></b></td>
											</tr>
											<tr>
												<td width="10%" height="30" style="padding-left: 3px;"><a href="ymsgr:SendIM?"><img src="/images/yahoo.png" align="absmiddle" height="25" border="0" /></a></td>
												<td width="90%"><b>Chat Yahoo!</b></td>
											</tr>
											<tr>
												<td height="35"><a href="skype:trungnn.92?chat"><img src="/images/skype.png" align="absmiddle" height="25" border="0"/></a></td>
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
															<a href="{{ policiesl_path(App\Models\IntroducePolicy::find(10)) }}" >Thanh toán</a>
														</span>
													</div>
												</td>
											</tr>
											<tr>									
												<td >
													<div id="huondanmua">
														<span class="chinhsachgiaohang">
															<a href="{{ policiesl_path(App\Models\IntroducePolicy::find(7)) }}" >Hướng dẫn mua hàng</a>
														</span>
													</div>
												</td>
											</tr>
											<tr>
												<td >
													<div id="chinhsach">
														<span class="chinhsachgiaohang">
															<a href="{{ policiesl_path(App\Models\IntroducePolicy::find(9)) }}" >Chính sách giao hàng</a>
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
					<div class="fb-comments" data-href="{!! product_detail_path($product) !!}" data-num-posts="10" data-width="686"></div>
				</div>
				<div id="splienquan">Hoa quả liên quan</div>
				<div id="contenthonesp">
				@if(count($listProducts) > 0)
					@foreach($listProducts as $eachProduct)
						<div id="sphomele">
							<h1 class="h1tensp">
								{{--{!! link_to_route('front.products.detail', $eachProduct->name, $eachProduct->id) !!}--}}
								<a href="{{ product_detail_path($eachProduct) }}" >{{ $eachProduct->name }}</a>
							</h1>
							<a href="{!! product_detail_path($eachProduct) !!}">
								<img src="/{!! $eachProduct->images->first() ? $eachProduct->images->first()->path : '' !!}" class="imgsphomele" onerror="loadErrorImage(this,'/images/noimg.png');"  />
							</a>
							<div id="h1giasphomele">
								<span class='giakmhome'>
									<p class='xuongdong'></p>
									{{ $eachProduct->price ? display_money($eachProduct->price) : '' }}
								</span>
							</div>
							<div id="nutchitiethome">
								<span class="nutchitiethometext">
									<span class="nutchitiethometext">
										<a href="{{ product_detail_path($eachProduct) }}" >Chi tiết</a>
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