<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <ol>
            <li>Jaki otrzymamy wynik:</li>
            <ol type='a'>
                <li>(12.3 != 123) = <strong><?php var_dump (12.3 != 123);?></strong></li>
                <li>('123' == 123) = <strong><?php var_dump ('123' == 123);?></strong></li>
                <li>('123' === 123) = <strong><?php var_dump ('123' === 123);?></strong></li>
            </ol>
            <li>Wypisać min z tablicy bez używania wbudowanych funkcji:</li>
            <p>$numbers = array(12,23,45,20,5,6,34,17,9,56);</p>
            <?php
            $numbers = array(12,23,45,20,5,6,34,17,9,56);
            $min = $numbers[0];
            $max = $numbers[0];
            foreach ($numbers as $liczba){
                if($liczba > $max){ $max = $liczba; }
                elseif($liczba < $min){ $min = $liczba; }
            }
            echo "Max: ".$max.".<br>";
            echo "Min: ".$min.".";
            ?>
            <pre>
            $numbers = array(12,23,45,20,5,6,34,17,9,56);
            $min = $numbers[0];
            $max = $numbers[0];
            foreach ($numbers as $liczba){
                if($liczba > $max){ $max = $liczba; }
                elseif($liczba < $min){ $min = $liczba; }
            }
            echo "Max: ".$max.".";
            echo "Min: ".$min.".";
            </pre>
            <li>Zamiana wartości zmiennych:</li>
            <p>$a = 1, $b = 5;</p>
            <?php
            $a = 1;
            $b = 5;
            echo "Przed zamianą: \$a = $a, \$b = $b.<br/>";
            $pom = $a;
            $a = $b;
            $b = $pom;
            echo "Po zamianie: \$a = $a, \$b = $b.";
            ?>
            <pre>
                $pom = $a;
                $a = $b;
                $b = $pom;
            </pre>
            <li>Wypisać ciąg fibonacciego</li>
            <p>0 1 1 2 3 5 8 13 21 34</p>
            <?php
            $first = 0;
            $secound = 1;
            for($i=0; $i < 10; $i++){
                if($i == 0){
                    echo $first." ";
                }elseif($i == 1){
                    echo $secound." ";
                }else{
                    $next = $first+$secound;
                    $first = $secound;
                    $secound = $next;
                    echo $next." ";
                }
            }
            ?>
            <pre>
            $first = 0;
            $secound = 1;
            for($i=0; $i < 10; $i++){
                if($i == 0){
                    echo $first." ";
                }elseif($i == 1){
                    echo $secound." ";
                }else{
                    $next = $first+$secound;
                    $first = $secound;
                    $secound = $next;
                    echo $next." ";
                }
            </pre>
        </ol>

    </body>
</html>
