		

<section style="width:100%;background:#ffffff;padding-bottom:10px;">


	
	
    <div class="container">
	 		  <div class="content_simple" style="">
               <h1>Our Clients </h1>
			   <h2 style="text-align:center;"> Our past adventures</h2>
	<div style="float:left;width:100%;">
	<nav id="mainpop">
			<?php 
			$check_portfolios = mysqli_query($conn,"select * from `portfolios`");
			 	if(mysqli_num_rows($check_portfolios) > 0){
			  			  
			   		 while($get_portfolios = mysqli_fetch_array($check_portfolios))
		               {
							 $portfolio_id = strip_tags($get_portfolios["portfolio_id"]);
							 ?>
							 
							 <div class="our-client"> 
							 <a style="display:block;color:#3c7ec1;font-family:'ProximaNova-Regular' ,sans-serif;font-weight:bold;" 
							 href="<?php echo BASE_PATH;?><?php echo strip_tags($get_portfolios["portfolio_unique"]); ?>__XmnotoR__" title="<?php echo strip_tags($get_portfolios["portfolio_company_name"]); ?>"><?php echo strip_tags($get_portfolios["portfolio_company_name"]); ?></a><br>(<?php echo strip_tags($get_portfolios["portfolio_country"]); ?>)
							 </div>
							 <?php
						}
			}
			else{

			 echo "No Portfolio Result Found.";
			}
			
			
			?>
				</nav>
				
	</div>
	</div>
	</div>
	
</section>