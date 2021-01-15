<?php

namespace ozgursulum\review\controllers;

use Yii;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use yii\db\Query;
use ozgursulum\review\models\Critic;
use ozgursulum\review\models\Review;

class DefaultController extends \yii\web\Controller
{

    public function actionCritics()
    {
        $model = new Critic();

        if ($model->load(Yii::$app->request->post())) {
            if ($model->validate()) {
                // form inputs are valid, do something here
                $model->username = $_POST['Critic']['username'];
                $model->email = $_POST['Critic']['email'];
                if($model->save()){

                    return $this->render("critics",[
                        'model' => $model,
                        'critic_id' => (new Query())->select('MAX(id)')->from('critic')->scalar(),
                    ]);

                }

            }
        }
        return $this->render('critics', [
            'model' => $model,
            'critic_id'=>null,
        ]);
    }

    public function actionReviews()
    {
        $model = new Review();

        if ($model->load(Yii::$app->request->post())) {
            if ($model->validate()) {
                // form inputs are valid, do something here
                $model->critic_id = $_POST['Review']['critic_id'];
                $model->name = $_POST['Review']['name'];
                $model->body = $_POST['Review']['body'];
                if($model->save()){
                    return $this->render('reviews', [
                        'model' => new Review(),
                        'progress' => "done!",
                    ]);
                }
            }
        }

        return $this->render('reviews', [
            'model' => $model,
            'progress' => null,
        ]);

    }

}
?>