<?php


namespace app\controllers;


use app\models\Currency;
use yii\data\ActiveDataProvider;
use yii\filters\AccessControl;
use yii\filters\auth\HttpBearerAuth;
use yii\rest\Controller;
use yii\web\NotFoundHttpException;

/**
 * Class CurrencyController
 * @package app\controllers
 */
class CurrencyController extends Controller
{
    /**
     * {@inheritDoc}
     */
    public function behaviors()
    {
        $behaviors = parent::behaviors();
        $behaviors['access'] = [
            'class' => AccessControl::class,
            'rules' => [
                [
                    'allow' => true,
                    'roles' => ['@'],
                ],
            ],
        ];

        $behaviors['authenticator']['authMethods'] = [HttpBearerAuth::class];

        return $behaviors;
    }

    /**
     * @return array
     */
    public function actionCurrencies(): array
    {
        $provider = new ActiveDataProvider([
            'query' => Currency::find(),
            'pagination' => [
                'pageSize' => 10,
            ]
        ]);
        return $provider->getModels();
    }

    /**
     * @param $id
     * @return Currency|null
     * @throws NotFoundHttpException
     */
    public function actionCurrency(int $id): ?Currency
    {
        $model = Currency::findOne($id);
        if (empty($model)) {
            throw new NotFoundHttpException();
        }
        return $model;
    }

}