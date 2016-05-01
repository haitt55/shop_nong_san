@extends('front.layouts.master')

@section('content')
<div id="wrappercontent">
	<div style="float: right; width: 900px; height: 10px;"></div>
	<div id="contentwide">
		<div id="content">
			<div id="supleft">
				@include('front.layouts.supleftweb', ['menu' => 'Giới thiệu và chính sách'])
				<div id="supleftwebcont">
					<h1 class="titlesupleftweb">Hướng dẫn mua hàng</h1>
					<h2 class="contsupleftweb"><p>&nbsp;</p>
						<ul>
						    <li><span style="font-size: medium;"><span style="font-family: Arial;">Qu&yacute; kh&aacute;ch đặt h&agrave;ng trực tiếp qua cửa sổ chat Yahoo, Skype:</span></span></li>
						    <li><span style="font-size: medium;"><span style="font-family: Arial;">Gửi email theo địa chỉ: info@shophoaqua.vn .Vui l&ograve;ng điền r&otilde; th&ocirc;ng tin: t&ecirc;n người nhận h&agrave;ng, địa chỉ, số điện thoại.</span></span></li>
						    <li><span style="font-size: medium;"><span style="font-family: Arial;">Đặt h&agrave;ng trực tiếp trong giỏ h&agrave;ng online</span></span></li>
						    <li><span style="font-size: medium;"><span style="font-family: Arial;">Gọi điện theo số hotline: 096.6868.001 v&agrave; 096.6868.002</span></span></li>
						    <li><span style="font-size: medium;"><span style="font-family: Arial;">Đến trực tiếp shophoaqua, địa chỉ: số <strong>123 Đặng Tiến Đ&ocirc;ng, Đống Đa, H&agrave; Nội</strong>&nbsp; để tha hồ lựa chọn hoa quả.</span></span></li>
						    <li><span style="font-size: medium;"><span style="font-family: Arial;">Ch&uacute;ng t&ocirc;i lu&ocirc;n sẵn s&agrave;ng 24/ 7. Vui l&ograve;ng li&ecirc;n hệ với ch&uacute;ng t&ocirc;i để c&oacute; th&ocirc;ng tin chi tiết về c&aacute;c loại hoa quả, chương tr&igrave;nh khuyến m&atilde;i của shophoaqua.</span></span></li>
						    <li><span style="font-size: medium;"><span style="font-family: Arial;">Vui l&ograve;ng cung cấp cho ch&uacute;ng t&ocirc;i th&ocirc;ng tin c&aacute; nh&acirc;n: t&ecirc;n, số điện thoại để được t&iacute;ch lũy điểm thưởng sau mỗi lần mua h&agrave;ng.<br />
						    </span></span><span style="font-size: medium;"><span style="font-family: Arial;"><br />
						    </span></span></li>
						</ul>
						<p><span style="font-size: medium;"><span style="font-family: Arial;">&nbsp;</span></span></p>
						<p style="margin-left: 0.25in;" class="MsoNormal">&nbsp;</p>
						<p style="margin-left: 0.25in;" class="MsoNormal">&nbsp;</p>
					</h2>
				</div>
			</div>
			@include('front.layouts.supright')
		</div>	
	</div>
</div>
@endsection