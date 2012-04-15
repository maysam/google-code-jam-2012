<?php
	$current_line = fgets(STDIN,1024);
	$lines = trim($current_line);
	for($i=1; $i<=$lines; $i++) {
		$current_line = fgets(STDIN,1024);
		$current_line = trim($current_line);
		$items = explode(' ', $current_line);
		$count = 0;
		$a = $items[0];
		$b = $items[1];
		$len = strlen($a);
		for($j = $a; $j<$b; $j++) {
			$num = $j;
			for($k=0; $k<strlen($j)-1; $k++) {
				$num = substr($num, -1).substr($num, 0, $len-1);
				if($num == $j)
					break;
				if($j<$num && $num <=$b) {
					$count++;
				}
			}
		}
		printf("Case #$i: $count\r\n");
	}
?>