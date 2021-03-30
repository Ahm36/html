<html>
<body>
<h1>Electricity Bill</h1>
<form method="post" action="#">
Consumer ID:<input type="number" name="id"><br>
Name: <input type="text" name="name"><br>
Previous Reading : <input type="number" name="prev"><br>
Present Reading:<input type="number" name="pres"><br><br>
<input type="submit">
</form>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST")
{
$id= $_POST['id'];
$name = $_POST['name'];
$prev = $_POST['prev'];
$pres = $_POST['pres'];
$unit=$pres-$prev;
echo "-------------------------------------------------------------------------";
echo "<h3>Kerala State Electricity Board (KSEB)</h3>";
echo "<br><br>";
echo "Consumer ID:" .$id."<br>";
echo "Consumer name : ".$name."<br>";
echo "Units Consumed : ".$unit."<br>";if($unit<=100)
{
$amt=$unit*3;}
else if($unit>100 && $unit<=200)
{
$amt=$units*4;
}
else if($unit>200 && $unit<=300)
{
$amt=$unit*5;
}
else
{
$amt=$unit*5;
}
echo "<h4>Total : Rs.".($amt)."</h4><br>";
echo "-------------------------------------------------------------------------";
}
?>
</body>
</html