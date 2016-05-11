@extends('front.layouts.master')

@section('title', $news->title)

@section('keywords', $news->meta_keyword)

@section('description', $news->meta_description)

@section('content')
	@include('front.layouts.sliderleft')
	<div id="contentwrapper">
			<div id="contentwide">
	<div id="content">
		<div id="newsmains">
			<div id="capnews">
				@include('front.layouts.linktitlesp', ['linkRoute' => route('front.news.index'), 'name' => 'Tin tức'])
			</div>
			<div id="capmainnews">
				<h1 class="h1newstitle">{{ $news->title }}</h1>
				{!! $news->content !!}
			</div>
			<div id="capnewslienquan">
				<div id="titlecaplienquan">Bài cùng chuyên mục</div>
				<div id="listcaplienquan">
					@if(count($arrNews) > 0)
					<ul class="list">
						@foreach($arrNews as $moreNews)
							<li class="dot">
								<img src="../../../images/dot.png" align="absmiddle" style="padding-right: 5px;">
								{!! link_to_route('front.news.detail', $moreNews->title, $moreNews->id) !!}
							</li>											
						@endforeach
					</ul>
					@else
						Không có bài viết liên quan!
					@endif
				</div>
			</div>
		</div>
	</div>
</div>		</div>
@endsection