<div id="tinhot">
	<ul class="listtinhot">
		@foreach($__hotNews as $news)
		<li class="dottinhot">
			<img src="images/dotted.png" align="absmiddle" style="float: left; height: 12px; padding: 5px 5px 0 0;">
			{!! link_to_route('front.news.detail', $news->title, $news->id) !!}
		</li>
		@endforeach
	</ul>
</div>