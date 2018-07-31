<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	
	<title>{game_name}</title>
	<link rel="stylesheet" type="text/css" href="{css_path}reset.css">
	<link rel="stylesheet" type="text/css" href="{css_path}recover.css" media="screen" />
	<link rel="stylesheet" type="text/css" href="{css_path}forms.css" media="screen" />
	<style type="text/css"> body {margin:0; padding:0;}</style>
</head>
<body>

		<div id="header">
			<!--<img src="{game_logo}">		-->
		</div>
		
		<div class="galerie">
			<div class="centrer boîte">
				<fieldset>
					   <legend>{lp_send_pwd_title}</legend>
				<br>
					<form method="post" name="ogame">
						<div id="error" style="{display}">
							<p>{error_msg}</p>
						</div>
						<br>
						<div id="loginwrapper">
							<div class="textLeft wrap-inner">
								<label for="login">{lp_label}</label><br><br>
								<input type="text" name="email" id="login" tabindex="1" class="input" /><br><br>
								<input type="submit" value="{lp_value}" tabindex="2" class="start" />
							</div>
						</div>
					</form>
			</fieldset>
			</div>
		</div>

	
</body>
</html>
