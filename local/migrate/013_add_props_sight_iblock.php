<?php
/**
 * Миграция добавляет свойства к инфоблоку «Достопримечательности»
 */
ignore_user_abort(true);
set_time_limit(0);

define('BX_BUFFER_USED', true);
define('NO_KEEP_STATISTIC', true);
define('NOT_CHECK_PERMISSIONS', true);
define('NO_AGENT_STATISTIC', true);
define('STOP_STATISTICS', true);

if (!defined('SITE_ID')) {
	define('SITE_ID', 's1');
}

if (empty($_SERVER['DOCUMENT_ROOT'])) {
	$_SERVER['DOCUMENT_ROOT'] = realpath(__DIR__ . '/../../');
}

error_reporting(E_ALL & ~E_NOTICE & ~E_STRICT);
ini_set('display_errors', 1);

require $_SERVER['DOCUMENT_ROOT'] . '/bitrix/modules/main/include/prolog_before.php';

if (!CModule::IncludeModule('iblock')) {
	echo 'Unable to include iblock module';
	exit;
}

use YT\Tools\Data\Migration\Bitrix\AbstractIBlockPropertyMigration;

/**
 * Class AddPropertiesSightIBlockMigration
 */
class AddPropertiesSightIBlockMigration extends AbstractIBlockPropertyMigration
{
	/**
	 * @var array
	 */
	protected $properties;

	public function __construct()
	{
		$iBlockId = \YT\Environment\EnvironmentManager::getInstance()->get('sightIBlockId');

		parent::__construct($iBlockId);

		$this->properties = array(
			'ICON' => 'Иконки'
		);
	}

	/**
	 * {@inheritdoc}
	 */
	public function up()
	{
		$logger = new \YT\Tools\Logger\EchoLogger();

		try {
			foreach ($this->properties as $code => $name) {
				$arAdditionalFields = array(
					'ACTIVE' => 'Y',
					'SEARCHABLE' => 'N',
					'FILTRABLE' => 'N',
					'MULTIPLE' => 'N',
				);

				$arValues = array(
					Array(
						"VALUE" => "sigth-menu__item_seaclub",
						"SORT" => "100",
					),
					Array(
						"VALUE" => "sigth-menu__item_aquapark",
						"SORT" => "200",
					),
					Array(
						"VALUE" => "sigth-menu__item_dolphinarium",
						"SORT" => "300",
					),
					Array(
						"VALUE" => "sigth-menu__item_safari",
						"SORT" => "400",
					),
					Array(
						"VALUE" => "sigth-menu__item_parus",
						"SORT" => "500",
					),
					Array(
						"VALUE" => "sigth-menu__item_dolmen",
						"SORT" => "600",
					),
					Array(
						"VALUE" => "sigth-menu__item_dolmen-model",
						"SORT" => "700",
					),
					Array(
						"VALUE" => "sigth-menu__item_cableway",
						"SORT" => "800",
					),
					Array(
						"VALUE" => "sigth-menu__item_embankment",
						"SORT" => "900",
					),
				);

				$this->createSelectProperty(
					$name,
					$code,
					$arAdditionalFields,
					$arValues
				);

				echo sprintf('Property "%s" has been added', $code) . PHP_EOL;
			}

			$this->createFileProperty(
				'Иконка балуна',
				'ICO_BALLOON'
			);

			$this->createStringProperty(
				'Группа меток',
				'GROUPS'
			);


			$logger->log('Properties have been created successfully');
		} catch (\YT\Exception\Data\Migration\MigrationException $exception) {
			$logger->log(sprintf('ERROR: %s', $exception->getMessage()));
		}
	}

	/**
	 * @throws \YT\Exception\Common\NotImplementedException
	 */
	public function down()
	{
		throw new \YT\Exception\Common\NotImplementedException('Method down was not implemented');
	}
}

$iBlockMigrations = new AddPropertiesSightIBlockMigration(
	$environment->get('sightIBlockId')
);

$iBlockMigrations->up();
