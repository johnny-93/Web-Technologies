<!DOCTYPE html>
<html>
<body>

<script >
	function dis(){
		
		document.getElementById('sa').innerHTML="sdsd";
var x=writeMsg();
		alert(x);
	}


<?php
function writeMsg() {
    echo "Hello world!";
}

writeMsg();
?>
</script>
<p id="sa">aas</p>
<button onclick="dis()">click me</button>
</body>
</html>