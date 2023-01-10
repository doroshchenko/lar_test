
@extends('articleLayout')
@section('content')
<h1>Create article</h1>
    <div class="articles">
    <div class="body">
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
      <form name="add-article-form"  method="post" action="{{url('manage/articles/create')}}">
       @csrf
        <div class="form-group">
          <label for="name">Title</label>
          <input type="text" id="title" name="name" class="form-control">
        </div>
        <div class="form-group">
        <label for="description">Description</label>
          <input type="text"  name="description" class="form-control">
        </div>
        <select name="category_id">
            @foreach($categories as $category)
            <option value="{{$category->id}}">{{$category->name}}</option>
            @endforeach  
        </select>
        <button type="submit" class="btn btn-primary">Submit</button>
      </form>
    </div>
    </div>
@stop
