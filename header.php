<!doctype html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
    <?php wp_head(); ?>
</head>

<?php
if(is_front_page()):
    $body_classes = ['teste', 'minha-classe', 'homepage'];
else:
    $body_classes = ['not-homepage', 'yoo'];
endif;
?>

<body <?php body_class(); ?>>

    <?php wp_nav_menu(['theme_location' => 'primary']); ?>

    <img src="<?php header_image() ?>" height="<?= get_custom_header()->height; ?>" width="<?= get_custom_header()->width; ?>" alt="">
