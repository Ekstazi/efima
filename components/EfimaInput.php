<?php
/**
 * Created by JetBrains PhpStorm.
 * User: Ekstazi
 * Date: 15.02.13
 * Time: 23:03
 * To change this template use File | Settings | File Templates.
 */
class EFiMaInput extends CInputWidget
{
	/**
	 * @var array client options
	 */
	public $options=array();

	/**
	 * @var string connect slot
	 */
	public $slot='default';

	/**
	 * @var EFiMaModule if null try to automatic detect it
	 */
	public $module;

	public function run()
	{
		list($name,$id)=$this->resolveNameID();
		if($this->hasModel())
			echo CHtml::activeTextField($this->model,$this->attribute,$this->htmlOptions);
		else
			echo CHtml::textField($this->name,$this->value,$this->htmlOptions);
		echo CHtml::button(Yii::t('efima','Browse'));
		//\Yii::app()->hasModule();
		if(!isset($module));
		$module;
	}

}
