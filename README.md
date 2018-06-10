## What is it
Filter for cors options request.
When Yii2 version below 2.0.15.1, options request will be handled with the action method. see [commit](https://github.com/yiisoft/yii2/commit/6a6d90ce03f53ea36fd4507a1a0f240ed62659b7) .
It should only return headers and not do the action.
This filter can used at Yii2 version below 2.0.15.1.

*Note*: Access-Control-* options must be set in Cors Filter