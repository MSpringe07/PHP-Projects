<html>
  <head>
    <title>PHP Test</title>
  </head>
  <body>
    <?php

$mas= array(14, 18, 44, 3, 32, 26, 34, 1, 8, 17, 49, 21, 40, 14, 3, 31, 9, 10, 50, 3, 11, 12, 18, 14, 26, 48, 14);
$max = $mas[0];
$min = $mas[0];

//izvada lielāko masīva vērtību
for($i=0; $i < count($mas); $i++){
if ($max < $mas[$i]) {$max = $mas[$i];};  
}
echo"MAX = $max<br>";

//Izvada mazāko masīva vērtību
for($i=0; $i < count($mas); $i++){
if ($min > $mas[$i]) {$min = $mas[$i];};  
}
echo"MIN = $min<br>";

//Izrēķina vidējo masīva vērtību
$sum = 0;
$sk = Count($mas);

for($i=0; $i < count($mas); $i++){
$sum = $mas[$i] + $sum; 
}
$vid = $sum / $sk ;
echo"VID = $vid";

//Sakārto masīvu augošā secībā
for ($v = 0; $v < count($mas); $v++)
for ($i = 0; $i < count($mas)-1; $i++){
  if ($mas[$i] > $mas[$i+1]){
     $temp = $mas[$i+1];
    $mas[$i+1]=$mas[$i];
    $mas[$i]=$temp;
    
  }
}
Echo"<pre>";
echo "Pareizi skakārtots:";
print_r($mas);
Echo"</pre>";

//Izvada visus skaitļus kas atkārtojas un cik reizes

echo"<br>";
echo"Skaitlis = Reizes";
foreach (array_count_values($mas) as $key => $uzd){
  if ($uzd>1){
  echo"<p> $key \t = $uzd </p>";
  }
}
echo"</pre>" ;




?>
  </body>
</html>