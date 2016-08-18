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
<?$rating = 1;?>
<?foreach($arResult["ITEMS"] as $arItem){
	$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
	$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
	?>
	<div class="reviews__item">
		<div class="reviews__inner">
			<div class="reviews__info clearfix">
				<span class="reviews__date">
					<?=$arItem['DISPLAY_ACTIVE_FROM']?>
				</span>
				<?if($arItem['PROPERTIES']['RATING']['VALUE']){?>
					<div class="reviews__rating">
						<div class="rating rating_<?=$arItem['PROPERTIES']['RATING']['VALUE']?>">
							<ul class="rating__list">
								<?
								$index = 0;
								while($index < $arItem['PROPERTIES']['RATING']['VALUE']){?>
									<li class="rating__item"></li>
									<?
									$index++;
								}
								?>
							</ul>
						</div>
					</div>
				<?}?>
			</div>
			<div class="reviews__title"><?=$arItem['NAME']?></div>
			<?=$arItem['PREVIEW_TEXT'] <> '' ? '<div class="reviews__text">'.$arItem['PREVIEW_TEXT'].'</div>' : '';?>
		</div>
	</div>
	<?$rating++;?>
<?}?>
