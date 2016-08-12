<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<?if (!empty($arResult)){?>
	<nav>
		<ul>
			<?foreach($arResult as $arItem){?>
				<?if ($arItem["PERMISSION"] > "D"){?>
					<li class="<?=$arItem['SELECTED'] ? 'active' : ''?>">
						<a href='<?=$arItem["LINK"]?>'><?=$arItem["TEXT"]?></a>
					</li>
				<?}?>
			<?}?>
		</ul>
	</nav>
<?}?>
