<?php
include'../initialise.php';
if(!isset($page_title)){
    $page_title='unset page title';
}
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="<?php echo url_for('/styles/style.css');?>">
    <link rel="stylesheet" href="<?php echo url_for('/styles/footer.css');?>">
    <link rel="stylesheet" href="<?php echo url_for('/styles/accordion.css');?>">
    <link rel="stylesheet" href="<?php echo url_for('/styles/cards.css');?>">
    <link rel="stylesheet" href="<?php echo url_for('/styles/draft.css');?>">
    <link rel="stylesheet" href="<?php echo url_for('/styles/forms.css');?>">
    <link rel="stylesheet" href="<?php echo url_for('/styles/lists.css');?>">
    <link rel="stylesheet" href="<?php echo url_for('/styles/tables.css');?>">
    <link rel="stylesheet" href="<?php echo url_for('/styles/typography.css');?>">
    <link rel="stylesheet" href="<?php echo url_for('/styles/code.css');?>">
    <title><?php echo $page_title; ?></title>


</head>