<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true);
?>
<ul class='catalog-fixed'>
	<?foreach($arResult["ITEMS"] as $arItem){
		$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
		$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
		?>
		<li class='hidden-item hidden-hover hidden-link' id="<?=$this->GetEditAreaId($arItem['ID']);?>">
			<div class='slider-back' style='background-image:url(<?=$arItem['PREVIEW_PICTURE']['SRC']?>);'></div>
			<div class='hover'>
				<div>
					<h1><?=$arItem['NAME']?></h1><br>
					<?=$arItem['PREVIEW_TEXT'] <> '' ? $arItem['PREVIEW_TEXT'] : '';?>
					<a class='readmore' href='<?=$arItem['DETAIL_PAGE_URL']?>'>подробнее</a>
				</div>
			</div>
		</li>
	<?}?>
</ul>
