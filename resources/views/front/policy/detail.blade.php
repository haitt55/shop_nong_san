@extends('front.layouts.master')

@section('title', $policy->title)

@section('keywords', $policy->meta_keyword)

@section('description', $policy->meta_description)

@section('content')
<div id="wrappercontent">
	<div style="float: right; width: 900px; height: 10px;"></div>
	<div id="contentwide">
		<div id="content">
			<div id="supleft">
				@include('front.layouts.supleftweb')
				<div id="supleftwebcont">
					<h1 class="titlesupleftweb">{!! $policy->title !!}</h1>
					<h2 class="contsupleftweb"><p>&nbsp;</p>
						{!! $policy->content !!}
					</h2>
				</div>
			</div>
			@include('front.layouts.supright')
		</div>	
	</div>
</div>
@endsection