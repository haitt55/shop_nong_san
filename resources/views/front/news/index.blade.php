@extends('front.layouts.master')

@section('content')
	@include('front.layouts.sliderleft')
	<div id="contentwrapper">
		<div id="contentwide">
			<div id="content">
				<div id="newsmains">
					<div id="capnews">
						@include('front.layouts.linktitlesp', ['linkRoute' => route('front.news.index'), 'name' => 'Tin tức'])
					</div>
					@if(count($arrNews) > 0)
						@foreach($arrNews as $news)
						<div id="mainnewsmain">
							<div id="contentnewsds">
								<div id="newsdsimg">
									<a href="{!! route('front.news.index', $news->id) !!}">
										<img src="{!! $news->images->first() ? $news->images->first()->path : '' !!}" class="newsdsimg1" />
									</a>
								</div>
								<div id="contentofimg">
									<h1 class="titlenewsdsimg">
										{!! link_to_route('front.news.detail', $news->title, $news->id) !!}
									</h1>
									<h2 class="contetnewsdsimg"></h2>
								</div>
							</div>
						</div>
						@endforeach
					@else
						Không có bài viết nào về Shop Nông Sản!
					@endif
				</div>
			</div>
		</div>		
	</div>
@endsection