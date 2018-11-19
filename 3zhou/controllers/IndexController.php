<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;

class IndexController extends Controller
{

	public function actionIndex(){


		$sql = 'select * from cat';

		$data = Yii::$app->db->createCommand($sql)->queryAll();
		var_dump($data);exit;

		return $this->render('index');
	}

}
