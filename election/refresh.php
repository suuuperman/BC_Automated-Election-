<html>
<body background="Resources/bg.jpg"style="background-size: 100%,100%">
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<center>
<font size="10"style="color:black;">Thank you for voting!!<br>You will be redirected in <span id="counter">5</span> second(s).</font>
</center>
</body>
</html>
<script type="text/javascript">
function countdown() {
    var i = document.getElementById('counter');
    if (parseInt(i.innerHTML)<=1) {
      location.href = 'mainelection.php';
    }
    i.innerHTML = parseInt(i.innerHTML)-1;
}
setInterval(function(){ countdown(); },1000);
</script>

