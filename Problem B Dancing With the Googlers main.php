<?php
	$current_line = fgets(STDIN,1024);
	$lines = trim($current_line);
	for($i=1; $i<=$lines; $i++) {
		$current_line = fgets(STDIN,1024);
		$current_line = trim($current_line);
		$items = explode(' ', $current_line);
		$count = $items[0];
		$s = $items[1];
		$p = $items[2];
		$sum = array();
		$max = 0;
		for($j=0; $j<$count; $j++)
			$sum[] = $items[$j+3];
		$minimum = 3*$p - 4;
		$maximum = 3*$p - 2;
		foreach($sum as $key => $total) {
			// remove the impossibles
			
			if($total < $minimum || $total<$p)
				unset($sum[$key]);
			// count and remove those not needing to be surprising, since we are looking for the maximum possibility
			if($total >= $maximum) {
				$max++;
				unset($sum[$key]);
			}
			
		}
		// count the rest and compare it with "S", take the minimum
		$c = count($sum);
		if($c>$s)
			$max += $s;
		if($c<=$s)
			$max += $c;
		//$max += min(count($sum),$s);
		printf("Case #$i: $max\r\n");
	}
?>