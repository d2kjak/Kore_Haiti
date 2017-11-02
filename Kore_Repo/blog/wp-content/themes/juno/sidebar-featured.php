<?php
/**
 * The widget area in the Featured Post section.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Juno
 */

if ( ! is_active_sidebar( 'sidebar-featured' ) ) { return 0; } ?>

    <div class="row">

        <?php dynamic_sidebar( 'sidebar-featured' ); ?>

    </div>
    