@extends('layout.app')
@section('main')

@include('include.slider')
<br>
@include('include.sidebar')
<div  class="jumbotron" style="background-color:#00FF40">
	<div class="container">
		<h1>Hello!</h1>
		<p>Quản Lí Bán Hàng</p>
		<p>
			<a class="btn btn-primary btn-lg">Learn more</a>
		</p>
	</div>
</div>
@endsection