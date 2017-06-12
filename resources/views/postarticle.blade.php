@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Upload Article</div>

                <div class="panel-body">
                    <form action="/uploadarticle" method="POST" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <input type="text" name="title" placeholder="Title"><br>
                    <input type="file" name="postimage" >
                    <textarea name="content"></textarea>
                    <input type="submit" value="Post">
                    </form>
                </div>
                
            </div>
        </div>
    </div>
</div>
@endsection
