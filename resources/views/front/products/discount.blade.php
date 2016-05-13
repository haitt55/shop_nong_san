@extends('front.layouts.master')

@section('title', 'Khuyến mãi')

@section('keywords', 'Khuyến mãi')

@section('description', 'Khuyến mãi')

@section('content')
	@include('front.layouts.sliderleft')
	<div id="contentwrapper">
		<div id="homecontent">
			@include('front.layouts.linktitlesp', ['linkRoute' => route('front.products.discount'), 'name' => 'Khuyến mại'])
			<div id="contenthonesp">
				@if(count($productDiscounts))
					@foreach ($productDiscounts as $key => $product)
					<div id="sphomele">
						<h1 class="h1tensp"><a href="{{ product_detail_path($product) }}" >{{ $product->name }}</a></h1>
						<a href="{!! product_detail_path($product) !!}">
							<img src="{!! $product->images->first() ? $product->images->first()->path : '' !!}" class="imgsphomele" onerror="loadErrorImage(this,'/images/noimg.png');"  />
						</a>
						<div id='deal'>
							<span class='textdeal'>Giảm</span><br>
							<span class='phantramgiam'>{!! $product->discount !!}%</span>
						</div>
						<div id="h1giasphomele">
							<span class='giakmhome'>{!! priceDiscount($product->price, $product->discount) !!}</span>
							<p class='brdong'></p>
							<span class='giahqhometext'>Giá gốc: </span>
							<span class='giahqhome'>{{ $product->price ? display_money($product->price) : '' }}</span>
						</div>
						<div id="nutchitiethome">
							<span class="nutchitiethometext">
								<span class="nutchitiethometext">
									{{--{!! link_to_route('front.products.detail', 'Chi tiết', $product->id) !!}--}}
									<a href="{{ product_detail_path($product) }}" >Chi tiết</a>
								</span>
							</span>
						</div>		
					</div>
					@endforeach
				@else
					Hiện tại không có sản phẩm nào khuyến mãi!
				@endif
			</div>
		</div>
	</div>
@endsection