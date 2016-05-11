@extends('front.layouts.master')

@section('title', 'Sản phẩm')

@section('keywords', 'sản phẩm')

@section('description', 'sản phẩm')

@section('content')
	@include('front.layouts.sliderleft')
	<div id="contentwrapper">
		<div id="homecontent">
			@include('front.layouts.linktitlesp', ['linkRoute' => route('front.products.index'), 'name' => 'Sản phẩm'])
			@foreach($categories as $category)
				<div id="titlehomespall">
					<span class="titlehomesptext">{!! $category->name !!}</span>&nbsp;&nbsp;&nbsp;&nbsp;
					<span class="chitiethoaquaall">
						{!! link_to_route('front.categories.index', 'Xem tất cả&nbsp;&gt;&gt;', $category->id) !!}
					</span>
				</div>
				<div id="contenthonesp">
					@foreach(get_product_by_category($category->id) as $product)
					<div id="sphomele">
						<h1 class="h1tensp">
							{!! link_to_route('front.products.detail', $product->name, $product->id) !!}
						</h1>
						<a href="{!! route('front.products.detail', $product->id) !!}">
							<img src="{!! $product->images->first() ? $product->images->first()->path : '' !!}" class="imgsphomele" onerror="loadErrorImage(this,'/images/noimg.png');"  />
						</a>
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
			@endforeach
		</div>
	</div>
@endsection