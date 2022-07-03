<?php
echo '<div style="background: bisque; text-align: center; font-size: 30px"><strong>kap pashtomatas</strong></div>';

// dezuciu dydziai s, m, l, xl, xxl
echo '"if" checking ';
echo '<hr>';
$s = 'xl';
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
