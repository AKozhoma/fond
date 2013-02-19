<?php

/**
 * This is the model class for table "need".
 *
 * The followings are the available columns in table 'need':
 * @property integer $id_need
 * @property string $name
 * @property integer $id_project
 * @property double $cost
 * @property double $total_number
 * @property double $purchased_quantity
 * @property string $description
 * @property string $photo
 * @property integer $id_category
 * @property integer $id_tag
 */
class Need extends CActiveRecord
{
	/**
	 * Returns the static model of the specified AR class.
	 * @param string $className active record class name.
	 * @return Need the static model class
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
		return 'need';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('name, id_project, cost, total_number, purchased_quantity, description, photo, id_category, id_tag', 'required'),
			array('id_project, id_category, id_tag', 'numerical', 'integerOnly'=>true),
			array('cost, total_number, purchased_quantity', 'numerical'),
			array('name, photo', 'length', 'max'=>50),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('id_need, name, id_project, cost, total_number, purchased_quantity, description, photo, id_category, id_tag', 'safe', 'on'=>'search'),
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
			'id_need' => 'Id Need',
			'name' => 'Name',
			'id_project' => 'Id Project',
			'cost' => 'Cost',
			'total_number' => 'Total Number',
			'purchased_quantity' => 'Purchased Quantity',
			'description' => 'Description',
			'photo' => 'Photo',
			'id_category' => 'Id Category',
			'id_tag' => 'Id Tag',
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

		$criteria->compare('id_need',$this->id_need);
		$criteria->compare('name',$this->name,true);
		$criteria->compare('id_project',$this->id_project);
		$criteria->compare('cost',$this->cost);
		$criteria->compare('total_number',$this->total_number);
		$criteria->compare('purchased_quantity',$this->purchased_quantity);
		$criteria->compare('description',$this->description,true);
		$criteria->compare('photo',$this->photo,true);
		$criteria->compare('id_category',$this->id_category);
		$criteria->compare('id_tag',$this->id_tag);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}
}