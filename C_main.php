<?php
	$translate = array(
						'a' => 'y',
						'b' => 'h',
						'c' => 'e',
						'd' => 's',
						'e' => 'o',
						'f' => 'c',
						'g' => 'v',
						'h' => 'x',
						'i' => 'd',
						'j' => 'u',
						'k' => 'i',
						'l' => 'g',
						'm' => 'l',
						'n' => 'b',
						'o' => 'k',
						'p' => 'r',
						'q' => 'z',
						'r' => 't',
						's' => 'n',
						't' => 'w',
						'u' => 'j',
						'v' => 'p',
						'w' => 'f',
						'x' => 'm',
						'y' => 'a',
						'z' => 'q',
						' ' => ' '
						);
	$to  = array_flip($translate);

	$current_line = fgets(STDIN,1024);
	$lines = trim($current_line);

	for($i=1; $i<=$lines; $i++) {
		$out = '';
		$current_line = fgets(STDIN,1024);
		$current_line = trim($current_line);
		for ($j=0; $j < strlen($current_line); $j++) { 
			# code...
			$out[$j] = $translate[$current_line[$j]];
		}
		$out = implode('', $out);
//		$out = str_replace(search, replace, subject)
		printf("Case #$i: $out\r\n");
	}
?>