<?php
include 'childClass.php';
class Sprendimas {
    private $pradinis;
    protected $a;
    protected $b;
	private $d;

    public function __construct($vienas = null, $nuo = null, $iki = null, $d = null) {
        if ($vienas !== null) {
            $this->pradinis = $vienas;
        }
        if ($nuo !== null && $iki !== null) {
            $this->a = $nuo;
            $this->b = $iki;
        }
		if ($nuo !== null && $iki !== null && $d !== null) {
            $this->a = $nuo;
            $this->b = $iki;
			$this->d = $d;
        }
    }

    public function vienasSK() {
        echo "Pradinis skaičius: " . $this->pradinis . "<br>";
        $skaicius = $this->pradinis;
        $iteracijos = 0;
        while ($skaicius != 1) {
            echo $skaicius . " ";
            if ($skaicius % 2 == 0) {
                $skaicius = $skaicius / 2;
            } else {
                $skaicius = 3 * $skaicius + 1;
            }
            $iteracijos++;
        }
        echo $skaicius . "<br>" . " Iteracijų kiekis: " . $iteracijos . "<br>";
    }
    
    public function Intervalas(){
        $maxIteracija = 0;
        $maxValue = 0;
        $minIteracija = PHP_INT_MAX;
        $minValue = 0;
        $rezultatai = array();
        
        for ($i = $this->a; $i <= $this->b; $i++) {
            $iteracija = 0;
            $maxSkR = $i;
            $skaicius = $i;
            while ($skaicius != 1) {
                if ($skaicius % 2 == 0) {
                    $skaicius = $skaicius / 2;
                } else {
                    $skaicius = 3 * $skaicius + 1;
                }
                $iteracija++;
                if ($skaicius > $maxSkR) {
                    $maxSkR = $skaicius;
                }
            }
            $rezultatai[$i] = $maxSkR;
            if ($iteracija > $maxIteracija) {
                $maxIteracija = $iteracija;
                $maxValue = $i;
            }
            if ($iteracija < $minIteracija) {
                $minIteracija = $iteracija;
                $minValue = $i;
            }
        }
        
        arsort($rezultatai);
        
        echo "Nuo $this->a iki $this->b <br>";
        echo "Skaičiai su didžiausia pasiektą reikšmę:<br>";
        
        foreach ($rezultatai as $skaicius => $value) {
            if ($value == current($rezultatai)) {
                echo "Skaičius: $skaicius (Reikšmė: $value)<br>";
            }
        }
        
        echo "Skaičius su daugiausiai iteracijų: " . $maxValue . " (Iteracijų kiekis: " . $maxIteracija . ")<br>";
        echo "Skaičius su mažiausiai iteracijų: " . $minValue . " (Iteracijų kiekis: " . $minIteracija . ")<br>";
    }
	
	public function Progresija() {
        echo "Aritmetinė progrsija nuo $this->a iki $this->b:<br>";
		$sum = 0;
        for ($i = $this->a; $i <= $this->b; $i += $this->d) {
            echo $i . " ";
			$sum += $i;
        }
        echo "<br>";
		echo "Aritmetinės progresijos suma: $sum<br>";
    }
}
?>