<div id="newshome">
	<div id="newshomespds">
		<div id="titlenewshot">Các bài viết về Shop Hoa Quả</div>
		<ul class="list">
			@foreach($__homeNews as $news)
			<li class="dot">
				<img src="images/dot.png" align="absmiddle" style="padding-right: 5px;">
				<a href="tin-chi-tiet/430/thuong-hieu-buoi-ngot-doan-hung-dang-bi-loi-dung/index.html">{{ $news->title }}</a>
			</li>
			@endforeach
		</ul>
		<div id="newshotmore"><span class="more"><a href="tin-tuc/index.html">Xem thêm tin khác &gt;&gt;</a></span></div>
	</div>
</div>