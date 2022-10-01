<style type="text/css">
.form{
	border:5px solid red;
	margin-left:35%;
	margin-right:35%;
	padding:5%;
	background:grey;
	
}
.p{
	background:green;
	margin-left:30%;
	margin-right:30%;
	height:10%;
	font-size:40;
	text-align:center;
	color:white;
	border-radius:5px;
	
}
.txt{
	margin-left = 23%
	width:100%;
	padding:5%;
	margin-top:5%;
	height:5%;
}
.btn{
	margin-top: 25%;
	margin-left: 20%;
	

	background-color:green;
	
}
</style>
<p class="p">Registration Form</p>
<form action="login.php" class="form">
<input type="text" name="Fname" placeholder="full name" class="txt"><br><br>
<input type="password" name="pass" placeholder="password" class="txt"><br><br>
<input type="submit" value="send"class="btn">
<input type="reset" value="clear" class="btn">

</form>