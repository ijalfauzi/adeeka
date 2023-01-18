<!DOCTYPE html>
<html <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo( 'charset' );?>" />
        <title><?php wp_title(); ?></title>
        <link rel="profile" href="http://gmpg.org/xfn/11" />
        <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
        <?php if ( is_singular() && get_option( 'thread_comments' ) ) wp_enqueue_script( 'comment-reply' ); ?>
        <?php wp_head(); ?>
    </head>
    <body>
        <header class="site-header">
            <div class="wrapper wrapper--nav">
                <nav>
                    <ul class="menu">
                    <li class="logo"><a title="<?php echo bloginfo( 'name' ); ?>" href="<?php echo site_url(); ?>"><img alt="Adika Tirta Daya" src="<?php echo get_theme_file_uri('assets/images/atd-logo.webp'); ?>"></a></li>
                    <li class="item"><a title="Beranda" href="<?php echo site_url(); ?>">Beranda</a></li>
                    <li class="item"><a title="Tentang Kami" href="<?php echo site_url( 'tentang-kami' ); ?>">Tentang Kami</a></li>
                    <li class="item has-submenu">
                        <a title="Layanan" tabindex="0">Layanan</a>
                        <ul class="submenu">
                        <li class="subitem"><a title="Water Treatment Plant" href="<?php echo site_url('wtp'); ?>">Water Treatment Plant</a></li>
                        <li class="subitem"><a title="Sewage Treatment Plant" href="<?php echo site_url('stp'); ?>">Sewage Treatment Plant</a></li>
                        <li class="subitem"><a title="Desalinasi" href="<?php echo site_url('desalinasi'); ?>">Desalinasi</a></li>
                        <li class="subitem"><a title="ATD Smart Meter" href="<?php echo site_url('atd-smartmeter'); ?>">ATD Smart Meter</a></li>
                        <li class="subitem"><a title="Mobile WTP" href="<?php echo site_url( 'mobilewtp' ); ?>">Mobile WTP</a></li>
                        </ul>
                    </li>
                    <li class="item"><a title="Industri" href="<?php echo site_url('industri'); ?>">Industri</a></li>
                    <li class="item"><a title="Proyek" href="<?php echo site_url('proyek'); ?>">Proyek</a>
                        <li class="item"><a title="Harga" href="<?php echo site_url('penawaran-harga'); ?>">Harga</a></li>
                        <li class="item"><a title="Blog" href="<?php echo site_url('blog'); ?>">Blog</a>
                            <li class="item"><a title="Hubungi Kami" href="<?php echo site_url('contact'); ?>">Hubungi Kami</a>
                    </li>
                    <li class="item"><a title="Bahasa Indonesia" class="localize" href="<?php echo site_url(); ?>"><img src="<?php echo get_theme_file_uri('assets/images/icons/id.webp'); ?>" alt="Bahasa Indonesia"></a></li>
                    <li class="item"><a title="English" class="localize" href="<?php echo site_url('en'); ?>"><img src="<?php echo get_theme_file_uri('assets/images/icons/en.webp'); ?>" alt="English"></a></li>
                    <li class="item"><a title="Pencarian" id="myBtn" class="open-modal" href="#"><img src="<?php echo get_theme_file_uri('assets/images/icons/search.webp'); ?>" style="width: 16px!important;" alt="Pencarian"></a></li>
                    <li class="toggle"><a href="#">&equiv;</i></a></li>
                    </ul>
                </nav>
            </div>
        </header>