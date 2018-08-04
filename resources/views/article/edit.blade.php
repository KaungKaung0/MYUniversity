@extends('layouts.main')
@section('content')

<form  action="{{route('articles.update' , $article->id)}}" enctype="multipart/form-data" method="post">
	{{csrf_field()}}
	{{method_field('PUT')}}

	<div class="form-group">
		<img src="{{asset("image/article/$article->image")}}" class="mx-auto d-block" id="book-cover-design" width="200px" height="200px" />

	</div>
	<div class="btn btn-primary">
		<input type="file" name="file" id="book-cover" style="display: none">
		<span onclick="document.getElementById('book-cover').click();">Choose file</span>
	</div>
	<div class="form-group">
		<label for="title">Title</label> 
		<input type="text" class="form-control" name="title" value="{{$article->title}}">
	</div>	
	<div class="box">
		<div class="box-header">
			<h3 class="box-title">Write Your Article Body
				<small>Simple and fast</small>
			</h3>
		</div>

		<form method="post">
			<textarea id="summernote" name="body" placeholder="Place some text here" 
			style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">{!!$article->body!!}</textarea>
		</form>
		<button type="submit" class="btn btn-primary btn-block pull-right">Post</button>

	</div>
</form>

@endsection