<?php
/* @var $this SipSiswaController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Sip Siswas',
);

$this->menu=array(
	array('label'=>'Create SipSiswa', 'url'=>array('create')),
	array('label'=>'Manage SipSiswa', 'url'=>array('admin')),
);
?>

<h1>Sip Siswas</h1>

<?php $this->widget('zii.widgets.CListView', array(
	'dataProvider'=>$dataProvider,
	'itemView'=>'_view',
)); ?>
