<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo('name'); echo " | "; bloginfo('description'); ?></title>
    <?php wp_head(); ?>
</head>

<body>
    <!-- HEADER -->
    <header class="header">
        <div class="container header__inner">
            <div class="logo">
                <?php the_custom_logo(); ?>
            </div>
            
            <nav>
                <ul class="nav">
                    <li class="nav__item"><a href="#a1" class="nav__link nav__link-active">Home</a></li>
                    <li class="nav__item"><a href="#a2" class="nav__link">About</a></li>
                    <li class="nav__item"><a href="#a3" class="nav__link">Experience</a></li>
                    <li class="nav__item"><a href="#a4" class="nav__link">Work</a></li>
                    <li class="nav__item"><a href="#a5" class="nav__link">Contact</a></li>
                </ul>
            </nav>
            <button id="menu-toggle" type="button" class="menu-toggle">
                <div class="menu-icon"></div>
            </button>
        </div>
        <div class="mobile-nav-overlay">
            <nav id="mobile-nav" class="mobile-nav">
                <div class="nav">
                    <li class="nav__item__mobile"><a href="#a1" class="nav__link nav__link-active">Home</a></li>
                    <li class="nav__item__mobile"><a href="#a2" class="nav__link">About</a></li>
                    <li class="nav__item__mobile"><a href="#a3" class="nav__link">Experience</a></li>
                    <li class="nav__item__mobile"><a href="#a4" class="nav__link">Work</a></li>
                    <li class="nav__item__mobile"><a href="#a5" class="nav__link">Contact</a></li>
                </div>
            </nav>
        </div>
    </header>