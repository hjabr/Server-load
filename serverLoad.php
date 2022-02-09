<?php

/**
 * 
 *   Display server load 
 * 
 *   By Hesham Jabr
 *   Email: mail@heshamjabr.com
 *   Website: www.heshamjabr.com
 * 
 */


$loadArray = explode(" ", exec("cat /proc/loadavg"));

echo "Server Load: <b>" . $loadArray[2] . "%<b>" ;
