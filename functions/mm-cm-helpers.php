<?php


/**
 * sanitize a hexadecimal colour
 *
 * @param type $color
 * @return string
 */
function colorizer_sanitize_hex_color( $color ) {

	if ( '' === $color ) {
		return '';
	}

	$color = str_replace( '#', '', $color );

	// 3 or 6 hex digits, or the empty string.
	if ( preg_match('|^([A-Fa-f0-9]{3}){1,2}$|', $color ) ) {
		return '#' . $color;
	}

	return null;

}

/**
 * Convert HEX to RGB.
 *
 * @since Colorizer 1.0
 *
 * @param string $color The original color, in 3- or 6-digit hexadecimal form.
 * @return array Array containing RGB (red, green, and blue) values for the given
 *               HEX code, empty array otherwise.
 /*
function mm_cm_hex2rgb( $color ) {
	$color = trim( $color, '#' );

	if ( strlen( $color ) == 3 ) {
		$r = hexdec( substr( $color, 0, 1 ).substr( $color, 0, 1 ) );
		$g = hexdec( substr( $color, 1, 1 ).substr( $color, 1, 1 ) );
		$b = hexdec( substr( $color, 2, 1 ).substr( $color, 2, 1 ) );
	} else if ( strlen( $color ) == 6 ) {
		$r = hexdec( substr( $color, 0, 2 ) );
		$g = hexdec( substr( $color, 2, 2 ) );
		$b = hexdec( substr( $color, 4, 2 ) );
	} else {
		return array();
	}

	return array( 'red' => $r, 'green' => $g, 'blue' => $b );
}
*/