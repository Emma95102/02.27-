<!DOCTYPE html>
<html lang="zh-TW">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>黃紫凌首頁</title>
	<style type="text/css">
		* { font-family:"標楷體"; margin-left:auto; margin-right:auto;}
		h1 {color:blue; font-size:60px;}
		h2 {color:#33ff33; font-size:40px;}
	</style>
	<script>
		function change1() {
  			document.getElementById("pic").src = "mountain.jpg";
  			document.getElementById("h1text").innerText = "資訊管理導論";
  			document.getElementById("h2text").innerText = "靜宜資管";
		}

		function change2() {
  			document.getElementById("pic").src = "cliff.jpg";
  			document.getElementById("h1text").innerText = "黃紫凌";
  			document.getElementById("h2text").innerText = "Ziling Huang";
		}
	</script>


</head>

<body>
	<?php echo date("Y-m-d") ?>
	<table width="70%">
		<tr>
			<td>
				<img src="cliff.jpg"width="120%"id="pic" onmouseover="change1()" onmouseout="change2()"></img>
			</td>

			<td>
				<img src="pic"></img>
				<h1 id="h1text">黃紫凌</h1>
				<h2 id="h2text">Ziling Huang</h2>
			</td>
		</tr>
	</table>
	<table width="70%" border="1">
		<tr>
			<td>
				靜宜大學 資管系<br>
				Tel: 04-26328001#18110<br>
				IG:<a href="https://www.instagram.com/emma95102?igsh=cGdwNXd4dHE4MXcy&utm_source=qr"
	target="_blank">https://www.instagram.com/emma95102?igsh=cGdwNXd4dHE4MXcy&utm_source=qr</a><br>
	E-Mail: <a href="mailto:zilingh16@gmail.com">zilingh16@gmail.com<br>
	
			</td>

			<td>

	大象席地而坐電影配樂<br>
	<audio controls>
		<source src="elephant.mp3" type="audio/mP3">
	</audio><br>
			</td>

	<td>
		美秀集團<br>
	<iframe src="https://www.youtube.com/embed/mRma6NkHwWU" allowfullscreen></iframe>

	</td>

	<td>


<iframe
    allow="microphone;"
    width="350"
    height="430"
    src="https://console.dialogflow.com/api-client/demo/embedded/2eebf24b-aa65-49bf-a626-cd14bf42deff">
</iframe>
      
      

	</td>

		</tr>
	</table>


</body>
</html>












































<body>
	
</body>
</html>