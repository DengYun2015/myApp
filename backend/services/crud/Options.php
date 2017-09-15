<?php

namespace backend\services\crud;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Options as OptionsModel;

/**
 * Options represents the model behind the search form about `common\models\Options`.
 */
class Options extends OptionsModel
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'is_deleted'], 'integer'],
            [['name', 'group', 'option_key', 'option_value', 'createtime', 'modifytime'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = OptionsModel::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'id' => $this->id,
            'is_deleted' => $this->is_deleted,
            'createtime' => $this->createtime,
            'modifytime' => $this->modifytime,
        ]);

        $query->andFilterWhere(['like', 'name', $this->name])
            ->andFilterWhere(['like', 'group', $this->group])
            ->andFilterWhere(['like', 'option_key', $this->option_key])
            ->andFilterWhere(['like', 'option_value', $this->option_value]);

        return $dataProvider;
    }
}
