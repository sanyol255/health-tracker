<?php

namespace App\Models\Calculation;

class Tests
{
    public static function bmi($weight, $height): array
    {
        $bmi = $weight / $height ** 2;
        $bmi = round($bmi, 1);

        if($bmi < 18.5){
            $result = 'The body mass index is less than normal level - underweight';
        }
        else if($bmi > 25){
            $result = 'The body mass index is greater than normal level - overweight';
        }
        else{
            $result = 'The body mass index is normal';
        }

        return [$bmi, $result];
    }

    public static function ruffierTest($pulse1, $pulse2, $pulse3): array
    {
        $ruffierIndex = [];
        $ruffierIndex['result'] = (4 * ($pulse1 + $pulse2 + $pulse3) - 200) / 10;

        switch ($ruffierIndex['result']) {
            case $ruffierIndex['result'] <= 3:
                $ruffierIndex['description'] = 'Good physical level';
            break;
            case $ruffierIndex['result'] <= 6:
                $ruffierIndex['description'] = 'Average physical level';
            break;
            case $ruffierIndex['result'] <= 9:
                $ruffierIndex['description'] = 'Acceptable physical level';
            break;
            case $ruffierIndex['result'] <= 14:
                $ruffierIndex['description'] = 'Bad physical level';
            break;
            default:
                $ruffierIndex['description'] = 'Very bad physical level';
        }

        return $ruffierIndex;
    }

    public static function hypoxiaTest($inhale, $exhale): array
    {
        $result = [];
        $result['inhale'] = $inhale;
        $result['exhale'] = $exhale;

        switch($inhale) {
            case $inhale < 30:
                $result['inhale_score'] = 4;
                $result['inhale_info'] = 'Bad inhale test';
            break;
            case $inhale < 40:
                $result['inhale_score'] = 3;
                $result['inhale_info'] = 'Average inhale test';
            break;
            case $inhale < 60:
                $result['inhale_score'] = 2;
                $result['inhale_info'] = 'Good inhale test';
            break;
            default:
                $result['inhale_score'] = 1;
                $result['inhale_info'] = 'Perfect inhale test';
        }

        switch($exhale) {
            case $inhale < 25:
                $result['exhale_score'] = 4;
                $result['exhale_info'] = 'Bad exhale test';
                break;
            case $inhale < 30:
                $result['exhale_score'] = 3;
                $result['exhale_info'] = 'Average exhale test';
                break;
            case $inhale < 40:
                $result['exhale_score'] = 2;
                $result['exhale_info'] = 'Good exhale test';
                break;
            default:
                $result['exhale_score'] = 1;
                $result['exhale_info'] = 'Perfect exhale test';
        }

        $result['total_score'] = $result['inhale_score'] + $result['exhale_score'];

        switch($result['total_score']) {
            case $result['total_score'] < 4:
                $result['total_info'] = 'Your oxygen level in the body is good';
            break;
            case $result['total_score'] < 7:
                $result['total_info'] = 'Your have an average oxygen level in the body';
            break;
            default:
                $result['total_info'] = 'You have a very low oxygen level in the body - hypoxia';
        }

        return $result;
    }
}
