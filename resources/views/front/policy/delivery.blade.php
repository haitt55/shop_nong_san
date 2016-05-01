@extends('front.layouts.master')

@section('content')
<div id="wrappercontent">
	<div style="float: right; width: 900px; height: 10px;"></div>
	<div id="contentwide">
		<div id="content">
			<div id="supleft">
				@include('front.layouts.supleftweb')
				<div id="supleftwebcont">
					<h1 class="titlesupleftweb">Chính sách giao hàng</h1>
					<h2 class="contsupleftweb"><p>&nbsp;</p>
						<p><strong><span style="font-size: medium;"><span style="font-family: Arial;">1. Nhận h&agrave;ng tại của h&agrave;ng tại H&agrave; Nội:</span></span></strong></p>
						<ul>
						    <li><span style="font-size: medium;"><span style="font-family: Arial;">Qu&yacute; kh&aacute;ch h&agrave;ng nhận h&agrave;ng trực tiếp tại cửa h&agrave;ng số <strong>123 Đặng Tiến Đ&ocirc;ng, Đống Đa H&agrave; Nội( đối diện G&ograve; Đống Đa)</strong><br />
						    </span></span></li>
						    <li><span style="font-size: medium;"><span style="font-family: Arial;">Qu&yacute; kh&aacute;ch kiểm tra kỹ h&agrave;ng h&oacute;a v&agrave; k&yacute; nhận v&agrave;o bi&ecirc;n bản giao nhận h&agrave;ng ( đối với đơn h&agrave;ng lớn)</span></span></li>
						    <li><span style="font-size: medium;"><span style="font-family: Arial;">Thời gian giao nhận tại cửa h&agrave;ng tại H&agrave; Nội</span></span></li>
						    <li><span style="font-size: medium;"><span style="font-family: Arial;">Từ 07 giờ đến 22h c&aacute;c ng&agrave;y trong tuần từ thứ 2 đến thứ Chủ Nhật</span></span></li>
						</ul>
						<p><strong><span style="font-size: medium;"><span style="font-family: Arial;">2. Giao nhận tại nh&agrave;:</span></span></strong></p>
						<ul>
						    <li><span style="font-size: medium;"><span style="font-family: Arial;">Bộ phận giao nhận sẽ li&ecirc;n lạc với Qu&yacute; kh&aacute;ch h&agrave;ng để sắp xếp thời gian, địa điểm cụ thể để giao h&agrave;ng cho Qu&yacute; kh&aacute;ch.</span></span></li>
						    <li><span style="font-size: medium;"><span style="font-family: Arial;">Qu&yacute; kh&aacute;ch kiểm tra kỹ h&agrave;ng h&oacute;a v&agrave; k&yacute; nhận v&agrave;o Bi&ecirc;n bản giao nhận h&agrave;ng( đối với đơn h&agrave;ng lớn)</span></span></li>
						    <li><span style="font-size: medium;"><span style="font-family: Arial;">Qu&yacute; kh&aacute;ch thanh to&aacute;n cho nh&acirc;n vi&ecirc;n giao nhận to&agrave;n bộ hoặc một phần (nếu đ&atilde; đặt cọc) gi&aacute; trị h&agrave;ng h&oacute;a đ&atilde; mua.</span></span></li>
						</ul>
						<p><span style="font-size: medium;"><span style="font-family: Arial;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span><strong><span style="font-family: Arial;">Chi ph&iacute; giao tại nh&agrave;</span></strong></span></p>
						<ul>
						    <li><span style="font-size: medium;"><span style="font-family: Arial;">Với đơn h&agrave;ng từ 250.000 vnd trở l&ecirc;n th&igrave; miễn ph&iacute; vận chuyển. Với địa điểm n&agrave;o qu&aacute; xa so với địa chỉ cửa h&agrave;ng từ 10 km trở l&ecirc;n th&igrave; sẽ&nbsp; t&iacute;nh th&ecirc;m ph&iacute; vận chuyển từ 10.000 VNĐ đến 20.000 VNĐ</span></span></li>
						    <li><span style="font-size: medium;"><span style="font-family: Arial;">Với đơn h&agrave;ng nhỏ hơn 250.000 vnd th&igrave; ph&iacute; vận chuyển l&agrave; 10.000 vnd. Tr&ecirc;n cự li 10 km ph&iacute; vận chuyển l&agrave; 20.000 vnd</span></span></li>
						    <li><span style="font-size: medium;"><span style="font-family: Arial;">Đặc biệt với c&aacute;c kh&aacute;ch h&agrave;ng c&oacute; thẻ hội vi&ecirc;n v&agrave;ng th&igrave; miễn ph&iacute; vận chuyển với mọi đơn h&agrave;ng với mọi gi&aacute; trị</span></span></li>
						    <li><span style="font-size: medium;"><span style="font-family: Arial;">Đối với kh&aacute;ch h&agrave;ng n&agrave;o ở ngoại th&agrave;nh Th&agrave;nh phố H&agrave; Nội hoặc ở tỉnh xa, xin h&atilde;y li&ecirc;n lạc với shop hoa qua để được hỗ trợ tốt nhất.</span></span></li>
						</ul>
						<p><span style="font-size: medium;"><strong><span style="font-family: Arial;">3.Thời gian giao h&agrave;ng:</span></strong></span></p>
						<ul>
						    <li><span style="font-size: medium;"><span style="font-family: Arial;">Đối với kh&aacute;ch h&agrave;ng nội th&agrave;nh th&igrave; t&ugrave;y v&agrave;o việc sắp xếp thời gian của qu&yacute; kh&aacute;ch để shop hoa qua giao h&agrave;ng 1 c&aacute;ch thuận lợi nhất cho qu&yacute; kh&aacute;ch. </span></span></li>
						    <li><span style="font-size: medium;"><span style="font-family: Arial;">Nh&acirc;n vi&ecirc;n giao h&agrave;ng c&oacute; thể đi bất kỳ l&uacute;c n&agrave;o nếu qu&yacute; kh&aacute;ch y&ecirc;u cầu.</span></span></li>
						    <li><span style="font-size: medium;"><span style="font-family: Arial;">Chậm nhất trong v&ograve;ng 24 h Shop hoa qua sẽ giao h&agrave;ng với mọi đơn h&agrave;ng cho qu&yacute; kh&aacute;ch để đảm việc hoa quả được tươi ngon.</span></span></li>
						    <li><span style="font-size: medium;"><span style="font-family: Arial;">Đối với đại l&yacute; tại c&aacute;c Tỉnh th&igrave; sẽ giao h&agrave;ng t&ugrave;y theo thời gian chuyến xe kh&aacute;ch sao cho hợp l&yacute; nhất.<br />
						    </span></span></li>
						</ul>
						<p><span style="font-size: medium;"><span style="font-family: Arial;"><br />
						&nbsp;<br />
						</span></span></p>
						<p><span style="font-size: medium;"><span style="font-family: Arial;">&nbsp;</span></span></p>
						<p><span style="font-size: medium;"><span style="font-family: Arial;">&nbsp;</span></span></p>
						<p><span style="font-size: medium;"><span style="font-family: Arial;">&nbsp;</span></span></p>
					</h2>
				</div>
			</div>
			@include('front.layouts.supright')
		</div>	
	</div>
</div>
@endsection