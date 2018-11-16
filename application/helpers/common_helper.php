<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

if ( ! function_exists('filter_sfsc')){	
	function filter_sfsc($string) {//sanitize output
		
		$ci=& get_instance();

		return filter_var($ci->security->xss_clean($string), FILTER_SANITIZE_FULL_SPECIAL_CHARS);
	}
}

if ( ! function_exists('redirect_ns')){
	function redirect_ns($nsflag) { //no session - redirect flag
		
		$ci=& get_instance();

		if($ci->session->userdata('perfil')=='' || $ci->session->userdata('perfil')=='FALSE'){
			if($nsflag){
				redirect(base_url().'inicio/ingresar','location');
			}
		}
	}
}

if ( ! function_exists('date_difference')){
	function date_difference($date_1 , $date_2 , $differenceFormat = '%a' ){
		$datetime1 = date_create($date_1);
		$datetime2 = date_create($date_2);
		
		$interval = date_diff($datetime1, $datetime2);
		
		return $interval->format($differenceFormat);	    
	}
}	

if (!function_exists('array_group_by')) {
	/**
	 * Groups an array by a given key.
	 *
	 * Groups an array into arrays by a given key, or set of keys, shared between all array members.
	 *
	 * Based on {@author Jake Zatecky}'s {@link https://github.com/jakezatecky/array_group_by array_group_by()} function.
	 * This variant allows $key to be closures.
	 *
	 * @param array $array   The array to have grouping performed on.
	 * @param mixed $key,... The key to group or split by. Can be a _string_,
	 *                       an _integer_, a _float_, or a _callable_.
	 *
	 *                       If the key is a callback, it must return
	 *                       a valid key from the array.
	 *
	 *                       If the key is _NULL_, the iterated element is skipped.
	 *
	 *                       ```
	 *                       string|int callback ( mixed $item )
	 *                       ```
	 *
	 * @return array|null Returns a multidimensional array or `null` if `$key` is invalid.
	 */
	function array_group_by(array $array, $key){
		if (!is_string($key) && !is_int($key) && !is_float($key) && !is_callable($key) ) {
			trigger_error('array_group_by(): The key should be a string, an integer, or a callback', E_USER_ERROR);
			return null;
		}
		$func = (!is_string($key) && is_callable($key) ? $key : null);
		$_key = $key;
		// Load the new array, splitting by the target key
		$grouped = [];
		foreach ($array as $value) {
			$key = null;
			if (is_callable($func)) {
				$key = call_user_func($func, $value);
			} elseif (is_object($value) && isset($value->{$_key})) {
				$key = $value->{$_key};
			} elseif (isset($value[$_key])) {
				$key = $value[$_key];
			}
			if ($key === null) {
				continue;
			}
			$grouped[$key][] = $value;
		}
		// Recursively build a nested grouping if more parameters are supplied
		// Each grouped array value is grouped according to the next sequential key
		if (func_num_args() > 2) {
			$args = func_get_args();
			foreach ($grouped as $key => $value) {
				$params = array_merge([ $value ], array_slice($args, 2, func_num_args()));
				$grouped[$key] = call_user_func_array('array_group_by', $params);
			}
		}
		return $grouped;
	}
}

if ( ! function_exists('get_month_string')){
	function get_month_string($mes){
		if ($mes == "01") return "Enero";
		if ($mes == "02") return "Febrero";
		if ($mes == "03") return "Marzo";
		if ($mes == "04") return "Abril";
		if ($mes == "05") return "Mayo";
		if ($mes == "06") return "Junio";
		if ($mes == "07") return "Julio";
		if ($mes == "08") return "Agosto";
		if ($mes == "09") return "Septiembre";
		if ($mes == "10") return "Octubre";
		if ($mes == "11") return "Noviembre";
		if ($mes == "12") return "Diciembre";
	}
}

if ( ! function_exists('spd')){
	function spd($string,$size,$token) {
		return str_pad($string, $size, $token, STR_PAD_LEFT);
	}
}

if ( ! function_exists('spdr')){
	function spdr($string,$size,$token) {
		return str_pad($string, $size, $token, STR_PAD_RIGHT);
	}
}

if ( ! function_exists('format_m_l')){
	function format_m_l($prefijo,$identificador,$fecha) {
		return $prefijo." ".str_pad($identificador, 3, '0', STR_PAD_LEFT)."/".date("y",strtotime($fecha));
	}
}