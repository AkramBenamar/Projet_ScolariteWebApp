<br><br>




<?php
foreach($ensresp as $ensr):
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
									<h3 class="mb-4"> <?=$ensr->nome()?>&nbsp<?=$ensr->prenome()?></h3>
									<div id="form-message-warning" class="mb-4"></div> 
				      		<div id="form-message-success" class="mb-4">
				           
				      		</div>
									<form method="POST" action="Ensresp&update" id="contactForm" name="contactForm" class="contactForm">
										<div class="row">
											<div class="col-md-6">
												<div class="form-group">
                                                <?php
                                                        $horaire=$ensr->horaire();
                                                        foreach($horaire as $hor):
                                                        ?>
                                                        <?php
                                                        foreach($hor as $key=>$h):
                                                        ?>
                                                        <?php
                                                        $z="";
                                                        if ($key=="jour"){$z1=$h;}
                                                        if ($key=="heur1"){$z2=$h;}
                                                        if ($key=="heur2"){$z3=$h;}
                                                        ?>
                                                        
                                                        <?php endforeach?>
                                                        <?php endforeach?>
													<input type="hidden" name="ide" id="ide" value=<?=$ensr->ide()?>>
                                                    <input type="hidden" name="jh" id="jh" value=<?=$z1?>>
													<label class="label" for="name">Jour de reseption</label>
													<textarea type="text" class="form-control"  name="jour" id="jour" placeholder="jour"><?=$z1?></textarea>
												</div>
											</div>
											<div class="col-md-6"> 
												<div class="form-group">
													<label class="label" for="descriptiona">De</label>
													<textarea type="text" class="form-control"  name="heur1" id="heur1" placeholder="heur1"><?=$z2?></textarea>

                                                    <label class="label" for="descriptiona">A</label>
													<textarea type="text" class="form-control"  name="heur2" id="heur2" placeholder="heur2"><?=$z3?></textarea>
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