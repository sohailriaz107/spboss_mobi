<?php
$i = 0;
if ($gh instanceof mysqli_result) {
    while($row = mysqli_fetch_array($gh)){
      $frequency=$row['frequency'];
        $i++;
        
        if ($i % $frequency == 1) {
            echo "<tr>";
        }
      $col = $row['color'];
      if ($row['color']=='red') {
          $color='r';
      }
      else{
        $color='';
      }
        echo "<td class='".$color."'>".$row['d']."</td>";
        
        if ($i % $frequency == 0) {
            echo "</tr>";
        }
    }
}

$frequency = isset($frequency) ? (int) $frequency : 0;
$spacercells = $frequency > 0 ? $frequency - ($i % $frequency) : 0;
if ($frequency > 0 && $spacercells < $frequency) {
    for ($j=1; $j<=$spacercells; $j++) {
        echo "<td></td>";
    }
    echo "</tr>";
}
?>
