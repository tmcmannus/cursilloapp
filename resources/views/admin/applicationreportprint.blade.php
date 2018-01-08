@extends('layouts.print')


@section('content')


<div class="container report-main">
  <div class="row">
    <div class="col-lg-12 text-center">
        <h1 class="printpage">Lutheran Cursillo of Southern California</h1>
        <h2 class="printpage">Individual Reservation Request</h2>
  </div>
  </div>
 <div class="row">
   <div class="col-lg-12">
     <div class="required">
    <h3 class="requiredbold font-weight-bold">What Is Required To Attend an LCSC Weekend?</h3>
     <ol>
       <li>You must be baptized and in regular attendance and/or active in ministries
          within your Lutheran Congregation.</li>
       <li>The Pastor or Cursillo representative from your church must endorse this
          application with his/her signature.</li>
       <li>Married Couples... In accordance with Cursillo policy(if both are members of a congregation), it is strongly recommended that the couple attend weekends back to back. The husband attends the first weekend of the pair, the wife attends the following weekend. Engaged couples are encouraged to attend once married.  Single persons should attend the appropriate male/female weekend.  If there are special circumstances(i.e. non - believing spouse, couples attending different churches, etc...), these must be addressed to the LCSC Secretariat for special consideration.</li>
       <li>You must attend for the full weekend, Thursday evening through Sunday early evening.  You must be able to sit and pay attention for extended periods of time, be able to care for your own personal hygiene and be free of medications that may physically/emotionally/mentally impair your participation in the weekend.  Except for an emergency, you are asked to be "out of touch" for the three days with any telephone, television or internet, etc...  If you cannot be "out of touch", you should wait until you are able.  We also ask for your spirit of willingness to participate in all aspects of the weekend.</li>
       <li>EAch person wishing to attend must fill oout a seperate application.  Applications must be completely filled out and then given to your Pastor or Cursillo representative for signature and further processing.</li>
     </ol>
  </div>
</div>
<div class="row">
  <div class="col-lg-12">


     <div class="container reportinput">
       <form action="" method="">
         <div class="row">
           <div class="col-lg-12 text-center rowborder"><h2><strong>PILGRIM INFORMATION</strong></h2></div>
         </div>
         <div class="row">
             <div class="col-md-6 rowborder"><label>Full Name:<span class="data"> {{ $application_info->PI_fullname}}</span></label></div>
             <div class="col-md-6 rowborder"><label>Email: <span class="data">{{ $application_info->PI_email}}</span></label></div>
        </div>
        <div class="row">
            <div class="col-md-6 rowborder"><label>Address:<span class="data"> {{ $application_info->PI_address}}</span></label></div>
            <div class="col-md-6 rowborder"><label>Apt/Sp. #: <span class="data">{{ $application_info->PI_aptsuite}}</span></label></div>
       </div>
       <div class="row">
         <div class="col-md-4 rowborder"><label>City:<span class="data"> {{ $application_info->PI_city}}</span></label></div>
         <div class="col-md-4 rowborder"><label>State:<span class="data"> {{ $application_info->PI_state}}</span></label></div>
         <div class="col-md-4 rowborder"><label>ZIP Code:<span class="data"> {{ $application_info->PI_zip}}</span></label></div>
      </div>
      <div class="row">
        <div class="col-md-4 rowborder"><label>Phone:<span class="data"> {{ $application_info->PI_phone}}</span></label></div>
        <div class="col-md-4 rowborder"><label>Best Time To Call:<span class="data"> {{ $application_info->PI_bestcalltime}}</span></label></div>
        <div class="col-md-4 rowborder"><label>Over 18:<span class="data"> {{ $application_info->PI_over18}}</span></label></div>
     </div>
     <div class="row">
       <div class="col-md-6 rowborder"><label>Occupation:<span class="data"> {{ $application_info->PI_occupation}}</span></label></div>
       <div class="col-md-6 rowborder"><label>Weekend Name Tag:<span class="data"> {{ $application_info->PI_tagname}}</span></label></div>
    </div>
    <div class="row">
       <div class="col-md-6 rowborder"><label>Marital Status:<span class="data"> {{ $application_info->PI_maritalstatus}}</span></label></div>
       <div class="col-md-6 rowborder"><label>To Whom:<span class="data"> {{ $application_info->PI_marriagepartner}}</span></label></div>

    </div>
    <div class="row">
        <div class="col-md-6 rowborder"><label>Home Church:<span class="data"> {{ $application_info->PI_homechurch}}</span></label></div>
        <div class="col-md-6 rowborder"><label>City: <span class="data">{{ $application_info->PI_homechurchcity}}</span></label></div>
   </div>
   <div class="row">
       <div class="col-md-4 rowborder"><label>Pastor:<span class="data"> {{ $application_info->PI_homechurchpastor}}</span></label></div>
       <div class="col-md-8 rowborder"><label>How Often Do You Attend Church: <span class="data">{{ $application_info->PI_homechurchcity}}</span></label></div>
  </div>
  <div class="row">
      <div class="col-lg-12 rowborder"><label>Special Needs:<span class="data"> {{ $application_info->PI_specialneeds}}</span></label></div>
 </div>
 <div class="row">
     <div class="col-lg-12 rowborder"><label>Why Do You Want To Attend Cursillo:<span class="data"> {{ $application_info->PI_reasontoattend}}</span></label></div>
