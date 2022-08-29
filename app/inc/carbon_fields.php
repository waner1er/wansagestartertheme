<?php

use App\inc\SocialNetwork\SocialNetwork;
use Carbon_Fields\Block;
use Carbon_Fields\Container;
use Carbon_Fields\Field;

Container::make('term_meta', __('Category Properties'))
         ->where('term_taxonomy', '=', 'category')
         ->add_fields(array(
             Field::make('image', 'cat_thumb', __('Category Thumbnail')),
         ));

Container::make('theme_options', __('Mes Réseaux sociaux'))
         ->set_icon('dashicons-share')
         ->add_tab('facebook', array(
             Field::make('text', 'r1_social_url_facebook', 'Facebook URL')
                  ->set_attribute('placeholder', __('my Facebook URL')),
             Field::make('select', 'r1_social_url_facebook_number', __('Choose Options'))
                 ->set_options( array(
                     '1' => 1,
                     '2' => 2,
                     '3' => 3,
                     '4' => 4,
                     '5' => 5,
                     '6' => 6,
                     '7' => 7,
                 ) )
         ))
         ->add_tab('twitter', array(
             Field::make('text', 'r1_social_url_twitter', 'twitter URL')
                  ->set_attribute('placeholder', __('my twitter URL')),
             Field::make('select', 'r1_social_url_twitter_number', __('Choose Options'))
                  ->set_options(array(
                      '1' => 1,
                      '2' => 2,
                      '3' => 3,
                      '4' => 4,
                      '5' => 5,
                      '6' => 6,
                      '7' => 7,
                  ))
         ))
         ->add_tab('instagram', array(
             Field::make('text', 'r1_social_url_instagram', 'instagram URL')
                  ->set_attribute('placeholder', __('my instagram URL')),
             Field::make('select', 'r1_social_url_instagram_number', __('Choose Options'))
                  ->set_options(array(
                      '1' => 1,
                      '2' => 2,
                      '3' => 3,
                      '4' => 4,
                      '5' => 5,
                      '6' => 6,
                      '7' => 7,
                  ))
         ))
         ->add_tab('pinterest', array(
             Field::make('text', 'r1_social_url_pinterest', 'pinterest URL')
                  ->set_attribute('placeholder', __('my pinterest URL')),
             Field::make('select', 'r1_social_url_pinterest_number', __('Choose Options'))
                  ->set_options(array(
                      '1' => 1,
                      '2' => 2,
                      '3' => 3,
                      '4' => 4,
                      '5' => 5,
                      '6' => 6,
                      '7' => 7,
                  ))
         ))
         ->add_tab('whatsapp', array(
             Field::make('text', 'r1_social_url_whatsapp', 'whatsapp URL')
                  ->set_attribute('placeholder', __('my whatsapp URL')),
             Field::make('select', 'r1_social_url_whatsapp_number', __('Choose Options'))
                  ->set_options(array(
                      '1' => 1,
                      '2' => 2,
                      '3' => 3,
                      '4' => 4,
                      '5' => 5,
                      '6' => 6,
                      '7' => 7,
                  ))
         ))
         ->add_tab('youtube', array(
             Field::make('text', 'r1_social_url_youtube', 'youtube URL')
                  ->set_attribute('placeholder', __('my youtube URL')),
             Field::make('select', 'r1_social_url_youtube_number', __('Choose Options'))
                  ->set_options(array(
                      '1' => 1,
                      '2' => 2,
                      '3' => 3,
                      '4' => 4,
                      '5' => 5,
                      '6' => 6,
                      '7' => 7,
                  ))
         ))
         ->add_tab('linkedin', array(
             Field::make('text', 'r1_social_url_linkedin', 'linkedin URL')
                  ->set_attribute('placeholder', __('my linkedin URL')),
             Field::make('select', 'r1_social_url_linkedin_number', __('Choose Options'))
                  ->set_options(array(
                      '1' => 1,
                      '2' => 2,
                      '3' => 3,
                      '4' => 4,
                      '5' => 5,
                      '6' => 6,
                      '7' => 7,
                  ))
         ))
         ->add_tab('tiktok', array(
             Field::make('text', 'r1_social_url_tiktok', 'tiktok URL')
                  ->set_attribute('placeholder', __('my tiktok URL')),
             Field::make('select', 'r1_social_url_tiktok_number', __('Choose Options'))
                  ->set_options(array(
                      '1' => 1,
                      '2' => 2,
                      '3' => 3,
                      '4' => 4,
                      '5' => 5,
                      '6' => 6,
                      '7' => 7,
                  ))
         ));

