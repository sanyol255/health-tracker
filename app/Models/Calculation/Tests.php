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

    public static function ruffierTest($pulse1, $pulse2, $pulse3): array
    {
        $ruffierIndex = [];
        $ruffierIndex['result'] = (4 * ($pulse1 + $pulse2 + $pulse3) - 200) / 10;

        switch ($ruffierIndex['result']) {
            case $ruffierIndex['result'] <= 3:
                $ruffierIndex['description'] = 'Хороша фізична працездатність';
            break;
            case $ruffierIndex['result'] <= 6:
                $ruffierIndex['description'] = 'Середня фізична працездатність';
            break;
            case $ruffierIndex['result'] <= 9:
                $ruffierIndex['description'] = 'Задовільна фізична працездатність';
            break;
            case $ruffierIndex['result'] <= 14:
                $ruffierIndex['description'] = 'Погана фізична працездатність - середня серцева недостатність';
            break;
            default:
                $ruffierIndex['description'] = 'Дуже погана фізична працездатність- сильна серцева недостатність';
        }

        return $ruffierIndex;
    }
}
