<!DOCTYPE html>
<html>
<head>
<body>
Enter your ESI Link: <input type="text" id="esilink" value="" style="width:500px">


<button onclick="convert()">convert to CREST</button>

<p id="esi-link">Your ESI Link: </p>
<p id="crest-link">Your CREST Link: </p>


<script>
function convert() {

	
	var foobaz = document.getElementById("esilink").value.split("/");
	var crestlink = "https://crest-tq.eveonline.com/killmails/" + foobaz[5] + "/" + foobaz[6];
	
	document.getElementById("esi-link").innerHTML = "Your ESI Link: " + document.getElementById("esilink").value;
    document.getElementById("crest-link").innerHTML = "Your CREST Link: " + "<b>" + crestlink + "</b>";

    
};
</script>
</div>
</body>
</head>
</html>