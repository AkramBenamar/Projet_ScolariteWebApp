<div id="fh5co-course-categories">
		<div class="container">
			<div class="row animate-box">
				<div class="col-md-6 col-md-offset-3 text-center fh5co-heading">
					<h2>Administration</h2>
					
				</div>
			</div>
			<div class="row">
            <?php
                $i=0;
                while($i<8):
                ?>

  

                    <?php 
                    if($i==0){$titre="Administration des articles";$lien="Adminart";}
                    if($i==1){$titre="Administration de la déscription de l'école";$lien="Present&etat=p";}
                    if($i==2){$titre="Administration des emplois du temps";$lien="Emp&admin";}
                    if($i==3){$titre="Administration des enseignants";$lien="Ensresp&admin";}
                    if($i==4){$titre="Administration des utilisateurs";$lien="#";}
                    if($i==5){$titre="Administration de la restauration";$lien="Rest&admin";}
                    if($i==6){$titre="Administration de la page contact";$lien="Contact&admin";}
                    if($i==7){$titre="Administration des parametres";$lien="#";}
                    $i++;
                    ?>
				<div class="col-md-3 col-sm-6 text-center animate-box"style="background-image: url(public/images/);  ">
					<div class="services" >
						<span class="icon">
							
						</span>
						<div class="desc">
							
							<h3><a href="<?=$lien ?>" style=" background: rgba(255, 255, 255, 1);"><?= $titre ?></a></h3>
							<h5  ></h5>
						</div>
					</div>
				</div>
				<?php endwhile ?>
						
						
					
			</div>
		</div>
	</div>