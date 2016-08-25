<?php
/**
 * Template part for displaying page content in page.php.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package coolcool
 */

?>


<aside>
    <div class="standart-description_align">
        <?php the_title( '<p class="main-title">', '</p>' ); ?>
        
        <?php the_content(); ?>
    </div>
</aside>


</main></div>

<aside class="block-with-ul">
<div class="block-with-ul_align">
    <div class="align-ul">
        <div class="one-ul">
            <ul>
                <li>100% Unique and Customized</li>
                <li>Any Subject Within Any Deadline</li>
                <li>Professional Writers and Editors</li>
                <li>Top Quality for the Lowest Prices</li>
            </ul>
        </div>
        <div class="one-ul">
            <ul>
                <li>Flexible Discount Policy</li>
                <li>Complete Confidentiality and Privacy</li>
                <li>100% Money Back Guarantee</li>
                <li>24/7 Attentive Customer Support</li>
            </ul>
        </div>
    </div>
    
</div>
</aside>

<aside class="pre-footer">
<div>
    <p>don't lag behind</p>
    <button class="green-button">order now</button>
</div>
</aside>

<main><div>
<?php
/*
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <header class="entry-header">
        <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
    </header><!-- .entry-header -->

    <div class="entry-content">
        <?php
            the_content();

            wp_link_pages( array(
                'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'coolcool' ),
                'after'  => '</div>',
            ) );
        ?>
    </div><!-- .entry-content -->

    <?php if ( get_edit_post_link() ) : ?>
        <footer class="entry-footer">
            <?php
                edit_post_link(
                    sprintf(
                       
                        esc_html__( 'Edit %s', 'coolcool' ),
                        the_title( '<span class="screen-reader-text">"', '"</span>', false )
                    ),
                    '<span class="edit-link">',
                    '</span>'
                );
            ?>
        </footer><!-- .entry-footer -->
    <?php endif; ?>
</article><!-- #post-## -->
 */ ?>
