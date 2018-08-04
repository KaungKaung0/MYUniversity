@extends('layouts.main')
@section('content')
<div class="row">
	<div class="col-md-6 col-md-offset-3" id="preview">
		<img src="{{asset("image/article/$article->image")}}" width="100%" height="200px" alt="">
		<h3 id="title">{!!$article->title!!}</h3>
		<p>{!!$article->body!!}</p>
	</div>

</div>
@endsection