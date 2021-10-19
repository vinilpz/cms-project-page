<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width"/>
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Curso WordPress</title>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<header>
    <section class="top-bar">
        <div class="container">
            <div class="row">
                <div class="social-media-icons col-xl-9 col-sm-7 col-6">Icones sociais</div>
                <div class="search col-xl-3 col-sm-5 col-6 text-right">Pesquisa</div>
            </div>
        </div>
    </section>
    <section class="menu-area">
        <div class="container">
            <div class="row">
                <section class="logo col-md-2 col-12 text-center">Logo</section>
                <nav class=" menu col-md-10 text-right ">
                    <?php
                    wp_nav_menu(
                        array(
                            'theme_location' => 'my_main_menu'
                        )
                    );
                    ?>
                </nav>
            </div>
        </div>
    </section>
</header>