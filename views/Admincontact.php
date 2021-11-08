<?php
foreach($contact as $contact):
?>
<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-6 text-center mb-5">
					<h2 class="heading-section">Administration des contact</h2>
				</div>
			</div>
			<div class="row justify-content-center">
				<div class="col-lg-10">
					<div class="wrapper img" style="background-image: url(images/img.jpg);">
						<div class="row">
							<div class="col-md-9 col-lg-7">
								<div class="contact-wrap w-100 p-md-5 p-4">
									<h3 class="mb-4">updatez un contact</h3>
									<div id="form-message-warning" class="mb-4"></div> 
				      		<div id="form-message-success" class="mb-4">
				            Article enregistré
				      		</div>
									<form method="POST" action="Contact&update" id="contactForm" name="contactForm" class="contactForm">
										<div class="row">
											<div class="col-md-6">
												<div class="form-group">
													<label class="label" for="name">Fax</label>
													<input type="text" class="form-control" name="fax" id="fax" placeholder="fax" value=<?=$contact->fax()?>>
												</div>
											</div>
											<div class="col-md-6"> 
												<div class="form-group">
													<label class="label" for="email">Telephone</label>
													<input type="text" class="form-control" name="telephone" id="telephone" placeholder="telephone" value=<?=$contact->telephone()?> >
												</div>

                                                <div class="form-group">
													<label class="label" for="imagea">Email</label>
													<input type="text" class="form-control"  name="email" id="email" placeholder="email" value=<?=$contact->email()?>>
												</div>
                                                <div class="form-group">
													
													<input type="hidden" class="form-control"  name="emaila" id="emaila" value=<?=$contact->email()?>>
												</div>
											</div>
											
                                           
											
											<div class="col-md-12">
												<div class="form-group">
													<input type="submit" value="Update" class="btn btn-primary">
													<div class="submitting"></div>
												</div>
											</div>
										</div>
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
<?php endforeach ?>