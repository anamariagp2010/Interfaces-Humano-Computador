<?php

	function letra($num){
		if($num>=0 and $num<=9){
			return (string)$num;
		}
		switch ($num){
			case 10:
				return "A";
			break;

			case 11:
				return "B";
			break;

			case 12:
				return "C";
			break;

			case 13:
				return "D";
			break;

			case 14:
				return "E";
			break;

			case 15:
				return "F";
			break;		
		}

	}

	function rgb($R,$G,$B){
		if($R>255){$R = 255;}
		else if($R<0){$R = 0;}
		if($G>255){$G = 255;}
		else if($G<0){$G = 0;}
		if($B>255){$B = 255;}
		else if($B<0){$B = 0;}

		$ans = "#";

		$divR = $R/16;
		$divG = $G/16;
		$divB = $B/16;

		$divisionR = (int)$divR; //primer Valor
		$divisionG = (int)$divG;
		$divisionB = (int)$divB;

		$mulR = $divisionR * 16;
		$mulG = $divisionG * 16;
		$mulB = $divisionB * 16;

		$resR = $R - $mulR ; //segundo Valor
		$resG = $G - $mulG;
		$resB = $B - $mulB;

		$ans .= letra($divisionR);
		$ans .= letra($resR);

		$ans .= letra($divisionG);
		$ans .= letra($resG);

		$ans .= letra($divisionB);
		$ans .= letra($resB);
		return $ans;	
	}

	$exa = rgb(255,255,300);
	echo "Conversion: \t", $exa;
	


?>