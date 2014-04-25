<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<HTML>
	<HEAD>
		<TITLE> New Document </TITLE>
		<script type="text/javascript" src="./js/jquery.js"></script>
		<style type="text/css">
			body {
				font: 12px/1.6em "Arial"
			}
			ul {
				list-style: none;
			}
			li {
				margin-top: 10px;
			}
		</style>

		<script type="text/javascript">
			$(document).ready(function() { 
				$("#form").submit(function() {
					login();				
					return false;
				});
			});
			function login() {
				var user = $("#user").val();
				var pass = $("#pass").val();
				if (user == "") {
					$("#confirm").text("Please type in username");
					$("user").focus();
					return false;
				}
				if (pass == "") {
					$("#confirm").text("Please type in password");
					$("#pass").focus();
					return false;
				}
				$.ajax({
					type : "POST",
					url : "login.php",
					data : "id=" + user + "&p=" + pass,
					beforeSend : function() {
						$("confirm").text("processing");
					},
					success : function(msg) {
						if (msg == "success") {
							$("#confirm").text("Wecome back, " + user + ". You are entering the web space.");
						} else {
							$("#confirm").text("No such user or password is wrong.");
						}
					}
				});
			}
		</script>

	</HEAD>

	<BODY>
		<h3>Member Login Page</h3>
		<div id="login">
			<form method="post" action="login.php" id="form" name="form">
				<ul>
					<li>
						UserName:
						<input type="text" name="user" id="user" size="16" maxlength="20">
					</li>
					<li>
						PassWord:
						<input type="password" name="pass" id="pass" size="16" maxlength="20">
					</li>
					<li>
						<input type="submit" style="border:0" value="go" />
					</li>
					<li id="confirm"></li>
				</ul>
			</form>
		</div>
	</BODY>
</HTML>
