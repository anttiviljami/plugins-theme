<?php
/**
 * Filename: index.php
 * Project: Plugins Theme
 * Copyright: (c) 2014 Seravo Oy
 * License: The MIT License (MIT) http://opensource.org/licenses/MIT
 *
 * This is the default template file loaded by wordpress. Use this as your fallback page template.
 */

?>
<!DOCTYPE html>

<html lang="fi">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title><?php bloginfo('name'); ?> <?php wp_title(); ?></title>

  <!-- Header scripts -->
  <?php wp_head(); ?>

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>

<body class="<?php get_body_class(); ?>" role="document">

  <div class="site-wrapper">

    <div class="site-wrapper-inner">

      <div class="cover-container">

        <div class="inner cover">
          <h1 class="cover-heading">Seravon tekemiä WordPress-lisäosia on ladattu yhteensä</h1>
          <h1><span class="downloads huge"><?php echo get_option('seravo_plugin_downloads_number'); ?></span> kertaa.</h1>
          <p class="lead">Seravon rakentamat WordPress-lisäosat on julkaistu avoimella lisenssillä <a href="https://github.com/Seravo/?utf8=%E2%9C%93&query=wp">Githubissa</a>.</p>
        </div>

        <div class="mastfoot">
          <div class="inner">
            <p>Copyright &copy; <?php echo date('Y'); ?> <a href="http://seravo.fi">Seravo Oy</a></p>
          </div>
        </div>

      </div>

    </div>

  </div>

  <!-- Footer scripts -->
  <?php wp_footer(); ?>
</body>
</html>
