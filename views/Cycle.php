<div id="fh5co-course-categories">
		<div class="container">
			<div class="row animate-box">
				<div class="col-md-6 col-md-offset-3 text-center fh5co-heading">
					<h2>Cycle <?=$_GET['idc']?></h2>
					
				</div>
			</div>
            <div class="row">
           

  


				<div class="col-md-3 col-sm-6 text-center animate-box"style="background-image: url(public/images/im1.jpg);  ">
					<div class="services" >
						<span class="icon">
							
						</span>
						<div class="desc">
							
							<h3><a href="Emp&idc=<?=$_GET['idc'] ?>" style=" background: rgba(255, 255, 255, 1);">Emploi Du temps global</a></h3>
							<h5  style=" background: rgba(255, 255, 255, 1);">cette page contient les emplois du temps globale du cycle</h5>
						</div>
					</div>
				</div>

                <div class="col-md-3 col-sm-6 text-center animate-box"style="background-image: url(public/images/im1.jpg);  ">
					<div class="services" >
						<span class="icon">
							
						</span>
						<div class="desc">
							
							<h3><a href="Ensresp&idc=<?=$_GET['idc'] ?>" style=" background: rgba(255, 255, 255, 1);">Liste des enseignants</a></h3>
							<h5  style=" background: rgba(255, 255, 255, 1);">Cette page contient les heures de réceptions des profs </h5>
						</div>
					</div>
				</div>

                <div class="col-md-3 col-sm-6 text-center animate-box"style="background-image: url(public/images/im1.jpg);  ">
					<div class="services" >
						<span class="icon">
							
						</span>
						<div class="desc">
							
							<h3><a href="Info&idc=<?=$_GET['idc'] ?>" style=" background: rgba(255, 255, 255, 1);">Information Pratique</a></h3>
							<h5  style=" background: rgba(255, 255, 255, 1);">cette page vous mène vers les information pratique du cycle </h5>
						</div>
					</div>
				</div>

                <div class="col-md-3 col-sm-6 text-center animate-box"style="background-image: url(public/images/im1.jpg);  ">
					<div class="services" >
						<span class="icon">
							
						</span>
						<div class="desc">
							
							<h3><a href="Rest&idc=<?=$_GET['idc'] ?>" style=" background: rgba(255, 255, 255, 1);">Réstauration</a></h3>
							<h5  style=" background: rgba(255, 255, 255, 1);">cette page vous mène vers les détails de la réstauration</h5>
						</div>
					</div>
				</div>
				
						
						
					
			</div>

			<div class="row">
            <?php

                foreach($articles as $article):
                ?>

  


				<div class="col-md-3 col-sm-6 text-center animate-box"style="background-image: url(public/images/<?=$article->imagea()?>);  ">
					<div class="services" >
						<span class="icon">
							
						</span>
						<div class="desc">
							
							<h3><a href="Post&ida=<?=$article->ida() ?>" style=" background: rgba(255, 255, 255, 1);"><?= $article->titrea() ?></a></h3>
							<h5  style=" background: rgba(255, 255, 255, 1);"><?= $article->descriptiona() ?></h5>
						</div>
					</div>
				</div>
				<?php endforeach ?>
						
						
					
			</div>
		</div>
	</div>