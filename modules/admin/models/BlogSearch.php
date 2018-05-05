<?php
/**
 * Created by PhpStorm.
 * User: developer
 * Date: 24.04.18
 * Time: 14:40
 */

namespace app\modules\admin\models;


use yii\base\Model;
use yii\data\ActiveDataProvider;

class BlogSearch extends Blog {

    public function rules() {
        return [
            [['idAuthor', 'id_category', 'id_tag'], 'required'],
            [['active'], 'required'],
            [['idAuthor', 'id_category', 'id_tag'], 'integer'],
            ['active', 'integer'],
            [['dateCreated'], 'safe'],
        ];
    }

    public function scenarios() {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    public function search($params) {
        $query = Blog::find()
            ->joinWith('translate')
            ->where([
                Translate::tableName().'.language' => 'en'
            ]);

//            ->orderBy(self::tableName().'.dateCreated ASC');


        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);
        $dataProvider->sort = [
            'defaultOrder' => ['dateCreated' => SORT_ASC]
        ];

        $dataProvider->setSort([
            'attributes' => [
                'id_tag',
                'id_category',
                'idAuthor',
            ]
        ]);
        if (isset($param)) {
            var_dump($param); die;
        }
        $this->load($params);

        $query->andFilterWhere([
            'id_category' => $this->id_category,
        ]);

        if (!$this->validate()) {
            return $dataProvider;
        }

//        $query->andFilterWhere(['like', 'id_category', $this->id_category])
//            ->andFilterWhere(['like', 'id_tag', $this->id_tag])
//            ->andFilterWhere(['like', 'dateCreated', $this->dateCreated]);

        return $dataProvider;
    }
}