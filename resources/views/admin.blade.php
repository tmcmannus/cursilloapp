@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">ADMIN Dashboard</div>

                <div class="panel-body">

                  @foreach($reg_pairs as $pair)
                  <div class="container" style="width:700px;margin:0 auto;">
                    <div class="row">
                      <div class="col-md-6">
                      <div class="pair text-left">
                          <h3>{{$pair->PI_fullname}}</h3>
                      </div>

                </div>
                <div class="col-md-6 text-center">
                      <a href="/admin/applicationreport?pilgrim_id={{$pair->PI_ID}}" class="btn btn-primary btn-lg" role="button">View</a>
                      <a href="/admin/applicationreportprint?pilgrim_id={{$pair->PI_ID}}" class="btn btn-success btn-lg" role="button">Print</a>
                      <a href="/delete/{{$pair->PI_ID}}" class="btn btn-danger btn-lg" role="button">Delete</a>
                </div>
                </div>
                </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
@endsection
