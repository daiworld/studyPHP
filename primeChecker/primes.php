<?php
 //素数判定


/**
 * 素数判定クラス
 */
Class Primes {

	/**
	 * 数値が入力されているか判定
	 *
	 * @param string $n 入力値
	 * @return boolean
	 */
	function validation($n){
		if(!isset($n)){
			return false;	//未入力の場合 否
		}else if(!is_numeric($n)){
			return false;	//数値以外の場合 否
		}
		return true;	//数値の場合 正
	}


	/**
	 * 素数判定
	 *
	 * @param string $n 入力値
	 * @return boolean
	 */
	function primeCheck($n){

		if(!preg_match("/^[0-9]+$/",$n)){
			return false;	//0以上の整数以外 否
		}else if($n < 2){
			return false;	//2未満 否
		}else if($n <= 3){
			return true;	//2or3 正
		}else if($n%2 == 0){
			return false;	//2の倍数 否
		}

		for($i=5; $i<=sqrt($n); $i+=2){	//5以上入力値の平方根以下 2刻みでループ
			if($n%$i == 0){
				return false;	//因数有り 否
			}
		}
		return true;	//因数無し 正
	}


	/**
	 *メッセージ
	 *
	 * @param string $n 入力値
	 * @param boolean $validation 入力が数値か判定
	 * @param boolean $primeCheck 素数判定
	 * @return string $message 出力メッセージ
	 */
	function output($n, $validation, $primeCheck){
		if(!$validation){	//入力が不正な場合
			$message = '半角数値を入力してください。';
		}else if($primeCheck){	//素数の場合
			$message = $n . 'は素数です。';
		}else {
			$message = $n . 'は素数ではありません。';
		}
		return $message;
	}
}


/**
 * リダイレクトクラス
 */
class Redirect{

	/**
	 * 同じディレクトリのファイルにリダイレクト
	 *
	 * @param string $extra ファイル名
	 */
	function redirect($extra){
		$host  = $_SERVER['HTTP_HOST'];
		$uri   = rtrim(dirname($_SERVER['PHP_SELF']), '/\\');
		header("Location: http://$host$uri/$extra");
	}
}



session_start();	//セッションスタート

$n = $_POST['number'];	//入力値の取得

$primes = new Primes();
$validation = $primes->validation($n);	//入力が数値か判定

if($validation){
	$primeCheck = $primes->primeCheck($n);	//素数判定
}

$message = $primes->output($n, $validation, $primeCheck);	//出力メッセージの代入

$_SESSION['message'] = $message;	//出力メッセージをセッションに格納

$redirect = new Redirect();
$redirect->redirect('primeChecker.php');	//primeChecker.phpにリダイレクト


?>