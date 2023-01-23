<!DOCTYPE html>
<html>
<head>
  <title>Registration Form</title>
  <link rel="stylesheet" type="text/css" href="signupstyle.css">
</head>
<body>
  <div class="form-container">
    <form action="signup2.php" method="post">
      <h2>Registration Form</h2>
      <div class="form-group">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required>
      </div>
      <div class="form-group">
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required>
      </div>
      <div class="form-group">
        <label for="major">ID</label>
        <input type="text" id="major" name="major" required>
      </div>
      <input type="submit" value="Register">
    </form>
  </div>
</body>
</html>