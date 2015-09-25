<?php
/**
 * Created by PhpStorm.
 * User: Fahmy
 * Date: 9/15/15
 * Time: 12:02 AM
 */

use common\assets\unify\UnifyThemeAsset;

$custom = UnifyThemeAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->
<head>
    <title>Check Out | Unify - Responsive Website Template</title>

    <!-- Meta -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Favicon -->
    <link rel="shortcut icon" href="favicon.ico">

    <!-- Web Fonts -->
    <link rel='stylesheet' type='text/css' href='//fonts.googleapis.com/css?family=Open+Sans:400,300,600&amp;subset=cyrillic,latin'>

    <!-- CSS Global Compulsory -->
    <link rel="stylesheet" href="<?=$custom->baseUrl?>/Shop-UI/assets/plugins/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?=$custom->baseUrl?>/Shop-UI/assets/css/shop.style.css">

    <!-- CSS Header and Footer -->
    <link rel="stylesheet" href="<?=$custom->baseUrl?>/Shop-UI/assets/css/headers/header-v5.css">
    <link rel="stylesheet" href="<?=$custom->baseUrl?>/Shop-UI/assets/css/footers/footer-v4.css">

    <!-- CSS Implementing Plugins -->
    <link rel="stylesheet" href="<?=$custom->baseUrl?>/Shop-UI/assets/plugins/animate.css">
    <link rel="stylesheet" href="<?=$custom->baseUrl?>/Shop-UI/assets/plugins/line-icons/line-icons.css">
    <link rel="stylesheet" href="<?=$custom->baseUrl?>/Shop-UI/assets/plugins/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="<?=$custom->baseUrl?>/Shop-UI/assets/plugins/jquery-steps/css/custom-jquery.steps.css">
    <link rel="stylesheet" href="<?=$custom->baseUrl?>/Shop-UI/assets/plugins/scrollbar/css/jquery.mCustomScrollbar.css">

    <!-- Style Switcher -->
    <link rel="stylesheet" href="<?=$custom->baseUrl?>/Shop-UI/assets/css/plugins/style-switcher.css">

    <!-- CSS Theme -->
    <link rel="stylesheet" href="<?=$custom->baseUrl?>/Shop-UI/assets/css/theme-colors/default.css" id="style_color">

    <!-- CSS Customization -->
    <link rel="stylesheet" href="<?=$custom->baseUrl?>/Shop-UI/assets/css/custom.css">

</head>

<body <?php echo implode(' ', array_map(function($prop, $value) {
    return $prop.'="'.$value.'"';
}, array_keys($this->params['page_body_prop']), $this->params['page_body_prop'])) ;?>>

<?php $this->beginBody() ?>
<?= $content ?>
<?php $this->endBody() ?>

<?php if(isset($this->blocks['JavascriptInit'])):?>
    <?=$this->blocks['JavascriptInit']?>
<?php endif;?>
</body>

</html>
<?php $this->endPage() ?>
