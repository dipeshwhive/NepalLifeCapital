<?php

namespace App\Http\Controllers;;

class CalculatorController extends Controller
{
    public function buyCalculator(){

        return view('calculator.buyCalculator');
    }

    public function sellCalculator(){

        return view('calculator.sellCalculator');
    }

    public function sipCalculator(){

        return view('calculator.SIPCalculator');
    }

    public function bonusTaxCalculator(){

        return view('calculator.bonusTaxCalculator');
    }

    public function rightSharePriceCalculation(){
        return view('calculator.rightSharePriceAdjustmentCalculator');
    }

    public function bonusShareCalculator(){
        return view('calculator.bonusShareCalculator');
    }
}
