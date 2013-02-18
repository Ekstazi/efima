<?php
/**
 * Created by JetBrains PhpStorm.
 * User: Ekstazi
 * Date: 15.02.13
 * Time: 23:03
 * To change this template use File | Settings | File Templates.
 */
class EFiMaManager extends CWidget
{
	/**
	 * @var array client options
	 */
	public $options=array();

	public $slot='default';

	/**
	 * @var EFiMaModule if null try to automatic detect it
	 */
	public $module;

	public function run()
	{

	}
}
