<?php include("header.php"); ?>
  <!--
    <div id="carouselObject" class="carousel slide " data-ride="carousel" style="width: 500px; height: 500px;margin: 0  auto">
        <ol class="carousel-indicators">
            <li data-target="#carouselObject" data-slide-to="0" class="active"></li>
            <li data-target="#carouselObject" data-slide-to="1"></li>
            <li data-target="#carouselObject" data-slide-to="2"></li>
            <li data-target="#carouselObject" data-slide-to="3"></li>
            <li data-target="#carouselObject" data-slide-to="4"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100" src="../images/logo.png" alt="">
                <div class="carousel-caption d-none d-md-block text-dark ">
                        <h5>Random Question Paper Generator</h5>
                        <p>Fast random question papers in PDF format</p>
                </div>
            </div>
            <div class="carousel-item">
                    <img class="d-block w-100" src="../images/logo.png" alt="">
                    <div class="carousel-caption d-none d-md-block">
                            <h5>Built by JIS University Students</h5>
                            <p></p>
                    </div>
            </div>
            <div class="carousel-item">
                    <img class="d-block w-100" src="../images/paper.png" alt="">
                    <div class="carousel-caption d-none d-md-block text-primary">
                            <h5>Generate Question Paper</h5>
                            <p>Generate in seconds from a large question bank</p>
                    </div>
            </div>
            <div class="carousel-item">
                    <img class="d-block w-100" src="../images/pdf_download.png" alt="">
                    <div class="carousel-caption d-none d-md-block">
                            <h5>Download</h5>
                            <p>Download in PDF format!</p>
                    </div>
            </div>
            <div class="carousel-item">
                    <img class="d-block w-100" src="../images/tickmark.jpg" alt="">
                    <div class="carousel-caption d-none d-md-block">
                            <h5>Insert Questions</h5>
                            <p>Insert Your Own Questions!</p>
                    </div>
            </div>
            <div class="carousel-item">
                    <img class="d-block w-100" src="../images/curve.gif" alt="">
                    <div class="carousel-caption d-none d-md-block">
                            <h5>Report</h5>
                            <p>Submit statistics!</p>
                    </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselObject" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselObject" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
-->
    
	<div class="container" style="overflow:auto;min-height:2000px;">
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
    </div>

    <?php include("footer.php"); ?>

</body>
</html>
