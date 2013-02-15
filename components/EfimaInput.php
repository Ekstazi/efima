<?php
/**
 * Created by JetBrains PhpStorm.
 * User: Ekstazi
 * Date: 15.02.13
 * Time: 23:03
 * To change this template use File | Settings | File Templates.
 */
class EfimaInput extends CInputWidget
{

	public $options=array();

	public $slot='default';

	public function run()
	{
		list($name,$id)=$this->resolveNameID();
		if($this->hasModel())
			echo CHtml::activeTextField($this->model,$this->attribute,$this->htmlOptions);
		else
			echo CHtml::textField($this->name,$this->value,$this->htmlOptions);
		//echo CHtml::button()
	}

}
