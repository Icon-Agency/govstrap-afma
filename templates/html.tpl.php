<?php
/**
 * @file
 * html.tpl.php - Default theme implementation.
 */
?>
<!DOCTYPE html>
<!--[if IEMobile 7]><html class="iem7" <?php print $html_attributes; ?>><![endif]-->
<!--[if lte IE 6]><html class="lt-ie9 lt-ie8 lt-ie7" <?php print $html_attributes; ?>><![endif]-->
<!--[if (IE 7)&(!IEMobile)]><html class="lt-ie9 lt-ie8" <?php print $html_attributes; ?>><![endif]-->
<!--[if IE 8]><html class="lt-ie9" <?php print $html_attributes; ?>><![endif]-->
<!--[if (gte IE 9)|(gt IEMobile 7)]><!--><html <?php print $html_attributes . $rdf_namespaces; ?>><!--<![endif]-->
<head profile="<?php print $grddl_profile ?>">
  <meta charset="utf-8">
  <title><?php print $head_title ?></title>
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta http-equiv="cleartype" content="on">
  <meta name="MobileOptimized" content="width">
  <meta name="HandheldFriendly" content="true">
    <meta name="viewport"
          content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta property="og:title" content="<?php print $head_title; ?>"/>
  <?php print $head ?>
  <?php print $styles ?>
  <?php print $scripts ?>
    <!--[if IE 9]>
    <link href="https://cdn.jsdelivr.net/gh/coliff/bootstrap-ie8/css/bootstrap-ie9.min.css"
          rel="stylesheet">
    <![endif]-->
    <!--[if lte IE 8]>
    <link href="https://cdn.jsdelivr.net/gh/coliff/bootstrap-ie8/css/bootstrap-ie8.min.css"
          rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/g/html5shiv@3.7.3"></script>
    <![endif]-->
    <link rel="stylesheet" type="text/css"
          href="/<?php print path_to_theme(); ?>/lib/slick/slick.css">
    <link rel="stylesheet" type="text/css"
          href="/<?php print path_to_theme(); ?>/lib/slick/slick-theme.css">
</head>
<body class="<?php print $classes ?>"<?php print $attributes ?>>
<?php if ($skip_link_text && $skip_link_anchor): ?>
    <div id="skip-link">
        <a href="#<?php print $skip_link_anchor; ?>"
           class="element-invisible element-focusable sr-only sr-only-focusable"><?php print $skip_link_text; ?></a>
    </div>
<?php endif; ?>
<a id="to-top" style="display: block;" aria-label="back to top"><i class="fas fa-chevron-up"></i></a>
  <?php print $page_top ?>
  <?php print $page ?>
  <?php print $page_bottom ?>
<script type="text/javascript"
        src="/<?php print path_to_theme(); ?>/lib/slick/slick.min.js"></script>
</body>
</html>
