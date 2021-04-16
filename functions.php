<?php
    function printArry($numbers){
        $printArray ='';
        $arrayLength = count($numbers);
        for($i = 0; $i < $arrayLength; $i++){
            $printArray .= "<p>$numbers[$i]</p>";
        }
        return $printArray;
    }

    function largest($numbers){
        $arrayLength = count($numbers);
        $max = $numbers[0];
        for($i = 1; $i < $arrayLength; $i++){
            if($max < $numbers[$i]){
                $max = $numbers[$i];
            }
        }
        return $max;
    }

    function removeDups($numbers){
        $sorted = array_values(array_unique($numbers, SORT_NUMERIC));
        $arrayLength = count($sorted);
        $printArray ='Array after sorting: ';
        for($i = 0; $i < $arrayLength; $i++){
            $printArray .= $sorted[$i] . " ";
        }
        return $printArray;
    }


    /*
     *     function removeDups($numbers){
        $arrayLength = count($numbers);
        $dupes = $numbers[0];
        $printArray = "<p>$numbers[0]</p>";
        for($i = 1; $i < $arrayLength; $i++){
            if($dupes === $numbers[$i]){
                $max = $numbers[$i];
            }
            $printArray .= "<p>$numbers[$i]</p>";
        }
        return $max;
    }
     */

