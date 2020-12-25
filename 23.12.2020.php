<?
echo "Задание 1.<br>";
$arr1 = array();
$n = 10; $i = 0;
while($i < $n)
{
    $arr1[$i] = rand(0, 50);
    if ($i%2==0)
    {
        echo "<strong>$arr1[$i]</strong><br>";
    }
    elseif ($i%2!=0)
    {
        echo "$arr1[$i]<br>";
    }
    $i++;
}
echo "<br>Задание 2.";
$arr2 = array(
    'months' => array('june', 'july', 'august','april'),
    'countries' => array('abkhazia','australia','russia','usa'),
    'professions' => array('artist', 'chef', 'astrologer', 'doctor')
);
foreach ($arr2 as $key => $item)
{
    echo "<br>$key:<br>";
    if (is_array($item))
        foreach ($item as $item2)
        {
            if ($item2[0] == 'a')
                echo '  ' .$item2 . ' ';
        }
    elseif ($item[0] == 'a')
        echo $item[0].' ';
}
echo '<br>';
echo "<br>Задание 3.<br>";
$counter1 = 0;
$counter2 = 0;
$counter3 = 0;
$arr3 = array(
    '0' => array('16', '54', '49', '42', '25', '9', '10'),
    '1' => array('15', '12', '28', '2', '520'),
    '2' => array('31', '96', '44', '39')
);
foreach ($arr3 as $key1 => $item3)
{
    echo "<br>$key1: ";
    if (is_array($item3))
        foreach ($item3 as $item4)
        {
            $counter2 += 1;
            $counter3 += 1;
        }
    echo $counter2;
    $counter2 = 0;
    $counter1 += 1;
}
$counter3 += $counter1;
echo '<br>'.'Общее количесвто элементов  массива: '.$counter3;