</div>
<div class="row">
    <div class="col-md-6 rowborder"><label>Applicant Signature:<span class="data"> {{ $application_info->PI_signed}}</span></label></div>
    <div class="col-md-6 rowborder"><label>Date Signed: <span class="data">{{ $application_info->PI_datesigned}}</span></label></div>
</div>
<div class="row break">
  <div class="col-lg-12 text-center rowborder"><h2><strong>PASTOR INFORMATION</strong></h2></div>
</div>
<div class="row">
    <div class="col-lg-12 rowborder"><label>Pastor - Please Explain Why This Applicant Is OR Is Not A Good Candidate For Cursillo:<span class="data"> <br />{{ $application_info->PA_goodcandidateexplanation}}</span></label></div>
</div>
<div class="row">
    <div class="col-md-6 rowborder"><label>Pastor Signature:<span class="data"> {{ $application_info->PA_signed}}</span></label></div>
    <div class="col-md-6 rowborder"><label>Date Signed: <span class="data">{{ $application_info->PA_date}}</span></label></div>
  </div>
  <div class="row">
    <div class="col-lg-12 rowborder"><label>Pastor Email: <span class="data">{{ $application_info->PA_email}}</span></label></div>
</div>
<div class="row">
   <div class="col-lg-12 rowborder"><strong>PLEASE NOTE:</strong> Reservations are limited.  Once approved for a weekend, if the requirements are met and the
     applicant is endorsed to attend the weekend, a leter of invitation will be mailed to you and your sponsor will contact you to confirm your
     attendance.  At least two sets of weekends are held each year.  Should you decline to attend a weekend, you will need to reapply.  The following
     information is for Cursillo purposes only and is private and confidential.
</div>
</div>
<div class="row">
  <div class="col-lg-12 text-center rowborder"><h2><strong>SPONSOR INFORMATION</strong></h2></div>
</div>
<div class="row">
   <div class="col-md-6 rowborder"><label>Full Name:<span class="data"> {{ $application_info->SP_fullname}}</span></label></div>
   <div class="col-md-6 rowborder"><label>Email:<span class="data"> {{ $application_info->SP_email}}</span></label></div>
</div>
<div class="row">
   <div class="col-md-6 rowborder"><label>Address:<span class="data"> {{ $application_info->SP_address}}</span></label></div>
   <div class="col-md-6 rowborder"><label>City:<span class="data"> {{ $application_info->SP_city}}</span></label></div>
