@extends('front.layouts.master')

@section('content')
	@include('front.layouts.sliderleft')
	<div id="contentwrapper">
		<div id="homecontent">
			<div id="linktitlesp">
				<div id="iconhome">
					<a href="../index.html"><img src="../images/icontrangchu.png" border="0"></a>
				</div>
				<div id="spblankds"></div>
				<div id="nameds">
					<span class="linktitle "><a href="index.html">Sản phẩm</a></span>
				</div>
			</div>

			<div id="titlehomespall">
				<span class="titlehomesptext">Hoa quả nhập khẩu</span>&nbsp;&nbsp;&nbsp;&nbsp;
				<span class="chitiethoaquaall">
					<a href="../hoa-qua/11/hoa-qua-nhap-khau/index.html">Xem tất cả&nbsp;&gt;&gt;</a>
				</span>
			</div>
			<div id="contenthonesp">
				<div id="sphomele">
					<h1 class="h1tensp"><a href="../chi-tiet/44/qua-kiwi-xanh/index.html">Quả Kiwi xanh</a></h1>
					<a href="../chi-tiet/44/qua-kiwi-xanh/index.html">
						<img src="../media/anhhoaqua/shqkiwixanhC.jpg" class="imgsphomele" onerror="loadErrorImage(this,'../images/noimg.png');"  />
					</a>
					<div id="h1giasphomele">
						<span class='giakmhome'><p class='xuongdong'></p>95,000 VND</span>
					</div>
					<div id="nutchitiethome">
						<span class="nutchitiethometext">
							<span class="nutchitiethometext">
								<a href="_a%20href%3d.html/chi-tiet/44/qua-kiwi-xanh/">Chi tiết</a>
							</span>
						</span>
					</div>		
				</div>
			</div>
			
			<div id="titlehomespall">
				<span class="titlehomesptext">Hoa quả Việt Nam</span>&nbsp;&nbsp;&nbsp;&nbsp;
				<span class="chitiethoaquaall">
					<a href="../hoa-qua/12/hoa-qua-viet-nam/index.html">Xem tất cả&nbsp;&gt;&gt;</a>
				</span>
			</div>
			<div id="contenthonesp">
				<div id="sphomele">
					<h1 class="h1tensp"><a href="../chi-tiet/21/buoi-nam-roi/index.html">Bưởi Năm roi</a></h1>
					<a href="../chi-tiet/21/buoi-nam-roi/index.html"><img src="../media/anhhoaqua/shqbuoinamroi2.jpg" class="imgsphomele" onerror="loadErrorImage(this,'../images/noimg.png');"  /></a>
					<div id="h1giasphomele">
						<span class='giakmhome'><p class='xuongdong'></p>58,000 VND</span>			
					</div>
					<div id="nutchitiethome">
						<span class="nutchitiethometext">
							<span class="nutchitiethometext">
								<a href="_a%20href%3d.html/chi-tiet/21/buoi-nam-roi/">Chi tiết</a>
							</span>
						</span>
					</div>		
				</div>
			</div>
		</div>
	</div>
@endsection