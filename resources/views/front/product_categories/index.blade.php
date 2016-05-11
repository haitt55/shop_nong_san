@extends('front.layouts.master')

@section('title', $category->name)

@section('keywords', $category->meta_keyword)

@section('description', $category->meta_description)

@section('content')
	@include('front.layouts.sliderleft')
	<div id="contentwrapper">
		<div id="homecontent">
			@include('front.layouts.linktitlesp', ['linkRoute' => route('front.categories.index'), 'name' => $category->name])
			<div id="contenthonesp">
			@if(count($products) > 0)
				@foreach($products as $product)
				<div id="sphomele">
					<h1 class="h1tensp">
						{!! link_to_route('front.products.detail', $product->name, $product->id) !!}
					</h1>
					<a href="{!! route('front.products.detail', $product->id) !!}">
						<img src="{!! $product->images->first() ? $product->images->first()->path : '' !!}" class="imgsphomele" onerror="loadErrorImage(this,'/images/noimg.png');"  />
					</a>
					<div id="h1giasphomele">
						<span class='giakmhome'>
							<p class='xuongdong'></p>
							{{ $product->price ? display_money($product->price) : '' }}
						</span>			
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
			@else
				Chưa có sản phẩm
			@endif
			</div>
	</div>

	</div>
@endsection