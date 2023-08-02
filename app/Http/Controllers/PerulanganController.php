<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PerulanganController extends Controller
{
    public function main(){
        $i = 1;
        for (; $i <= 100 ; $i++) { 
            if ($i%3==0 && $i%5==0) {
                $this->lPP($i);
                continue;
            }
            if ($i%3==0) {
                $this->lLingkaran($i);
                continue;
            }
            if ($i%5==0) {
                $this->kLingkaran($i);
                continue;
            }
            $angka_formatted = sprintf("%.2f", $i);
            echo $angka_formatted."<br>";
        }
    }
    public function lLingkaran(float $i){
        $rll=$i/3;
        $ll=3.14*$rll*$rll;
        $fll = sprintf("%.2f", $ll);
        echo $fll."<br>";
    }
    public function kLingkaran(float $i){
        $rkl=$i/5;
        $kl=3.14*2*$rkl;
        $fkl = sprintf("%.2f", $kl);
        echo $fkl."<br>";
    }
    public function lPP(float $i){
        if ($i%3==0) {
            $p = $i/3;
        }
        if ($i%5==0) {
            $l = $i/5;
        }
        $lpp=$p*$l;
        $flpp = sprintf("%.2f", $lpp);
        echo $flpp."<br>";
    }
    public function hasil(){

    }

}
