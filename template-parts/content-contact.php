<div class="sub-header contact-header mb-5">
      <div class="banner-tint animated fadeInLeft"></div>
      <div class="container h-100">
        <div class="row h-100">
          <div class="col-lg-12 d-flex justify-content-center text-center">
            <div class="my-auto">
                <p class="lead animated fadeInDown">Exceptional Legal Advice for  Businesses, Professionals, & Creative People</p>
                <h1 class="animated fadeInUp"><?php the_title(); ?></h1>
            </div>
          </div>
        </div>
      </div>
  </div>


<div class="container mb-5">
  <div class="row">
    <div class="col-lg-6">
       <div id="lf_form_container">
    <form method="post" action="/contact-us/">
        <div id="lf_first_name_block" class="form-group">
            <label for="lf_first_name">First Name</label>
            <input id="lf_first_name" name="lf_first_name" type="text" maxlength="255" value="" required="required" placeholder="First Name" class="form-control">
        </div>
        <div id="lf_last_name_block" class="form-group">
            <label for="lf_last_name">Last Name</label>
            <input id="lf_last_name" name="lf_last_name" type="text" maxlength="255" value="" required="required" placeholder="Last Name" class="form-control">
        </div>
        <div id="lf_email_block" class="form-group">
            <label class="description" for="lf_email">Email Address</label>
            <input id="lf_email" name="lf_email" type="email" maxlength="255" value="" required="required" placeholder="Email Address" class="form-control">
        </div>
        <p id="lf_phone_block" class="form-group">
            <label class="description" for="lf_phone">Phone Number</label>
            <input id="lf_phone" name="lf_phone" type="text" maxlength="24" value="" placeholder="Phone Number" class="form-control">
        </p>
        <div id="lf_message_block" class="form-group">
            <label class="description" for="lf_message">How can we help you?</label>
			<textarea id="lf_message" name="lf_message" required="required" placeholder="How can we help you?" class="form-control"></textarea>
        </div>

				<div id="lf_disclaimer" class="form-check">
			<input type="checkbox" id="lf_disclaimer" name="lf_disclaimer_checkbox" value="i_agree" required="true" class="form-check-input">
			<label class="description" for="lf_disclaimer" class="form-check-label">I agree to the <a href="“https://www.hebertthomaslaw.com/privacy-policy/”">terms and conditions</a> that submitted in this form is not protected by a privilege of confidentiality. *</label>
		</div>
		
        <div id="lf_wrap" style="display:none;">
            <label class="description" for="leave_this_blank">Leave this Blank if are sentient </label>
            <input name="leave_this_blank_url" type="text" value="" id="leave_this_blank">
        </div>

		
        <input type="hidden" name="leave_this_alone" value="MTU2OTM3NTA3OA==">
        <p class="form-group">
            <input type="hidden" name="form_id" value="1044046">
            <input id="saveForm" class="btn btn-pink pl-5 pr-5" type="submit" name="lf_submit" value="Submit">
        </p>
    </form>
</div>
    </div>
    <div class="col-lg-6">
      <h2>My Process</h2>
      <p>
      Thank you for your interest in Hebert-Thomas Law, PLLC. I offer initial consultations that are conducted by phone. The consultation generally lasts about 20 to 30 minutes. Please note, however, the initial consultation with our firm does NOT establish an attorney-client relationship.
      </p>
      <p>
      After your initial consultation, should you wish to hire my firm, it is require that you sign an engagement agreement and provide a retainer. This is the only way to establish an attorney-client relationship with Hebert-Thomas Law, PLLC. Once all services have been rendered, any remaining retainer balance will be promptly refunded to you.
      </p>
      <h3>My Office</h3>
      <p>
        <strong>Address:</strong> 9100 Independence Pkwy Suite 1407, Plano, TX, 75025
      </p>
      <p>
        <strong>Phone Number:</strong> (972)-515-2941
      </p>
      <p>
        <strong>Fax Number:</strong> (972)-515-2941
      </p>
      <p>
        <strong>Email Address:</strong>  info@hebertthomaslaw.com
      </p>

      <h3>Office Hours</h3>

      <p>
      Office hours are Monday through Friday, 9:00 a.m. to 5:00 p.m., Closed on Saturday  and Sunday.
      </p>
    </div>
  </div>

</div>

<?php get_template_part('partials/recent-posts'); ?>