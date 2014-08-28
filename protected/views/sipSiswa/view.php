<?php
/* @var $this SipSiswaController */
/* @var $model SipSiswa */

$this->breadcrumbs=array(
	'Sip Siswas'=>array('index'),
	$model->idSiswa,
);

$this->menu=array(
	array('label'=>'List SipSiswa', 'url'=>array('index')),
	array('label'=>'Create SipSiswa', 'url'=>array('create')),
	array('label'=>'Update SipSiswa', 'url'=>array('update', 'id'=>$model->idSiswa)),
	array('label'=>'Delete SipSiswa', 'url'=>'#', 'linkOptions'=>array('submit'=>array('delete','id'=>$model->idSiswa),'confirm'=>'Are you sure you want to delete this item?')),
	array('label'=>'Manage SipSiswa', 'url'=>array('admin')),
);
?>

<h1>View SipSiswa #<?php echo $model->idSiswa; ?></h1>

<?php $this->widget('zii.widgets.CDetailView', array(
	'data'=>$model,
	'attributes'=>array(
		'idSiswa',
		'NamaSis',
		'NamaAyah',
		'NamaIbu',
	),
)); ?>
