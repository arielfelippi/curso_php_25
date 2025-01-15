<?php 
            echo "Array desordenado <br> [10] [5] [2] [30] [85] [14]";

            $array = [150, 10, 5, 2, 30, 85, 14, 1];
            //         0, 1, 2,  3,  4,  5

            $tam = count($array) -1; // 6 - 1 = 5

            for ($i = 0; $i < $tam ; $i++ ) {       
                for ($j = $tam ; $j > 0; $j--) {
                    $anterior = $j -1;

                    if ($array[$anterior] > $array[$j]) {
                        $temp = $array[$anterior];
                        $array[$anterior] = $array[$j];
                        $array[$j] = $temp;
                    }
                }

                if ($array[$i] < $array[$j]) {
                    $temp = $array[$i];
                    $array[$i] = $array[$j];
                    $array[$j] = $temp;
                }
            }

            echo "<br><br>Array Ordenado<br>";
            foreach($array as $resultado){
                echo "[$resultado] ";
            }
        
