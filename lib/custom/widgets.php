<?php

/**
 * Register widgets
 */

function pith_widgets_init() {

// Sidebars

  register_sidebar(array(
    'name'          => __('Home Top', 'roots'),
    'id'            => 'sidebar-home-top',
    'before_widget' => '<section class="widget %1$s %2$s">',
    'after_widget'  => '</section>',
    'before_title'  => '<h3>',
    'after_title'   => '</h3>',
  ));
//
//  register_sidebar(array(
//    'name'          => __('Store Top', 'roots'),
//    'id'            => 'sidebar-store-top',
//    'before_widget' => '<section class="widget %1$s %2$s">',
//    'after_widget'  => '</section>',
//    'before_title'  => '<h3>',
//    'after_title'   => '</h3>',
//  ));
//
//  register_sidebar(array(
//    'name'          => __('Product Top', 'roots'),
//    'id'            => 'sidebar-product-top',
//    'before_widget' => '<section class="widget %1$s %2$s">',
//    'after_widget'  => '</section>',
//    'before_title'  => '<h3>',
//    'after_title'   => '</h3>',
//  ));
//
//  register_sidebar(array(
//    'name'          => __('Store Bottom', 'roots'),
//    'id'            => 'sidebar-store-bottom',
//    'before_widget' => '<section class="widget %1$s %2$s">',
//    'after_widget'  => '</section>',
//    'before_title'  => '<h3>',
//    'after_title'   => '</h3>',
//  ));
//
//  register_sidebar(array(
//    'name'          => __('Product Bottom', 'roots'),
//    'id'            => 'sidebar-product-bottom',
//    'before_widget' => '<section class="widget %1$s %2$s">',
//    'after_widget'  => '</section>',
//    'before_title'  => '<h3>',
//    'after_title'   => '</h3>',
//  ));
//
//  register_sidebar(array(
//    'name'          => __('Store Main', 'roots'),
//    'id'            => 'sidebar-store-main',
//    'before_widget' => '<section class="widget %1$s %2$s">',
//    'after_widget'  => '</section>',
//    'before_title'  => '<h3>',
//    'after_title'   => '</h3>',
//  ));
//
//  register_sidebar(array(
//    'name'          => __('Product Main', 'roots'),
//    'id'            => 'sidebar-product-main',
//    'before_widget' => '<section class="widget %1$s %2$s">',
//    'after_widget'  => '</section>',
//    'before_title'  => '<h3>',
//    'after_title'   => '</h3>',
//  ));
//
//  register_sidebar(array(
//    'name'          => __('Blog Main', 'roots'),
//    'id'            => 'sidebar-blog-main',
//    'before_widget' => '<section class="widget col-xs-12 %1$s %2$s">',
//    'after_widget'  => '</section>',
//    'before_title'  => '<h3>',
//    'after_title'   => '</h3>',
//  ));
//
//  register_sidebar(array(
//    'name'          => __('Blog Post', 'roots'),
//    'id'            => 'sidebar-blog-post',
//    'before_widget' => '<section class="widget col-xs-12 %1$s %2$s">',
//    'after_widget'  => '</section>',
//    'before_title'  => '<h3>',
//    'after_title'   => '</h3>',
//  ));
//
//  register_sidebar(array(
//    'name'          => __('Primary Bottom', 'roots'),
//    'id'            => 'sidebar-primary-bottom',
//    'before_widget' => '<section class="widget %1$s %2$s">',
//    'after_widget'  => '</section>',
//    'before_title'  => '<h3>',
//    'after_title'   => '</h3>',
//  ));
//
//  register_sidebar(array(
//    'name'          => __('Footer', 'roots'),
//    'id'            => 'sidebar-footer',
//    'before_widget' => '<section class="widget %1$s %2$s">',
//    'after_widget'  => '</section>',
//    'before_title'  => '<h3>',
//    'after_title'   => '</h3>',
//  ));
//
//  register_sidebar(array(
//    'name'          => __('Footer two', 'roots'),
//    'id'            => 'sidebar-footer-two',
//    'before_widget' => '<section class="widget %1$s %2$s">',
//    'after_widget'  => '</section>',
//    'before_title'  => '<h3>',
//    'after_title'   => '</h3>',
//  ));
//
//  register_sidebar(array(
//    'name'          => __('Footer three', 'roots'),
//    'id'            => 'sidebar-footer-three',
//    'before_widget' => '<section class="widget %1$s %2$s">',
//    'after_widget'  => '</section>',
//    'before_title'  => '<h3>',
//    'after_title'   => '</h3>',
//  ));
//
//  register_sidebar(array(
//    'name'          => __('Footer four', 'roots'),
//    'id'            => 'sidebar-footer-four',
//    'before_widget' => '<section class="widget %1$s %2$s">',
//    'after_widget'  => '</section>',
//    'before_title'  => '<h3>',
//    'after_title'   => '</h3>',
//  ));

}
add_action('widgets_init', 'pith_widgets_init');