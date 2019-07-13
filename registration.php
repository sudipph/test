<html>

<script>
function formvalidation(){
  if(document.form1.username.value == ''){
      alert ('username is blank');
      return false;
  }elseif(document.form1.email.value == ""){
      alert('email is blank');
  }elseif(){
      
  } 
}
</script>
<body>
<form action="product.php" method="post" name="form1" onsubmit="return formvalidation();">
		<table width="25%" border="0">
			<tr> 
				<td>Username</td>
				<td><input type="text" name="username"></td>
			</tr>
			<tr> 
				<td>Email</td>
				<td><input type="text" name="email"></td>
			</tr>
			<tr> 
				<td>Mobile</td>
				<td><input type="text" name="mobile"></td>
			</tr>
            	<tr> 
				<td>Password</td>
				<td><input type="text" name="password"></td>
			</tr>
			<tr> 
				<td></td>
				<td><input type="submit" name="add" value="Signup"></td>
			</tr>
		</table>
	</form>
</body>
</html>