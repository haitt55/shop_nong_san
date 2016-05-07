@extends('front.layouts.master')

@section('content')
	@include('front.layouts.sliderleft')
	<div id="contentwrapper">
		<div id="homecontent">
			@include('front.layouts.linktitlesp', ['linkRoute' => route('front.search.index'), 'name' => 'Tìm kiếm'])
				<div id="titlehomespall">
					<span class="titlehomesptext1">Kết quả tìm kiếm: </span>
				</div>
				<div id="contenthonesp">
				@if(count($products) > 0)
					@foreach($products as $product)
							<div id="sphomele">
								<h1 class="h1tensp">
									{!! link_to_route('front.products.detail', $product->name, $product->id) !!}
								</h1>
								<a href="{!! route('front.products.detail', $product->id) !!}">
									<img src="{!! $product->images->first() ? $product->images->first()->path : '' !!}" class="imgsphomele" onerror="loadErrorImage(this,'/images/noimg.png');">
								</a>
								<div id="h1giasphomele">
									<span class="giakmhome">{{ $product->price ? display_money($product->price) : '' }}</span>
									<p class="brdong"></p>
								</div>
								<div id="nutchitiethome" style="border-radius: 5px;">
									<span class="nutchitiethometext">
										<span class="nutchitiethometext">
											{!! link_to_route('front.products.detail', 'Chi tiết', $product->id) !!}
											<a href="/chi-tiet/20/buoi-da-xanh/"></a>
										</span>
									</span>
								</div>		
							</div>
					@endforeach
				@else
					Không có sản phẩm nào
				@endif
				</div>
		</div>
	</div>
@endsection