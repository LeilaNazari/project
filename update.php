<!doctype html>
<html lang="en">
<?php
$students=[
    "user1"=>[1,"leila","nazari",19],
    "user2"=>[2,"mobina","zarei",19],
    "user3"=>[3,"mahsa","moradi",14],
    "user4"=>[4,"hadis","mehrjoo",34],
];
$fn="";
$ln="";
foreach ($students as $value){
    if ($value[0]==$_GET["idd"]){
        $fn=$value[1];
        $ln=$value[2];
    }
}
?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<div><input type="text" value=" <?php echo $_GET["idd"]; ?>" placeholder="your yourId:"> </div>
<br>
<div><input type="text" value=" <?php echo $fn; ?>" placeholder="your firstName:">   </div>
<br>
<div><input type="text" value="<?php echo $ln; ?>" placeholder="your lastName:">    </div>
<br>
</body>
</html>