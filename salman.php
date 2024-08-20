<!-- <!DOCTYPE html>
<html>
<body>

<?php
echo"<h2>PHP is </h2>";
echo "hello world! <br>";
echo"Lorem <br>";
echo "L","o","r","e","m";   

?>  
</body>
</html> -->

<!-- 
<!DOCTYPE html>
<html>
<body>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Document</title>
<style>
.ab{
color: blue;
font-size: 20px;
text-align: center;
padding: 10px;
border: 3px solid black;
margin-top: 10px;
margin-bottom: 10px;
border-radius: 5px;
box-shadow: 2px 2px 5px grey;
}
</style>
</head>
<body>
<?php
echo "<h1 class='ab'>Hello</h1>";
$x=12;
echo $x;
?>
</body>
</html> -->

<?php
$marks=92;
if($marks > 95){
    echo "Grade: A+";
}else if($marks > 85){
    echo "Grade: A";
}else if($marks > 75){
    echo "Grade: B+";
}else if($marks > 65){
    echo "Grade: B";
}else if ($marks > 60){
    echo "Grade: F";
}