<?php include("header.php"); ?>
<div class="container bg-light text-dark pt-3" style="overflow:auto;min-height:1000px;">

    <div class="row">
        <div class="col-2 mx-auto my-auto">
            <div class="card" style="width: 18rem;">
                <a href="consoleInsert.php"><img class="card-img-top" src="../images/approve.png" alt="Card image cap"></a>
                <div class="card-body mb-2">
                    <h5 class="card-title">Insert into Database</h5>
                    <p class="card-text">Approve insertions into database!</p>
                    <a href="consoleInsert.php" class="btn btn-primary">Approve</a>
                </div>
            </div>
        </div>
        <div class="col-2 mx-auto my-auto">
            <div class="card" style="width: 18rem;">
                <a href="consoleReport.php"><img class="card-img-top" src="../images/reports.png" alt="Card image cap"></a>
                <div class="card-body mb-2">
                    <h5 class="card-title">Reports</h5>
                    <p class="card-text">See all submitted Reports!</p>
                    <a href="consoleReport.php" class="btn btn-primary">View</a>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include("footer.php"); ?>         