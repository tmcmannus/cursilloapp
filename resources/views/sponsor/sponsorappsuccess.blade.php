@extends('layouts.app')

@section('content')
<div class="successcontainer well">
   <div class="row">
      <div class="col-lg-12">
        <h2 class="pilappheading">Individual Reservation Request<br />
        <span class="pilappsubheading">Sponsor Application</span></h2>
      </div>
   </div>
   <div class="row">
      <div class="col-md-6 text-right">
        Name:
      </div>
      <div class="col-md-6">
{{ $sponsorInfo->fullname}}
   </div>
 </div>
   <div class="row">
      <div class="col-md-6 text-right">
        Email:
      </div>
      <div class="col-md-6">
        {{ $sponsorInfo->email}}

   </div>
 </div>
   <div class="row">
      <div class="col-md-6 text-right">
        Phone:
      </div>
      <div class="col-md-6">
        {{ $sponsorInfo->phone}}

   </div>
</div>
<div class="row">
   <div class="col-md-6 text-right">
     Pilgrim Name:
   </div>
   <div class="col-md-6">
     {{ $sponsorInfo->applicantname}}

</div>
</div>

<div class="row">
   <div class="col-md-6 text-right">
     Pastor Name:
   </div>
   <div class="col-md-6">
     {{ $sponsorInfo->applicantpastorname}}

</div>
</div>
<div class="row">
   <div class="col-md-6 text-right">
     Pastor Email:
   </div>
   <div class="col-md-6">
     {{ $sponsorInfo->applicantpastoremail}}

</div>
</div>

    <div class="pilgrimsuccesstext" style="border:1px solid #000">
        <p>You have now entered your Sponsor Application.  Please reach out to the
          <span style="color:red">{{ $sponsorInfo->applicantname }}</span> you entered on your application and make sure they register for the upcoming weekend.</p>

    </div>

</div>

<div class="successcontainer well" style="width:850px;margin-top:40px;">
  <form action="" method="">
    <div class="row">
      <div class="col-lg-12 text-center rowborder"><h2><strong>SPONSOR INFORMATION</strong></h2></div>
    </div>
    <div class="row">
       <div class="col-md-6 rowborder"><label>Full Name:<span class="data"> {{ $sponsorInfo->fullname }}</span></label></div>
       <div class="col-md-6 rowborder"><label>Email:<span class="data"> {{ $sponsorInfo->email}}</span></label></div>
    </div>
    <div class="row">
       <div class="col-md-6 rowborder"><label>Address:<span class="data"> {{ $sponsorInfo->address}}</span></label></div>
       <div class="col-md-6 rowborder"><label>City:<span class="data"> {{ $sponsorInfo->city}}</span></label></div>
    </div>
    <div class="row">
       <div class="col-md-6 rowborder"><label>State:<span class="data"> {{ $sponsorInfo->state}}</span></label></div>
       <div class="col-md-6 rowborder"><label>ZIP Code:<span class="data"> {{ $sponsorInfo->zip}}</span></label></div>
    </div>
    <div class="row">
       <div class="col-md-6 rowborder"><label>Phone:<span class="data"> {{ $sponsorInfo->phone}}</span></label></div>
       <div class="col-md-6 rowborder"><label>Best Time To Call:<span class="data"> {{ $sponsorInfo->bestcalltime}}</span></label></div>
    </div>
    <div class="row">
       <div class="col-lg-12 rowborder"><label>Applicant Name:<span class="data"> {{ $sponsorInfo->applicantname}}</span></label></div>
    </div>
    <div class="row">
       <div class="col-lg-12 rowborder"><label>Applicant Pastor Name:<span class="data"> {{ $sponsorInfo->applicantpastorname}}</span></label></div>
    </div>
    <div class="row">
       <div class="col-lg-12 rowborder"><label>Applicant Pastor Email:<span class="data"> {{ $sponsorInfo->applicantpastoremail}}</span></label></div>
    </div>

    <div class="row">
       <div class="col-lg-12 rowborder"><label>Is This Applicant A Baptized Member In Regular Attendance And/Or Active In Ministries Of A Lutheran Church: <span class="data">{{ $sponsorInfo->baptizedlutheran}}</span></label></div>
    </div>
    <div class="row">
       <div class="col-lg-12 rowborder"><label>If Applicable, Did You Discuss Lutheran Cursillo With The Applicant's Spouse: <span class="data">{{ $sponsorInfo->hadcursillospousediscussion}}</span></label></div>
    </div>
    <div class="row">
       <div class="col-lg-12 rowborder"><label>Will Both Spouses Be Applying To Attend The Weekend: <span class="data">{{ $sponsorInfo->bothspousesattending}}</span></label></div>
    </div>
    <div class="row">
       <div class="col-lg-12 rowborder"><label>*If Answered No, Please Explain Briefly:<br /> <span class="data">{{ $sponsorInfo->singlespouseexplanation}}</span></label></div>
    </div>
    <div class="row">
       <div class="col-lg-12 rowborder"><label>Why Do You Think This Person Is A Good Candidate For A Cursillo Weekend: <br /><span class="data">{{ $sponsorInfo->goodcandidatereason}}</span></label></div>
    </div>
    <div class="row">
       <div class="col-lg-12 rowborder"><label>Briefly State The Applicant's Attitude Toward Lutheran Cursillo: <br /><span class="data">{{ $sponsorInfo->cursilloattitude}}</span></label></div>
    </div>
    <div class="row">
       <div class="col-lg-12 rowborder"><label>With Leadership In Mind, What Do You Expect This Person To Gain From The Cursillo Experience: <br /><span class="data">{{ $sponsorInfo->applicantexpectations}}</span></label></div>
    </div>
    <div class="row">
       <div class="col-lg-12 rowborder"><label>How, Specifically, Will You Support This Applicant During His/Her Fourth Day: <br /><span class="data">{{ $sponsorInfo->plantosupport}}</span></label></div>
    </div>
    <div class="row">
       <div class="col-lg-12 rowborder"><label>Other Pertinent Information About The Applicant: <br /><span class="data">{{ $sponsorInfo->otherapplicantinfo}}</span></label></div>
    </div>
    <div class="row">
       <div class="col-lg-12 rowborder">I/We Have Prayerfully Considered Sponsoring This Applicant, Understand My/Our Responsibilities As Outlined In The Sponsor's
       Guidelines, And With The Lord's Help Will Do My/Our Best To Meet These Responsibilities.</div>
    </div>
    <div class="row">
        <div class="col-md-6 rowborder"><label>Sponsor Signature:<span class="data"> {{ $sponsorInfo->signed}}</span></label></div>
        <div class="col-md-6 rowborder"><label>Date Signed: <span class="data">{{ $sponsorInfo->datesigned}}</span></label></div>
      </div>
      <div class="row">
        <div class="col-lg-12 rowborder"><label>Sponsor Email: <span class="data">{{ $sponsorInfo->email}}</span></label></div>
    </div>
</div>

@endsection
