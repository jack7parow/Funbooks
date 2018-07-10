<div style="width: 80%;height:100%;padding-left:110";>
	<div style="float:left; width: 50%">
		<H4 style="text-align:left;color:red;">Login</h4>
		<form class="form-group" action="seller_details.php" method="post">
			<div class="form-group">
			<label>User ID</label>
			<input class="form-control" type="text" name="username" />
			</div>
			<div class="form-group">
			<label>Password</label>
			<input type="password" class="form-control" name="password"/>
			</div>	    			
			<input class="btn btn-block btn-danger btn-lg" type="submit" name="login" value="Login" style="width:40%;">
		</form>
	</div>
	<div style="float:right;width:50%;">
	<H4 style="text-align:left;color:red;">Seller Sign Up</h4>
		<form class="form-group" action="sign_up.php" method="post">
		<div class="form-group">
		<label <!--for="username"-->User ID</label>
		<input class="form-control" type="text"  name="uid" />
		</div>
		<div class="form-group">
		<label <!--for="username"-->Seller name </label>
		<input class="form-control" type="text"  name="sname" />
		</div>
		<div class="form-group">
		<label <!--for="username"-->Paswword</label>
		<input class="form-control" type="password"  name="pwd"/>
		</div>
		<div class="form-group">
		<label <!--for="username"-->Phone</label>
		<input class="form-control" type="text"  name="phn"/>
		</div>
		<div class="form-group">
		<label <!--for="username"-->Email:</label>
		<input class="form-control" type="text"  name="mail" />
		</div>
		<div class="form-group">
		<label <!--for="username"-->Address</label>
		<input class="form-control" type="text"  name="add" />
		</div>
		<input class="btn btn-block btn-danger btn-lg" type="submit" name="signup" value="Sign Up" style="width:40%;"></form>
    </div>
</div>