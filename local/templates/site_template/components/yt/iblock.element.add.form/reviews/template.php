<?
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();
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
$this->setFrameMode(false);

$environment = \YT\Environment\EnvironmentManager::getInstance();
?>
<div class="form__header">
	Оставьте свой отзыв
</div>
<?if (!empty($arResult["ERRORS"])) {
	ShowError(implode("<br />", $arResult["ERRORS"]));
}
if (strlen($arResult["MESSAGE"]) > 0) {
	?>
	<div class="form__title">
		Спасибо за заявку! С Вами свяжется наш менеджер в ближайшее время!
	</div>
	<?
} else {
	?>
	<div class="form__title">
		Все ваши отзывы будут переданы в службу качества и внимательно рассмотрены.<br>
		Мы стремимся быть лучшими и рады, что вы нам помагаете в этом.
	</div>
	<form name="iblock_add" class="form-call-request js__call-request" action="<?=POST_FORM_ACTION_URI?>" method="post" enctype="multipart/form-data">
		<?=bitrix_sessid_post()?>
		<?if ($arParams["MAX_FILE_SIZE"] > 0){?>
			<input type="hidden" name="MAX_FILE_SIZE" value="<?=$arParams["MAX_FILE_SIZE"]?>" />
		<?}?>
		<ul class="form__list clearfix">
			<li class="form__item form__item_textarea">
				<label class="form__label_block" for="reviewText">Ваш отзыв</label>
				<textarea class="form__textarea" name="PROPERTY[PREVIEW_TEXT][0]" id="reviewText"></textarea>
			</li>
			<li class="form__item">
				<label class="form__label_block" for="reviewName">Имя</label>
				<input type="text" name="PROPERTY[NAME][0]" class="form__input_text" id="reviewName">
			</li>
			<li class="form__item">
				<label class="form__label_block" for="reviewMail">Электронная почта</label>
				<input type="email" name="PROPERTY[3][0]" class="form__input_text" id="reviewMail">
			</li>
			<li class="form__item form__item_rating">
				<div class="review-form__rating">
                    <span class="rating__title">
                        Оценка
                    </span>
					<div class="rating rating_5 rating_state_active" data-rating="5">
						<ul class="rating__list">
							<li class="rating__item"></li>
							<li class="rating__item"></li>
							<li class="rating__item"></li>
							<li class="rating__item"></li>
							<li class="rating__item"></li>
						</ul>
						<input type="hidden">
					</div>
				</div>
			</li>
			<li class="form__item form__item_btn">
				<button type="submit" name="<?=$arParams['PREFIX_FORM']?>_iblock_submit" class="reviews-form__btn" value=" ">Оставить отзыв</button>
			</li>
		</ul>
	</form>
	<?
}
?>
