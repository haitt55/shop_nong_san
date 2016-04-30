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
					<h1 class="h1tensp"><a href="chi-tiet/21/buoi-nam-roi/index.html">{{ $product->name }}</a></h1>
					<a href="chi-tiet/21/buoi-nam-roi/index.html"><img src="{{ $product->image }}" class="imgsphomele" onerror="loadErrorImage(this,'images/noimg.png');" /></a>
					<div id="h1giasphomele">
						<span class='giakmhome'><p class='xuongdong'></p>{{ $product->price }} VND</span>
					</div>
					<div id="nutchitiethome">
						<span class="nutchitiethometext">
							<span class="nutchitiethometext">
								<a href="chi-tiet/21/buoi-nam-roi/index.html">Chi tiết</a>
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