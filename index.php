<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<style type="text/css">
	.lds-hourglass {
  display: inline-block;
  position: relative;
  width: 80px;
  height: 80px;
  display: none;
}
.lds-hourglass:after {
  content: " ";
  display: block;
  border-radius: 50%;
  width: 0;
  height: 0;
  margin: 8px;
  box-sizing: border-box;
  border: 32px solid #fff;
  border-color: #fff blue #fff blue;
  animation: lds-hourglass 1.2s infinite;
}
@keyframes lds-hourglass {
  0% {
    transform: rotate(0);
    animation-timing-function: cubic-bezier(0.55, 0.055, 0.675, 0.19);
  }
  50% {
    transform: rotate(900deg);
    animation-timing-function: cubic-bezier(0.215, 0.61, 0.355, 1);
  }
  100% {
    transform: rotate(1800deg);
  }
}
li{
	list-style: none;
}
#om{
	display: none;
}
</style>
<body>
<br>
<center><div class="lds-hourglass"></div>

<div  id="om">
	
</div>
</center>





</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
</html>
<script type="text/javascript">
	//var v = document.getElementById('om');
	fetchData();
	function fetchData(){
		$('.lds-hourglass').show();
		$.ajax({
			url:'https://api.openweathermap.org/data/2.5/forecast?q=palghar&APPID=6841e5450643e5d4ff59981dbf58944e&cnt=40',
			method:'POST',
			success:function(data){
				// console.log(data['list']);
				$('.lds-hourglass').hide();
				$('#om').show();
				let listdata = "";
				for (var i = 0 ; i < data['list'].length; i++) {
					console.log(data['list'][i]['dt_txt']);
					listdata += "<li>"+data['list'][i]['dt_txt']+"</li>";
				}
				//v.innerHTML=listdata+"</ul>";
				$('#om').html("<ul>"+listdata+"</ul>");
			}
		})
	}
</script>