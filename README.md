# Jaki otrzymamy wynik:
(12.3 != 123) = bool(true)

('123' == 123) = bool(true)

('123' === 123) = bool(false)

# Wypisać min z tablicy bez używania wbudowanych funkcji:
$numbers = array(12,23,45,20,5,6,34,17,9,56);

Max: 56.

Min: 5.
            
            $numbers = array(12,23,45,20,5,6,34,17,9,56);
            
            $min = $numbers[0];
            
            $max = $numbers[0];
            
            foreach ($numbers as $liczba){
                
                if($liczba > $max){ $max = $liczba; }
                
                elseif($liczba < $min){ $min = $liczba; }
            
            }
            
            echo "Max: ".$max.".";
            
            echo "Min: ".$min.".";
            
# Zamiana wartości zmiennych:

$a = 1, $b = 5;


Przed zamianą: $a = 1, $b = 5.

Po zamianie: $a = 5, $b = 1.
                
                $pom = $a;
                
                $a = $b;
                
                $b = $pom;
            
# Wypisać ciąg fibonacciego

0 1 1 2 3 5 8 13 21 34


0 1 1 2 3 5 8 13 21 34
            
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
