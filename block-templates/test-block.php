<?php
/**
 * Block Template : Test Block
 *
 * Acf test block
 */

// Create id attribute allowing for custom "anchor" value.
$id = 'test-' . $block['id'];
if ( ! empty( $block['anchor'] ) ) {
	$id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$className = 'test__block';
if ( ! empty( $block['className'] ) ) {
	$className .= ' ' . $block['className'];
}
if ( ! empty( $block['align'] ) ) {
	$className .= ' align' . $block['align'];
}

echo '<pre>' . var_export( $className, true ) . '</pre>';
if ( strpos( $className, 'is-style-compact' ) !== false ) {
	echo 'Compact';
} else {
	echo 'Default';
}
