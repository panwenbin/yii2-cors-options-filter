<?php
/**
 * @author Pan Wenbin <panwenbin@gmail.com>
 */

namespace panwenbin\yii2\filters;

use Yii;
use yii\base\ActionFilter;

class CorsOptionsFilter extends ActionFilter
{
    public function beforeAction($action)
    {
        $request = Yii::$app->getRequest();
        $response = Yii::$app->getResponse();
        if ($request->isOptions && $request->headers->has('Access-Control-Request-Method')) {
            // it is CORS preflight request, respond with 200 OK without further processing
            $response->setStatusCode(200);
            return false;
        }
        return true;
    }
}