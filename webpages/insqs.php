<?php include("header.php"); ?>
<body>

<div class="container">
  <h2>Insert Questions</h2>
  <form action="verify.php">
    <div class="form-group">
      <label for="email">Questions</label>
      <input type="Questions" class="form-control" id="Questions"  name="Questions">
    </div>
    <div class="form-group">
      <label for="pwd">Option 1:</label>
      <input type="Option 1:" class="form-control" id="Option 1:"  name="Option 1:">
    </div>
    <div class="form-group">
      <label for="pwd">Option 2:</label>
      <input type="Option 2:" class="form-control" id="Option 2:"  name="Option 2:">
    </div>
    <div class="form-group">
      <label for="pwd">Option 3:</label>
      <input type="Option 3:" class="form-control" id="Option 3:"  name="Option 3:>
    </div>
    <div class="form-group">
      <label for="pwd">Option 4:</label>
      <input type="Option 4:" class="form-control" id="Option 4:"  name="Option 4:">
    </div>
    <div class="form-group">
      <label for="pwd">Answer</label>
      <input type="Answer" class="form-control" id="Answer"  name="Answer">
    </div>
    <div class="form-group">
      <label for="pwd">Marks:</label>
      <input type="Marks" class="form-control" id="Marks"  name="Marks">
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
      <label for="subject">Subject:</label>
      <select id = "subject" name="subject" class="form-control">
        <option value="economics">Economics</option>
        <option value="government">Government</option>
        <option value="Sub3">Sub3</option>
        <option value="Sub4">Sub4</option>
        <!--Add more subjects-->
      </select>
    <button type="submit" class="btn btn-primary" value="submit">Submit</button>
    <button type="reset"  class="btn btn-primary" value="reset">Reset</button>
  </form>
</div>

</body>
</html>
