<?php

for ($i = 0; $i < 5; $i++) {
    for ($j = $i; $j <= 5; $j++) {
        echo '&nbsp';
    }
    for ($k = 0; $k <= $i; $k++) {
        echo "*";
    }
    echo "<br>";
}
