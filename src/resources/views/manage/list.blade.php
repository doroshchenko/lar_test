
@extends('articleLayout')
@section('content')
<h1>Article list</h1>
    <div class="articles">
    @foreach($articles as $article)
        <div id="{{$article->id}}">
            <h5><a href="{{URL::route('manage.article.one', [$article->id])}}">{{$article->name}}</a></h5>
            <text>{{$article->description}}</text>
        </div>
    @endforeach  
    </div>
@stop
