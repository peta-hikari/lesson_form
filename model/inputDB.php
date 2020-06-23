<?php

class InputDB {
    public $pdo;

	/**
	 * コネクション確保
	 */
	public function __construct() {
		try {
			$this->pdo = new PDO(
                'mysql:dbname=form_contact;host=localhost;charset=utf8mb4',
                'root',
                '',
                [
                    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
                ]
			);
		} catch (PDOException $e) {
			echo '送信に失敗しました。もう一度初めからやり直してください。';
			die();
		}
	}

	/**
	 * 記事データをDBに保存
	 */
	public function saveDbPostData($data){

		// データの保存
		$smt = $this->pdo->prepare('insert into contact_info(NAME, MAIL, MAIN, JOB, GENDER, CONSENT) values(:name,:mail,:main,:job,:gender,:consent)');
		$smt->bindValue(':name', $data['name'], PDO::PARAM_STR);
		$smt->bindValue(':mail', $data['mail'], PDO::PARAM_STR);
        $smt->bindValue(':main', $data['main'], PDO::PARAM_STR);
        $smt->bindValue(':job', $data['job'], PDO::PARAM_STR);
        $smt->bindValue(':gender', $data['gender'], PDO::PARAM_STR);
        $smt->bindValue(':consent', $data['check'], PDO::PARAM_STR);
        $smt->execute();

	}
}
