<?php

/**
 * This is the model class for table "sip_siswa".
 *
 * The followings are the available columns in table 'sip_siswa':
 * @property integer $idSiswa
 * @property string $NamaSis
 * @property string $NamaAyah
 * @property string $NamaIbu
 */
class SipSiswa extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'sip_siswa';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('idSiswa', 'required'),
			array('idSiswa', 'numerical', 'integerOnly'=>true),
			array('NamaSis, NamaAyah, NamaIbu', 'length', 'max'=>29),
			// The following rule is used by search().
			// @todo Please remove those attributes that should not be searched.
			array('idSiswa, NamaSis, NamaAyah, NamaIbu', 'safe', 'on'=>'search'),
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
			'idSiswa' => 'Id Siswa',
			'NamaSis' => 'Nama Sis',
			'NamaAyah' => 'Nama Ayah',
			'NamaIbu' => 'Nama Ibu',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 *
	 * Typical usecase:
	 * - Initialize the model fields with values from filter form.
	 * - Execute this method to get CActiveDataProvider instance which will filter
	 * models according to data in model fields.
	 * - Pass data provider to CGridView, CListView or any similar widget.
	 *
	 * @return CActiveDataProvider the data provider that can return the models
	 * based on the search/filter conditions.
	 */
	public function search()
	{
		// @todo Please modify the following code to remove attributes that should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('idSiswa',$this->idSiswa);
		$criteria->compare('NamaSis',$this->NamaSis,true);
		$criteria->compare('NamaAyah',$this->NamaAyah,true);
		$criteria->compare('NamaIbu',$this->NamaIbu,true);

		return new CActiveDataProvider($this, array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * Please note that you should have this exact method in all your CActiveRecord descendants!
	 * @param string $className active record class name.
	 * @return SipSiswa the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}
