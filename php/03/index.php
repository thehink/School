<?php
/*
  uppgift 1
*/

function multiplier($a, $b)
{
  return $a * $b;
}

echo multiplier(6, 3);


echo '<br><br>';


/*
  uppgift 2
*/

function formatBirthDate($date, $only_day)
{
  $date = DateTime::createFromFormat('Y-m-d', $date);

  if(!$date) die("Error, Probably wrong timeformat!");


  if($only_day){
    return 'You were born on a ' . $date->format('l');
  }else{
    return 'You were born on ' . $date->format('l') . ' the ' . $date->format('dS') . ' of ' . $date->format('F') . ', ' . $date->format('Y');
  }
}


print formatBirthDate("1981-12-18", true);

echo '<br><br>';

/*
  uppgift 3
*/

function outputTemp($days = null){
  $temp = [ 11, 14, 15, 14, 14, 19, 22, 24, 24, 24, 21, 20, 19, 7, 9, 11, 15, 12, 17, 13, 16, 22, 20, 22, 11, 18, 16, 18, 21, 26, 27 ];
  $numDays = count($temp);


  if($days){
    for($i = 0; $i < count($days); ++$i){
      echo "May " . $days[$i] . " = " . $temp[$days[$i]-1] . '<br>';
    }
  }else{
    $max = $temp[0];
    $max_i = 0;

    $min = $temp[0];
    $min_i = 0;

    $avg = 0;


//calculate min, max and avg
    for($i = 0; $i < $numDays; ++$i){
      if($max < $temp[$i]){
        $max = $temp[$i];
        $max_i = $i;
      }

      if($min > $temp[$i]){
        $min = $temp[$i];
        $min_i = $i;
      }

      $avg += $temp[$i]/$numDays;

    }

//print data
    for($i = 0; $i < $numDays; ++$i){
      $ouput = sprintf("May %d = %.2f", $i+1, $temp[$i]);

      if($i === $max_i)
        $ouput .= ' - MAX';

      if($i === $min_i)
        $ouput .= ' - MIN';

      echo $ouput . '<br>';
    }



    echo sprintf('Avarage: %.2f<br>', $avg);
  }

}

// Your magic code here

outputTemp();
