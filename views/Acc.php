

	
	<aside id="fh5co-hero">
		<center>
		<div class="flexslider" style="width: 70%; ">
			<ul class="slides">
		   	<li style="background-image: url(public/images/im5.jpg);">
		   		<div class="overlay-gradient"></div>
		   		<div class="container">
		   			<div class="row">
			   			<div class="col-md-8 col-md-offset-2 text-center slider-text">
			   				<div class="slider-text-inner">
			   					
			   				</div>
			   			</div>
			   		</div>
		   		</div>
		   	</li>
		   	<li style="background-image: url(public/images/im1.jpg);">
		   		<div class="overlay-gradient"></div>
		   		<div class="container">
		   			<div class="row">
			   			<div class="col-md-8 col-md-offset-2 text-center slider-text">
			   				<div class="slider-text-inner">
			   					
			   				</div>
			   			</div>
			   		</div>
		   		</div>
		   	</li>
		   	<li style="background-image: url(public/images/im3.jpg);">
		   		<div class="overlay-gradient"></div>
		   		<div class="container">
		   			<div class="row">
			   			<div class="col-md-8 col-md-offset-2 text-center slider-text">
			   				<div class="slider-text-inner">
			   					
			   				</div>
			   			</div>
			   		</div>
		   		</div>
		   	</li>		   	
		  	</ul>
	  	</div>
		  </center>
	</aside>

	<div id="fh5co-course-categories">
		<div class="container">
			<div class="row animate-box">
				<div class="col-md-6 col-md-offset-3 text-center fh5co-heading">
					<h2>Nos Articles</h2>
					
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


		
		

	