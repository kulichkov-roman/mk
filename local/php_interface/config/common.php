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
			'galleryIBlockId'    => 4,
			'eventsIBlockId'     => 5,
			'pricesIBlockId'     => 6,
			'reviewsIBlockId'    => 9,
			'sightIBlockId'      => 10,
			'roomsDir'           => '/rooms/',
			// Заглушка для слайдера на главной
			'w1280PlugId'        => 21,
			'w280PlugId'         => 126
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
	itc\Resizer::addPreset('w280', array(
			'mode' => 'width',
			'width' => '280',
			'height' => null,
			'type' => 'jpg'
		)
	);
}

