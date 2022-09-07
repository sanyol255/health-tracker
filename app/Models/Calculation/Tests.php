<?php

namespace App\Models\Calculation;

class Tests
{
    public static function bmi($weight, $height): array
    {
        $bmi = $weight / $height ** 2;
        $bmi = round($bmi, 1);

        if($bmi < 18.5){
            $result = 'Індекс маси тіла нижче норми - недостатня вага';
        }
        else if($bmi > 25){
            $result = 'Індекс маси тіла вище норми - надмірна вага';
        }
        else{
            $result = 'Індекс маси тіла в нормі';
        }

        return [$bmi, $result];
    }
}
