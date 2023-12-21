<html>

<head>


<style>

    h1 {
    margin-top: 0px;
    margin-bottom: 10px;
    font-family: sans-serif;
    font-size: 6rem;
    background: linear-gradient(to right, #ef5350, #f48fb1, #7e57c2, #2196f3, #26c6da, #43a047, #eeff41, #f9a825, #ff5722);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
  }

h1 {text-align: center;}
p {text-align: center;}
div {text-align: center;

    background: linear-gradient(to right, #ef5350, #f48fb1, #7e57c2, #2196f3, #26c6da, #43a047, #eeff41, #f9a825, #ff5722);
    
    font-size: 2rem;
    overflow-x: hidden;
    overflow-y: scroll;
    border: 1px solid black;
    width: 200px;
    height: 400px;
    margin: 0 auto;
    margin-top:150px ;
   
  padding: 10px;
  border: 1px solid #888;
    



}



</style>

    <meta charset="utf-8">
</head>
<body>
<body style="background-color:powderblue;">
    <?php $multi_x = 2; 
    echo "<h1>ตารางสูตรคูณแม่ 2<?php echo $multi_x ?></h1>"?>
    
    <div>
        
        <?php
        
        $i=1;
        while ($i <= 24 ){
            echo "$multi_x X $i =";
            echo $i*$multi_x;
            echo "<br>";
            $i++;

        }
    ?>
    </div>

</body>

</html>