<?php
$ch="blue";
switch($ch){
    case 'blue':{
        echo "color is blue";
        break;
    }
    case 'pink':{
        echo "color is pink";
        break;
    }
    case 'red':{
        echo "color is red";
        break;
    }
    case 'yellow':{
        echo "color is yellow";
        break;
    }
    default:{
        echo "no match is found";
        break;
    }
}
echo "<br>";
$col="blue";
if($col=="blue"){
    echo "color is blue";
}
else if($col=="red"){
    echo "color is red";
}

else if($col=="pink"){
    echo "color is red";
}

else if($col=="yellow"){
    echo "color is red";
}

else if($col=="orange"){
    echo "color is red";
}
else{
    echo "color is not match";
}

echo "<br>one more example<br>";

$month="march";
switch($month){
    case 'january':{
        echo "month is january";
        break;
    }
    case 'febuaray':{
        echo "month is febuaray";
        break;
    }
    case 'march':{
        echo "month is march";
        break;
    }
    case 'april':{
        echo "month is april";
        break;
    }
    default:{
        echo "not month is matched";
        break;
    }
}

$m="march";
if($m=="march"){
    echo "<br>";
    echo "month is march<br>";
}
else if($m=="januarary"){
    echo "month is januarary";
}
else if($m=="feburary"){
    echo "month is feburary";
}
else if($m=="april"){
    echo "month is april";
}
else if($m=="may"){
    echo "month is may";
}

else{
    echo "no match is found";
}

?>