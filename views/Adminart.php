<section class="ftco-section">
		<div class="container">
			<div class="row justify-content-center">
				<div class="col-md-6 text-center mb-5">
					<h2 class="heading-section">Administration des articles</h2>
				</div>
			</div>
			<div class="row justify-content-center">
				<div class="col-lg-10">
					<div class="wrapper img" style="background-image: url(images/img.jpg);">
						<div class="row">
							<div class="col-md-9 col-lg-7">
								<div class="contact-wrap w-100 p-md-5 p-4">
									<h3 class="mb-4">Inserez votre article</h3>
									<div id="form-message-warning" class="mb-4"></div> 
				      		<div id="form-message-success" class="mb-4">
				            Article enregistré
				      		</div>
									<form method="POST" action="Adminart&status=new" id="contactForm" name="contactForm" class="contactForm">
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
                                            <label class="label" for="#">Interessés</label>
												<div class="form-group">
                                                    
                                                <input type="checkbox" id="Tous" value="Tous" name="interess[]" >
                                                <label for="Tous">Tous</label>
                                                
												</div>
                                                <div class="form-group">
                                                <input type="checkbox" id="Parents" value="Parents" name="interess[]">
                                                <label for="Parents">Parents</label>
                                                
												</div>
                                                <div class="form-group">
                                                    
                                                <input type="checkbox" id="Enseignants" value="Enseignants" name="interess[]">
                                                <label for="Enseignants">Enseignants</label>
                                                
												</div>
                                                <div class="form-group">
                                                <input type="checkbox" id="Primaire" value="Primaire" name="interess[]">
                                                <label for="Primaire">Primaire</label>
                                                
												</div>
                                                <div class="form-group">
                                                    
                                                <input type="checkbox" id="Moyen" value="Moyen" name="interess[]">
                                                <label for="Moyen">Moyen</label>
                                                
												</div>
                                                <div class="form-group">
                                                <input type="checkbox" id="Secondaire" value="Secondaire" name="interess[]">
                                                <label for="Secondaire">Secondaire</label>
                                                
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
									<h3 class="mb-4">updatez un article</h3>
									<div id="form-message-warning" class="mb-4"></div> 
				      		<div id="form-message-success" class="mb-4">
				            Article enregistré
				      		</div>
									<form method="POST" action="Adminart&maj" id="contactForm" name="contactForm" class="contactForm">
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
													<label class="label" for="descriptiona">Description</label>
													<textarea type="text" class="form-control"  name="descriptiona" id="descriptiona" placeholder="Description"><?=$article->descriptiona()?></textarea>
												</div>

                                                <div class="form-group">
													<label class="label" for="imagea">Image</label>
													<input type="text" class="form-control"  name="imagea" id="imagea" placeholder="Image" value=<?=$article->imagea()?>></input>
												</div>
											</div>
											





											<div class="col-md-12">
                                            <label class="label" for="#">Interessés</label>
												<div class="form-group">
                                                  <?php
												  $chekt="";
												  $chekp="";
												  $cheke="";
												  $chekpr="";
												  $chekm="";
												  $cheks="";
												 if($article->interessa()=="Tous"){$chekt="checked";}
												 if($article->interessa()=="Parents"){$chekp="checked";}
												 if($article->interessa()=="Enseignants"){$cheke="checked";}
												 if($article->interessa()=="Primaire"){$chekpr="checked";}
												 if($article->interessa()=="Moyen"){$chekm="checked";}
												 if($article->interessa()=="Secondaire"){$cheks="checked";}
												 if($article->interessa()=="Present"){$chekt="checked";}
												  ?>  
                                                <input type="checkbox" id="Tous" value="Tous" name="interess[]" <?=$chekt?> >
                                                <label for="Tous">Tous</label>
                                                
												</div>
                                                <div class="form-group">
                                                <input type="checkbox" id="Parents" value="Parents" name="interess[]" <?=$chekp?>>
                                                <label for="Parents">Parents</label>
                                                
												</div>
                                                <div class="form-group">
                                                    
                                                <input type="checkbox" id="Enseignants" value="Enseignants" name="interess[]" <?=$cheke?>>
                                                <label for="Enseignants">Enseignants</label>
                                                
												</div>
                                                <div class="form-group">
                                                <input type="checkbox" id="Primaire" value="Primaire" name="interess[]" <?=$chekpr?>>
                                                <label for="Primaire">Primaire</label>
                                                
												</div>
                                                <div class="form-group">
                                                    
                                                <input type="checkbox" id="Moyen" value="Moyen" name="interess[]" <?=$chekm?>>
                                                <label for="Moyen">Moyen</label>
                                                
												</div>
                                                <div class="form-group">
                                                <input type="checkbox" id="Secondaire" value="Secondaire" name="interess[]" <?=$cheks?>>
                                                <label for="Secondaire">Secondaire</label>
                                                
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