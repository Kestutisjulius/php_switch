<?php
echo '<div style="background: bisque; text-align: center; font-size: 30px"><strong>kap pashtomatas</strong></div>';

// dezuciu dydziai s, m, l, xl, xxl
echo '"if" checking ';
echo '<hr>';
$s = 'ms';
if ($s == 's'){
    echo '<h3> CHECK\'ing "S", "s" = '.$s.' </h3>';
} if ($s == 's' || $s == 'm'){
    echo '<h3> CHECK\'ing "M", "s" = '.$s.'</h3>';
} if ($s == 's' || $s == 'm' || $s == 'l'){
    echo '<h3> CHECK\'ing "L", "s" = '.$s.'</h3>';
} if ($s == 's' || $s == 'm' || $s == 'l' || $s == 'xl'){
    echo '<h3> CHECK\'ing "XL", "s" = '.$s.'</h3>';
}
echo '<hr>';
echo '"switch" checking p.s. please, do not use "break"';
echo '<hr>';
switch ($s){
    case 's':
        echo '<h3> CHECK\'ing "S", "s" = '.$s.' </h3>';
    case 'm':
        echo '<h3> CHECK\'ing "M", "s" = '.$s.' </h3>';
    case 'l':
        echo '<h3> CHECK\'ing "L", "s" = '.$s.' </h3>';
    case 'xl':
        echo '<h3> CHECK\'ing "XL", "s" = '.$s.' </h3>';

    default : echo '<h3> not CHECK "s" = '.$s.' </h3>';

}
echo '<hr>';
echo '<h1 style="font-family: Amiri; color: brown">"MATCH"</h1>'.'  p.s. use this ...';
echo '<hr>';
$res = match($s){
    's' =>  '<h3> CHECK\'ing "S", "s" = '.$s.' </h3>',
    'm' =>  '<h3> CHECK\'ing "M", "s" = '.$s.' </h3>',
    'l' =>  '<h3> CHECK\'ing "L", "s" = '.$s.' </h3>',
    'xl' =>  '<h3> CHECK\'ing "XL", "s" = '.$s.' </h3>',
    default => '<h3> n\'CHECK "s" = '.$s.' </h3>'

};
echo "<h3>$res</h3>";

$age = 5;
$adult = match(true){
    (call_user_func(fn()=> $age < 18)) => 'kid',
    ($age >= 18 && $age < 66 )=> 'adult',
    default => 'senior'
};
print_r($adult);