<div id="newshome">
	<div id="newshomespds">
		<div id="titlenewshot">Các bài viết về Shop Nông Sản</div>
		<ul class="list">
			@foreach($__homeNews as $news)
			<li class="dot">
				<img src="images/dot.png" align="absmiddle" style="padding-right: 5px;">
				{{--{!! link_to_route('front.news.detail', $news->title, $news->id) !!}--}}
				<a href="{{ news_detail_path($news) }}" >{{ $news->title }}</a>
			</li>
			@endforeach
		</ul>
		<div id="newshotmore">
			<span class="more">
				<a href="{!! route('front.news.index') !!}">Xem thêm tin khác &gt;&gt;</a>
			</span>
		</div>
	</div>
</div>