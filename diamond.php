<?php
$n = 5; // Number of rows for the upper half

// Upper half of diamond
for ($i = 1; $i <= $n; $i++) {
    // Print spaces
    for ($j = 1; $j <= $n - $i; $j++) {
        echo "&nbsp;&nbsp;";
    }

    // Print stars
    for ($k = 1; $k <= $i; $k++) {
        echo "* ";
    }

    echo "<br>";
}

// Lower half of diamond
for ($i = $n - 1; $i >= 1; $i--) {
    // Print spaces
    for ($j = 1; $j <= $n - $i; $j++) {
        echo "&nbsp;&nbsp;";
    }

    // Print stars
    for ($k = 1; $k <= $i; $k++) {
        echo "* ";
    }

    echo "<br>";
}
?>
