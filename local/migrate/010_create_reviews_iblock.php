<?php
/**
 * Создает инфоблок «Отзывы»
 *
 * @global $APPLICATION CMain
 */
use YT\Tools\Data\Migration\Bitrix\AbstractIBlockMigration;

define('BX_BUFFER_USED', true);
define('NO_KEEP_STATISTIC', true);
define('NOT_CHECK_PERMISSIONS', true);
define('NO_AGENT_STATISTIC', true);
define('STOP_STATISTICS', true);
define('SITE_ID', 's1');

if (empty($_SERVER['DOCUMENT_ROOT'])) {
	$_SERVER['DOCUMENT_ROOT'] = realpath(__DIR__ . '/../../');
}

require $_SERVER['DOCUMENT_ROOT'] . '/bitrix/modules/main/include/prolog_before.php';

while (ob_get_level()) {
	ob_end_flush();
}

if (!CModule::IncludeModule('iblock')) {
	echo 'Unable to include iblock module';
	exit;
}

/**
 * Создает инфоблок «Отзывы»
 *
 * Class CreateAboutIBlockMigration
 */
class CreateReviewsIBlockMigration extends AbstractIBlockMigration
{
	/**
	 * {@inheritdoc}
	 */
	public function up()
	{
		$logger = new \YT\Tools\Logger\EchoLogger();

		try {
			$this->createIBlock(
				array(
					'ACTIVE'           => 'Y',
					'NAME'             => 'Отзывы',
					'CODE'             => 'reviews',
					'IBLOCK_TYPE_ID'   => 'dynamic_content',
					'SITE_ID'          => array('s1'),
					'SORT'             => 500,
					'DESCRIPTION_TYPE' => 'text',
					'GROUP_ID'         => array('2' => 'R'),
					'VERSION'          => 2,
				)
			);

			$logger->log(
				sprintf('IBlock has been created. Id: "%s". Add to "reviewsIBlockId"', $this->iblockId)
			);
		} catch (\YT\Exception\Data\Migration\MigrationException $exception) {
			$logger->log(sprintf('ERROR: %s', $exception->getMessage()));
		}
	}

	/**
	 * {@inheritdoc}
	 */
	public function down()
	{
		$environment = \YT\Environment\EnvironmentManager::getInstance();

		$logger = new \YT\Tools\Logger\EchoLogger();

		$this->deleteIBlock($environment->get('reviewsIBlockId'));

		$logger->log(sprintf('IBlock reviewsIBlockId has been removed. Id: "%s"', $this->iblockId));
	}
}

$migration = new CreateReviewsIBlockMigration();
$migration->up();
