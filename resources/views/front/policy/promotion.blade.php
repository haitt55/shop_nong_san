@extends('front.layouts.master')

@section('content')
<div id="wrappercontent">
	<div style="float: right; width: 900px; height: 10px;"></div>
	<div id="contentwide">
		<div id="content">
			<div id="supleft">
				@include('front.layouts.supleftweb', ['menu' => 'Giới thiệu và chính sách'])
				<div id="supleftwebcont">
					<h1 class="titlesupleftweb">Chương trình khuyến mại</h1>
					<h2 class="contsupleftweb"><p>&nbsp;</p>
						<p><span style="font-size: medium;">C&aacute;c chương tr&igrave;nh khuyến mại được cập nhật li&ecirc;n tục tr&ecirc;n mục khuyến mại ở giao diện trang chủ<br />
						</span></p>
						<p><span style="font-size: medium;">Qu&yacute; kh&aacute;ch h&agrave;ng ch&uacute; &yacute; theo d&otilde;i th&ocirc;ng tin để mua được h&agrave;ng h&oacute;a gi&aacute; tốt nhất </span></p>
					</h2>
				</div>
			</div>
			@include('front.layouts.supright')
		</div>	
	</div>
</div>
@endsection