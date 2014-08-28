<?php
/* @var $this SipSiswaController */
/* @var $data SipSiswa */
?>

<div class="view">

	<b><?php echo CHtml::encode($data->getAttributeLabel('idSiswa')); ?>:</b>
	<?php echo CHtml::link(CHtml::encode($data->idSiswa), array('view', 'id'=>$data->idSiswa)); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('NamaSis')); ?>:</b>
	<?php echo CHtml::encode($data->NamaSis); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('NamaAyah')); ?>:</b>
	<?php echo CHtml::encode($data->NamaAyah); ?>
	<br />

	<b><?php echo CHtml::encode($data->getAttributeLabel('NamaIbu')); ?>:</b>
	<?php echo CHtml::encode($data->NamaIbu); ?>
	<br />


</div>