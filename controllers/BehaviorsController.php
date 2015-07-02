<?php
/**
 * Created by PhpStorm.
 * User: phpNT
 * Date: 30.06.2015
 * Time: 5:48
 */

namespace app\controllers;

use Yii;
use yii\web\Controller;
use yii\filters\AccessControl;

class BehaviorsController extends Controller {

    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                /*'denyCallback' => function ($rule, $action) {
                    throw new \Exception('Нет доступа.');
                },*/
                'rules' => [
                    [
                        'allow' => true,
                        'controllers' => ['main'],
                        'actions' => ['reg', 'login'],
                        'verbs' => ['GET', 'POST'],
                        'roles' => ['?']
                    ],
                    [
                        'allow' => true,
                        'controllers' => ['main'],
                        'actions' => ['logout'],
                        'verbs' => ['POST'],
                        'roles' => ['@']
                    ],
                    [
                        'allow' => true,
                        'controllers' => ['main'],
                        'actions' => ['index', 'search']
                    ],
                    [
                        'allow' => true,
                        'controllers' => ['widget-test'],
                        'actions' => ['index'],
                        /*'ips' => ['127.1.*'],
                        'matchCallback' => function ($rule, $action) {
                            return date('d-m') === '30-06';
                        }*/
                    ],
                ]
            ]
        ];
    }
}