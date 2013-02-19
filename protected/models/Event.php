<?php

/**
 * This is the model class for table "event".
 *
 * The followings are the available columns in table 'event':
 * @property integer $id_event
 * @property string $title
 * @property string $text
 * @property string $photo
 * @property integer $id_tag
 * @property integer $id_category
 * @property integer $fixer
 */
class Event extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Event the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}

	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'event';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('title, text, photo, id_tag, id_category', 'required'),
			array('id_tag, id_category, fixer', 'numerical', 'integerOnly'=>true),
			array('title, photo', 'length', 'max'=>50),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id_event, title, text, photo, id_tag, id_category, fixer', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'id_event' => 'Id Event',
			'title' => 'Title',
			'text' => 'Text',
			'photo' => 'Photo',
			'id_tag' => 'Id Tag',
			'id_category' => 'Id Category',
			'fixer' => 'Fixer',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
	 */
	public function search()
	{
		// Warning: Please modify the following code to remove attributes that
		// should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('id_event',$this->id_event);
		$criteria->compare('title',$this->title,true);
		$criteria->compare('text',$this->text,true);
		$criteria->compare('photo',$this->photo,true);
		$criteria->compare('id_tag',$this->id_tag);
		$criteria->compare('id_category',$this->id_category);
		$criteria->compare('fixer',$this->fixer);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}