<link rel="stylesheet" href="h1.css">
<script src="js123.js"></script>


<div id="warp">

  <form  action="home.php" id="formu" method = "POST">
    	<div class="admin">
			      <div class="rota">
				        <h1>ADMIN</h1>
        				<input id="username" type="text" name="user" value="" placeholder="Username"/><br />
				        <input id="password" type="password" name="pass" value="" placeholder="Password"/>
      			</div>
    		</div>
    		<div class="cms">
      			<div class="roti">
			        	<h1>CMS</h1>
                        
                        <button id="valid" type="submit" name="valid">login</button>
                        
				        <p><a href="signup.php">Register</a> <a href="#">Forgot Password</a> <a href="#">Help</a></p>
      </div>
    		</div>
  	</form>
</div>

<script>
    function validation()
    {
        var id = document.f1.user.value;
        var ps = document.f1.pass.value;
        if (id.length == "" && ps.length == "") {
            alert("User Name and Password fields are empty");
            return false;
        } else
        {
            if (id.length == "") {
                alert("User Name is empty");
                return false;
            }
            if (ps.length == "") {
                alert("Password field is empty");
                return false;
            }
        }
    }
</script>  