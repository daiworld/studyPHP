<?php
//世界のナベアツ問題

/**
 * Nabeatsuクラス
 */
class Nabeatsu{

	/**
	 * 倍数の判定
	 *
	 * @param int $n 入力
	 * @param int $n_multiple 判定値
	 * @return boolean
	 */
	function multiple($n,$n_multiple){
		if($n % $n_multiple == 0){
			return true;	//倍数 正
		}else{
			return false;	//倍数でない 否
		}
	}


	/**
	 * 3の倍数ならFIZZ、5の倍数ならBUZZ、その他なら入力を返す
	 *
	 * @param int $n 入力
	 * @return string 出力
	 */
	function fizzbuzz($n){
		$result = null;
		if($this->multiple($n,3)){
			$result = "FIZZ";	//3の倍数 FIZZ
		}
		if($this->multiple($n,5)){
			$result .= "BUZZ";	//5の倍数 BUZZ
		}
		if($result == null){
			$result = $n;	//他 入力値
		}
		return $result;
	}


	/**
	 * targetまで繰り返し出力
	 *
	 * @param int $target
	 */
	function output($target){
		for($i=1; $i<=$target; $i++){
			echo $this->fizzbuzz($i);
			echo "<br />";	//ブラウザ改行
			echo "\n";	//ソース改行
		}

	}
}


$target = 30;	//30まで繰り返し

$nabeatsu = new Nabeatsu();
$nabeatsu->output($target);


?>