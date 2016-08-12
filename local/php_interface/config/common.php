<?php
/**
 * Общая конфигурация для всех сайтов и окружений
 */
\YT\Environment\EnvironmentManager::getInstance()->addConfig(
	new \YT\Environment\Configuration\CommonConfiguration(
		array(
			'sliderMainIBlockId' => 1,
			// Заглушка для слайдера на главной
			'sliderMainPlugId'   => 9999,
		)
	)
);

if(\Bitrix\Main\Loader::includeModule('itconstruct.resizer'))
{
    itc\Resizer::addPreset('sliderMain', array(
            'mode' => 'width',
            'width' => '1280',
            'height' => null,
            'type' => 'jpg'
        )
    );
}

