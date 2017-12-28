@extends('layouts.app')

@section('content')
<div class="successcontainer well">
   <div class="row">
      <div class="col-lg-12">
        <h2 class="pilappheading">Individual Reservation Request<br />
        <span class="pilappsubheading">Pilgrim Application</span></h2>
      </div>
   </div>
   <div class="row">
      <div class="col-md-6 text-right">
        Name:
      </div>
      <div class="col-md-6">
 {{ $success_data->PI_fullname}}
   </div>
 </div>
   <div class="row">
      <div class="col-md-6 text-right">
        Email:
      </div>
      <div class="col-md-6">
         {{ $success_data->PI_email}}
   </div>
 </div>
   <div class="row">
      <div class="col-md-6 text-right">
        Phone:
      </div>
      <div class="col-md-6">
        {{ $success_data->PI_phone}}
   </div>
</div>
<div class="row">
   <div class="col-md-6 text-right">
     Sponsor:
   </div>
   <div class="col-md-6">
   {{ $success_data->SP_fullname}}
</div>
</div>
    <div class="pilgrimsuccesstext" style="border:1px solid #000">
        <p>You are now registered for the upcoming Cursillo weekend.  Your sponsor is <span style="color:red">{{ $success_data->SP_fullname }}. </span> He/she will contact you to advise you on the next step.</p>

    </div>

</div>



@endsection
