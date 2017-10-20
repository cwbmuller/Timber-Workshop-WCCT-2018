<?php
/**
 *Template Name: Home Page Template
 *
 * @package Pango
 */

if ( class_exists( 'Timber' ) ) {

    $context = Timber::get_context();
    $post = new TimberPost();
    $context['post'] = $post;

    $blog_args = array(
        'post_type' => 'post',
        'numberposts' => 3
    );
    $context['blog_posts'] = Timber::get_posts($blog_args);

    $product_args = array(
        'post_type' => 'product',
        'numberposts' => 3
    );
    $context['products'] = Timber::get_posts($product_args);

    Timber::render(array('template-home.twig', 'page.twig'), $context);

}
