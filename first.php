

<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>

<body onload="f2()">



<?php

$kkkk=$_GET['id'];
?>


<script type="text/javascript">

function f2()
{
var val = "<?php echo $kkkk ?>";
var url_string = location.href;

var url = new URL(url_string);
var c = url.searchParams.get("id");

console.log(c);

localStorage.setItem("my",c);
window.location.href="t22.html?id1="+val;
}

	




</script>
</body>