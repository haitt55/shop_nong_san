<div id="supright">
	<div id="menusup">Giới thiệu và chính sách</div>
	<div id="conmenu">
		<ul class="list" style="font-size: 14px;">
			@foreach ($__policies as $policy)
			<li class="dot">
				<img src="../../images/dot.png" align="absmiddle" style="padding-right: 5px;">
				<a href="{{ policiesl_path($policy) }}" >{!! $policy->title !!}</a>
			</li>	
			@endforeach			
		</ul>	
	</div>
</div>