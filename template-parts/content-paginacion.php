<?php 

/**
 * @param WP_Query|null $wp_query
 * @param bool $echo
 *
 * @return string
 * Accepts a WP_Query instance to build pagination (for custom wp_query()), 
 * or nothing to use the current global $wp_query (eg: taxonomy term page)
 * - Tested on WP 5.3
 * - Tested with Bootstrap 4.4
 * - Tested on Sage 9.0.9
 *
 * USAGE:
 *     <?php echo bootstrap_pagination(); ?> //uses global $wp_query
 * or with custom WP_Query():
 *     <?php 
 *      $query = new \WP_Query($args);
 *       ... while(have_posts()), $query->posts stuff ...
 *       echo bootstrap_pagination($query);
 *     ?>
 */
function bootstrap_pagination( \WP_Query $wp_query = null, $echo = true ) {

	if ( null === $wp_query ) {
		global $wp_query;
	}
	
	/*Language for pagination 10/01/2022*/
	
	$lang=get_bloginfo("language"); if($lang == 'es') { $next = "Siguiente »"; $before = "« Anterior"; }else{  $next = "Next »"; $before = "« Previous"; }

	$pages = paginate_links( [
			'base'         => str_replace( 999999999, '%#%', esc_url( get_pagenum_link( 999999999 ) ) ),
			'format'       => '?paged=%#%',
			'current'      => max( 1, get_query_var( 'paged' ) ),
			'total'        => $wp_query->max_num_pages,
			'type'         => 'array',
			'show_all'     => false,
			'end_size'     => 3,
			'mid_size'     => 1,
			'prev_next'    => true,
			'prev_text'    => __( $before ),
			'next_text'    => __( $next ),
			'add_args'     => false,
			'add_fragment' => ''
		]
	);



	if ( is_array( $pages ) ) {
		//$paged = ( get_query_var( 'paged' ) == 0 ) ? 1 : get_query_var( 'paged' );

		$pagination = '<div class="pagination "><ul class="pagination ">';

		foreach ($pages as $page) {
                        $pagination .= '<li class="page-item ' . (strpos($page, 'current') !== false ? ' active' : '') . '"> <a>' . str_replace('page-numbers', 'page-link', $page) . '</a></li>';
                }

		$pagination .= '</ul></div>';

		if ( $echo ) {
			echo $pagination;
		} else {
			return $pagination;
		}
	}

	return null;
}

echo bootstrap_pagination();

?>