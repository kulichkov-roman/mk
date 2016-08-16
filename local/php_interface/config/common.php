<?php
/**
 * Общая конфигурация для всех сайтов и окружений
 */
\YT\Environment\EnvironmentManager::getInstance()->addConfig(
	new \YT\Environment\Configuration\CommonConfiguration(
		array(
			'sliderMainIBlockId' => 1,
			'roomsIBlockId'      => 2,
			'restaurantIBlockId' => 3,
			'roomsDir'           => '/rooms/',
			// Заглушка для слайдера на главной
			'w1280PlugId'        => 21
		)
	)
);

if(\Bitrix\Main\Loader::includeModule('itconstruct.resizer'))
{
    itc\Resizer::addPreset('w1280', array(
            'mode' => 'width',
            'width' => '1280',
            'height' => null,
            'type' => 'jpg'
        )
    );
}

