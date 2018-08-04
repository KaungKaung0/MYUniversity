@extends('layouts.main')
@section('content')

<div class="row">
	<div class="col-md-3 col-sm-6 col-xs-12">
    <div class="info-box">
      <span class="info-box-icon bg-aqua"><i class="fa fa-newspaper-o"></i></span>

      <div class="info-box-content">
        <span class="info-box-text">Article</span>
        <span class="info-box-number">{{$count}}</span>
      </div>
      <!-- /.info-box-content -->
    </div>
    <!-- /.info-box -->
  </div>
</div>

<div class="row">
 <div class="col-md-12">
  <div class="box">
    <div class="box-header with-border">
      <h3 class="box-title">Article Table</h3>
      <a href="{{route('articles.create')}}" class="btn btn-success pull-right">Add New Article</a>
    </div>
    <!-- /.box-header -->
    <div class="box-body">
      <table class="table table-bordered">
        <tr>
          <th style="width: 10px">id</th>
          <th>Title</th>
          <th>Date</th>
          <th></th>
          <th></th>
          <th></th>
        </tr>
        @foreach($article as $articles)
        <tr>
          <td>{{$articles->id}}</td>
          <td>{!!$articles->title!!}</td>
          <td>{{$articles->created_at}}</td>
          <td><a href="{{route('articles.show' , ['id' =>$articles->id])}}" class="btn btn-info">View</a></td>
          <td><a href="{{route('articles.edit' , ['id' => $articles->id])}}" class="btn btn-primary">Edit</a></td>
          <td>
            <form action="{{route('articles.destroy' , ['id' => $articles->id])}}" method="post">
              {{csrf_field()}}
              {{method_field('delete')}}
              <button type="submit" class="btn btn-danger">Delete</button>
            </form>
        </tr>
        @endforeach
      </table>
      <div class="box-footer clearfix pull-right">
        {{$article->links()}}
      </div> 
      </div>

  </div>
 </div> 
</div>


@endsection