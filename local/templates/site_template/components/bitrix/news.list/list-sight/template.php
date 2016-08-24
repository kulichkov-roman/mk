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

<div class="sigth-menu">
	<div class="sigth-menu__inner">
		<div class="sigth-menu__title">
			Достопримечательности<br>
			Морского клуба
		</div>
		<ul class="sigth-menu__list">
			<li class="sigth-menu__item sigth-menu__item_seaclub">
				<a href="#sigthMap" class="sigth-menu__link js__show-object-map" data-object-id="0">
					Морской клуб
				</a>
			</li>
			<li class="sigth-menu__item sigth-menu__item_aquapark">
				<a href="#sigthMap" class="sigth-menu__link js__show-object-map" data-object-id="1">
					Аквапарк "Золотая бухта"
				</a>
			</li>
			<li class="sigth-menu__item sigth-menu__item_dolphinarium">
				<a href="#sigthMap" class="sigth-menu__link js__show-object-map" data-object-id="2">
					Геленджикский дельфинарий
				</a>
			</li>
			<li class="sigth-menu__item sigth-menu__item_safari">
				<a href="#sigthMap" class="sigth-menu__link js__show-object-map" data-object-id="3">
					Сафари-парк
				</a>
			</li>
			<li class="sigth-menu__item sigth-menu__item_parus">
				<a href="#sigthMap" class="sigth-menu__link js__show-object-map" data-object-id="4">
					Скала "Парус"
				</a>
			</li>
			<li class="sigth-menu__item sigth-menu__item_dolmen">
				<a href="#sigthMap" class="sigth-menu__link js__show-object-map" data-object-group="group1">
					Дольмены
				</a>
			</li>
			<li class="sigth-menu__item sigth-menu__item_dolmen-model">
				<a href="#sigthMap" class="sigth-menu__link js__show-object-map" data-object-id="8">
					Макет дольмена
				</a>
			</li>
			<li class="sigth-menu__item sigth-menu__item_cableway">
				<a href="#sigthMap" class="sigth-menu__link js__show-object-map" data-object-id="9">
					Канатная дорога парка "Олим"
				</a>
			</li>
			<li class="sigth-menu__item sigth-menu__item_embankment">
				<a href="#sigthMap" class="sigth-menu__link js__show-object-map" data-object-id="10">
					Набережная Геленджика
				</a>
			</li>
		</ul>
	</div>
</div> <!-- sigth-menu -->
<script type="text/javascript">
	var mapObjects = [
		{
			id: '0',
			coords: [44.491314418788455, 38.134980542327874],
			title: 'Морской клуб',
			icon: 'images/map-icons/icon-seaclub.png',
			img: '/local/images/map-objects/img-1.jpg',
			link: 'http://seaclubvip.ru',
			group: ''
		}, {
			id: '1',
			coords: [44.588905, 38.036786],
			title: 'Аквапарк "Золотая бухта"',
			icon: '/local/images/map-icons/icon-aquapark.png',
			img: '/local/images/map-objects/img-1.jpg',
			link: 'http://seaclubvip.ru',
			group: ''
		}, {
			id: '2',
			coords: [44.572796, 38.075848],
			title: 'Геленджикский дельфинарий',
			icon: '/local/images/map-icons/icon-dolphinarium.png',
			img: '/local/images/map-objects/img-1.jpg',
			link: 'http://seaclubvip.ru',
			group: ''
		}, {
			id: '3',
			coords: [44.585953, 38.075607],
			title: 'Сафари-парк',
			icon: '/local/images/map-icons/icon-safari.png',
			img: '/local/images/map-objects/img-1.jpg',
			link: 'http://seaclubvip.ru',
			group: ''
		}, {
			id: '4',
			coords: [44.435744, 38.189891],
			title: 'Скала "Парус"',
			icon: '/local/images/map-icons/icon-parus.png',
			img: '/local/images/map-objects/img-1.jpg',
			link: 'http://seaclubvip.ru',
			group: ''
		}, {
			id: '5',
			coords: [44.498057, 38.425189],
			title: 'Дольмены',
			icon: '/local/images/map-icons/icon-dolmen.png',
			img: '/local/images/map-objects/img-1.jpg',
			link: 'http://seaclubvip.ru',
			group: 'group1'
		}, {
			id: '6',
			coords: [44.473598, 38.385306],
			title: 'Дольмен',
			icon: '/local/images/map-icons/icon-dolmen.png',
			img: '/local/images/map-objects/img-1.jpg',
			link: 'http://seaclubvip.ru',
			group: 'group1'
		}, {
			id: '7',
			coords: [44.456749, 38.351060],
			title: 'Дольмен',
			icon: '/local/images/map-icons/icon-dolmen.png',
			img: '/local/images/map-objects/img-1.jpg',
			link: 'http://seaclubvip.ru',
			group: 'group1'
		}, {
			id: '8',
			coords: [44.594825, 38.087876],
			title: 'Макет дольмена',
			icon: '/local/images/map-icons/icon-dolmen-model.png',
			img: '/local/images/map-objects/img-1.jpg',
			link: 'http://seaclubvip.ru',
			group: ''
		}, {
			id: '9',
			coords: [44.594825, 38.087876],
			title: 'Канатная дорога парка "Олим"',
			icon: '/local/images/map-icons/icon-cableway.png',
			img: '/local/images/map-objects/img-1.jpg',
			link: 'http://seaclubvip.ru',
			group: ''
		}, {
			id: '10',
			coords: [44.567513, 38.073800],
			title: 'Набережная Геленджика',
			icon: '/local/images/map-icons/icon-embankment.png',
			img: '/local/images/map-objects/img-1.jpg',
			link: 'http://seaclubvip.ru',
			group: ''
		}
	];
</script>
<div id="sigthMap" class="sigth-map__inner"></div>

<?
/*
 *
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

 *
 * */
?>
