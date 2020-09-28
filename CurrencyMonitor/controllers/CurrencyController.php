<?php


namespace app\controllers;


use app\models\Currency;
use yii\data\ActiveDataProvider;
use yii\helpers\Json;
use yii\web\Controller;
use yii\web\NotFoundHttpException;

class CurrencyController extends Controller
{
    public function actionCurrencies()
    {
        $provider = new ActiveDataProvider([
            'query' => Currency::find(),
            'pagination' => [
                'pageSize' => 10,
            ]
        ]);
        return Json::encode($provider->getModels());
    }

    public function actionCurrency($id)
    {
        $model = Currency::findOne($id);
        if (empty($model)) {
            throw new NotFoundHttpException();
        } else {
            return $model->rate;
        }
    }

}