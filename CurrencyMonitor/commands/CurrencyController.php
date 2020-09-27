<?php


namespace app\commands;

use app\models\Currency;
use Yii;
use yii\console\Controller;

class CurrencyController extends Controller
{
    public function actionRefresh()
    {
        $currenciesData = Yii::$app->CBRCurrencyGrabber->getCurrencies();
        foreach ($currenciesData as $item) {
            $currency = Currency::findOne($item["NumCode"]);
            if (empty($currency)) {
                $currency = new Currency($item["NumCode"]);
            }

            $currency->name = $item["Name"];
            $currency->rate = $item["Value"];

            $currency->save();

        }
    }

}