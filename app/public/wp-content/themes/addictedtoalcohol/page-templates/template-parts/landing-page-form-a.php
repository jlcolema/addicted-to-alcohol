<form action="#" id="contact_form_landing" method="POST" onsubmit="submitted=true;" target="hidden_iframe">
<p class="middle-text">Or fill out this form</p>
<div class="form-row justify-content-center">
<div class="col-sm-2 col-10 form-group">  
  <div class="input-group">
	<div class="input-group-prepend">
	  <div class="input-group-text">
		<i class="fa fa-address-card"></i>
	  </div>
	</div> 
	<input name="Name" value="" id="contact_name" placeholder="Name" type="text" class="form-control">
  </div>
  
</div>
<div class="col-sm-2 col-10 form-group">
<div class="input-group">
	<div class="input-group-prepend">
	  <div class="input-group-text">
		<i class="fa fa-phone"></i>
	  </div>
	</div> 
	<input class="form-control required phoneValidate phone" type="text" name="Phone Number" value="" id="contact_number" placeholder="Phone Number" required="required">
  </div>
</div>
</div>

<div class="form-row justify-content-center">
	<div class="col-sm-4 col-10">
		<textarea id="contact_message" name="Message" rows="3" class="form-control" aria-describedby="textareaHelpBlock" 
		placeholder="How can we help?"></textarea>
		<input type="hidden" id="gclid_hidden" name="gclid_hidden" value="">
		<button id="contact_submit" name="submit" type="submit" class="btn btn-primary" style="margin: 15px 0 0 0">Submit</button>
	</div>
</div>
</form>



<script>
jQuery(document).ready(function(){
	jQuery.validator.addMethod("phoneValidate", function(phone_number, element) {
	   phone_number = phone_number.replace(/\s+/g, ""); 
	   return this.optional(element) || phone_number.length > 9 &&
	   phone_number.match(/^(1-?)?(\([2-9]\d{2}\)|[2-9]\d{2})-?[2-9]\d{2}-?\d{4}$/);
   }, "*Enter a valid phone number");
	var u   = 'res/submit';
	$("#contact_form_landing").validate({meta:"validte"});
	$("#contact_submit").click(function(obj){
		if($("#contact_form_landing").valid()){
				$('body').append('<iframe id="hidden_iframe" name="hidden_iframe" onload="if(submitted){parent.window.location=\'/thank-you\';}" style="display: none;"></iframe>');
				$('#contact_form').submit();
				__ctm.form.track('app.calltrackingmetrics.com',
					'FRT472ABB2C5B9B141A3F4C355E1FA7B72ED05E4CB443959792288728E1146743A8',
					"8889797127",
					{
						country_code: "1",
						name: document.getElementById("contact_name").value,
						phone: document.getElementById("contact_number").value,
						custom: { "message": document.getElementById("contact_message").value,
									 "gclid_hidden": document.getElementById("gclid_hidden").value}
					});
		} else{
			alert('Please Fill Out Required Fields');
		}
	});
	});
</script>

