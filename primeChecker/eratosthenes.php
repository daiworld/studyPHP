<?php

class Eratosthenes
{

    /**
     *
     * @param int $number   探索対象最大値
     * @return array
     */
    public function sieveOfEratosthenes($number)
    {
        //3から$numberまでの整数を$serchListに格納
        for($i = 3; $i <= $number; $i++) {
            $serchList[] = $i;  //$serchList 探索対象
        }

        $primeList[] = 2;   //$primeList 素数のリスト

        while(!empty($serchList)){

            //$serchListのうち、$primeListで割り切れない数を$newSerchListに代入
            for($i = 0; $i < count($serchList); $i++){
                if($serchList[$i] % end($primeList) != 0){
                    $newSerchList[] = $serchList[$i];   //$newSerchList 新たな探索対象
                }
            }

            //$newSerchListを$serchListに代入
            if(isset($newSerchList)){
                $serchList = $newSerchList;
                unset($newSerchList);
                $primeList[] = $serchList[0];
            }else{
                unset($serchList);
            }
        }

        return $primeList;
    }



    public function outputArray($array){
        $count = count($array);

        for ($i = 0; $i < $count; $i++) {
            echo $array[$i];
            echo "<br />";
            echo "\n";
        }

    }
}


$number = 100;

$eratosthenes = new Eratosthenes();
$primeList = $eratosthenes->sieveOfEratosthenes($number);
$eratosthenes->outputArray($primeList);
