<html>
<head>
<title>
</title>

<style>
table{
width:50%
border-collapse:collapse;
margin:20px auto;
}
</style>
</head>
<body>
<h2 style="text-align:center;">players</h2>
<?php
$player=array("virat",
               "dhoni",
               "sachin",
               "raam");
               
echo"<table border='1'>";
echo"<tr><th>Serial no.</th><th>Player</th></tr>";
foreach($player as $s=>$player)
{
echo"<tr><td>".($s+1)."</td><td>".$player."</td></tr>";
}
echo"</table>";
?>
</body>
</html>
