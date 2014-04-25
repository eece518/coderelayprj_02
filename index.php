<!DOCTYPE html>
<html>
<head>
<SCRIPT>
function alerme(){
alert('This web page allows cross-site script, please disable it.');
}
</SCRIPT>
</head>

<body>

<p>First Line Commit</p>
<div>
<h1>Cross-Site Script is dangrous! Disable it!!!</h1>
</div>
<form>
  UserName: <input type='text' value='username'></input>
  PassWord: <input type='password' value='password'></input>
  <input type='submit' onClick="alertme()" value='go'></input>
</form>
</body>
</html>