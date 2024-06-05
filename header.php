<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php wp_head(); ?>
</head>

<?php
$body_classes = ' ';
?>

<body <?php body_class($body_classes); ?>>
<?php wp_body_open(); ?>

<!-- Header goes here -->
