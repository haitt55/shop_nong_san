@extends('front.layouts.master')

@section('content')
	@include('front.layouts.sliderleft')
	<div id="contentwrapper">
		@include('front.layouts.slideshow')
		@include('front.layouts.hotnews')
		<div id="homecontent">
			<div id="titlehomesp">Nông sản đang trong mùa vụ&nbsp;&nbsp;&nbsp;&nbsp;
				<span class="chitiethoaquaall">
					<a href="hoa-qua-mua-vu/hoa-qua-dang-trong-mua-vu/index.html">Xem tất cả&nbsp;&gt;&gt;</a>
				</span>
			</div>
			<div id="contenthonesp">
				@foreach($products as $product)
				<div id="sphomele">
					<h1 class="h1tensp">
						{!! link_to_route('front.products.detail', $product->name, $product->id) !!}
					</h1>
					<a href="{!! route('front.products.detail', $product->id) !!}"><img src="{{ $product->images->first() ? $product->images->first()->path : '' }}" class="imgsphomele" onerror="loadErrorImage(this,'images/noimg.png');" /></a>
					<div id="h1giasphomele">
						<span class='giakmhome'><p class='xuongdong'></p>{{ $product->price ? display_money($product->price) : '' }}</span>
					</div>
					<div id="nutchitiethome">
						<span class="nutchitiethometext">
							<span class="nutchitiethometext">
								{!! link_to_route('front.products.detail', 'Chi tiết', $product->id) !!}
							</span>
						</span>
					</div>		
				</div>
				@endforeach
			</div>
			@include('front.layouts.homenews')
		</div>
	</div>
@endsection