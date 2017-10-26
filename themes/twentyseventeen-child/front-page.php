<?php
/**
 *Template Name: Home Page Template
 *
 * @package Pango
 */

if ( class_exists( 'Timber' ) ) {

    // Set global context data
    $context = Timber::get_context();

    // set specific post data to context
    $post = new TimberPost();
    $context['post'] = $post;

    // Get latest blog posts
    $blog_args = array(
        'post_type' => 'post',
        'numberposts' => 3
    );

    // set latest blog posts to context
    $context['blog_posts'] = Timber::get_posts($blog_args);

    // Get featured products
    $product_args = array(
        'post_type' => 'product',
        'numberposts' => 3
    );

    // Set featured products to context
    $context['products'] = Timber::get_posts($product_args);

    Timber::render(array('template-home.twig', 'page.twig'), $context);

}