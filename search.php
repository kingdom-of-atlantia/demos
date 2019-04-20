<?php
include_once("./header.php");
?>
<head>
	<meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=no">
</head>
<center>
<div  style="width:600px;">
<h1>Kingdom of Atlantia: Search</h1>
<center>Searches ALL atlantian sites.</center>
<script>
  (function() {
    var cx = '[CONTACT WEB MINISTER STAFF FOR KEY]';
    var gcse = document.createElement('script');
    gcse.type = 'text/javascript';
    gcse.async = true;
    gcse.src = 'https://cse.google.com/cse.js?cx=' + cx;
    var s = document.getElementsByTagName('script')[0];
    s.parentNode.insertBefore(gcse, s);
  })();

window.onload = function(){
document.getElementById('gsc-i-id1').placeholder = 'Search Atlantia';
var x = document.getElementsByClassName("ad f a_").parentNode;
x.parentNode.removeChild(x);
};
</script>
<gcse:search></gcse:search>
</div>
</center>

<?php
include("./footer.php");
?>
