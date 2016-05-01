@extends('front.layouts.master')

@section('content')
<div id="wrappercontent">
	<div style="float: right; width: 900px; height: 10px;"></div>
	<div id="contentwide">
		<div id="content">
			<div id="supleft">
				@include('front.layouts.supleftweb')
				<div id="supleftwebcont">
					<h1 class="titlesupleftweb">Quy đinh đặt hàng</h1>
					<h2 class="contsupleftweb"><p>&nbsp;</p>
						<ul>
						    <li><span style="font-size: medium;"><span style="font-family: Arial;">&nbsp;&nbsp;&nbsp;&nbsp; Shop hoa qua chỉ chấp nhận những Đơn đặt h&agrave;ng khi Kh&aacute;ch h&agrave;ng đ&atilde; cung cấp đầy đủ c&aacute;c th&ocirc;ng tin ch&iacute;nh x&aacute;c về địa chỉ, số điện thoại cố định, họ t&ecirc;n người mua&hellip;<br />
						    </span></span></li>
						    <li><span style="font-size: medium;"><span style="font-family: Arial;">&nbsp;&nbsp;&nbsp;&nbsp; Sau khi Qu&yacute; kh&aacute;ch đặt h&agrave;ng, shop hoa qua sẽ li&ecirc;n lạc lại để kiểm tra th&ocirc;ng tin v&agrave; thỏa thuận th&ecirc;m những điều c&oacute; li&ecirc;n quan.<br />
						    </span></span></li>
						    <li><span style="font-size: medium;"><span style="font-family: Arial;">&nbsp;&nbsp;&nbsp;&nbsp; Địa chỉ giao h&agrave;ng phải c&oacute; th&ocirc;ng tin người nhận h&agrave;ng, địa chỉ, số điện thoại ch&iacute;nh x&aacute;c, r&otilde; r&agrave;ng.<br />
						    </span></span></li>
						    <li><span style="font-size: medium;"><span style="font-family: Arial;">&nbsp;&nbsp;&nbsp;&nbsp; Chi ph&iacute; thanh to&aacute;n (c&oacute; thể) bao gồm cả tiền vận chuyển n&ecirc;n Qu&yacute; kh&aacute;ch xem r&otilde; số tiền m&igrave;nh phải thanh to&aacute;n trước khi ho&agrave;n tất đơn h&agrave;ng.<br />
						    </span></span></li>
						    <li><span style="font-size: medium;"><span style="font-family: Arial;">&nbsp;&nbsp;&nbsp;&nbsp; Một số trường hợp kh&aacute;c: Gi&aacute; trị đơn h&agrave;ng qu&aacute; lớn, địa chỉ giao h&agrave;ng trong ng&otilde;, ng&aacute;ch, ngo&agrave;i khu vực vận chuyển của đơn vị giao nhận hoặc c&oacute; thể dẫn đến nguy hiểm. Shop hoa qua c&oacute; thể xin được từ chối giao h&agrave;ng.</span></span>&nbsp;<span style="font-size: medium;"><span style="font-family: Arial;"> Shophoaqua.vn mời kh&aacute;ch h&agrave;ng qua địa chỉ cửa h&agrave;ng để nhận h&agrave;ng trực tiếp. Mong Qu&yacute; kh&aacute;ch h&agrave;ng th&ocirc;ng cảm!<br />
						    </span></span><span style="font-size: medium;"><span style="font-family: Arial;"> <br />
						    </span></span></li>
						</ul>
						<p><span style="font-size: medium;"><span style="font-family: Arial;">&nbsp;<br />
						</span></span></p>
					</h2>
				</div>
			</div>
			@include('front.layouts.supright')
		</div>	
	</div>
</div>
@endsection