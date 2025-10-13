<?php
$numbersParam = " 1  8 5  7 5 "; 
$result = '';

if ($numbersParam !== '') {
    $rawParts = explode(' ', $numbersParam);

    
    $parts = [];
    foreach ($rawParts as $p) {
        if ($p !== '') {      
            $parts[] = $p;
        }
    }

    $count = count($parts);
    if ($count > 0) {
        $maxValue = (int)$parts[0];
        $index = 1;

        if ($count > 1) {
            do {
                $current = (int)$parts[$index];
                if ($current > $maxValue) {
                    $maxValue = $current;
                }
                $index++;
            } while ($index < $count);
        }

        $result = $maxValue;
    }
}

echo $result, PHP_EOL;
?>

<!-- a simple way convert to an array and get the max  -->
<?php
$line = "1 8 5 7 5";
$nums = explode(' ', $line);

$max = (int)$nums[0];
for ($i = 1; $i < count($nums); $i++) {
    if ((int)$nums[$i] > $max) {
        $max = (int)$nums[$i];
    }
}

echo $max; 
