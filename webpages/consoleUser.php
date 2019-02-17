<?php include("header.php"); ?>

<div class="container bg-light text-dark pt-3" style="overflow:auto;min-height:2000px;">
    <div class="row">
        <div class="col-2 mx-auto my-auto">
            <div class="card" style="width: 18rem;">
                <a href="genqpaper.php"><img class="card-img-top" src="../images/paper.png" alt="Card image cap"></a>
                <div class="card-body mb-2">
                    <h5 class="card-title">Generate</h5>
                    <p class="card-text">Generate a random question paper!</p>
                    <a href="genqpaper.php" class="btn btn-primary">Generate</a>
                </div>
            </div>
        </div>
        <div class="col-2 mx-auto my-auto">
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
                <div class="col-2 mx-auto my-auto">
                    <div class="card" style="width: 18rem;">
                        <a href="insqs.php"><img class="card-img-top" src="../images/tickmark.jpg" alt="Card image cap"></a>
                        <div class="card-body mb-2">
                            <h5 class="card-title">Insert Questions</h5>
                            <p class="card-text">Insert Your own Questions into the database!</p>
                            <a href="insqs.php" class="btn btn-primary">Insert</a>
                        </div>
                    </div>
                </div>
                <div class="col-2 mx-auto my-auto">
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
</div>
<?php include("footer.php"); ?>