<?php
/* @var $this SipSiswaController */
/* @var $model SipSiswa */

$this->breadcrumbs=array(
	'Sip Siswas'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List SipSiswa', 'url'=>array('index')),
	array('label'=>'Manage SipSiswa', 'url'=>array('admin')),
);
?>

<h1>Create SipSiswa</h1>

<?php $this->renderPartial('_form', array('model'=>$model)); ?>