<?php

use Carbon_Fields\Block;
use Carbon_Fields\Field;

Block::make( __( 'My Shiny Gutenberg Block' ) )
     ->add_fields( array(
         Field::make( 'text', 'r1-text', 'test text' )
     ) )
     ->set_inner_blocks( true )
     ->set_allowed_inner_blocks( array(
         'core/paragraph',
         'core/list'
     ) )
     ->set_render_callback( function ( $fields, $attributes, $inner_blocks ) {
         ?>

         <div class="block">
             <div class="block__heading">
                 <h1><?php echo esc_html( $fields['heading'] ); ?></h1>
             </div>

             <div class="block__image">
                 <?php echo wp_get_attachment_image( $fields['image'], 'full' ); ?>
             </div><!-- /.block__image -->

             <div class="block__content">
                 <?php echo apply_filters( 'the_content', $fields['content'] ); ?>
             </div><!-- /.block__content -->
         </div><!-- /.block -->

         <?php
     } );
