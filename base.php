<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php
    echo " <center>
    <h1>BRANDO LOPEZ </h1>
    </center><br>";
    $Entrada=array("florcita","flor,bas,hol,base,rar,cita,ball");
    $array=explode(",",$Entrada[1]);
   
    
    echo "
    <center>
    <h3><i>Entrada:</h3></i></center> ";
    for($i=0;$i<count($Entrada);$i++)
    {
     echo $Entrada[$i]."\n" ;
    }
    echo "<br>";
    $palabra="";
    
    for($i=0;$i<count($array);$i++)
    {
        for($j=0;$j<count($array);$j++)
        {
   if ($j!=$i)
            {
   $palabra=$array[$i].$array[$j];
                if ($palabra==$Entrada[0])
                {
   echo "
   <center>
   <i>
   <h3>salida:
   <h3>
   </i>
   </center> ".$array[$i].",".$array[$j];
     }
            }
        }
    }  


?>
</body>
</html>