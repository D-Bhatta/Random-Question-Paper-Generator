<?php include("header.php"); ?>
<body>

<div class="container">
  <h2>Report</h2>
  <form name="frmreport" action="report_verify.php" method="post">
    <div class="form-group">
      <input type="text" value="unameonfrm" id="unameonfrm" readonly name="unameonfrm" class="form-control">
      </div>
    <div class="form-group">
      <label for="pwd">Number of Students</label>
      <input type="number" class="form-control" id="nstudents"  name="nstudents" default="100" placeholder="100" value="100" step="1">
    </div>
    <div class="form-group">
      <label for="pwd">Average Marks</label>
      <input type="number" class="form-control" id="avmarks"  name="amarks" default="100" placeholder="100" min="10" max="1000" value="100" step="1">
    </div>
    <div class="form-group">
      <label for="pwd">Highest Marks</label>
      <input type="number" class="form-control" id="himarks"  name="hmarks" default="100" placeholder="100" min="10" max="1000" value="100" step="1">
    </div>
    <div class="form-group">
      <label for="pwd">Lowest Marks</label>
      <input type="number" class="form-control" id="lomarks"  name="lmarks" default="100" placeholder="100" min="10" max="1000" value="100" step="1">
    </div>
    <button type="submit" class="btn btn-default">Submit</button>
    <button type="reset"  class="btn btn-default">Reset</button>
  </form>
</div>

</body>
</html>

