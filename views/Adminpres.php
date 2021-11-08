<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-6 text-center mb-5">
					<h2 class="heading-section">Administration de la presentation de l'ecole</h2>
				</div>
			</div>
			<div class="row justify-content-center">
				<div class="col-lg-10">
					<div class="wrapper img" style="background-image: url(images/img.jpg);">
						<div class="row">
							<div class="col-md-9 col-lg-7">
								<div class="contact-wrap w-100 p-md-5 p-4">
									<h3 class="mb-4">Inserez votre presentation</h3>
									<div id="form-message-warning" class="mb-4"></div> 
				      		<div id="form-message-success" class="mb-4">
				            Article enregistré
				      		</div>
									<form method="POST" action="Adminart&etat=p" id="contactForm" name="contactForm" class="contactForm">
										<div class="row">
											<div class="col-md-6">
												<div class="form-group">
													<label class="label" for="name">Titre</label>
													<input type="text" class="form-control" name="titrea" id="titrea" placeholder="Titre">
												</div>
											</div>
											<div class="col-md-6"> 
												<div class="form-group">
													<label class="label" for="email">Description</label>
													<input type="text" class="form-control" name="descriptiona" id="descriptiona" placeholder="Description">
												</div>

                                                <div class="form-group">
													<label class="label" for="imagea">Image</label>
													<input type="text" class="form-control"  name="imagea" id="imagea" placeholder="Image">
												</div>
											</div>
											
                                           
											<div class="col-md-12">
												<div class="form-group">
													<label class="label" for="#">Contenu</label>
													<textarea name="contenua" class="form-control" id="contenua" cols="30" rows="4" placeholder="Contenu"></textarea>
												</div>
											</div>
											<div class="col-md-12">
												<div class="form-group">
													<input type="submit" value="Enregistrer" class="btn btn-primary">
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

    <?php 
    foreach($articles as $article):
    ?>
<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-6 text-center mb-5">
					<h2 class="heading-section"></h2>
				</div>
			</div>
			<div class="row justify-content-center">
				<div class="col-lg-10">
					<div class="wrapper img" style="background-image: url(images/img.jpg);">
						<div class="row">
							<div class="col-md-9 col-lg-7">
								<div class="contact-wrap w-100 p-md-5 p-4">
									<h3 class="mb-4">updatez une presentation</h3>
									<div id="form-message-warning" class="mb-4"></div> 
				      		<div id="form-message-success" class="mb-4">
				            Article enregistré
				      		</div>
									<form method="POST" action="Adminart&update" id="contactForm" name="contactForm" class="contactForm">
										<div class="row">
											<div class="col-md-6">
												<div class="form-group">
													<input type="hidden" name="ida" id="ida" value=<?=$article->ida()?>>
													<label class="label" for="name">Titre</label>
													<textarea type="text" class="form-control"  name="titrea" id="titrea" placeholder="Titre"><?=$article->titrea()?></textarea>
												</div>
											</div>
											<div class="col-md-6"> 
												<div class="form-group">
													<label class="label" for="email">Description</label>
													<textarea type="text" class="form-control"  name="descriptiona" id="descriptiona" placeholder="Description"><?=$article->descriptiona()?></textarea>
												</div>

                                                <div class="form-group">
													<label class="label" for="imagea">Image</label>
													<input type="text" class="form-control"  name="imagea" id="imagea" placeholder="Image" value=<?=$article->imagea()?>></input>
												</div>
											</div>
											
                                           
											<div class="col-md-12">
												<div class="form-group">
													<label class="label" for="#">Contenu</label>
													<textarea name="contenua" class="form-control" id="contenua" cols="30" rows="4" placeholder="Contenu" ><?=$article->contenua()?></textarea>
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