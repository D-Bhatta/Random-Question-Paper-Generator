<?php include("header.php"); ?>
<div class="main">
    <div class="container">
        <form name="frmcontact" action="order.php" method="post">
            <div class="form-group">
            <input type="text" value="unameonfrm" id="unameonfrm" readonly name="unameonfrm" class="form-control">
            </div>
            <div class="form-group">
            <label for="subject">Subject:</label>
            <select id = "subject" name="subject" class="form-control">
                <option value="economics">Economics</option>
                <option value="government">Government</option>
                <option value="history">History</option>
                <option value="Sub4">Sub4</option>
                <!--Add more subjects-->
            </select>
            </div>
            <div class="form-group">
            <label for="difficulty">Difficulty:</label>
            <select id="difficulty" name="difficulty" class="form-control" class="form-control">
                    <option value="easy">Easy</option>
                    <option value="medium">Medium</option>
                    <option value="hard">Hard</option>
            </select>
            </div>
            <div class="form-group">
            <label for="marks">Marks(at least 10):</label>
            <input type="number" id="marks" name="marks" class="form-control" default="100" placeholder="100" min="10" max="1000" value="100" step="1"><br>
            </div>
            <div class="form-group">
            <input type="submit" value="Submit" class="btn btn-primary">
            <input type="reset" value="reset" class="btn btn-primary">

        </form>
    </div>

</div>
<?php include("footer.php"); ?>