<?
class MathematicalFormula {
	private function computeRandom (){
        $check = true;
        $counter = 0;
        $digits = [0, 1, 2, 3, 4, 5, 6, 7, 8, 9];
        while($check) {
            $random_n = rand(1,9);
            $N = $digits[$random_n];
            unset($digits[$N]);

            $random_e = array_rand($digits);
            $E = $digits[$random_e];
            unset($digits[$E]);

            $random_s = array_rand($digits);
            $S = $digits[$random_s];
            unset($digits[$S]);
            
            $random_h = array_rand($digits);
            $H = $digits[$random_h];
            unset($digits[$H]);

            $random_i = array_rand($digits);
            $I = $digits[$random_i];
            unset($digits[$I]);

            $random_r = array_rand($digits);
            $R = $digits[$random_r];
            unset($digits[$R]);

            $random_g = array_rand($digits);
            $G = $digits[$random_g];
            unset($digits[$G]);

            $random_b = array_rand($digits);
            $B = $digits[$random_b];
            unset($digits[$B]);

            $random_t = array_rand($digits);
            $T = $digits[$random_t];
            unset($digits[$T]);

            $random_u = array_rand($digits);
            $U = $digits[$random_u];

            $HIER = $H.$I.$E.$R;
            $GIBT = $G.$I.$B.$T;
            $ES = $E.$S;
            $NEUES = $N.$E.$U.$E.$S;

            if(($ES >= 10) && ($HIER + $GIBT + $ES) == $NEUES) {
                echo $HIER. " + ". $GIBT. " + ".$ES. " = ";
                echo $NEUES."<br>";
                $check = false;
            }
            else {
                $digits = [0, 1, 2, 3, 4, 5, 6, 7, 8, 9];
                $check = true;
            }
            $counter++;
        }
		return number_format($counter). " rounds<br><br>";
    }
    
	function renderAnwser (){
		return $this->computeRandom();
	}
}
echo "HIER + GIBT + ES = NEUES<br>";
$mathematical = new MathematicalFormula();
echo $mathematical->renderAnwser();
?>