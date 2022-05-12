<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "noticias".
 *
 * @property int $id
 * @property string $titulo
 * @property string $cabeca
 * @property string $corpo
 * @property int $status
 */
class Noticia extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'noticias';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['titulo', 'cabeca', 'corpo', 'status'], 'required'],
            [['cabeca', 'corpo'], 'string'],
            [['status'], 'integer'],
            [['titulo'], 'string', 'max' => 60],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'titulo' => 'Titulo',
            'cabeca' => 'Cabeca',
            'corpo' => 'Corpo',
            'status' => 'Status',
        ];
    }

    public function fields(){
        return [
            'id',
            'title' => 'titulo', // alterar a chave 'titulo' pra 'title'
            'corpo' => 'corpo', //adicionado corpo nos objetos
            'status' => function(Noticia $model){
                return ($model->status == '1' ? 'Ativo' : 'Inativo');
            }
        ];
    }
}
