<div id="fh5co-course-categories">
		<div class="container">
			<div class="row animate-box">
				<div class="col-md-6 col-md-offset-3 text-center fh5co-heading">
					<h2>Info aux élèves</h2>
					
				</div>
			</div>
			<div class="row">
            <?php

                foreach($articles as $article):
                ?>
                <?php 
                foreach($article as $art):
                ?>
  


				<div class="col-md-3 col-sm-6 text-center animate-box"style="background-image: url(public/images/<?=$art->imagea()?>);  ">
					<div class="services" >
						<span class="icon">
							
						</span>
						<div class="desc">
							
							<h3><a href="Post&ida=<?=$art->ida() ?>" style=" background: rgba(255, 255, 255, 1);"><?= $art->titrea() ?></a></h3>
							<h5  style=" background: rgba(255, 255, 255, 1);"><?= $art->descriptiona() ?></h5>
						</div>
					</div>
				</div>
                <?php endforeach?>
				<?php endforeach ?>
						
                <div class="col-md-3 col-sm-6 text-center animate-box" style="background-color: cyan;" >
					<div class="services" >
						<span class="icon">
							
						</span>
						<div class="desc">
							
							<h3><a href="Logins" style=" background: rgba(255, 255, 255, 1);">Login</a></h3>
							<h5  ></h5>
						</div>
					</div>
				</div>	
					
			</div>
		</div>
	</div>
