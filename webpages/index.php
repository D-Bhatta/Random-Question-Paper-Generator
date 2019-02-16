<?php include("header.php"); ?>
 <div class="main"> 
	<div class="carousel-container">
			<h2>Carousel Example</h2>  
			<div id="myCarousel" class="carousel slide" data-ride="carousel">
			  <!-- Indicators -->
			  <ol class="carousel-indicators">
				<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
				<li data-target="#myCarousel" data-slide-to="1"></li>
				<li data-target="#myCarousel" data-slide-to="2"></li>
			  </ol>
		  
			  <!-- Wrapper for slides -->
			  <div class="carousel-inner">
				<div class="item active">
				  <img src="../images/carousel1.png" alt="icon" style="width:100%;">
				  	<div class="carousel-caption">
						<h3>Web Education Institute</h3>
						<p>Always Ahead</p>
					</div>
				</div>
		  
				<div class="item">
				  <img src="../images/carousel2.jpg" alt="stem_workshop" style="width:100%;">
				  	<div class="carousel-caption">
						<h3>Stem Workshop</h3>
						<p>Stem Workshop was so much fun!</p>
					</div>
				</div>
			  
				<div class="item">
				  <img src="../images/carousel3.jpg" alt="philosophy_workshop" style="width:100%;">
				</div>
				<div class="item">
					<img src="../images/carousel4.jpg" alt="professional_development_workshop" style="width:100%;">
						<div class="carousel-caption">
							<h3>Professional Development Workshop</h3>
							<p>We learn how to exist in a professional world</p>
						</div>
				</div>
			
				<div class="item">
					<img src="../images/carousel5.jpg" alt="taiwan_cooperative_workshop" style="width:100%;">
						<div class="carousel-caption">
							<h3>Taiwan Cooperative Workshop</h3>
							<p>Taiwan Cooperative Workshop starts the lab in Taiwan</p>
						</div>
				</div>
				<div class="item">
					<img src="../images/carousel6.jpg" alt="taiwan_cooperative2_workshop" style="width:100%;">
						<div class="carousel-caption">
							<h3>Taiwan Cooperative Workshop</h3>
							<p>Taiwan Cooperative Workshop-at the end of a long day!</p>
						</div>
				</div>
			  </div>
		  
			  <!-- Left and right controls -->
			  <a class="left carousel-control" href="#myCarousel" data-slide="prev">
				<span class="glyphicon glyphicon-chevron-left"></span>
				<span class="sr-only">Previous</span>
			  </a>
			  <a class="right carousel-control" href="#myCarousel" data-slide="next">
				<span class="glyphicon glyphicon-chevron-right"></span>
				<span class="sr-only">Next</span>
			  </a>
			</div>
		  </div>
	<div class="container">
        <div class="row">
            <div class="col-2 mx-auto">
                <div class="card" style="width: 18rem;">
                    <a href="login.php"><img class="card-img-top" src="../images/Fuser.png" alt="Card image cap"></a>
                    <div class="card-body mb-2">
                        <h5 class="card-title">Login As User</h5>
                        <p class="card-text">Login to generate your own Question Paper and Get access to analytics</p>
                        <a href="login.php" class="btn btn-primary">Login</a>
                    </div>
            </div>
            </div>
            <div class="col-2 mx-auto">
                    <div class="card" style="width: 18rem;">
                        <a href="login_admin.php"><img class="card-img-top" src="../images/admin.png" alt="Card image cap"></a>
                        <div class="card-body mb-2">
                            <h5 class="card-title">Login As Admin</h5>
                            <p class="card-text">Login as System Admin to view user reports, Allow insertion of questions and much more!</p>
                            <a href="login_admin.php" class="btn btn-primary">Login</a>
                        </div>
                    </div>
            </div>
        </div>
        <div class="col-sm-4">
         </div>
        <div class="row">
                <div class="col-2 mx-auto">
                    <div class="card" style="width: 18rem;">
                        <a href="genqpaper.php"><img class="card-img-top" src="../images/paper.png" alt="Card image cap"></a>
                        <div class="card-body mb-2">
                            <h5 class="card-title">Generate</h5>
                            <p class="card-text">Generate a random question paper!</p>
                            <a href="genqpaper.php" class="btn btn-primary">Generate</a>
                        </div>
                </div>
                </div>
                <div class="col-2 mx-auto">
                        <div class="card" style="width: 18rem;">
                            <a href="download2.php"><img class="card-img-top" src="../images/pdf_download.png" alt="Card image cap"></a>
                            <div class="card-body mb-2">
                                <h5 class="card-title">Download</h5>
                                <p class="card-text">Download last generated question paper!</p>
                                <a href="download2.php" class="btn btn-primary">Download</a>
                            </div>
                        </div>
                </div>
        </div>
        <div class="col-sm-4">
        </div>
        <div class="row">
                <div class="col-2 mx-auto">
                    <div class="card" style="width: 18rem;">
                        <a href="insqs.php"><img class="card-img-top" src="../images/tickmark.jpg" alt="Card image cap"></a>
                        <div class="card-body mb-2">
                            <h5 class="card-title">Insert Questions</h5>
                            <p class="card-text">Insert Your own Questions into the database!</p>
                            <a href="insqs.php" class="btn btn-primary">Insert</a>
                        </div>
                </div>
                </div>
                <div class="col-2 mx-auto">
                        <div class="card" style="width: 18rem;">
                            <a href="report.php"><img class="card-img-top" src="../images/curve.gif" alt="Card image cap"></a>
                            <div class="card-body mb-2">
                                <h5 class="card-title">Report</h5>
                                <p class="card-text">Submit a report on the statistics of your exam!</p>
                                <a href="report.php" class="btn btn-primary">Report</a>
                            </div>
                        </div>
                </div>
        </div>
        <div class="col-sm-4">
        </div>
        <div class="row">
                <div class="col-2 mx-auto">
                    <div class="card" style="width: 18rem;">
                        <a href="#"><img class="card-img-top" src="../images/" alt="Card image cap"></a>
                        <div class="card-body mb-2">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                </div>
                </div>
                <div class="col-2 mx-auto">
                        <div class="card" style="width: 18rem;">
                            <a href="#"><img class="card-img-top" src="../images/" alt="Card image cap"></a>
                            <div class="card-body mb-2">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <a href="#" class="btn btn-primary">Go somewhere</a>
                            </div>
                        </div>
                </div>
        </div>
        
        
        
        
        
        <!--                                      
			<a href="index.php">
			<div class="contents-item">
			<img src="../images/html.svg">
			<p>Home</p>
			</div>
			</a>
			
			<a href="about_us.php">
			<div class="contents-item">
			<img src="../images/php.svg">
			<p>About Us</p>
			</div>	
			</a>
			 
			<a href="courses.php">
			<div class="contents-item">
			<img src="../images/ruby.svg">
			<p>Courses</p>
			</div>
			</a>
			
			<a href="academic.php">
			<div class="contents-item">
			<img src="../images/swift.svg">
			<p>Academic</p>
			</div>
			</a>
	</div>
	
	
	
 

 </div>

	<div class="footer">
	
		
		<div class="footer-logo">
			Web Education Institute
		</div>
		
		
		
		<div class="footer-list">
		
	
		
		<ul>
			<li>
				<a href="aboutus.php">About</a>
			</li>
			<li>
				<a href="courses.php">Courses</a>
			</li>
			<li>
				<a href="contact.php">Contact Us</a>
			</li>
		</ul>
		
		</div>
	</div> 
</body> 
</html>