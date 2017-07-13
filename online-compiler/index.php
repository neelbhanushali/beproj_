<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form method="post" id="codeform">
		<p>
			<select name="lang">
				<option value="c">c</option>
				<option value="java">java</option>
				<option value="python">python</option>
			</select>
		</p>
		<p>
			<textarea name="code" id="code" cols="69" rows="10" placeholder="Code..." required>#include<stdio.h>
void main() {
printf("hello world");
}</textarea>
		</p>
		<p>
			<textarea name="input" id="input" cols="30" rows="5" placeholder="Sample Input"></textarea>
			<textarea name="" id="output" cols="79" rows="20" placeholder="Output..." readonly></textarea>
		</p>
		<input type="hidden" name="run" value="1">
		<button name="run">run</button>
	</form>
	<!-- <script src="jquery.min.js"></script> -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="alpha.js"></script>
</body>
</html>