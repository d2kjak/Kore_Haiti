<?php
/**
 * The third front page widget area.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Juno
 */
if ( ! is_active_sidebar( 'sidebar-front-c' ) ) { return 0; } ?>

<div class="container-fluid area-c">
                
    <div class="row">

        <div class="col-sm-12">

            <div class="container">

                <section class="front-page-widget area-c">

                    <div class="row">

                        <?php dynamic_sidebar( 'sidebar-front-c' ); ?>

                    </div>

                </section>
    
            </div>
            
        </div>
        
    </div>
    
</div>