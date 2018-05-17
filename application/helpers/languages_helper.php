<?php
	if (!defined('BASEPATH')) exit('No direct script access allowed');

	if ( ! function_exists('set_portuguese_laguage')) {
		function set_portuguese_language() {
			$ci =& get_instance();
			$ci->session->unset_userdata('language');
			$ci->session->set_userdata('language','pt');
			$ci->lang->load('db');
			$ci->lang->load('portuguese');
			$idiom = "";
			return $idiom;
		}
	}

	if ( ! function_exists('set_english_language')) {
		function set_english_language() {
			$ci =& get_instance();
			$ci->session->unset_userdata('language');
			$ci->session->set_userdata('language','en');
			$ci->lang->load('db','english');
			$ci->lang->load('english','english');
			$idiom = "-en";
			return $idiom;
		}
	}

	if ( ! function_exists('verifi_language')) {
		function verifi_language() {
			$laguage_on = isset($_SESSION['language']);
			if (!$laguage_on) {
				return set_portuguese_language();
			} else {
				$laguage_on = $_SESSION['language'];
				if ($laguage_on === 'pt') {
					return set_portuguese_language();
				} else {
					return set_english_language();
				}
			}
		}
	}