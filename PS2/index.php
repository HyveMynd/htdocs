<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
<script type="text/javascript" src=MemeControl.js></script>
<!--<link rel="stylesheet" href="MemoryStyle.css" type="text/css" /> -->
<title>Meme Generator</title>
</head>
<body>
	<form method=get action=YourMeme.php>
	<h2>Create your very own Meme!</h2>
		<table>
			<tr>
				<td>Enter Top Caption</td>
				<td>Enter Bottom Caption</td>
				<td>Select Text Color</td>
			</tr>
			<tr>
				<td><input type="text" name=captionTop value="" onchange= /></td>
				<td><input type="text" name=captionBottom value="" onchange= /></td>
				<td>
					<select name=textColor>
						<option value='black' selected="selected">Black</option>
						<option value='red'>Red</option>
						<option value='white'>White</option>
						<option value='whiteBlack'>White w/Black Border</option>
					</select>
				</td>
			</tr>
			<tr><td>Select Picture</td></tr>
	
			<tr>
				<td><img src='raptor.jpg' /></td>
				<td><img src='kid.jpg' /></td>
				<td><img src='future.jpg' /></td>
				<td><img src='dosxx.jpg' /></td>
			</tr>
			<tr>
				<td><input type="radio" name=pic value=raptor.jpg />Philosoraptor</td>
				<td><input type="radio" name=pic value=kid.jpg />Success Kid</td>
				<td><input type="radio" name=pic value=future.jpg />Futurerama</td>
				<td><input type="radio" name=pic value=dosxx.jpg />Most Interesting Man</td>
			</tr>
			<tr>
				<td><input type="submit" value=Submit /></td>
			</tr>
		</table>
	</form>
</body>
</html>