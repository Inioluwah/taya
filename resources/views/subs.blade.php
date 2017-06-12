@extends('layouts.app')
@section('content')
<br/><br/>
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
        <ol class="breadcrumb">
          <li><a href="/">Home</a></li>
          <li class="active">All Subscribers</li>
        </ol>
            <div class="panel panel-default">
                <div class="panel-heading lead">Subscribers</div>
                  <div class="panel-body">
                    <div class="table-responsive">
                      <table class="table table-striped">
                              <thead>
                                <tr>
                                  <th><h3> # </h3></th>
                                  <th><h3> Email</h3></th>
                                  <th><h3> Date Of Subscription </h3></th>
                                  
                                </tr>
                              </thead>
                              <tbody>
                              <span style="visibility: hidden">
                              	{{$count=1}}
                              </span>
                              @foreach($subs as $sub)
                                <tr>
                                  <td> {{$count}}</td>
                                  <td> {{ $sub->email }} </td>
                                  <td> {{ $sub->created_at }}</td>
                                  
                                </tr>
                               <span style="visibility: hidden">
                              	{{$count++}}
                              </span>
                              @endforeach
                              </tbody>
                            </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection