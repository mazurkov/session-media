<?php

function simple_pagination($pages = '', $range = 8) {
	$showitems = ($range * 2) + 1;
	global $paged;
	if (empty($paged)) {
		$paged = 1;
	}
	if ($pages == '') {
		global $wp_query;
		$pages = $wp_query->max_num_pages;
		if ( ! $pages) {
			$pages = 1;
		}
	}

	if (1 != $pages) {
		echo "<nav aria-label='Page navigation example'>  <ul class='pagination'> ";
	/*	if ($paged > 2 && $paged > $range + 1 && $showitems < $pages) {
			echo "<a href='" . get_pagenum_link(1) . "'>&laquo; First</a>";
		}*/
		if ($paged > 1 /*&& $showitems < $pages*/) {
			echo "<li class='page-item'><a class='page-link' href='" . get_pagenum_link($paged - 1) . "'>
			     
			     <svg aria-hidden='true' focusable='false' data-prefix='far' data-icon='chevron-left' role='img' xmlns='http://www.w3.org/2000/svg' viewBox='0 0 256 512' class='svg-inline--fa fa-chevron-left fa-w-8 fa-3x'><path fill='currentColor' d='M231.293 473.899l19.799-19.799c4.686-4.686 4.686-12.284 0-16.971L70.393 256 251.092 74.87c4.686-4.686 4.686-12.284 0-16.971L231.293 38.1c-4.686-4.686-12.284-4.686-16.971 0L4.908 247.515c-4.686 4.686-4.686 12.284 0 16.971L214.322 473.9c4.687 4.686 12.285 4.686 16.971-.001z' class=''></path></svg>
</a></li>";
		}

		for ($i = 1; $i <= $pages; $i ++) {
			if (1 != $pages && ( ! ($i >= $paged + $range + 1 || $i <= $paged - $range - 1) || $pages <= $showitems)) {
				echo ($paged == $i) ? "<li class=\"page-item active\"><span class='page-link'>" . $i . "</span></li>" : "<li class='page-item'> <a href='" . get_pagenum_link($i) . "' class=\"page-link\">" . $i . "</a></li>";
			}
		}
		if ($paged < $pages /*&& $showitems < $pages*/) {
			echo " <li class='page-item'><a class='page-link' href=\"" . get_pagenum_link($paged + 1) . "\">
 
 <svg aria-hidden='true' focusable='false' data-prefix='far' data-icon='chevron-right' role='img' xmlns='http://www.w3.org/2000/svg' viewBox='0 0 256 512' class='svg-inline--fa fa-chevron-right fa-w-8 fa-3x'><path fill='currentColor' d='M24.707 38.101L4.908 57.899c-4.686 4.686-4.686 12.284 0 16.971L185.607 256 4.908 437.13c-4.686 4.686-4.686 12.284 0 16.971L24.707 473.9c4.686 4.686 12.284 4.686 16.971 0l209.414-209.414c4.686-4.686 4.686-12.284 0-16.971L41.678 38.101c-4.687-4.687-12.285-4.687-16.971 0z' class=''></path></svg>
 
</a></li>";
		}

		if ($paged < $pages - 1 /*&& $paged + $range - 1 < $pages && $showitems < $pages*/) {
		//	echo " <li class='page-item'><a class='page-link' href='" . get_pagenum_link($pages) . "'><i class='flaticon flaticon-arrow'></i></a></li>";
		}
		echo "</ul></nav>\n";
	}
}


