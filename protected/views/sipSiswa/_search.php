<?php
/* @var $this SipSiswaController */
/* @var $model SipSiswa */
/* @var $form CActiveForm */
?>

<div class="wide form">

<?php $form=$this->beginWidget('CActiveForm', array(
	'action'=>Yii::app()->createUrl($this->route),
	'method'=>'get',
)); ?>

	<div class="row">
		<?php echo $form->label($model,'idSiswa'); ?>
		<?php echo $form->textField($model,'idSiswa'); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'NamaSis'); ?>
		<?php echo $form->textField($model,'NamaSis',array('size'=>29,'maxlength'=>29)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'NamaAyah'); ?>
		<?php echo $form->textField($model,'NamaAyah',array('size'=>29,'maxlength'=>29)); ?>
	</div>

	<div class="row">
		<?php echo $form->label($model,'NamaIbu'); ?>
		<?php echo $form->textField($model,'NamaIbu',array('size'=>29,'maxlength'=>29)); ?>
	</div>

	<div class="row buttons">
		<?php echo CHtml::submitButton('Search'); ?>
	</div>

<?php $this->endWidget(); ?>

</div><!-- search-form -->