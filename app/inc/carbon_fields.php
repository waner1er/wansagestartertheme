<?php

use Carbon_Fields\Block;
use Carbon_Fields\Container;
use Carbon_Fields\Field;

Container::make('term_meta', __('Category Properties'))
         ->where('term_taxonomy', '=', 'category')
         ->add_fields(array(
             Field::make('image', 'cat_thumb', __('Category Thumbnail')),
         ));

Container::make('theme_options', __('Theme Options'))
         ->set_icon('dashicons-carrot')
         ->add_fields(array(
             Field::make('complex', 'social-links', 'Ajouter un réseau social')
                  ->set_layout('grid')
                  ->add_fields(array(
                      Field::make('text', 'label', 'Nom'),
                      Field::make('text', 'link', 'adresse'),
                      Field::make('image', 'logo', 'logo')
                  ))
         ));
