@extends('layouts.app')

@section('content')
<div class="container dashboard">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">PASTOR Dashboard</div>

                <div class="panel-body">
                  <div class="container menupanel">
                    @foreach($sponsor_pilgrim_pairs as $pair)
                        <div class="pair">
                            <a href="/pastor/pastorapp?pilgrim_id={{$pair->pilgrim_id}}&sponsor_id={{$pair->sponsor_id}}">{{$pair->PI_fullname}} sponsored by {{ $pair->SP_fullname }}</a>
                        </div>
                    @endforeach


                </div>
            </div>
        </div>
    </div>
</div>
@endsection
