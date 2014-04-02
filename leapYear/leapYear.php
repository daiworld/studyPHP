<?php
//うるう年判定

/**
 * うるう年判定クラス
 */
class LeapYear{

	/**
	 * うるう年判定
	 *
	 * @param int $year 判定する年
	 * @return boolean
	 */
	function leapYearCheck($year){
		if($year%4 != 0){
			return false;	//4の倍数以外 否
		}else if($year%400 == 0){
			return true;	//400の倍数 正
		}else if($year%100 == 0){
			return false;	//400の倍数以外の100の倍数 否
		}
		return true;	//その他 正
	}

	/**
	 * 結果出力
	 *
	 * @param int $year 判定する年
	 */
	function output($year){
		if($this->leapYearCheck($year)){
			echo "{$year}年はうるう年です。<br />";
		}else{
			echo "{$year}年はうるう年ではありません。<br />";
		}
	}
}


$year = array(1900,2000,2012,2013);	//判定する年の配列

$leapYear = new LeapYear;

foreach($year as $y){
	$leapYear->output($y);
	echo "\n";
}

?>