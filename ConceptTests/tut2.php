<?php

// Poem String
$poem = "\nRoses are red violets are blue but you'll always be the same!!!\n\n";
echo "$poem";
echo "<br/>";

// Conditions

$today = "Friday";
$SOW = true;

if ($today == "Monday" && $SOW) {
	echo "Happy week ahead!\n";
} else if ($today != "Monday" && $SOW) {
	echo "Hope the week has started off well\n";
} else if ($today != "Monday" && !$SOW) {
	echo "Happy Midweek!\n";
} else {
	echo "Enjoy your weekend!\n";
}

for ($i = 0; $i <= 10; $i++) {
	echo "The value at index $i = $i\n";
}
