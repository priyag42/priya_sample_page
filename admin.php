<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<title>
Demo: Admin Page
</title>
<link type="text/css" rel="stylesheet" href="/bootstrap-3.0.3-dist/css/bootstrap.css">
<link type="text/css" rel="stylesheet" href="/CSS/social.css">

<style>
body,h1{
	
margin: 0;
padding: 0;

}	
	
	



</style>






</head>
<body>


<h1> Welcome admin</h1>
<p style="float: right" id="time"></p>





<script>

function updateClock() {
    var currentTime = new Date();
    var currentHours = currentTime.getHours();
    var currentMinutes = currentTime.getMinutes();
    var currentSeconds = currentTime.getSeconds();
    currentMinutes = (currentMinutes & lt; 10 ? '0' : '') + currentMinutes;
    currentSeconds = (currentSeconds & lt; 10 ? '0' : '') + currentSeconds;
    var timeOfDay = (currentHours & lt; 12) ? 'AM' : 'PM';
    currentHours = (currentHours & gt; 12) ? currentHours - 12 : currentHours;
    currentHours = (currentHours == 0) ? 12 : currentHours;
    var currentTimeString = currentHours + ':' + currentMinutes + ':' + currentSeconds + ' ' + timeOfDay;
    $('#time').html(currentTimeString);
}
myCounter = setInterval(function () {
    updateClock();
}, 1000);
</script>


<script type="text/javascript" src="/JS/jquery-1.10.2.min.js"></script>
<script type="text/javascript" src="/JS/bootstrap.min.js"></script>

</body>
</html>