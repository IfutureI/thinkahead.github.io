

<?php include("header.php")?>



<section>
<div class="col-md-12 contact-info">
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d16703.421480223496!2d77.31593366229141!3d28.34488446194401!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390cdb852518d8b9%3A0x40e23ab163502c02!2sEast%20Chawla%20Colony%2C%20Sector%204%2C%20Ballabhgarh%2C%20Faridabad%2C%20Haryana%20121004!5e0!3m2!1sen!2sin!4v1598339428260!5m2!1sen!2sin" width="100%" height="450" frameborder="0" style="border:0;" aria-hidden="false" tabindex="0"></iframe>
		</div>
</section>


<!--get in touch-->
<section id="contact">
	<div class="container">
		<h1>Contact Us</h1>
		<div class="row">
			<div class="col-md-6">
				
        <div class="container">

            <div class="row">

                

                    <h7>For any Enquiry , please fill this form. We touches you shortly.</h7>

                   

                    <form id="contact-form" method="post" role="form">

                        <div class="messages" style="margin-top:10px;">

                        <div class="controls">

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group" >
                                        <label for="form_name" >Firstname *</label>
                                        <input id="form_name" type="text" name="name" class="form-control" placeholder="Please enter your firstname *"  data-error="Firstname is required.">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="form_lastname">Lastname *</label>
                                        <input id="form_lastname" type="text" name="surname" class="form-control" placeholder="Please enter your lastname *"  data-error="Lastname is required.">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="form_email">Email *</label>
                                        <input id="form_email" type="email" name="email" class="form-control" placeholder="Please enter your email *"  data-error="Valid email is required.">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="form_phone">Phone</label>
                                        <input id="form_phone" type="text" name="phone" class="form-control" placeholder="Please enter your phone">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="form_message">Message *</label>
                                        <textarea id="form_message" name="message" class="form-control" placeholder="Message for me *" rows="4"  data-error="Please,leave us a message."></textarea>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <input type="submit" name="ok" class="btn btn-success btn-send" value="Send message">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <p class="text-muted"><strong>*</strong> These fields are required. Contact form by <a href="https://thinkkahead.com" target="_blank">thinkkahead</a>.</p>
                                </div>
                            </div>
                        </div>

                    </form>
            <?php 
            if(isset($_POST['ok'])){
                include_once 'function.php';
                $obj=new Contact();
                $res=$obj->contact_us($_POST);
                if($res==true){
                    echo "<script>alert('Query successfully Submitted.Thank you')</script>";
                }else{
                    echo "<script>alert('Something Went wrong!!')</script>";
                }
            }
            ?>

                </div><!-- /.8 -->

            </div> <!-- /.row-->

        </div> <!-- /.container-->
			</div>




	<div class="col-md-6 contact-info">
				<div class="follow"><b>Address:</b><i class="fa fa-map-marker "></i>MCL 25 Lucknow UP India</div>
			
				<div class="follow"><b>Phone no.:</b><i class="fa fa-phone"></i>9625112441</div>
			
				<div class="follow"><b>Email:</b><i class="fa fa-envelope"></i>info@thinkahead.com</div>
			
				<div class="follow"><label></label><b>Get Social:</b></label>
					<a href="#"><i class="fa fa-facebook"></i></a>
						<a href="#"><i class="fa fa-youtube-play"></i></a>
							<a href="#"><i class="fa fa-twitter"></i></a>
								<a href="#"><i class="fa fa-linkedin"></i></a>
				</div>

		</div>
	</div>

    
	</div>
</section>




        <script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
        
        <script src="js/formValidation.js"></script>
        <script src="js/bootstrap.js"></script>
        <script type="text/javascript">
		
$(document).ready(function() {
    $('#contact-form').formValidation({
        message: 'This value is not valid',
        icon: {
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        },
        fields: {
            name: {
                validators: {
                    notEmpty: {
                        message: 'The name is required'
                    }
                }
            },
            surname: {
                validators: {
                    notEmpty: {
                        message: 'The last name is required'
                    }
                }
            },
            message: {
                validators: {
                    notEmpty: {
                        message: 'The message is required'
                    }
                }
            },
            phone: {
                validators: {
                    notEmpty: {
                        message: 'The mobile no. is required'
                    }
                }
            },
            email: {
                validators: {
                    notEmpty: {
                        message: 'The email address is required'
                    },
                    emailAddress: {
                        message: 'The input is not a valid email address'
                    }
                }
            }
        }
    });
});
</script>




<?php include("footer.php")?>