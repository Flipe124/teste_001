
<?php

if($user["nome"]){
    echo $user["nome"];
}else{
    echo "--";
}


echo $user["nome"] ? $user["nome"] : "--";