</div>
<div class="row">
   <div class="col-md-6 rowborder"><label>State:<span class="data"> {{ $application_info->SP_state}}</span></label></div>
   <div class="col-md-6 rowborder"><label>ZIP Code:<span class="data"> {{ $application_info->SP_zip}}</span></label></div>
</div>
<div class="row">
   <div class="col-md-6 rowborder"><label>Phone:<span class="data"> {{ $application_info->SP_phone}}</span></label></div>
   <div class="col-md-6 rowborder"><label>Best Time To Call:<span class="data"> {{ $application_info->SP_bestcalltime}}</span></label></div>
</div>
<div class="row">
   <div class="col-lg-12 rowborder"><label>Applicant's Name:<span class="data"> {{ $application_info->SP_applicantname}}</span></label></div>
</div>

<div class="row">
   <div class="col-lg-12 rowborder"><label>Is This Applicant A Baptized Member In Regular Attendance And/Or Active In Ministries Of A Lutheran Church: <span class="data">{{ $application_info->SP_baptizedlutheran}}</span></label></div>
</div>
<div class="row">
   <div class="col-lg-12 rowborder"><label>If Applicable, Did You Discuss Lutheran Cursillo With The Applicant's Spouse: <span class="data">{{ $application_info->SP_hadcursillospousediscussion}}</span></label></div>
</div>
<div class="row">
   <div class="col-lg-12 rowborder"><label>Will Both Spouses Be Applying To Attend The Weekend: <span class="data">{{ $application_info->SP_bothspouseattending}}</span></label></div>
</div>
<div class="row">
   <div class="col-lg-12 rowborder"><label>*If Answered No, Please Explain Briefly:<br /> <span class="data">{{ $application_info->SP_singlespouseexplanation}}</span></label></div>
</div>
<div class="row">
   <div class="col-lg-12 rowborder"><label>Why Do You Think This Person Is A Good Candidate For A Cursillo Weekend: <br /><span class="data">{{ $application_info->SP_goodcandidatereason}}</span></label></div>
</div>
<div class="row">
   <div class="col-lg-12 rowborder"><label>Briefly State The Applicant's Attitude Toward Lutheran Cursillo: <br /><span class="data">{{ $application_info->SP_cursilloattitude}}</span></label></div>
</div>
<div class="row">
   <div class="col-lg-12 rowborder"><label>With Leadership In Mind, What Do You Expect This Person To Gain From The Cursillo Experience: <br /><span class="data">{{ $application_info->SP_applicantexpectations}}</span></label></div>
</div>
<div class="row">
   <div class="col-lg-12 rowborder"><label>How, Specifically, Will You Support This Applicant During His/Her Fourth Day: <br /><span class="data">{{ $application_info->SP_plantosupport}}</span></label></div>
</div>
<div class="row">
   <div class="col-lg-12 rowborder"><label>Other Pertinent Information About The Applicant: <br /><span class="data">{{ $application_info->SP_otherapplicantinfo}}</span></label></div>
</div>
<div class="row">
   <div class="col-lg-12 rowborder">I/We Have Prayerfully Considered Sponsoring This Applicant, Understand My/Our Responsibilities As Outlined In The Sponsor's
   Guidelines, And With The Lord's Help Will Do My/Our Best To Meet These Responsibilities.</div>
</div>
<div class="row">
    <div class="col-md-6 rowborder"><label>Sponsor Signature:<span class="data"> {{ $application_info->SP_signed}}</span></label></div>
    <div class="col-md-6 rowborder"><label>Date Signed: <span class="data">{{ $application_info->SP_datesigned}}</span></label></div>
  </div>
  <div class="row">
    <div class="col-lg-12 rowborder"><label>Sponsor Email: <span class="data">{{ $application_info->SP_email}}</span></label></div>
</div>



</div>
<div style="width:100%;height:200px;">&nbsp;</div>
@endsection
