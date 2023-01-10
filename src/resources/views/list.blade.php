@extends('articleLayout')
@section('content')
<h1>Article list</h1>
        <label>Select category</label>
        <select name="category">
            <option >-</option>
            @foreach($categories as $category)
            <option value="{{$category->id}}">{{$category->name}}</option>
            @endforeach  
        </select>
        <div class="articles">
        @foreach($articles as $article)
            <div id="{{$article->id}}">
                <h5><a href="{{URL::route('article.one', [$article->id])}}">{{$article->name}}</a></h5>
                <text>{{$article->description}}</text>
            </div>
        @endforeach  
        </div>
@stop
