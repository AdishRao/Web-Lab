<?php header('Content-Type: text/plain');

$matrix1 = array(array(1,2), array(4,5));
$matrix2 = array(array(1,2), array(4,5));
echo "\n\n";
echo "The order of matrix A is:" .count($matrix1)."x".count($matrix1[0]);
echo "The order of matrix B is:" .count($matrix2)."x".count($matrix2[0]);
echo "\n";

$rowCount = count($matrix1);
$colCount = count($matrix1[0]);

echo "The ip matrix A is:\n";
for($r = 0; $r<$rowCount;$r++)
{
    for($c = 0; $c<$colCount;$c++)
    {
        echo $matrix1[$r][$c];
        echo ' ';
    }
    echo "\n";
}

echo "The ip matrix B is:\n";
for($r = 0; $r<$rowCount;$r++)
{
    for($c = 0; $c<$colCount;$c++)
    {
        echo ' ';
        echo $matrix2[$r][$c];
    }
    echo "\n";
}

echo "The transpose matrix A is:\n";

for($r = 0; $r<$rowCount;$r++)
{
    for($c = 0; $c<$colCount;$c++)
    {
        echo $matrix1[$c][$r];
        echo ' ';
    }
    echo "\n";
}

echo "The transpose matrix B is:\n";

for($r = 0; $r<$rowCount;$r++)
{
    for($c = 0; $c<$colCount;$c++)
    {
        echo $matrix2[$c][$r];
        echo ' ';
    }
    echo "\n";
}

$rowCount2 = count($matrix2);
$colCount2 = count($matrix2[0]);

echo "The sum is:\n";

for($r = 0; $r<$rowCount;$r++)
{
    for($c = 0; $c<$colCount;$c++)
    {
        $val = $matrix1[$r][$c] + $matrix2[$r][$c];
        echo $val . "\t";
    }
    echo "\n";
}

if($colCount == $rowCount2)
{
    echo "The product is:\n";
    for($r = 0; $r<$rowCount;$r++)
    {
        for($c = 0; $c<$colCount;$c++)
        {
            $val = $matrix1[$r][$c] * $matrix2[$r][$c];
            echo $val . "\t";
        }
        echo "\n";
    }
}
else
{
    echo "Cannot Multiply!!!";
}
?>