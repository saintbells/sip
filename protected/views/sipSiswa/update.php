<?php
/* @var $this SipSiswaController */
/* @var $model SipSiswa */

$this->breadcrumbs=array(
	'Sip Siswas'=>array('index'),
	$model->idSiswa=>array('view','id'=>$model->idSiswa),
	'Update',
);

$this->menu=array(
	array('label'=>'List SipSiswa', 'url'=>array('index')),
	array('label'=>'Create SipSiswa', 'url'=>array('create')),
	array('label'=>'View SipSiswa', 'url'=>array('view', 'id'=>$model->idSiswa)),
	array('label'=>'Manage SipSiswa', 'url'=>array('admin')),
);
?>

<h1>Update SipSiswa <?php echo $model->idSiswa; ?></h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>