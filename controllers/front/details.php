<?php

if (!defined('_PS_VERSION_'))
	exit;

class SkeletonDetailsModuleFrontController extends ModuleFrontController
{
	public function initContent()
	{
		parent::initContent();

		$this->context->smarty->assign(array(
			'ApiKey' => Configuration::get('MOD_API_KEY')
		));

		$this->setTemplate('details.tpl');
	}
}

?>
