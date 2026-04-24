<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


    <form action="" method="POST">

        <p>SELECT SHAPE</p>

        <select name="shape" id="">

          <option value="rectangel">Rectangle</option>
          <option value="square">Square</option>
          <option value="circle">Circle</option>

        </select>

        <p>Length</p><input type="number" name="length" id="">
        <br>

        <p>Bredth</p><input type="number" name="bredth" id="">
        <br>

        <p>Side</p><input type="number" name="s ide" id="">
        <br>

        <p>Radius</p><input type="number" name="radius" id="">
        <br><br>
        
        <p>RESULT</p>
        <input type="text" name= "area">
        <br><br>

        <input type="submit" value="Submit" name="submit">


    </form>
</body>
</html>

<?php

   $area = "";
   
   if(isset($_POST['submit'])){
    $shape = $_POST["shape"];

    if($shape == "rectangel"){
        $length = $_POST['length'];
        $bredth = $_POST['bredth'];
        $area = $length * $bredth;
    }
    elseif($shape == "square"){
        $side = $_POST['side'];
        $area = $side * $side;
    }
    elseif($shape == "circle"){
        $radius = $_POST['radius'];
        $area = 3.14 * $radius * $radius;
    }
   }

   if($area != "")
    echo "<h3>AREA = $area</h3>";

?>
