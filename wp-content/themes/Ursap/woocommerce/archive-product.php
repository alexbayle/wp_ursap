<?php
/**
 * The Template for displaying product archives, including the main shop page which is a post type archive.
 *
 * Override this template by copying it to yourtheme/woocommerce/archive-product.php
 *
 * @author 		WooThemes
 * @package 	WooCommerce/Templates
 * @version     2.0.0
 */

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

get_header( 'shop' ); ?>

	<?php
		/**
		 * woocommerce_before_main_content hook
		 *
		 * @hooked woocommerce_output_content_wrapper - 10 (outputs opening divs for the content)
		 * @hooked woocommerce_breadcrumb - 20
		 */
	?>


		<?php do_action( 'woocommerce_archive_description' ); ?>

		<?php if ( have_posts() ) : ?>
            <?php if ( apply_filters( 'woocommerce_show_page_title', true ) ) : ?>
                <div class="botombar">
                    <?php
                    /**
                     * Show options for ordering
                     *
                     * @author 		WooThemes
                     * @package 	WooCommerce/Templates
                     * @version     2.0.0
                     */

                    if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

                    global $woocommerce, $wp_query;

                    if ( 1 == $wp_query->found_posts || ! woocommerce_products_will_display() )
                        return;
                    ?>
                    <form class="woocommerce-ordering" method="get">
                        <select name="orderby" class="orderby">
                            <?php
                            $catalog_orderby = apply_filters( 'woocommerce_catalog_orderby', array(
                                'menu_order' => __( 'Default sorting', 'woocommerce' ),
                                'popularity' => __( 'Sort by popularity', 'woocommerce' ),
                                'rating'     => __( 'Sort by average rating', 'woocommerce' ),
                                'date'       => __( 'Sort by newness', 'woocommerce' ),
                                'price'      => __( 'Sort by price: low to high', 'woocommerce' ),
                                'price-desc' => __( 'Sort by price: high to low', 'woocommerce' )
                            ) );

                            if ( get_option( 'woocommerce_enable_review_rating' ) === 'no' )
                                unset( $catalog_orderby['rating'] );

                            foreach ( $catalog_orderby as $id => $name )
                                echo '<option value="' . esc_attr( $id ) . '" ' . selected( $orderby, $id, false ) . '>' . esc_attr( $name ) . '</option>';
                            ?>
                        </select>
                        <?php
                        // Keep query string vars intact
                        foreach ( $_GET as $key => $val ) {
                            if ( 'orderby' === $key || 'submit' === $key )
                                continue;

                            if ( is_array( $val ) ) {
                                foreach( $val as $innerVal ) {
                                    echo '<input type="hidden" name="' . esc_attr( $key ) . '[]" value="' . esc_attr( $innerVal ) . '" />';
                                }

                            } else {
                                echo '<input type="hidden" name="' . esc_attr( $key ) . '" value="' . esc_attr( $val ) . '" />';
                            }
                        }
                        ?>
                    </form>

                </div>
                <h1 class="page-title"><?php woocommerce_page_title(); ?></h1>

            <?php endif; ?>
			<?php
				/**
				 * woocommerce_before_shop_loop hook
				 *
				 * @hooked woocommerce_result_count - 20
				 * @hooked woocommerce_catalog_ordering - 30
				 */
				do_action( 'woocommerce_before_shop_loop' );
			?>

			<?php woocommerce_product_loop_start(); ?>

				<?php woocommerce_product_subcategories(); ?>

				<?php while ( have_posts() ) : the_post(); ?>

					<?php wc_get_template_part( 'content', 'product' ); ?>

				<?php endwhile; // end of the loop. ?>

			<?php woocommerce_product_loop_end(); ?>

			<?php
				/**
				 * woocommerce_after_shop_loop hook
				 *
				 * @hooked woocommerce_pagination - 10
				 */
				do_action( 'woocommerce_after_shop_loop' );
			?>

		<?php elseif ( ! woocommerce_product_subcategories( array( 'before' => woocommerce_product_loop_start( false ), 'after' => woocommerce_product_loop_end( false ) ) ) ) : ?>

			<?php wc_get_template( 'loop/no-products-found.php' ); ?>

		<?php endif; ?>

	<?php
		/**
		 * woocommerce_after_main_content hook
		 *
		 * @hooked woocommerce_output_content_wrapper_end - 10 (outputs closing divs for the content)
		 */
		do_action( 'woocommerce_after_main_content' );
	?>

	<?php
		/**
		 * woocommerce_sidebar hook
		 *
		 * @hooked woocommerce_get_sidebar - 10
		 */

	?>

<?php get_footer( 'shop' ); ?>