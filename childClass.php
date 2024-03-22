<?php
class IteracijuDaznis extends Sprendimas {
    
    public function IteracijuDaz() {
        $iteracijuSkaiciai = [];
        
        for ($i = $this->a; $i <= $this->b; $i++) {
            $iteracija = 0;
            $skaicius = $i;
            while ($skaicius != 1) {
                if ($skaicius % 2 == 0) {
                    $skaicius = $skaicius / 2;
                } else {
                    $skaicius = 3 * $skaicius + 1;
                }
                $iteracija++;
            }
            if (!isset($iteracijuSkaiciai[$iteracija])) {
                $iteracijuSkaiciai[$iteracija] = 0;
            }
            $iteracijuSkaiciai[$iteracija]++;
        }
        $this->IteracijuDaznisRez($iteracijuSkaiciai);
    }
    
    private function IteracijuDaznisRez($iteracijuSkaiciai) {
		ksort($iteracijuSkaiciai);
        echo "Iteracijų pasikartojimai nuo $this->a iki $this->b:<br>";
        foreach ($iteracijuSkaiciai as $iteracija => $pasikartojimai) {
            echo "Iteracija $iteracija: $pasikartojimai kartą(-us)<br>";
        }
    }
}
?>