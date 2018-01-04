@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">ADMIN Dashboard</div>

                <div class="panel-body">

                  @foreach($reg_pairs as $pair)
                      <div class="pair">
                          <a href="/admin/applicationreport?pilgrim_id={{$pair->PI_ID}}">{{$pair->PI_fullname}}</a>
                      </div>
                  @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