function paginator( $first_page_url, $query, $echo = true ) {

	$wp_query = $query;

	// remove the trailing slash if necessary
	$first_page_url = untrailingslashit( $first_page_url );


	// it is time to separate our URL from search query
	$first_page_url_exploded = array(); // set it to empty array
	$first_page_url_exploded = explode( "/?", $first_page_url );
	// by default a search query is empty
	$search_query = '';
	// if the second array element exists
	if ( isset( $first_page_url_exploded[1] ) ) {
		$search_query   = "/?" . $first_page_url_exploded[1];
		$first_page_url = $first_page_url_exploded[0];
	}

	// get parameters from $wp_query object
	// how much posts to display per page (DO NOT SET CUSTOM VALUE HERE!!!)
	$posts_per_page = (int) $wp_query->query_vars['posts_per_page'];
	// current page
	$current_page = (int) $wp_query->query_vars['paged'];
	// the overall amount of pages
	$max_page = $wp_query->max_num_pages;

	// we don't have to display pagination or load more button in this case
	if ( $max_page <= 1 ) {
		return;
	}

	// set the current page to 1 if not exists
	if ( empty( $current_page ) || $current_page == 0 ) {
		$current_page = 1;
	}

	// you can play with this parameter - how much links to display in pagination
	$links_in_the_middle         = 4;
	$links_in_the_middle_minus_1 = $links_in_the_middle - 1;

	// the code below is required to display the pagination properly for large amount of pages
	// I mean 1 ... 10, 12, 13 .. 100
	// $first_link_in_the_middle is 10
	// $last_link_in_the_middle is 13
	$first_link_in_the_middle = $current_page - floor( $links_in_the_middle_minus_1 / 2 );
	$last_link_in_the_middle  = $current_page + ceil( $links_in_the_middle_minus_1 / 2 );

	// some calculations with $first_link_in_the_middle and $last_link_in_the_middle
	if ( $first_link_in_the_middle <= 0 ) {
		$first_link_in_the_middle = 1;
	}
	if ( ( $last_link_in_the_middle - $first_link_in_the_middle ) != $links_in_the_middle_minus_1 ) {
		$last_link_in_the_middle = $first_link_in_the_middle + $links_in_the_middle_minus_1;
	}
	if ( $last_link_in_the_middle > $max_page ) {
		$first_link_in_the_middle = $max_page - $links_in_the_middle_minus_1;
		$last_link_in_the_middle  = (int) $max_page;
	}
	if ( $first_link_in_the_middle <= 0 ) {
		$first_link_in_the_middle = 1;
	}

	// begin to generate HTML of the pagination
	$pagination = '<nav  class="pagination" role="navigation">';


	// arrow left (previous page)
	if ( $current_page != 1 ) {
		$pagination .= '<li class="page-item"><a href="' . $first_page_url . '/page/' . ( $current_page - 1 ) . $search_query . '" class="prev page-numbers page-link">
 <svg aria-hidden="true" focusable="false" data-prefix="far" data-icon="chevron-left" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 512" class="svg-inline--fa fa-chevron-left fa-w-8 fa-3x"><path fill="currentColor" d="M231.293 473.899l19.799-19.799c4.686-4.686 4.686-12.284 0-16.971L70.393 256 251.092 74.87c4.686-4.686 4.686-12.284 0-16.971L231.293 38.1c-4.686-4.686-12.284-4.686-16.971 0L4.908 247.515c-4.686 4.686-4.686 12.284 0 16.971L214.322 473.9c4.687 4.686 12.285 4.686 16.971-.001z" class=""></path></svg>
</a></li>';
	}


	// when to display "..." and the first page before it
	if ( $first_link_in_the_middle >= 3 && $links_in_the_middle < $max_page ) {
		$pagination .= '<li class="page-item"><a href="' . $first_page_url . $search_query . '" class="page-numbers page-link">1</a></li>';

		if ( $first_link_in_the_middle != 2 ) {
			$pagination .= '<li class="page-item"><span class="page-numbers page-link extend">...</span></li>';
		}

	}


	// loop page links in the middle between "..." and "..."
	for ( $i = $first_link_in_the_middle; $i <= $last_link_in_the_middle; $i ++ ) {
		if ( $i == $current_page ) {
			$pagination .= '<li class="page-item"><span class="page-numbers page-link current">' . $i . '</span></li>';
		} else {
			$pagination .= '<li class="page-item"><a href="' . $first_page_url . '/page/' . $i . $search_query . '" class="page-numbers page-link">' . $i . '</a></li>';
		}
	}


	// when to display "..." and the last page after it
	if ( $last_link_in_the_middle < $max_page ) {

		if ( $last_link_in_the_middle != ( $max_page - 1 ) ) {
			$pagination .= '<li class="page-item"><span class="page-numbers page-link extend">...</span></li>';
		}

		$pagination .= '<li class="page-item"><a href="' . $first_page_url . '/page/' . $max_page . $search_query . '" class="page-numbers page-link">' . $max_page . '</a><li>';
	}


	// arrow right (next page)
	if ( $current_page != $last_link_in_the_middle ) {
		$pagination .= '<li class="page-item"><a href="' . $first_page_url . '/page/' . ( $current_page + 1 ) . $search_query . '" class="next page-numbers page-link">
	 <svg aria-hidden="true" focusable="false" data-prefix="far" data-icon="chevron-right" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 512" class="svg-inline--fa fa-chevron-right fa-w-8 fa-3x"><path fill="currentColor" d="M24.707 38.101L4.908 57.899c-4.686 4.686-4.686 12.284 0 16.971L185.607 256 4.908 437.13c-4.686 4.686-4.686 12.284 0 16.971L24.707 473.9c4.686 4.686 12.284 4.686 16.971 0l209.414-209.414c4.686-4.686 4.686-12.284 0-16.971L41.678 38.101c-4.687-4.687-12.285-4.687-16.971 0z" class=""></path></svg>

		</a></li>';
	}

	// end HTML
	$pagination .= "</nav>\n";


	// replace first page before printing it
	$result = str_replace( array( "/page/1?", "/page/1\"" ), array( "?", "\"" ), $pagination );

	if ( $echo ) {
		echo $result;
	} else {
		return $result;
	}

}
