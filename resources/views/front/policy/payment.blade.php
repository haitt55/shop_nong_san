@extends('front.layouts.master')

@section('content')
<div id="wrappercontent">
	<div style="float: right; width: 900px; height: 10px;"></div>
	<div id="contentwide">
		<div id="content">
			<div id="supleft">
				@include('front.layouts.supleftweb')
				<div id="supleftwebcont">
					<h1 class="titlesupleftweb">Phương thức thanh toán</h1>
					<h2 class="contsupleftweb">
						<ul>
    						<li>
    							<span style="font-size: medium;">
    								Thanh to&aacute;n trực tiếp khi nhận h&agrave;ng<br />
    							</span>
    						</li>
    						<li>
    							<span style="font-size: medium;">
    								Hoặc chuyển khoản tại 3 ng&acirc;n h&agrave;ng
    							</span>
    						</li>
						</ul>
						<p>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;<span style="font-size: medium;">&nbsp; &nbsp;- Ng&acirc;n h&agrave;ng vietcombank</span></p>
						<p><span style="font-size: medium;">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; - Ng&acirc;n h&agrave;ng vietinbank</span></p>
						<p><span style="font-size: medium;">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; - Ng&acirc;n h&agrave;ng sacombank</span></p>
						<p><span style="font-size: medium;"> &nbsp;</span></p>
					</h2>
				</div>
			</div>
			@include('front.layouts.supright');
		</div>	
	</div>
	</div>
@endsection