<?php

$arr = [
                    [
                        'title' => 'дом',
                        'desc' => 'кирпичные',
                        'start'=>'1200',
                        'middle'=>'1800'
                    ],

                    [
                        'title' => 'квартира',
                        'desc' => 'панель',
                        'start'=>'800',
                        'middle'=>'1000'
                    ],
        ];

$arr[0][] = 'test';

print_r($arr);

extract($arr[1]);

//echo $title;

$name = 'Petiya';
$surname = 'Petrov';

$arr_compact = compact('name', 'surname');

print_r($arr_compact);

//print_r($arr);
//$count = count($arr);
//$i=0;
//while ($i<$count)
//{
//    print_r($arr[$i]);
//    $i++;
//}
echo '<br>';
echo '<select>';
for($i = 1950; $i<=2019; $i++)
{
    echo '<option>'.$i.'</option>';
}
echo '</select>';




$arrays = [
    [
        'title' => 'дом',
        'desc' => 'кирпичные',
        'start'=>'1200',
        'middle'=>'1800'
    ],

    [
        'title' => 'квартира',
        'desc' => 'панель',
        'start'=>'800',
        'middle'=>'1000'
    ],
];

foreach ($arrays as $k => $v)
{
    echo '<pre>';
        echo $k;
        print_r($v['title']);
    echo '</pre>';
}

//$a = 5;
//$b = &$a;
//$a = 7;
//
//echo $b.'<br><br>';








$arr = [1,2,3,4,5,10,20,30,40,50,70,100, 10, 30, 50];
echo max($arr);


function my_block(&$text)
{
    $text .= 'французских булок.';
}
$text = 'Съешь этих мягких, ';
my_block($text);
echo $text;

$handle = fopen("UPCC_41_20180305115258_SubscriptionInfo.csv", "r");


$data = fgetcsv($handle);
////$count = count($data);
//var_dump($data);
//while (($data = fgetcsv($handle)) !== FALSE) {
//    var_dump($data[0]);
//    var_dump($data[3]);
////    $count = $data;
////    $arr = compact();
//}
//
//fclose($handle);

$x = 5;
echo "<br><br>". $x % 2;

echo "<br><br>". $result = 2 ** 3 ."<br><br>";



function factorial($n)
{
    if($n <= 1){return 1;}
    return $n * factorial($n - 1);
}

echo factorial(3);

echo '<br> <br>';


function fibonachi($a, $b){
    return $a = $a + $b;
}
$a = 0;
$b = 1;

for($i=1; $i<=5; $i++){

    echo fibonachi(fibonachi($i-1, $a) , fibonachi($i-2, $a)).'<br>';
}



function fibonacci($n)
{
    if ($n < 3) {
        return 1;
    }
    else {
        return fibonacci($n-1) + fibonacci($n-2);
    }
}

for ($n = 1; $n <= 16; $n++) {
    echo(fibonacci($n) . ", ");
}


