<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    function getTriangleArea(float $base =5,float $height =1): float {
        return $base * $height/2;
    }
    $area = getTriangleArea();
    print "三角形の面積は{$area}です。<br/>";
    $area = getTriangleArea(10);
    print "三角形の面積は{$area}です。<br/>";
    $area = getTriangleArea(10,5);
    print "三角形の面積は{$area}です。<br/>";
    ?>
</body>
</html>