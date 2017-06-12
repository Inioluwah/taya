@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading"><h3>THE BLOG</h3></div>

                <div class="panel-body">
                    <h4>{{$article->title}}</h4> <br> {{$article->content}} <br>uploaded  {{$article->created_at->diffForHumans()}} <br><br> 

                            <h5>Comments</h5>

                            @foreach ($comments as $comment)
                            {{$comment->name}} said {{$comment->comment}}<br>
                            @endforeach

                           
                        <hr>

                        
                    <hr>
                    
                </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
