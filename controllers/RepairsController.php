<?php

namespace app\controllers;

use Yii;
use app\models\Repairs;
use app\models\RepairsSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * RepairsController implements the CRUD actions for Repairs model.
 */
class RepairsController extends Controller
{
    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    /**
     * Lists all Repairs models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new RepairsSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Repairs model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new Repairs model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Repairs();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }
    public function actionCreateuser()
    {
        $model = new Repairs();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('createuser', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing Repairs model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }
    public function actionUpdateuser($id)
    {
        $model = $this->findModel($id);
        $tool = ArrayHelper::map($this->getTool($model->c), 'id', 'name');

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        } else {
            return $this->render('updateuser', [
                'model' => $model,
                'tool'=>$tool
            ]);
        }
    }

    /**
     * Deletes an existing Repairs model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Repairs model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Repairs the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Repairs::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
    protected function MapData($datas,$fieldID,$fieldName){
        $obj = [];
        foreach ($datas as $key => $value){
            array_push($obj, ['id'=>$value->{$fieldID},'name'=>$value->{$fieldName}]);
        }
        return $obj;
    }
    public function actionGetTool(){
        $out = [];
        if (isset($_POST['depdrop_parents'])){
            $parents = $_POST['depdrop_parents'];
            if ($parents != NULL){
                $department_id = $parents[0];
                $out = $this->getTool($department_id);
                echo Json::encode(['output'=>$out, 'selected'=>'']);
                return;
            }
        }
        echo Json::encode(['output'=>'', 'selected'=>'']);
    }   
    protected function getTool($id){
        $datas = \app\models\Tools::find()->where(['department_id'=>$id])->all();
        return $this->MapData($datas,'id','name');
    }
}
