<div id="tinhot">
	<ul class="listtinhot">
		@foreach($__hotNews as $news)
		<li class="dottinhot">
			<img src="images/dotted.png" align="absmiddle" style="float: left; height: 12px; padding: 5px 5px 0 0;">
			<a href="tin-chi-tiet/447/loi-ich-khong-ngo-tu-mit-nghe-tien-giang/index.html">{{ $news->title }}</a>
		</li>
		@endforeach
	</ul>
</div>