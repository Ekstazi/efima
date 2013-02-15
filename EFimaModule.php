<?php
/**
 * Created by JetBrains PhpStorm.
 * User: Ekstazi
 * Date: 15.02.13
 * Time: 21:26
 * To change this template use File | Settings | File Templates.
 */
// Set alias for efima module.
\Yii::setPathOfAlias('efima',dirname(__FILE__));

/**
 * @property string $assets
 */
class EfimaModule extends \CWebModule
{
	/**
	 * Connector slots. Can be many slots. Each for own path.
	 * @var array
	 */
	public $slots=array(
		// default slot
		// @see configuration options for elfinder frontend
		'default'=>array(

		)
	);

	/**
	 * Url for assets
	 * @var
	 */
	protected $_assetsUrl;

	/**
	 * Publish assets if need and return assets url
	 * @return string
	 */
	public function getAssets()
	{
		if(isset($this->_assetsUrl))
			return $this->_assetsUrl;
		/** @var $assetManager CAssetManager */
		$assetManager=Yii::app()->assetManager;
		return $this->_assetsUrl=$assetManager->publish(Yii::getPathOfAlias('efima.assets'),false,-1,YII_DEBUG && !$assetManager->linkAssets);
	}

	protected function init()
	{
		parent::init();
	}
}
