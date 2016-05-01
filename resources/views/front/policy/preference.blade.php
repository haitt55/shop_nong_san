@extends('front.layouts.master')

@section('content')
<div id="wrappercontent">
	<div style="float: right; width: 900px; height: 10px;"></div>
	<div id="contentwide">
		<div id="content">
			<div id="supleft">
				@include('front.layouts.supleftweb', ['menu' => 'Giới thiệu và chính sách'])
				<div id="supleftwebcont">
					<h1 class="titlesupleftweb">Thẻ ưu đãi thành viên</h1>
					<h2 class="contsupleftweb"><p>&nbsp;</p>
						<p><span style="font-size: medium;"><span style="font-family: Arial;">Ch&iacute;nh s&aacute;ch thẻ ưu đ&atilde;i th&agrave;nh vi&ecirc;n v&agrave; điểm thưởng.<br /><br />
						</span></span><span style="font-size: medium;"><span style="font-family: Arial;">Mỗi 1 điểm thưởng tương đương 10k.</span></span></p>
						<p><span style="font-size: medium;"><span style="font-family: Arial;">500 điểm thưởng: qu&yacute; kh&aacute;ch đạt thẻ bạc, giảm 5% cho mỗi h&oacute;a đơn mua h&agrave;ng tiếp theo.</span></span></p>
						<p><span style="font-size: medium;"><span style="font-family: Arial;">800 điểm thưởng: qu&yacute; kh&aacute;ch đạt thẻ v&agrave;ng, giảm 10% cho mỗi đơn h&agrave;ng tiếp theo. Miễn ph&iacute; vận chuyển với mọi đơn h&agrave;ng.</span></span></p>
						<p><span style="font-size: medium;"><span style="font-family: Arial;">Lưu &yacute;: Vui l&ograve;ng cung cấp cho ch&uacute;ng t&ocirc;i th&ocirc;ng tin c&aacute; nh&acirc;n: t&ecirc;n, số điện thoại để được t&iacute;ch lũy điểm thưởng sau mỗi lần mua h&agrave;ng.<br />
						</span></span></p>
						<p class="MsoNormal" style="margin-left: 0.25in;"><span style="font-size: medium;"><span style="font-family: Arial;">&nbsp;</span></span></p>
						<p class="MsoNormal" style="margin-left: 0.25in;">&nbsp;</p>
						<p class="MsoNormal" style="margin-left: 0.25in;">&nbsp;</p>
					</h2>
				</div>
			</div>
			@include('front.layouts.supright')
		</div>	
	</div>
</div>
@endsection