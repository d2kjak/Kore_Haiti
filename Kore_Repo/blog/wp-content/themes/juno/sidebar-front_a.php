<?php
/**
 * The first front page widget area.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Juno
 */
if ( ! is_active_sidebar( 'sidebar-front-a' ) ) { return 0; } ?>

<div class="container-fluid area-a">
                
    <div class="row">

        <div class="col-sm-12">

            <div class="container">

                <section class="front-page-widget area-a">

                    <div class="row">

                        <?php dynamic_sidebar( 'sidebar-front-a' ); ?>

                    </div>

                </section>
    
            </div>
            
        </div>
        
    </div>
    
</div>