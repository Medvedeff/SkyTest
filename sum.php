<?php
	function sum( $num1,$num2,$out='' ) {

		if (strlen($num1)>strlen($num2)) {
			$s1 = strrev( $num1 ); $s2 = strrev( $num2 );
		} else {
			$s2 = strrev( $num1 ); $s1 = strrev( $num2 );
		}

		$i = $d = 0;

		do {
			if (@$s2[$i]=='' && !$d) break;
			$sum = $s1[$i]+$s2[$i]+$d;
			$out .= substr( $sum,-1 );
			$d = strlen( $sum )-1;
			$i++;
		} while (true);

		return substr( strrev($s1),0,strlen($s1)-$i ).strrev($out);
	}

	$num1 = '33333333322233333399999999993333333332134537589348539478579546096049834857345384598';
	$num2 = '233333999999999999232323333333399999999999999548390658479827634584365485694';

	echo "$num1\n+\n$num2\n=\n";
	echo 'sum:	'.sum( $num1,$num2 )."\n"; // 
	echo 'bc :	'.bcadd( $num1,$num2 )." (check) \n"; // check
?>
