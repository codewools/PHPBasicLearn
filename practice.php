<?php
   // Two Sum Problem 
   $target = 10;
                        /// target = 4 
                        /// 1,3,4,5,7,7,5  /// 1 ,3   ;  
   $array  = [1,5,2,6,4,9];
// 1, 9 , 6,4
   for($i = 0 ; $i <count($array); $i++)
   {
        for($j = $i+1; $j< count($array);$j++)
        {
            $chckTarget = $array[$i] + $array[$j];
            if($chckTarget === $target)
            {
                echo "Found at ". $array[$i] ." ". $array[$j];
                break 2;   
            }
        }
   }
?>

