<?php
/**
 * Created by Alberto Aram Rascón García
 * Project: kube-backapp
 */


/**
 * In this script we just want to keep busy our CPU
 */
$uselessOperation = 0;
for($i=0; $i<1000000; $i++){
    $uselessOperation += rand(0,3);
}
echo "Random operation result is: $uselessOperation";
echo "<h1>I just wasted so much time in useless operation</h1>";