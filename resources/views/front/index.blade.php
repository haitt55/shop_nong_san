@extends('front.layouts.master')

@section('title', 'Trang chủ')

@section('keywords', 'Trang chủ')

@section('description', 'Trang chủ')

@section('content')
	@include('front.layouts.sliderleft')
	<div id="contentwrapper">
		@include('front.layouts.slideshow')
		@include('front.layouts.hotnews')
			<div id="homecontent">
				@foreach($categories as $category)
					<div id="titlehomesp">{!! $category->name !!}&nbsp;&nbsp;&nbsp;&nbsp;
						<span class="chitiethoaquaall">
							{{--{!! link_to_route('front.categories.index', 'Xem tất cả&nbsp;&gt;&gt;', $category->id) !!}--}}
							<a href="{{ category_detail_path($category) }}" >Xem tất cả&nbsp;&gt;&gt;</a>
						</span>
					</div>
					<div id="contenthonesp">
						@foreach(get_product_by_category($category->id) as $product)
						<div id="sphomele">
							<h1 class="h1tensp">
								{{--{!! link_to_route('front.products.detail', $product->name, $product->id) !!}--}}
								<a href="{{ product_detail_path($product) }}" >{{ $product->name }}</a>
							</h1>
							<a href="{!! product_detail_path($product) !!}">
								<img src="{{ $product->images->first() ? $product->images->first()->path : '' }}" class="imgsphomele" onerror="loadErrorImage(this,'images/noimg.png');" />
							</a>
							<div id="h1giasphomele">
								<span class='giakmhome'><p class='xuongdong'></p>{{ $product->price ? display_money($product->price) : '' }}</span>
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
				</div>
			@endforeach
			@include('front.layouts.homenews')
		</div>
	</div>
@endsection