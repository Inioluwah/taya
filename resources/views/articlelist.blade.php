@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Articles</div>
                <hr>
                <table>
                <tbody>
                    @foreach ($articles as $article)
                    <tr>
                        <td>{{$article->title}}</td>
                        <td><a href="/viewarticles{{$article->id}}"> <button>View</button></a></td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            <hr>
                
            </div>
        </div>
    </div>
</div>
@endsection
