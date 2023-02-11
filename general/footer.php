<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
$ss = \Bxx\Stringstorage::getInstance();
$phone = \Bitrix\Main\PhoneNumber\Parser::getInstance()->parse($ss->getStringVal('phone'));
?>
<a href="tel:<?=$phone->getRawNumber(\Bitrix\Main\PhoneNumber\Format::E164);?>"><?=$phone->getRawNumber();?></a>


?>

<?include(__DIR__.'/../.default/footer.php');?>