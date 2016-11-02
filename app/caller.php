<?php
/**
 * Created by Konstantinos Tsatsarounos<konstantinos.tsatsarounos@gmail.com>
 * Project Name:
 * Filename: caller.php
 * Date: 2/11/2016
 * Time: 5:06 μμ
 */

if ( ! function_exists( 'getCurrencies' ) ) {
	function getCurrencies( $base = 'EUR') {
		//http://api.fixer.io/latest
		return file_get_contents("http://api.fixer.io/latest?base={$base}");
	}
}

printf( getCurrencies() );