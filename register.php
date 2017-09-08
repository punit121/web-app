<head>
<link href="css/bootstrap-responsive.css" rel="stylesheet">
<link href="css/style.css" rel="stylesheet">
<link href="color/default.css" rel="stylesheet">
<link rel="shortcut icon" href="img/favicon.ico">

  </head>
<?php include 'navbar.php'; ?>
<section id="contact" class="section green">
<div class="container">
	<div class="row">
		<div class="span12">
			<div class="cform" id="contact-form">
                <div id="errormessage"></div>
				<form action="action.php" method="post" role="form" class="contactForm">
					<div class="row">
						<div class="">
							<div class="field your-name form-group">
								<input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:1" data-msg="Please enter at least 4 chars" />
                                <div class="validation"></div>
							</div>
							<div class="field your-email form-group">
								<input type="text" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                                <div class="validation"></div>
							</div>

							<div class="field subject form-group">
								<input type="password" class="form-control" name="password" id="password" placeholder="Password" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                                <div class="validation"></div>
							</div>
							<div class="field your-name form-group">
								<input type="text" name="mobile" class="form-control" id="contact" placeholder="Your Phone No." data-rule="minlen:10" data-msg="Please enter at least 10 chars" />
                                <div class="validation"></div>
							</div>
							<div class="field your-name form-group">
								<input type="text" name="address" class="form-control" id="address" placeholder="Address" data-rule="minlen:1" data-msg="Please enter at least 1 chars" />
                                <div class="validation"></div>
							</div>
							<div class="field your-name form-group">
								<input type="text" name="city" class="form-control" id="city" placeholder="City" data-rule="minlen:1" data-msg="Please enter at least 1 chars" />
                                <div class="validation"></div>
							</div>
							<div class="field your-name form-group">
								<input type="text" name="country" class="form-control" id="country" placeholder="Country" data-rule="minlen:1" data-msg="Please enter at least 1 chars" />
                                <div class="validation"></div>
							</div>
							<div class="field your-name form-group">
								<input type="text" name="pincode" class="form-control" id="pincode" placeholder="Zip Code" data-rule="minlen:1" data-msg="Please enter at least 1 chars" />
                                <div class="validation"></div>
							</div>
						</div>
						<div class="">
							<!--div class="field message form-group">
								<textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
                                <div class="validation"></div>
							</div-->
							<input type="submit" value="Register" class="btn btn-theme pull-left">
						</div>
					</div>
				</form>
			</div>
		</div>
		<!-- ./span12 -->
	</div>
</div>
</section>
<?php include 'footer.php'; ?>