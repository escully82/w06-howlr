<link rel="stylesheet" href="css/forms.css">

<script src="js/jquery-1.11.1.js"></script>
<script src="js/jquery.validate.js"></script>
<script>
  $(function(){
	//put place holder script here if you use place holder property in input fields




	//use id of form to validate form
	var confirmValid= $('#contact_form').validate();

	//call validation function
	$('#contact_form').submit(function(){
	if(!confirmValid.valid()){
  	$('#error_flash').addClass('flash');
  	setTimeout(function(){
   		$('#error_flash').removeClass('flash');
   	},2000);
	}
	});

	//message flash on conformation
    var flashedMessage=$('#confirm_flash, #error_flash');
   	if($('.flash').length>0){
   		setTimeout(function(){
   		flashedMessage.removeClass('flash');
   		},2000);
   	}

  });
</script>

  <?php include_once('form_processor/process.php'); ?>

<!-- flashing message -->

<div id="confirm_flash" class="<?php echo $submited_message ?>" ><p>Thank you for your submission.</p></div>
<div id="error_flash" class="" ><p>Please fill out highlighted fields.</p></div>

<div id="form_container"><!--form box -->

    <form action="" method="POST" id="contact_form">

    	<h2 class="text_center">Contact Form</h2>

    	<ul>

    		<li>
    		  <label>first name</label>
    		  <br>
          <input type="text" name="first_name" required ><!-- use "required" property to require a field for submission -->

    		</li>

    		<li>
    		  <label>last name</label>
    		  <br>
    		  <input type="text" name="last_name" required>
    		</li>

    		<li>
    		  <label>e-mail</label>
          <br>
          <input type="email" name="email" required>
    		</li>

    		<li>
    		  <label>phone</label>
          <br>
          <input type="text" name="phone" maxlength="12" >
    		</li>


    		<li>
    		  <label>subject</label>
          <br>
          <input type="text" name="subject" required>
    		</li>

    		<!-- this field is hidden for spam trap do not delete -->
    		<li class="extra_field">
          <label>extra</label>
          <input type="text" name="extra_field" >
        </li>
        <!-- this field is hidden for spam trap do not delete -->

    		<li>
    		  <label>message</label>
    		  <br>
    		  <textarea name="mess" rows="5" required ></textarea>
    		</li>

    		<input name="contact_submit" id="submit" type="submit" value="submit">
    	</ul>

    </form>

</div><!-- end form box -->
