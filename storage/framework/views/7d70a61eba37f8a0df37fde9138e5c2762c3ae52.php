<?php $__env->startSection('content'); ?>

<div class="jumbotron"><img src="images/LCLogo.png" class="img-responsive center-block" width="350px" height="350px" /></div>


<div class="container" style="background-color:#fff;width:60%;margin:0 auto;border:1px solid;padding:20px;margin-top:0px;">

    <div class="row">
        <div class="col-lg-12 text-center"><h1>Pastor Information</h1></div>
    </div>
     <form action="store" method="post">
      <div class="row">
       <div class="col-lg-12 form-group"><input type="text" class="form-control" name="fullname" placeholder="Full Name"></div>
   </div>
         <div class="row">
       <div class="col-lg-12 form-group"><input type="text" class="form-control" name="churchname" placeholder="Church Name"></div>
   </div>
    <div class="row">
       <div class="col-lg-12 form-group"><input type="text" class="form-control" name="address" placeholder="Address"></div>
   </div>
<div class="row">
     <div class="form-group col-xs-10 col-sm-4 col-md-4 col-lg-4">

            <input type="text" class="form-control" name="city" placeholder="City">
        </div>
        <div class="form-group col-xs-10 col-sm-4 col-md-4 col-lg-4">

            <select class="input-large" name="state">
              <option value="" disabled selected>Select your state</option>
	<option value="AL">Alabama</option>
	<option value="AK">Alaska</option>
	<option value="AZ">Arizona</option>
	<option value="AR">Arkansas</option>
	<option value="CA">California</option>
	<option value="CO">Colorado</option>
	<option value="CT">Connecticut</option>
	<option value="DE">Delaware</option>
	<option value="DC">District Of Columbia</option>
	<option value="FL">Florida</option>
	<option value="GA">Georgia</option>
	<option value="HI">Hawaii</option>
	<option value="ID">Idaho</option>
	<option value="IL">Illinois</option>
	<option value="IN">Indiana</option>
	<option value="IA">Iowa</option>
	<option value="KS">Kansas</option>
	<option value="KY">Kentucky</option>
	<option value="LA">Louisiana</option>
	<option value="ME">Maine</option>
	<option value="MD">Maryland</option>
	<option value="MA">Massachusetts</option>
	<option value="MI">Michigan</option>
	<option value="MN">Minnesota</option>
	<option value="MS">Mississippi</option>
	<option value="MO">Missouri</option>
	<option value="MT">Montana</option>
	<option value="NE">Nebraska</option>
	<option value="NV">Nevada</option>
	<option value="NH">New Hampshire</option>
	<option value="NJ">New Jersey</option>
	<option value="NM">New Mexico</option>
	<option value="NY">New York</option>
	<option value="NC">North Carolina</option>
	<option value="ND">North Dakota</option>
	<option value="OH">Ohio</option>
	<option value="OK">Oklahoma</option>
	<option value="OR">Oregon</option>
	<option value="PA">Pennsylvania</option>
	<option value="RI">Rhode Island</option>
	<option value="SC">South Carolina</option>
	<option value="SD">South Dakota</option>
	<option value="TN">Tennessee</option>
	<option value="TX">Texas</option>
	<option value="UT">Utah</option>
	<option value="VT">Vermont</option>
	<option value="VA">Virginia</option>
	<option value="WA">Washington</option>
	<option value="WV">West Virginia</option>
	<option value="WI">Wisconsin</option>
	<option value="WY">Wyoming</option>
</select>
        </div>
          <div class="form-group col-xs-10 col-sm-4 col-md-4 col-lg-4">
            <input type="text" class="form-control" name="zip" placeholder="Zipcode">
        </div>


     </div>
<div class="row">
     <div class="form-group col-lg-8 col-sm-4 col-md-4 col-lg-4">
            <input type="text" class="form-control" name="phone" placeholder="Phone">
        </div>
        <div class="form-group col-xs-10 col-sm-4 col-md-4 col-lg-4">
            <input type="text" class="form-control" name="email" placeholder="Email">
        </div>
     </div>
    <div class="row">
      <div class="col-lg-12">
              <textarea rows="10" cols="150" placeholder="A Pastor or Cursillo Representative - Please Explain Why This Applicant Is OR Is Not A Good Candidate for Cursillo:"></textarea>
   </div>
   </div>
   <div class="row" style="padding-top:20px">
	     <div class="form-group col-xs-10 col-sm-4 col-md-4 col-lg-4">
            <input type="text" class="form-control" name="signed" placeholder="Type Full Name For Signature">
        </div>
        <div class="form-group col-xs-10 col-sm-4 col-md-4 col-lg-4">
             <input type="text" class="form-control" name="email" placeholder="Email">
        </div>
          <div class="form-group col-xs-10 col-sm-4 col-md-4 col-lg-4">
            <input type="email" class="form-control" name="date" placeholder="Date:">
        </div>
    </div>

 <div class="row">
      <div class="col-xs-6 col-sm-6 col-md-6">
                        <input type="submit" class="btn btn-lg btn-success btn-block" type="submit" value="Submit">
					</div>
					<div class="col-xs-6 col-sm-6 col-md-6">
						<input class="btn btn-lg btn-primary btn-block" type="reset" value="Reset">
					</div>
   </div>
























    </form>
    </div>


<div class="footer"></div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>