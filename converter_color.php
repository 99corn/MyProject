<html>
<head>
	<title>색상변환~~!~~!</title>
	<script src="http://code.jquery.com/jquery-1.10.2.js"></script>
	
	<script>
	function componentToHex(c) {
	    var hex = c.toString(16);
	    return hex.length == 1 ? "0" + hex : hex;
	}

	function validationSize(num){
		num = Math.floor(num);
		if(num > 255) return 255;
		else if( num < 0 ) return 0;
		else return num;
	}
	function change(){
		//alert('a');
		//alert(document.getElementById('RED').value);
		var r = validationSize(parseInt(document.getElementById('RED').value));
		var g = validationSize(parseInt(document.getElementById('GREEN').value));
		var b = validationSize(parseInt(document.getElementById('BLUE').value));
	
		if( !r && r!=0 ){
			alert("값을 제대로 입력해주세요.");
			document.getElementById('RED').focus();
			return false;
		}
		if( !g && g!=0 ){
			alert("값을 제대로 입력해주세요.");
			document.getElementById('GREEN').focus();
			return false;
		}
		if( !b && b!=0 ){
			alert("값을 제대로 입력해주세요.");
			document.getElementById('BLUE').focus();
			return false;
		}
		
		var hexColorR = r.toString(16).toUpperCase();
		var hexColorG = g.toString(16).toUpperCase();
		var hexColorB = b.toString(16).toUpperCase();
		if ( hexColorR < 10 ) hexColorR = "0" + hexColorR;
		if ( hexColorG < 10 ) hexColorG = "0" + hexColorG;
		if ( hexColorB < 10 ) hexColorB = "0" + hexColorB;

		var hexColor = "#" + hexColorR + hexColorG + hexColorB;
		
		$( "#result-text" ).html(hexColor);
		$( "#result-Back" ).css( "background", hexColor);
	}
	</script>
	<style>
	.inputColor {
		text-align:center; width:100%; height:90px;
		font-size:25px;
	}
	.button {
	    background-color: #008CBA;
	    border: none;
	    color: white;
	    padding: 15px 32px;
	    text-align: center;
	    text-decoration: none;
	    display: inline-block;
	    font-size: 25px;
	}
	</style>
</head>
<body >
	<table style="width:600px; margin: auto; text-align:center;">
	<tr>
		<td style="font-size:30px;"><span style="font-size:55px;font-weight:bold;color:red;">R</span>ed</td>
		<td style="font-size:30px;"><span style="font-size:55px;font-weight:bold;color:green;">G</span>reen</td>
		<td style="font-size:30px;"><span style="font-size:55px;font-weight:bold;color:blue;">B</span>lue</td>
	</tr>
	<tr>
		<td><input class="inputColor" type="number" id="RED" name="RED" placeholder="RED"/></td>
		<td><input class="inputColor" type="number" id="GREEN" name="GREEN" placeholder="GREEN" /></td>
		<td><input class="inputColor" type="number" id="BLUE" name="BLUE"  placeholder="BLUE"/></td>
	</tr>
	<tr>
		<td colspan=3><input class='button' type="button" value="변환" onclick="change()" style="width:100%; cursor:pointer; font-weight:bold;"/></td>
	</tr>
	<tr><td colspan=3"></td>></tr>
	<tr>
		<td id="result-Back" colspan=3 style="height: 300px; text-align:center;">
			<div id="result-text" style="background:#fff; font-size:70px;"></div>
		</td>
	</tr>
	</table>
</body>
</html>