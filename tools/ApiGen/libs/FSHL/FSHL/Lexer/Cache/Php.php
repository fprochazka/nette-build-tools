<?php

/**
 * FSHL 2.0.1                                  | Fast Syntax HighLighter |
 * -----------------------------------------------------------------------
 *
 * LICENSE
 *
 * This program is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation; either version 2 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU General Public License for more details.
 */

namespace FSHL\Lexer\Cache;

/**
 * Optimized and cached Php lexer.
 *
 * This file is generated. All changes made in this file will be lost.
 *
 * @copyright Copyright (c) 2002-2005 Juraj 'hvge' Durech
 * @copyright Copyright (c) 2011 Jaroslav Hanslík
 * @license http://fshl.kukulich.cz/#license
 * @see \FSHL\Generator
 * @see \FSHL\Lexer\Php
 */
class Php
{
	/**
	 * Language name.
	 *
	 * @var array
	 */
	public $language;

	/**
	 * Transitions table.
	 *
	 * @var array
	 */
	public $trans;

	/**
	 * Id of the initial state.
	 *
	 * @var integer
	 */
	public $initialState;

	/**
	 * Id of the return state.
	 *
	 * @var integer
	 */
	public $returnState;

	/**
	 * Id of the quit state.
	 *
	 * @var integer
	 */
	public $quitState;

	/**
	 * List of flags for all states.
	 *
	 * @var array
	 */
	public $flags;

	/**
	 * Data for all states.
	 *
	 * @var array
	 */
	public $data;

	/**
	 * List of CSS classes.
	 *
	 * @var array
	 */
	public $classes;

	/**
	 * List of keywords.
	 *
	 * @var array
	 */
	public $keywords;

	/**
	 * Initializes the lexer.
	 */
	public function __construct()
	{
		$this->language = 'Php';
		$this->trans = array(
			0 => array(
				0 => array(
					0 => 5, 1 => 1
				), 1 => array(
					0 => 10, 1 => 1
				), 2 => array(
					0 => 7, 1 => 1
				), 3 => array(
					0 => 2, 1 => -1
				), 4 => array(
					0 => 2, 1 => -1
				), 5 => array(
					0 => 13, 1 => 1
				), 6 => array(
					0 => 13, 1 => 1
				), 7 => array(
					0 => 0, 1 => 1
				), 8 => array(
					0 => 0, 1 => 1
				), 9 => array(
					0 => 4, 1 => 1
				), 10 => array(
					0 => 3, 1 => 1
				), 11 => array(
					0 => 4, 1 => 1
				), 12 => array(
					0 => 17, 1 => 1
				), 13 => array(
					0 => 1, 1 => -1
				), 14 => array(
					0 => 11, 1 => 1
				), 15 => array(
					0 => 8, 1 => 1
				)
			), 1 => array(
				0 => array(
					0 => 16, 1 => 0
				), 1 => array(
					0 => 16, 1 => 0
				), 2 => array(
					0 => 16, 1 => 0
				)
			), 2 => array(
				0 => array(
					0 => 16, 1 => -1
				)
			), 3 => array(
				0 => array(
					0 => 3, 1 => 1
				), 1 => array(
					0 => 3, 1 => 1
				), 2 => array(
					0 => 16, 1 => 0
				)
			), 4 => array(
				0 => array(
					0 => 16, 1 => -1
				), 1 => array(
					0 => 4, 1 => 1
				), 2 => array(
					0 => 16, 1 => 0
				)
			), 5 => array(
				0 => array(
					0 => 16, 1 => -1
				), 1 => array(
					0 => 5, 1 => 1
				), 2 => array(
					0 => 5, 1 => 1
				), 3 => array(
					0 => 5, 1 => 1
				)
			), 6 => array(
				0 => array(
					0 => 16, 1 => 0
				), 1 => array(
					0 => 16, 1 => -1
				)
			), 7 => array(
				0 => array(
					0 => 16, 1 => 0
				), 1 => array(
					0 => 7, 1 => 1
				), 2 => array(
					0 => 7, 1 => 1
				), 3 => array(
					0 => 5, 1 => 1
				), 4 => array(
					0 => 6, 1 => 1
				), 5 => array(
					0 => 7, 1 => 1
				), 6 => array(
					0 => 7, 1 => 1
				)
			), 8 => array(
				0 => array(
					0 => 9, 1 => 1
				), 1 => array(
					0 => 8, 1 => 1
				), 2 => array(
					0 => 8, 1 => 1
				), 3 => array(
					0 => 5, 1 => 1
				), 4 => array(
					0 => 6, 1 => 1
				)
			), 9 => array(
				0 => array(
					0 => 0, 1 => 0
				), 1 => array(
					0 => 8, 1 => -1
				)
			), 10 => array(
				0 => array(
					0 => 16, 1 => 0
				), 1 => array(
					0 => 10, 1 => 1
				), 2 => array(
					0 => 10, 1 => 1
				), 3 => array(
					0 => 10, 1 => 1
				), 4 => array(
					0 => 10, 1 => 1
				)
			), 11 => array(
				0 => array(
					0 => 12, 1 => 1
				), 1 => array(
					0 => 11, 1 => 1
				)
			), 12 => array(
				0 => array(
					0 => 0, 1 => 0
				), 1 => array(
					0 => 11, 1 => -1
				)
			), 13 => array(
				0 => array(
					0 => 14, 1 => 1
				), 1 => array(
					0 => 14, 1 => 1
				), 2 => array(
					0 => 15, 1 => 1
				), 3 => array(
					0 => 13, 1 => 1
				), 4 => array(
					0 => 13, 1 => 1
				), 5 => array(
					0 => 16, 1 => -1
				)
			), 14 => array(
				0 => array(
					0 => 14, 1 => 0
				), 1 => array(
					0 => 14, 1 => 0
				), 2 => array(
					0 => 16, 1 => -1
				)
			), 15 => array(
				0 => array(
					0 => 16, 1 => -1
				)
			), 17 => NULL
		);
		$this->initialState = 0;
		$this->returnState = 16;
		$this->quitState = 17;
		$this->flags = array(
			0 => 0, 1 => 4, 2 => 5, 3 => 4, 4 => 4, 5 => 4, 6 => 4, 7 => 4, 8 => 0, 9 => 0, 10 => 4, 11 => 0, 12 => 0, 13 => 4, 14 => 0, 15 => 0, 17 => 8
		);
		$this->data = array(
			0 => NULL, 1 => NULL, 2 => NULL, 3 => NULL, 4 => NULL, 5 => NULL, 6 => NULL, 7 => NULL, 8 => NULL, 9 => NULL, 10 => NULL, 11 => NULL, 12 => NULL, 13 => NULL, 14 => NULL, 15 => NULL, 17 => NULL
		);
		$this->classes = array(
			0 => NULL, 1 => 'xlang', 2 => NULL, 3 => 'php-comment', 4 => 'php-comment', 5 => 'php-var', 6 => 'php-var', 7 => 'php-quote', 8 => 'php-quote', 9 => 'php-quote', 10 => 'php-quote', 11 => 'php-quote', 12 => 'php-quote', 13 => 'php-num', 14 => 'php-num', 15 => 'php-num', 17 => 'xlang'
		);
		$this->keywords = array(
			0 => 'php-keyword', 1 => array(
				'abstract' => 1, 'and' => 1, 'array' => 1, 'as' => 1, 'break' => 1, 'case' => 1, 'catch' => 1, 'class' => 1, 'clone' => 1, 'const' => 1, 'continue' => 1, 'declare' => 1, 'default' => 1, 'do' => 1, 'else' => 1, 'elseif' => 1, 'enddeclare' => 1, 'endfor' => 1, 'endforeach' => 1, 'endif' => 1, 'endswitch' => 1, 'endwhile' => 2, 'extends' => 1, 'final' => 1, 'for' => 1, 'foreach' => 1,
			'function' => 1, 'global' => 1, 'goto' => 1, 'if' => 1, 'implements' => 1, 'interface' => 1, 'instanceof' => 1, 'insteadof' => 1, 'namespace' => 1, 'new' => 1, 'or' => 1, 'private' => 1, 'protected' => 1, 'public' => 1, 'static' => 1, 'switch' => 1, 'throw' => 1, 'trait' => 1, 'try' => 1, 'use' => 1, 'var' => 1, 'while' => 1, 'xor' => 1, '__CLASS__' => 1, '__DIR__' => 1, '__FILE__' => 1,
			'__LINE__' => 1, '__FUNCTION__' => 1, '__METHOD__' => 1, '__NAMESPACE__' => 1, '__TRAIT__' => 1, 'die' => 1, 'echo' => 1, 'empty' => 1, 'exit' => 1, 'eval' => 2, 'include' => 1, 'include_once' => 1, 'isset' => 1, 'list' => 1, 'require' => 1, 'require_once' => 1, 'return' => 1, 'print' => 1, 'unset' => 1, 'true' => 1, 'false' => 1, 'null' => 1, 'abs' => 2, 'acos' => 2, 'acosh' => 2, 'ada_afetch' => 2,
			'ada_autocommit' => 2, 'ada_close' => 2, 'ada_commit' => 2, 'ada_connect' => 2, 'ada_exec' => 2, 'ada_fetchrow' => 2, 'ada_fieldname' => 2, 'ada_fieldnum' => 2, 'ada_fieldtype' => 2, 'ada_freeresult' => 2, 'ada_numfields' => 2, 'ada_numrows' => 2, 'ada_result' => 2, 'ada_resultall' => 2, 'ada_rollback' => 2, 'addcslashes' => 2, 'addslashes' => 2, 'aggregate' => 2, 'aggregate_methods' => 2, 'aggregate_methods_by_list' => 2, 'aggregate_methods_by_regexp' => 2, 'aggregate_properties' => 2, 'aggregate_properties_by_list' => 2, 'aggregate_properties_by_regexp' => 2, 'aggregation_info' => 2, 'apache_child_terminate' => 2,
			'apache_get_modules' => 2, 'apache_get_version' => 2, 'apache_getenv' => 2, 'apache_lookup_uri' => 2, 'apache_note' => 2, 'apache_request_headers' => 2, 'apache_response_headers' => 2, 'apache_setenv' => 2, 'apc_add' => 2, 'apc_bin_dump' => 2, 'apc_bin_dumpfile' => 2, 'apc_bin_load' => 2, 'apc_bin_loadfile' => 2, 'apc_cache_info' => 2, 'apc_cas' => 2, 'apc_clear_cache' => 2, 'apc_compile_file' => 2, 'apc_dec' => 2, 'apc_define_constants' => 2, 'apc_delete' => 2, 'apc_delete_file' => 2, 'apc_exists' => 2, 'apc_fetch' => 2, 'apc_inc' => 2, 'apc_load_constants' => 2, 'apc_sma_info' => 2,
			'apc_store' => 2, 'array_change_key_case' => 2, 'array_chunk' => 2, 'array_combine' => 2, 'array_count_values' => 2, 'array_diff' => 2, 'array_diff_assoc' => 2, 'array_diff_key' => 2, 'array_diff_uassoc' => 2, 'array_diff_ukey' => 2, 'array_fill' => 2, 'array_fill_keys' => 2, 'array_filter' => 2, 'array_flip' => 2, 'array_intersect' => 2, 'array_intersect_assoc' => 2, 'array_intersect_key' => 2, 'array_intersect_uassoc' => 2, 'array_intersect_ukey' => 2, 'array_key_exists' => 2, 'array_keys' => 2, 'array_map' => 2, 'array_merge' => 2, 'array_merge_recursive' => 2, 'array_multisort' => 2, 'array_pad' => 2,
			'array_pop' => 2, 'array_product' => 2, 'array_push' => 2, 'array_rand' => 2, 'array_reduce' => 2, 'array_replace' => 2, 'array_replace_recursive' => 2, 'array_reverse' => 2, 'array_search' => 2, 'array_shift' => 2, 'array_slice' => 2, 'array_splice' => 2, 'array_sum' => 2, 'array_udiff' => 2, 'array_udiff_assoc' => 2, 'array_udiff_uassoc' => 2, 'array_uintersect' => 2, 'array_uintersect_assoc' => 2, 'array_uintersect_uassoc' => 2, 'array_unique' => 2, 'array_unshift' => 2, 'array_values' => 2, 'array_walk' => 2, 'array_walk_recursive' => 2, 'arsort' => 2, 'asin' => 2,
			'asinh' => 2, 'asort' => 2, 'aspell_check' => 2, 'aspell_check-raw' => 2, 'aspell_new' => 2, 'aspell_suggest' => 2, 'assert' => 2, 'assert_options' => 2, 'atan' => 2, 'atan2' => 2, 'atanh' => 2, 'base64_decode' => 2, 'base64_encode' => 2, 'base_convert' => 2, 'basename' => 2, 'bcadd' => 2, 'bccomp' => 2, 'bcdiv' => 2, 'bcmod' => 2, 'bcmul' => 2, 'bcompiler_load' => 2, 'bcompiler_load_exe' => 2, 'bcompiler_parse_class' => 2, 'bcompiler_read' => 2, 'bcompiler_write_class' => 2, 'bcompiler_write_constant' => 2,
			'bcompiler_write_exe_footer' => 2, 'bcompiler_write_file' => 2, 'bcompiler_write_footer' => 2, 'bcompiler_write_function' => 2, 'bcompiler_write_functions_from_file' => 2, 'bcompiler_write_header' => 2, 'bcompiler_write_included_filename' => 2, 'bcpow' => 2, 'bcpowmod' => 2, 'bcscale' => 2, 'bcsqrt' => 2, 'bcsub' => 2, 'bin2hex' => 2, 'bind_textdomain_codeset' => 2, 'bindec' => 2, 'bindtextdomain' => 2, 'bitset_empty' => 2, 'bitset_equal' => 2, 'bitset_excl' => 2, 'bitset_fill' => 2, 'bitset_from_array' => 2, 'bitset_from_hash' => 2, 'bitset_from_string' => 2, 'bitset_in' => 2, 'bitset_incl' => 2, 'bitset_intersection' => 2,
			'bitset_invert' => 2, 'bitset_is_empty' => 2, 'bitset_subset' => 2, 'bitset_to_array' => 2, 'bitset_to_hash' => 2, 'bitset_to_string' => 2, 'bitset_union' => 2, 'blenc_encrypt' => 2, 'bzclose' => 2, 'bzcompress' => 2, 'bzdecompress' => 2, 'bzerrno' => 2, 'bzerror' => 2, 'bzerrstr' => 2, 'bzflush' => 2, 'bzopen' => 2, 'bzread' => 2, 'bzwrite' => 2, 'cal_days_in_month' => 2, 'cal_from_jd' => 2, 'cal_info' => 2, 'cal_to_jd' => 2, 'call_user_func' => 2, 'call_user_func_array' => 2, 'call_user_method' => 2, 'call_user_method_array' => 2,
			'ceil' => 2, 'chdir' => 2, 'checkdate' => 2, 'checkdnsrr' => 2, 'chgrp' => 2, 'chmod' => 2, 'chop' => 2, 'chown' => 2, 'chr' => 2, 'chunk_split' => 2, 'class_alias' => 2, 'class_exists' => 2, 'class_implements' => 2, 'class_parents' => 2, 'classkit_aggregate_methods' => 2, 'classkit_doc_comments' => 2, 'classkit_import' => 2, 'classkit_method_add' => 2, 'classkit_method_copy' => 2, 'classkit_method_redefine' => 2, 'classkit_method_remove' => 2, 'classkit_method_rename' => 2, 'clearstatcache' => 2, 'closedir' => 2, 'closelog' => 2, 'collator_asort' => 2,
			'collator_compare' => 2, 'collator_create' => 2, 'collator_get_attribute' => 2, 'collator_get_error_code' => 2, 'collator_get_error_message' => 2, 'collator_get_locale' => 2, 'collator_get_sort_key' => 2, 'collator_get_strength' => 2, 'collator_set_attribute' => 2, 'collator_set_strength' => 2, 'collator_sort' => 2, 'collator_sort_with_sort_keys' => 2, 'com_create_guid' => 2, 'com_event_sink' => 2, 'com_get_active_object' => 2, 'com_load_typelib' => 2, 'com_message_pump' => 2, 'com_print_typeinfo' => 2, 'compact' => 2, 'confirm_phpdoc_compiled' => 2, 'connection_aborted' => 2, 'connection_status' => 2, 'connection_timeout' => 2, 'constant' => 2, 'contained' => 2, 'convert_cyr_string' => 2,
			'convert_uudecode' => 2, 'convert_uuencode' => 2, 'copy' => 2, 'cos' => 2, 'cosh' => 2, 'count' => 2, 'count_chars' => 2, 'cpdf_add_annotation' => 2, 'cpdf_add_outline' => 2, 'cpdf_arc' => 2, 'cpdf_begin_text' => 2, 'cpdf_circle' => 2, 'cpdf_clip' => 2, 'cpdf_close' => 2, 'cpdf_closepath' => 2, 'cpdf_closepath_fill_stroke' => 2, 'cpdf_closepath_stroke' => 2, 'cpdf_continue_text' => 2, 'cpdf_curveto' => 2, 'cpdf_end_text' => 2, 'cpdf_fill' => 2, 'cpdf_fill_stroke' => 2, 'cpdf_finalize' => 2, 'cpdf_finalize_page' => 2, 'cpdf_global_set_document_limits' => 2, 'cpdf_import_jpeg' => 2,
			'cpdf_lineto' => 2, 'cpdf_moveto' => 2, 'cpdf_newpath' => 2, 'cpdf_open' => 2, 'cpdf_output_buffer' => 2, 'cpdf_page_init' => 2, 'cpdf_place_inline_image' => 2, 'cpdf_rect' => 2, 'cpdf_restore' => 2, 'cpdf_rlineto' => 2, 'cpdf_rmoveto' => 2, 'cpdf_rotate' => 2, 'cpdf_rotate_text' => 2, 'cpdf_save' => 2, 'cpdf_save_to_file' => 2, 'cpdf_scale' => 2, 'cpdf_set_action_url' => 2, 'cpdf_set_char_spacing' => 2, 'cpdf_set_creator' => 2, 'cpdf_set_current_page' => 2, 'cpdf_set_font' => 2, 'cpdf_set_font_directories' => 2, 'cpdf_set_font_map_file' => 2, 'cpdf_set_horiz_scaling' => 2, 'cpdf_set_keywords' => 2, 'cpdf_set_leading' => 2,
			'cpdf_set_page_animation' => 2, 'cpdf_set_subject' => 2, 'cpdf_set_text_matrix' => 2, 'cpdf_set_text_pos' => 2, 'cpdf_set_text_rendering' => 2, 'cpdf_set_text_rise' => 2, 'cpdf_set_title' => 2, 'cpdf_set_viewer_preferences' => 2, 'cpdf_set_word_spacing' => 2, 'cpdf_setdash' => 2, 'cpdf_setflat' => 2, 'cpdf_setgray' => 2, 'cpdf_setgray_fill' => 2, 'cpdf_setgray_stroke' => 2, 'cpdf_setlinecap' => 2, 'cpdf_setlinejoin' => 2, 'cpdf_setlinewidth' => 2, 'cpdf_setmiterlimit' => 2, 'cpdf_setrgbcolor' => 2, 'cpdf_setrgbcolor_fill' => 2, 'cpdf_setrgbcolor_stroke' => 2, 'cpdf_show' => 2, 'cpdf_show_xy' => 2, 'cpdf_stringwidth' => 2, 'cpdf_stroke' => 2, 'cpdf_text' => 2,
			'cpdf_translate' => 2, 'crack_check' => 2, 'crack_closedict' => 2, 'crack_getlastmessage' => 2, 'crack_opendict' => 2, 'crc32' => 2, 'create_function' => 2, 'crypt' => 2, 'ctype_alnum' => 2, 'ctype_alpha' => 2, 'ctype_cntrl' => 2, 'ctype_digit' => 2, 'ctype_graph' => 2, 'ctype_lower' => 2, 'ctype_print' => 2, 'ctype_punct' => 2, 'ctype_space' => 2, 'ctype_upper' => 2, 'ctype_xdigit' => 2, 'curl_close' => 2, 'curl_copy_handle' => 2, 'curl_errno' => 2, 'curl_error' => 2, 'curl_exec' => 2, 'curl_getinfo' => 2, 'curl_init' => 2,
			'curl_multi_add_handle' => 2, 'curl_multi_close' => 2, 'curl_multi_exec' => 2, 'curl_multi_getcontent' => 2, 'curl_multi_info_read' => 2, 'curl_multi_init' => 2, 'curl_multi_remove_handle' => 2, 'curl_multi_select' => 2, 'curl_setopt' => 2, 'curl_setopt_array' => 2, 'curl_version' => 2, 'current' => 2, 'cvsclient_connect' => 2, 'cvsclient_log' => 2, 'cvsclient_login' => 2, 'cvsclient_retrieve' => 2, 'date' => 2, 'date_add' => 2, 'date_create' => 2, 'date_create_from_format' => 2, 'date_date_set' => 2, 'date_default_timezone_get' => 2, 'date_default_timezone_set' => 2, 'date_diff' => 2, 'date_format' => 2, 'date_get_last_errors' => 2,
			'date_interval_create_from_date_string' => 2, 'date_interval_format' => 2, 'date_isodate_set' => 2, 'date_modify' => 2, 'date_offset_get' => 2, 'date_parse' => 2, 'date_parse_from_format' => 2, 'date_sub' => 2, 'date_sun_info' => 2, 'date_sunrise' => 2, 'date_sunset' => 2, 'date_time_set' => 2, 'date_timestamp_get' => 2, 'date_timestamp_set' => 2, 'date_timezone_get' => 2, 'date_timezone_set' => 2, 'datefmt_create' => 2, 'datefmt_format' => 2, 'datefmt_get_calendar' => 2, 'datefmt_get_datetype' => 2, 'datefmt_get_error_code' => 2, 'datefmt_get_error_message' => 2, 'datefmt_get_locale' => 2, 'datefmt_get_pattern' => 2, 'datefmt_get_timetype' => 2, 'datefmt_get_timezone_id' => 2,
			'datefmt_is_lenient' => 2, 'datefmt_localtime' => 2, 'datefmt_parse' => 2, 'datefmt_set_calendar' => 2, 'datefmt_set_lenient' => 2, 'datefmt_set_pattern' => 2, 'datefmt_set_timezone_id' => 2, 'db_id_list' => 2, 'dba_close' => 2, 'dba_delete' => 2, 'dba_exists' => 2, 'dba_fetch' => 2, 'dba_firstkey' => 2, 'dba_handlers' => 2, 'dba_insert' => 2, 'dba_key_split' => 2, 'dba_list' => 2, 'dba_nextkey' => 2, 'dba_open' => 2, 'dba_optimize' => 2, 'dba_popen' => 2, 'dba_replace' => 2, 'dba_sync' => 2, 'dbase_add_record' => 2, 'dbase_close' => 2, 'dbase_create' => 2,
			'dbase_delete_record' => 2, 'dbase_get_header_info' => 2, 'dbase_get_record' => 2, 'dbase_get_record_with_names' => 2, 'dbase_numfields' => 2, 'dbase_numrecords' => 2, 'dbase_open' => 2, 'dbase_pack' => 2, 'dbase_replace_record' => 2, 'dbg_get_all_contexts' => 2, 'dbg_get_all_module_names' => 2, 'dbg_get_all_source_lines' => 2, 'dbg_get_context_name' => 2, 'dbg_get_loaded_zendextensions' => 2, 'dbg_get_module_name' => 2, 'dbg_get_profiler_results' => 2, 'dbg_get_source_context' => 2, 'dblist' => 2, 'dbmclose' => 2, 'dbmdelete' => 2, 'dbmexists' => 2, 'dbmfetch' => 2, 'dbmfirstkey' => 2, 'dbminsert' => 2, 'dbmnextkey' => 2, 'dbmopen' => 2,
			'dbmreplace' => 2, 'dbx_close' => 2, 'dbx_compare' => 2, 'dbx_connect' => 2, 'dbx_error' => 2, 'dbx_escape_string' => 2, 'dbx_fetch_row' => 2, 'dbx_query' => 2, 'dbx_sort' => 2, 'dcgettext' => 2, 'dcngettext' => 2, 'deaggregate' => 2, 'debug_backtrace' => 2, 'debug_print_backtrace' => 2, 'debug_zval_dump' => 2, 'debugbreak' => 2, 'debugger_off' => 2, 'debugger_on' => 2, 'decbin' => 2, 'dechex' => 2, 'decoct' => 2, 'define' => 2, 'define_syslog_variables' => 2, 'defined' => 2, 'deg2rad' => 2, 'delete' => 2,
			'dgettext' => 2, 'dio_close' => 2, 'dio_open' => 2, 'dio_read' => 2, 'dio_seek' => 2, 'dio_stat' => 2, 'dio_write' => 2, 'dir' => 2, 'dirname' => 2, 'disk_free_space' => 2, 'disk_total_space' => 2, 'diskfreespace' => 2, 'dl' => 2, 'dngettext' => 2, 'dns_check_record' => 2, 'dns_get_mx' => 2, 'dns_get_record' => 2, 'docblock_token_name' => 2, 'docblock_tokenize' => 2, 'dom_import_simplexml' => 2, 'domxml_add_root' => 2, 'domxml_attributes' => 2, 'domxml_children' => 2, 'domxml_doc_add_root' => 2, 'domxml_doc_document_element' => 2, 'domxml_doc_get_element_by_id' => 2,
			'domxml_doc_get_elements_by_tagname' => 2, 'domxml_doc_get_root' => 2, 'domxml_doc_set_root' => 2, 'domxml_doc_validate' => 2, 'domxml_doc_xinclude' => 2, 'domxml_dump_mem' => 2, 'domxml_dump_mem_file' => 2, 'domxml_dump_node' => 2, 'domxml_dumpmem' => 2, 'domxml_elem_get_attribute' => 2, 'domxml_elem_set_attribute' => 2, 'domxml_get_attribute' => 2, 'domxml_getattr' => 2, 'domxml_html_dump_mem' => 2, 'domxml_new_child' => 2, 'domxml_new_doc' => 2, 'domxml_new_xmldoc' => 2, 'domxml_node' => 2, 'domxml_node_add_namespace' => 2, 'domxml_node_attributes' => 2, 'domxml_node_children' => 2, 'domxml_node_get_content' => 2, 'domxml_node_has_attributes' => 2, 'domxml_node_new_child' => 2, 'domxml_node_set_content' => 2, 'domxml_node_set_namespace' => 2,
			'domxml_node_unlink_node' => 2, 'domxml_open_file' => 2, 'domxml_open_mem' => 2, 'domxml_parser' => 2, 'domxml_parser_add_chunk' => 2, 'domxml_parser_cdata_section' => 2, 'domxml_parser_characters' => 2, 'domxml_parser_comment' => 2, 'domxml_parser_end' => 2, 'domxml_parser_end_document' => 2, 'domxml_parser_end_element' => 2, 'domxml_parser_entity_reference' => 2, 'domxml_parser_get_document' => 2, 'domxml_parser_namespace_decl' => 2, 'domxml_parser_processing_instruction' => 2, 'domxml_parser_start_document' => 2, 'domxml_parser_start_element' => 2, 'domxml_root' => 2, 'domxml_set_attribute' => 2, 'domxml_setattr' => 2, 'domxml_substitute_entities_default' => 2, 'domxml_unlink_node' => 2, 'domxml_version' => 2, 'domxml_xmltree' => 2, 'doubleval' => 2, 'each' => 2,
			'easter_date' => 2, 'easter_days' => 2, 'end' => 2, 'ereg' => 2, 'ereg_replace' => 2, 'eregi' => 2, 'eregi_replace' => 2, 'error_get_last' => 2, 'error_log' => 2, 'error_reporting' => 2, 'escapeshellarg' => 2, 'escapeshellcmd' => 2, 'event_deschedule' => 2, 'event_dispatch' => 2, 'event_free' => 2, 'event_handle_signal' => 2, 'event_have_events' => 2, 'event_init' => 2, 'event_new' => 2, 'event_pending' => 2, 'event_priority_set' => 2, 'event_schedule' => 2, 'event_set' => 2, 'event_timeout' => 2, 'exec' => 2, 'exif_imagetype' => 2,
			'exif_read_data' => 2, 'exif_tagname' => 2, 'exif_thumbnail' => 2, 'exp' => 2, 'explode' => 2, 'expm1' => 2, 'extension_loaded' => 2, 'extract' => 2, 'ezmlm_hash' => 2, 'fbird_add_user' => 2, 'fbird_affected_rows' => 2, 'fbird_backup' => 2, 'fbird_blob_add' => 2, 'fbird_blob_cancel' => 2, 'fbird_blob_close' => 2, 'fbird_blob_create' => 2, 'fbird_blob_echo' => 2, 'fbird_blob_get' => 2, 'fbird_blob_import' => 2, 'fbird_blob_info' => 2, 'fbird_blob_open' => 2, 'fbird_close' => 2, 'fbird_commit' => 2, 'fbird_commit_ret' => 2, 'fbird_connect' => 2, 'fbird_db_info' => 2,
			'fbird_delete_user' => 2, 'fbird_drop_db' => 2, 'fbird_errcode' => 2, 'fbird_errmsg' => 2, 'fbird_execute' => 2, 'fbird_fetch_assoc' => 2, 'fbird_fetch_object' => 2, 'fbird_fetch_row' => 2, 'fbird_field_info' => 2, 'fbird_free_event_handler' => 2, 'fbird_free_query' => 2, 'fbird_free_result' => 2, 'fbird_gen_id' => 2, 'fbird_maintain_db' => 2, 'fbird_modify_user' => 2, 'fbird_name_result' => 2, 'fbird_num_fields' => 2, 'fbird_num_params' => 2, 'fbird_param_info' => 2, 'fbird_pconnect' => 2, 'fbird_prepare' => 2, 'fbird_query' => 2, 'fbird_restore' => 2, 'fbird_rollback' => 2, 'fbird_rollback_ret' => 2, 'fbird_server_info' => 2,
			'fbird_service_attach' => 2, 'fbird_service_detach' => 2, 'fbird_set_event_handler' => 2, 'fbird_trans' => 2, 'fbird_wait_event' => 2, 'fclose' => 2, 'fdf_add_doc_javascript' => 2, 'fdf_add_template' => 2, 'fdf_close' => 2, 'fdf_create' => 2, 'fdf_enum_values' => 2, 'fdf_errno' => 2, 'fdf_error' => 2, 'fdf_get_ap' => 2, 'fdf_get_attachment' => 2, 'fdf_get_encoding' => 2, 'fdf_get_file' => 2, 'fdf_get_flags' => 2, 'fdf_get_opt' => 2, 'fdf_get_status' => 2, 'fdf_get_value' => 2, 'fdf_get_version' => 2, 'fdf_header' => 2, 'fdf_next_field_name' => 2, 'fdf_open' => 2, 'fdf_open_string' => 2,
			'fdf_remove_item' => 2, 'fdf_save' => 2, 'fdf_save_string' => 2, 'fdf_set_ap' => 2, 'fdf_set_encoding' => 2, 'fdf_set_file' => 2, 'fdf_set_flags' => 2, 'fdf_set_javascript_action' => 2, 'fdf_set_on_import_javascript' => 2, 'fdf_set_opt' => 2, 'fdf_set_status' => 2, 'fdf_set_submit_form_action' => 2, 'fdf_set_target_frame' => 2, 'fdf_set_value' => 2, 'fdf_set_version' => 2, 'feof' => 2, 'fflush' => 2, 'fgetc' => 2, 'fgetcsv' => 2, 'fgets' => 2, 'fgetss' => 2, 'file' => 2, 'file_exists' => 2, 'file_get_contents' => 2, 'file_put_contents' => 2, 'fileatime' => 2,
			'filectime' => 2, 'filegroup' => 2, 'fileinode' => 2, 'filemtime' => 2, 'fileowner' => 2, 'fileperms' => 2, 'filepro' => 2, 'filepro_fieldcount' => 2, 'filepro_fieldname' => 2, 'filepro_fieldtype' => 2, 'filepro_fieldwidth' => 2, 'filepro_retrieve' => 2, 'filepro_rowcount' => 2, 'filesize' => 2, 'filetype' => 2, 'filter_has_var' => 2, 'filter_id' => 2, 'filter_input' => 2, 'filter_input_array' => 2, 'filter_list' => 2, 'filter_var' => 2, 'filter_var_array' => 2, 'finfo_buffer' => 2, 'finfo_close' => 2, 'finfo_file' => 2, 'finfo_open' => 2,
			'finfo_set_flags' => 2, 'floatval' => 2, 'flock' => 2, 'floor' => 2, 'flush' => 2, 'fmod' => 2, 'fnmatch' => 2, 'fopen' => 2, 'forward_static_call' => 2, 'forward_static_call_array' => 2, 'fpassthru' => 2, 'fprintf' => 2, 'fputcsv' => 2, 'fputs' => 2, 'fread' => 2, 'frenchtojd' => 2, 'fribidi_charset_info' => 2, 'fribidi_get_charsets' => 2, 'fribidi_log2vis' => 2, 'fscanf' => 2, 'fseek' => 2, 'fsockopen' => 2, 'fstat' => 2, 'ftell' => 2, 'ftok' => 2, 'ftp_alloc' => 2,
			'ftp_cdup' => 2, 'ftp_chdir' => 2, 'ftp_chmod' => 2, 'ftp_close' => 2, 'ftp_connect' => 2, 'ftp_delete' => 2, 'ftp_exec' => 2, 'ftp_fget' => 2, 'ftp_fput' => 2, 'ftp_get' => 2, 'ftp_get_option' => 2, 'ftp_login' => 2, 'ftp_mdtm' => 2, 'ftp_mkdir' => 2, 'ftp_nb_continue' => 2, 'ftp_nb_fget' => 2, 'ftp_nb_fput' => 2, 'ftp_nb_get' => 2, 'ftp_nb_put' => 2, 'ftp_nlist' => 2, 'ftp_pasv' => 2, 'ftp_put' => 2, 'ftp_pwd' => 2, 'ftp_quit' => 2, 'ftp_raw' => 2, 'ftp_rawlist' => 2,
			'ftp_rename' => 2, 'ftp_rmdir' => 2, 'ftp_set_option' => 2, 'ftp_site' => 2, 'ftp_size' => 2, 'ftp_ssl_connect' => 2, 'ftp_systype' => 2, 'ftruncate' => 2, 'func_get_arg' => 2, 'func_get_args' => 2, 'func_num_args' => 2, 'function_exists' => 2, 'fwrite' => 2, 'gc_collect_cycles' => 2, 'gc_disable' => 2, 'gc_enable' => 2, 'gc_enabled' => 2, 'gd_info' => 2, 'get_browser' => 2, 'get_called_class' => 2, 'get_cfg_var' => 2, 'get_class' => 2, 'get_class_methods' => 2, 'get_class_vars' => 2, 'get_current_user' => 2, 'get_declared_classes' => 2,
			'get_declared_interfaces' => 2, 'get_declared_traits' => 2, 'get_defined_constants' => 2, 'get_defined_functions' => 2, 'get_defined_vars' => 2, 'get_extension_funcs' => 2, 'get_headers' => 2, 'get_html_translation_table' => 2, 'get_include_path' => 2, 'get_included_files' => 2, 'get_loaded_extensions' => 2, 'get_magic_quotes_gpc' => 2, 'get_magic_quotes_runtime' => 2, 'get_meta_tags' => 2, 'get_object_vars' => 2, 'get_parent_class' => 2, 'get_required_files' => 2, 'get_resource_type' => 2, 'getallheaders' => 2, 'getcwd' => 2, 'getdate' => 2, 'getenv' => 2, 'gethostbyaddr' => 2, 'gethostbyname' => 2, 'gethostbynamel' => 2, 'gethostname' => 2,
			'getimagesize' => 2, 'getimagesizefromstring' => 2, 'getlastmod' => 2, 'getmxrr' => 2, 'getmygid' => 2, 'getmyinode' => 2, 'getmypid' => 2, 'getmyuid' => 2, 'getopt' => 2, 'getprotobyname' => 2, 'getprotobynumber' => 2, 'getrandmax' => 2, 'getrusage' => 2, 'getservbyname' => 2, 'getservbyport' => 2, 'gettext' => 2, 'gettimeofday' => 2, 'gettype' => 2, 'glob' => 2, 'gmdate' => 2, 'gmmktime' => 2, 'gmp_abs' => 2, 'gmp_add' => 2, 'gmp_and' => 2, 'gmp_clrbit' => 2, 'gmp_cmp' => 2,
			'gmp_com' => 2, 'gmp_div' => 2, 'gmp_div_q' => 2, 'gmp_div_qr' => 2, 'gmp_div_r' => 2, 'gmp_divexact' => 2, 'gmp_fact' => 2, 'gmp_gcd' => 2, 'gmp_gcdext' => 2, 'gmp_hamdist' => 2, 'gmp_init' => 2, 'gmp_intval' => 2, 'gmp_invert' => 2, 'gmp_jacobi' => 2, 'gmp_legendre' => 2, 'gmp_mod' => 2, 'gmp_mul' => 2, 'gmp_neg' => 2, 'gmp_nextprime' => 2, 'gmp_or' => 2, 'gmp_perfect_square' => 2, 'gmp_popcount' => 2, 'gmp_pow' => 2, 'gmp_powm' => 2, 'gmp_prob_prime' => 2, 'gmp_random' => 2,
			'gmp_scan0' => 2, 'gmp_scan1' => 2, 'gmp_setbit' => 2, 'gmp_sign' => 2, 'gmp_sqrt' => 2, 'gmp_sqrtrem' => 2, 'gmp_strval' => 2, 'gmp_sub' => 2, 'gmp_xor' => 2, 'gmstrftime' => 2, 'gopher_parsedir' => 2, 'grapheme_extract' => 2, 'grapheme_stripos' => 2, 'grapheme_stristr' => 2, 'grapheme_strlen' => 2, 'grapheme_strpos' => 2, 'grapheme_strripos' => 2, 'grapheme_strrpos' => 2, 'grapheme_strstr' => 2, 'grapheme_substr' => 2, 'gregoriantojd' => 2, 'gzclose' => 2, 'gzcompress' => 2, 'gzdecode' => 2, 'gzdeflate' => 2, 'gzencode' => 2,
			'gzeof' => 2, 'gzfile' => 2, 'gzgetc' => 2, 'gzgets' => 2, 'gzgetss' => 2, 'gzinflate' => 2, 'gzopen' => 2, 'gzpassthru' => 2, 'gzputs' => 2, 'gzread' => 2, 'gzrewind' => 2, 'gzseek' => 2, 'gztell' => 2, 'gzuncompress' => 2, 'gzwrite' => 2, 'hash' => 2, 'hash_algos' => 2, 'hash_copy' => 2, 'hash_file' => 2, 'hash_final' => 2, 'hash_hmac' => 2, 'hash_hmac_file' => 2, 'hash_init' => 2, 'hash_update' => 2, 'hash_update_file' => 2, 'hash_update_stream' => 2,
			'header' => 2, 'header_register_callback' => 2, 'header_remove' => 2, 'headers_list' => 2, 'headers_sent' => 2, 'hebrev' => 2, 'hebrevc' => 2, 'hex2bin' => 2, 'hexdec' => 2, 'highlight_file' => 2, 'highlight_string' => 2, 'html_doc' => 2, 'html_doc_file' => 2, 'html_entity_decode' => 2, 'htmlentities' => 2, 'htmlspecialchars' => 2, 'htmlspecialchars_decode' => 2, 'http_build_cookie' => 2, 'http_build_query' => 2, 'http_build_str' => 2, 'http_build_url' => 2, 'http_cache_etag' => 2, 'http_cache_last_modified' => 2, 'http_chunked_decode' => 2, 'http_date' => 2, 'http_deflate' => 2,
			'http_get' => 2, 'http_get_request_body' => 2, 'http_get_request_body_stream' => 2, 'http_get_request_headers' => 2, 'http_head' => 2, 'http_inflate' => 2, 'http_match_etag' => 2, 'http_match_modified' => 2, 'http_match_request_header' => 2, 'http_negotiate' => 2, 'http_negotiate_charset' => 2, 'http_negotiate_content_type' => 2, 'http_negotiate_language' => 2, 'http_parse_cookie' => 2, 'http_parse_headers' => 2, 'http_parse_message' => 2, 'http_parse_params' => 2, 'http_persistent_handles_clean' => 2, 'http_persistent_handles_count' => 2, 'http_persistent_handles_ident' => 2, 'http_post_data' => 2, 'http_post_fields' => 2, 'http_put_data' => 2, 'http_put_file' => 2, 'http_put_stream' => 2, 'http_redirect' => 2,
			'http_request' => 2, 'http_request_body_encode' => 2, 'http_request_method_exists' => 2, 'http_request_method_name' => 2, 'http_request_method_register' => 2, 'http_request_method_unregister' => 2, 'http_response_code' => 2, 'http_send_content_disposition' => 2, 'http_send_content_type' => 2, 'http_send_data' => 2, 'http_send_file' => 2, 'http_send_last_modified' => 2, 'http_send_status' => 2, 'http_send_stream' => 2, 'http_support' => 2, 'http_throttle' => 2, 'hw_array2objrec' => 2, 'hw_children' => 2, 'hw_childrenobj' => 2, 'hw_close' => 2, 'hw_connect' => 2, 'hw_cp' => 2, 'hw_deleteobject' => 2, 'hw_docbyanchor' => 2, 'hw_docbyanchorobj' => 2, 'hw_documentattributes' => 2,
			'hw_documentbodytag' => 2, 'hw_documentcontent' => 2, 'hw_documentsetcontent' => 2, 'hw_documentsize' => 2, 'hw_edittext' => 2, 'hw_error' => 2, 'hw_errormsg' => 2, 'hw_free_document' => 2, 'hw_getanchors' => 2, 'hw_getanchorsobj' => 2, 'hw_getandlock' => 2, 'hw_getchildcoll' => 2, 'hw_getchildcollobj' => 2, 'hw_getchilddoccoll' => 2, 'hw_getchilddoccollobj' => 2, 'hw_getobject' => 2, 'hw_getobjectbyquery' => 2, 'hw_getobjectbyquerycoll' => 2, 'hw_getobjectbyquerycollobj' => 2, 'hw_getobjectbyqueryobj' => 2, 'hw_getparents' => 2, 'hw_getparentsobj' => 2, 'hw_getremote' => 2, 'hw_getremotechildren' => 2, 'hw_getsrcbydestobj' => 2, 'hw_gettext' => 2,
			'hw_identify' => 2, 'hw_incollections' => 2, 'hw_info' => 2, 'hw_inscoll' => 2, 'hw_insdoc' => 2, 'hw_insertdocument' => 2, 'hw_insertobject' => 2, 'hw_mapid' => 2, 'hw_modifyobject' => 2, 'hw_mv' => 2, 'hw_new_document' => 2, 'hw_objrec2array' => 2, 'hw_outputdocument' => 2, 'hw_pconnect' => 2, 'hw_pipedocument' => 2, 'hw_root' => 2, 'hw_unlock' => 2, 'hw_username' => 2, 'hw_who' => 2, 'hypot' => 2, 'i18n_convert' => 2, 'i18n_discover_encoding' => 2, 'i18n_http_input' => 2, 'i18n_http_output' => 2, 'i18n_internal_encoding' => 2, 'i18n_ja_jp_hantozen' => 2,
			'i18n_mime_header_decode' => 2, 'i18n_mime_header_encode' => 2, 'ibase_add_user' => 2, 'ibase_affected_rows' => 2, 'ibase_backup' => 2, 'ibase_bind' => 2, 'ibase_blob_add' => 2, 'ibase_blob_cancel' => 2, 'ibase_blob_close' => 2, 'ibase_blob_create' => 2, 'ibase_blob_echo' => 2, 'ibase_blob_get' => 2, 'ibase_blob_import' => 2, 'ibase_blob_info' => 2, 'ibase_blob_open' => 2, 'ibase_close' => 2, 'ibase_commit' => 2, 'ibase_commit_ret' => 2, 'ibase_connect' => 2, 'ibase_db_info' => 2, 'ibase_delete_user' => 2, 'ibase_drop_db' => 2, 'ibase_errcode' => 2, 'ibase_errmsg' => 2, 'ibase_execute' => 2, 'ibase_fetch_assoc' => 2,
			'ibase_fetch_object' => 2, 'ibase_fetch_row' => 2, 'ibase_field_info' => 2, 'ibase_free_event_handler' => 2, 'ibase_free_query' => 2, 'ibase_free_result' => 2, 'ibase_gen_id' => 2, 'ibase_maintain_db' => 2, 'ibase_modify_user' => 2, 'ibase_name_result' => 2, 'ibase_num_fields' => 2, 'ibase_num_params' => 2, 'ibase_param_info' => 2, 'ibase_pconnect' => 2, 'ibase_prepare' => 2, 'ibase_query' => 2, 'ibase_restore' => 2, 'ibase_rollback' => 2, 'ibase_rollback_ret' => 2, 'ibase_server_info' => 2, 'ibase_service_attach' => 2, 'ibase_service_detach' => 2, 'ibase_set_event_handler' => 2, 'ibase_timefmt' => 2, 'ibase_trans' => 2, 'ibase_wait_event' => 2,
			'iconv' => 2, 'iconv_get_encoding' => 2, 'iconv_mime_decode' => 2, 'iconv_mime_decode_headers' => 2, 'iconv_mime_encode' => 2, 'iconv_set_encoding' => 2, 'iconv_strlen' => 2, 'iconv_strpos' => 2, 'iconv_strrpos' => 2, 'iconv_substr' => 2, 'id3_get_frame_long_name' => 2, 'id3_get_frame_short_name' => 2, 'id3_get_genre_id' => 2, 'id3_get_genre_list' => 2, 'id3_get_genre_name' => 2, 'id3_get_tag' => 2, 'id3_get_version' => 2, 'id3_remove_tag' => 2, 'id3_set_tag' => 2, 'idate' => 2, 'idn_to_ascii' => 2, 'idn_to_utf8' => 2, 'ifx_affected_rows' => 2, 'ifx_blobinfile_mode' => 2, 'ifx_byteasvarchar' => 2, 'ifx_close' => 2,
			'ifx_connect' => 2, 'ifx_copy_blob' => 2, 'ifx_create_blob' => 2, 'ifx_create_char' => 2, 'ifx_do' => 2, 'ifx_error' => 2, 'ifx_errormsg' => 2, 'ifx_fetch_row' => 2, 'ifx_fieldproperties' => 2, 'ifx_fieldtypes' => 2, 'ifx_free_blob' => 2, 'ifx_free_char' => 2, 'ifx_free_result' => 2, 'ifx_free_slob' => 2, 'ifx_get_blob' => 2, 'ifx_get_char' => 2, 'ifx_getsqlca' => 2, 'ifx_htmltbl_result' => 2, 'ifx_nullformat' => 2, 'ifx_num_fields' => 2, 'ifx_num_rows' => 2, 'ifx_pconnect' => 2, 'ifx_prepare' => 2, 'ifx_query' => 2, 'ifx_textasvarchar' => 2, 'ifx_update_blob' => 2,
			'ifx_update_char' => 2, 'ifxus_close_slob' => 2, 'ifxus_create_slob' => 2, 'ifxus_open_slob' => 2, 'ifxus_read_slob' => 2, 'ifxus_seek_slob' => 2, 'ifxus_tell_slob' => 2, 'ifxus_write_slob' => 2, 'ignore_user_abort' => 2, 'image2wbmp' => 2, 'image_type_to_extension' => 2, 'image_type_to_mime_type' => 2, 'imagealphablending' => 2, 'imageantialias' => 2, 'imagearc' => 2, 'imagechar' => 2, 'imagecharup' => 2, 'imagecolorallocate' => 2, 'imagecolorallocatealpha' => 2, 'imagecolorat' => 2, 'imagecolorclosest' => 2, 'imagecolorclosestalpha' => 2, 'imagecolorclosesthwb' => 2, 'imagecolordeallocate' => 2, 'imagecolorexact' => 2, 'imagecolorexactalpha' => 2,
			'imagecolormatch' => 2, 'imagecolorresolve' => 2, 'imagecolorresolvealpha' => 2, 'imagecolorset' => 2, 'imagecolorsforindex' => 2, 'imagecolorstotal' => 2, 'imagecolortransparent' => 2, 'imageconvolution' => 2, 'imagecopy' => 2, 'imagecopymerge' => 2, 'imagecopymergegray' => 2, 'imagecopyresampled' => 2, 'imagecopyresized' => 2, 'imagecreate' => 2, 'imagecreatefromgd' => 2, 'imagecreatefromgd2' => 2, 'imagecreatefromgd2part' => 2, 'imagecreatefromgif' => 2, 'imagecreatefromjpeg' => 2, 'imagecreatefrompng' => 2, 'imagecreatefromstring' => 2, 'imagecreatefromwbmp' => 2, 'imagecreatefromxbm' => 2, 'imagecreatetruecolor' => 2, 'imagedashedline' => 2, 'imagedestroy' => 2,
			'imageellipse' => 2, 'imagefill' => 2, 'imagefilledarc' => 2, 'imagefilledellipse' => 2, 'imagefilledpolygon' => 2, 'imagefilledrectangle' => 2, 'imagefilltoborder' => 2, 'imagefilter' => 2, 'imagefontheight' => 2, 'imagefontwidth' => 2, 'imageftbbox' => 2, 'imagefttext' => 2, 'imagegammacorrect' => 2, 'imagegd' => 2, 'imagegd2' => 2, 'imagegif' => 2, 'imagegrabscreen' => 2, 'imagegrabwindow' => 2, 'imageinterlace' => 2, 'imageistruecolor' => 2, 'imagejpeg' => 2, 'imagelayereffect' => 2, 'imageline' => 2, 'imageloadfont' => 2, 'imagepalettecopy' => 2, 'imagepng' => 2,
			'imagepolygon' => 2, 'imagepsbbox' => 2, 'imagepsencodefont' => 2, 'imagepsextendfont' => 2, 'imagepsfreefont' => 2, 'imagepsloadfont' => 2, 'imagepsslantfont' => 2, 'imagepstext' => 2, 'imagerectangle' => 2, 'imagerotate' => 2, 'imagesavealpha' => 2, 'imagesetbrush' => 2, 'imagesetpixel' => 2, 'imagesetstyle' => 2, 'imagesetthickness' => 2, 'imagesettile' => 2, 'imagestring' => 2, 'imagestringup' => 2, 'imagesx' => 2, 'imagesy' => 2, 'imagetruecolortopalette' => 2, 'imagettfbbox' => 2, 'imagettftext' => 2, 'imagetypes' => 2, 'imagewbmp' => 2, 'imagexbm' => 2,
			'imap_8bit' => 2, 'imap_alerts' => 2, 'imap_append' => 2, 'imap_base64' => 2, 'imap_binary' => 2, 'imap_body' => 2, 'imap_bodystruct' => 2, 'imap_check' => 2, 'imap_clearflag_full' => 2, 'imap_close' => 2, 'imap_create' => 2, 'imap_createmailbox' => 2, 'imap_delete' => 2, 'imap_deletemailbox' => 2, 'imap_errors' => 2, 'imap_expunge' => 2, 'imap_fetch_overview' => 2, 'imap_fetchbody' => 2, 'imap_fetchheader' => 2, 'imap_fetchmime' => 2, 'imap_fetchstructure' => 2, 'imap_fetchtext' => 2, 'imap_gc' => 2, 'imap_get_quota' => 2, 'imap_get_quotaroot' => 2, 'imap_getacl' => 2,
			'imap_getmailboxes' => 2, 'imap_getsubscribed' => 2, 'imap_header' => 2, 'imap_headerinfo' => 2, 'imap_headers' => 2, 'imap_last_error' => 2, 'imap_list' => 2, 'imap_listmailbox' => 2, 'imap_listscan' => 2, 'imap_listsubscribed' => 2, 'imap_lsub' => 2, 'imap_mail' => 2, 'imap_mail_compose' => 2, 'imap_mail_copy' => 2, 'imap_mail_move' => 2, 'imap_mailboxmsginfo' => 2, 'imap_mime_header_decode' => 2, 'imap_msgno' => 2, 'imap_mutf7_to_utf8' => 2, 'imap_num_msg' => 2, 'imap_num_recent' => 2, 'imap_open' => 2, 'imap_ping' => 2, 'imap_qprint' => 2, 'imap_rename' => 2, 'imap_renamemailbox' => 2,
			'imap_reopen' => 2, 'imap_rfc822_parse_adrlist' => 2, 'imap_rfc822_parse_headers' => 2, 'imap_rfc822_write_address' => 2, 'imap_savebody' => 2, 'imap_scan' => 2, 'imap_scanmailbox' => 2, 'imap_search' => 2, 'imap_set_quota' => 2, 'imap_setacl' => 2, 'imap_setflag_full' => 2, 'imap_sort' => 2, 'imap_status' => 2, 'imap_subscribe' => 2, 'imap_thread' => 2, 'imap_timeout' => 2, 'imap_uid' => 2, 'imap_undelete' => 2, 'imap_unsubscribe' => 2, 'imap_utf7_decode' => 2, 'imap_utf7_encode' => 2, 'imap_utf8' => 2, 'imap_utf8_to_mutf7' => 2, 'implode' => 2, 'import_request_variables' => 2, 'in_array' => 2,
			'inet_ntop' => 2, 'inet_pton' => 2, 'ini_alter' => 2, 'ini_get' => 2, 'ini_get_all' => 2, 'ini_restore' => 2, 'ini_set' => 2, 'interface_exists' => 2, 'intl_error_name' => 2, 'intl_get_error_code' => 2, 'intl_get_error_message' => 2, 'intl_is_failure' => 2, 'intval' => 2, 'ip2long' => 2, 'iptcembed' => 2, 'iptcparse' => 2, 'is_a' => 2, 'is_array' => 2, 'is_bool' => 2, 'is_callable' => 2, 'is_dir' => 2, 'is_double' => 2, 'is_executable' => 2, 'is_file' => 2, 'is_finite' => 2, 'is_float' => 2,
			'is_infinite' => 2, 'is_int' => 2, 'is_integer' => 2, 'is_link' => 2, 'is_long' => 2, 'is_nan' => 2, 'is_null' => 2, 'is_numeric' => 2, 'is_object' => 2, 'is_readable' => 2, 'is_real' => 2, 'is_resource' => 2, 'is_scalar' => 2, 'is_soap_fault' => 2, 'is_string' => 2, 'is_subclass_of' => 2, 'is_uploaded_file' => 2, 'is_writable' => 2, 'is_writeable' => 2, 'iterator_apply' => 2, 'iterator_count' => 2, 'iterator_to_array' => 2, 'java_last_exception_clear' => 2, 'java_last_exception_get' => 2, 'jddayofweek' => 2, 'jdmonthname' => 2,
			'jdtofrench' => 2, 'jdtogregorian' => 2, 'jdtojewish' => 2, 'jdtojulian' => 2, 'jdtounix' => 2, 'jewishtojd' => 2, 'join' => 2, 'jpeg2wbmp' => 2, 'json_decode' => 2, 'json_encode' => 2, 'json_last_error' => 2, 'juliantojd' => 2, 'key' => 2, 'key_exists' => 2, 'krsort' => 2, 'ksort' => 2, 'lcfirst' => 2, 'lcg_value' => 2, 'ldap_add' => 2, 'ldap_bind' => 2, 'ldap_close' => 2, 'ldap_compare' => 2, 'ldap_connect' => 2, 'ldap_count_entries' => 2, 'ldap_delete' => 2, 'ldap_dn2ufn' => 2,
			'ldap_err2str' => 2, 'ldap_errno' => 2, 'ldap_error' => 2, 'ldap_explode_dn' => 2, 'ldap_first_attribute' => 2, 'ldap_first_entry' => 2, 'ldap_first_reference' => 2, 'ldap_free_result' => 2, 'ldap_get_attributes' => 2, 'ldap_get_dn' => 2, 'ldap_get_entries' => 2, 'ldap_get_option' => 2, 'ldap_get_values' => 2, 'ldap_get_values_len' => 2, 'ldap_list' => 2, 'ldap_mod_add' => 2, 'ldap_mod_del' => 2, 'ldap_mod_replace' => 2, 'ldap_modify' => 2, 'ldap_next_attribute' => 2, 'ldap_next_entry' => 2, 'ldap_next_reference' => 2, 'ldap_parse_reference' => 2, 'ldap_parse_result' => 2, 'ldap_read' => 2, 'ldap_rename' => 2,
			'ldap_search' => 2, 'ldap_set_option' => 2, 'ldap_sort' => 2, 'ldap_start_tls' => 2, 'ldap_unbind' => 2, 'leak' => 2, 'levenshtein' => 2, 'libxml_clear_errors' => 2, 'libxml_disable_entity_loader' => 2, 'libxml_get_errors' => 2, 'libxml_get_last_error' => 2, 'libxml_set_streams_context' => 2, 'libxml_use_internal_errors' => 2, 'link' => 2, 'linkinfo' => 2, 'locale_accept_from_http' => 2, 'locale_canonicalize' => 2, 'locale_compose' => 2, 'locale_filter_matches' => 2, 'locale_get_all_variants' => 2, 'locale_get_default' => 2, 'locale_get_display_language' => 2, 'locale_get_display_name' => 2, 'locale_get_display_region' => 2, 'locale_get_display_script' => 2, 'locale_get_display_variant' => 2,
			'locale_get_keywords' => 2, 'locale_get_primary_language' => 2, 'locale_get_region' => 2, 'locale_get_script' => 2, 'locale_lookup' => 2, 'locale_parse' => 2, 'locale_set_default' => 2, 'localeconv' => 2, 'localtime' => 2, 'log' => 2, 'log10' => 2, 'log1p' => 2, 'long2ip' => 2, 'lstat' => 2, 'ltrim' => 2, 'lzf_compress' => 2, 'lzf_decompress' => 2, 'lzf_optimized_for' => 2, 'magic_quotes_runtime' => 2, 'mail' => 2, 'max' => 2, 'mb_check_encoding' => 2, 'mb_convert_case' => 2, 'mb_convert_encoding' => 2, 'mb_convert_kana' => 2, 'mb_convert_variables' => 2,
			'mb_decode_mimeheader' => 2, 'mb_decode_numericentity' => 2, 'mb_detect_encoding' => 2, 'mb_detect_order' => 2, 'mb_encode_mimeheader' => 2, 'mb_encode_numericentity' => 2, 'mb_encoding_aliases' => 2, 'mb_ereg' => 2, 'mb_ereg_match' => 2, 'mb_ereg_replace' => 2, 'mb_ereg_search' => 2, 'mb_ereg_search_getpos' => 2, 'mb_ereg_search_getregs' => 2, 'mb_ereg_search_init' => 2, 'mb_ereg_search_pos' => 2, 'mb_ereg_search_regs' => 2, 'mb_ereg_search_setpos' => 2, 'mb_eregi' => 2, 'mb_eregi_replace' => 2, 'mb_get_info' => 2, 'mb_http_input' => 2, 'mb_http_output' => 2, 'mb_internal_encoding' => 2, 'mb_language' => 2, 'mb_list_encodings' => 2, 'mb_output_handler' => 2,
			'mb_parse_str' => 2, 'mb_preferred_mime_name' => 2, 'mb_regex_encoding' => 2, 'mb_regex_set_options' => 2, 'mb_send_mail' => 2, 'mb_split' => 2, 'mb_strcut' => 2, 'mb_strimwidth' => 2, 'mb_stripos' => 2, 'mb_stristr' => 2, 'mb_strlen' => 2, 'mb_strpos' => 2, 'mb_strrchr' => 2, 'mb_strrichr' => 2, 'mb_strripos' => 2, 'mb_strrpos' => 2, 'mb_strstr' => 2, 'mb_strtolower' => 2, 'mb_strtoupper' => 2, 'mb_strwidth' => 2, 'mb_substitute_character' => 2, 'mb_substr' => 2, 'mb_substr_count' => 2, 'mbereg' => 2, 'mbereg_match' => 2, 'mbereg_replace' => 2,
			'mbereg_search' => 2, 'mbereg_search_getpos' => 2, 'mbereg_search_getregs' => 2, 'mbereg_search_init' => 2, 'mbereg_search_pos' => 2, 'mbereg_search_regs' => 2, 'mbereg_search_setpos' => 2, 'mberegi' => 2, 'mberegi_replace' => 2, 'mbregex_encoding' => 2, 'mbsplit' => 2, 'mbstrcut' => 2, 'mbstrlen' => 2, 'mbstrpos' => 2, 'mbstrrpos' => 2, 'mbsubstr' => 2, 'mcal_close' => 2, 'mcal_date_compare' => 2, 'mcal_date_valid' => 2, 'mcal_day_of_week' => 2, 'mcal_day_of_year' => 2, 'mcal_days_in_month' => 2, 'mcal_delete_event' => 2, 'mcal_event_init' => 2, 'mcal_event_set_alarm' => 2, 'mcal_event_set_category' => 2,
			'mcal_event_set_class' => 2, 'mcal_event_set_description' => 2, 'mcal_event_set_end' => 2, 'mcal_event_set_recur_daily' => 2, 'mcal_event_set_recur_monthly_mday' => 2, 'mcal_event_set_recur_monthly_wday' => 2, 'mcal_event_set_recur_weekly' => 2, 'mcal_event_set_recur_yearly' => 2, 'mcal_event_set_start' => 2, 'mcal_event_set_title' => 2, 'mcal_fetch_current_stream_event' => 2, 'mcal_fetch_event' => 2, 'mcal_is_leap_year' => 2, 'mcal_list_alarms' => 2, 'mcal_list_events' => 2, 'mcal_next_recurrence' => 2, 'mcal_open' => 2, 'mcal_snooze' => 2, 'mcal_store_event' => 2, 'mcal_time_valid' => 2, 'mcrypt_cbc' => 2, 'mcrypt_cfb' => 2, 'mcrypt_create_iv' => 2, 'mcrypt_decrypt' => 2, 'mcrypt_ecb' => 2, 'mcrypt_enc_get_algorithms_name' => 2,
			'mcrypt_enc_get_block_size' => 2, 'mcrypt_enc_get_iv_size' => 2, 'mcrypt_enc_get_key_size' => 2, 'mcrypt_enc_get_modes_name' => 2, 'mcrypt_enc_get_supported_key_sizes' => 2, 'mcrypt_enc_is_block_algorithm' => 2, 'mcrypt_enc_is_block_algorithm_mode' => 2, 'mcrypt_enc_is_block_mode' => 2, 'mcrypt_enc_self_test' => 2, 'mcrypt_encrypt' => 2, 'mcrypt_generic' => 2, 'mcrypt_generic_deinit' => 2, 'mcrypt_generic_end' => 2, 'mcrypt_generic_init' => 2, 'mcrypt_get_block_size' => 2, 'mcrypt_get_cipher_name' => 2, 'mcrypt_get_iv_size' => 2, 'mcrypt_get_key_size' => 2, 'mcrypt_list_algorithms' => 2, 'mcrypt_list_modes' => 2, 'mcrypt_module_close' => 2, 'mcrypt_module_get_algo_block_size' => 2, 'mcrypt_module_get_algo_key_size' => 2, 'mcrypt_module_get_supported_key_sizes' => 2, 'mcrypt_module_is_block_algorithm' => 2, 'mcrypt_module_is_block_algorithm_mode' => 2,
			'mcrypt_module_is_block_mode' => 2, 'mcrypt_module_open' => 2, 'mcrypt_module_self_test' => 2, 'mcrypt_ofb' => 2, 'md5' => 2, 'md5_file' => 2, 'mdecrypt_generic' => 2, 'memcache_add' => 2, 'memcache_add_server' => 2, 'memcache_close' => 2, 'memcache_connect' => 2, 'memcache_debug' => 2, 'memcache_decrement' => 2, 'memcache_delete' => 2, 'memcache_flush' => 2, 'memcache_get' => 2, 'memcache_get_extended_stats' => 2, 'memcache_get_server_status' => 2, 'memcache_get_stats' => 2, 'memcache_get_version' => 2, 'memcache_increment' => 2, 'memcache_pconnect' => 2, 'memcache_replace' => 2, 'memcache_set' => 2, 'memcache_set_compress_threshold' => 2, 'memcache_set_server_params' => 2,
			'memory_get_peak_usage' => 2, 'memory_get_usage' => 2, 'metaphone' => 2, 'method_exists' => 2, 'mhash' => 2, 'mhash_count' => 2, 'mhash_get_block_size' => 2, 'mhash_get_hash_name' => 2, 'mhash_keygen_s2k' => 2, 'microtime' => 2, 'mime_content_type' => 2, 'min' => 2, 'ming_keypress' => 2, 'ming_setcubicthreshold' => 2, 'ming_setscale' => 2, 'ming_useconstants' => 2, 'ming_useswfversion' => 2, 'mkdir' => 2, 'mktime' => 2, 'modifiers' => 2, 'money_format' => 2, 'move_uploaded_file' => 2, 'msgfmt_create' => 2, 'msgfmt_format' => 2, 'msgfmt_format_message' => 2, 'msgfmt_get_error_code' => 2,
			'msgfmt_get_error_message' => 2, 'msgfmt_get_locale' => 2, 'msgfmt_get_pattern' => 2, 'msgfmt_parse' => 2, 'msgfmt_parse_message' => 2, 'msgfmt_set_pattern' => 2, 'msql' => 2, 'msql_affected_rows' => 2, 'msql_close' => 2, 'msql_connect' => 2, 'msql_create_db' => 2, 'msql_createdb' => 2, 'msql_data_seek' => 2, 'msql_db_query' => 2, 'msql_dbname' => 2, 'msql_drop_db' => 2, 'msql_dropdb' => 2, 'msql_error' => 2, 'msql_fetch_array' => 2, 'msql_fetch_field' => 2, 'msql_fetch_object' => 2, 'msql_fetch_row' => 2, 'msql_field_flags' => 2, 'msql_field_len' => 2, 'msql_field_name' => 2, 'msql_field_seek' => 2,
			'msql_field_table' => 2, 'msql_field_type' => 2, 'msql_fieldflags' => 2, 'msql_fieldlen' => 2, 'msql_fieldname' => 2, 'msql_fieldtable' => 2, 'msql_fieldtype' => 2, 'msql_free_result' => 2, 'msql_freeresult' => 2, 'msql_list_dbs' => 2, 'msql_list_fields' => 2, 'msql_list_tables' => 2, 'msql_listdbs' => 2, 'msql_listfields' => 2, 'msql_listtables' => 2, 'msql_num_fields' => 2, 'msql_num_rows' => 2, 'msql_numfields' => 2, 'msql_numrows' => 2, 'msql_pconnect' => 2, 'msql_query' => 2, 'msql_regcase' => 2, 'msql_result' => 2, 'msql_select_db' => 2, 'msql_selectdb' => 2, 'msql_tablename' => 2,
			'mssql_bind' => 2, 'mssql_close' => 2, 'mssql_connect' => 2, 'mssql_data_seek' => 2, 'mssql_execute' => 2, 'mssql_fetch_array' => 2, 'mssql_fetch_assoc' => 2, 'mssql_fetch_batch' => 2, 'mssql_fetch_field' => 2, 'mssql_fetch_object' => 2, 'mssql_fetch_row' => 2, 'mssql_field_length' => 2, 'mssql_field_name' => 2, 'mssql_field_seek' => 2, 'mssql_field_type' => 2, 'mssql_free_result' => 2, 'mssql_free_statement' => 2, 'mssql_get_last_message' => 2, 'mssql_guid_string' => 2, 'mssql_init' => 2, 'mssql_min_error_severity' => 2, 'mssql_min_message_severity' => 2, 'mssql_next_result' => 2, 'mssql_num_fields' => 2, 'mssql_num_rows' => 2, 'mssql_pconnect' => 2,
			'mssql_query' => 2, 'mssql_result' => 2, 'mssql_rows_affected' => 2, 'mssql_select_db' => 2, 'mt_getrandmax' => 2, 'mt_rand' => 2, 'mt_srand' => 2, 'mysql' => 2, 'mysql_affected_rows' => 2, 'mysql_change_user' => 2, 'mysql_client_encoding' => 2, 'mysql_close' => 2, 'mysql_connect' => 2, 'mysql_create_db' => 2, 'mysql_createdb' => 2, 'mysql_data_seek' => 2, 'mysql_db_name' => 2, 'mysql_db_query' => 2, 'mysql_dbname' => 2, 'mysql_drop_db' => 2, 'mysql_dropdb' => 2, 'mysql_errno' => 2, 'mysql_error' => 2, 'mysql_escape_string' => 2, 'mysql_fetch_array' => 2, 'mysql_fetch_assoc' => 2,
			'mysql_fetch_field' => 2, 'mysql_fetch_lengths' => 2, 'mysql_fetch_object' => 2, 'mysql_fetch_row' => 2, 'mysql_field_flags' => 2, 'mysql_field_len' => 2, 'mysql_field_name' => 2, 'mysql_field_seek' => 2, 'mysql_field_table' => 2, 'mysql_field_type' => 2, 'mysql_fieldflags' => 2, 'mysql_fieldlen' => 2, 'mysql_fieldname' => 2, 'mysql_fieldtable' => 2, 'mysql_fieldtype' => 2, 'mysql_free_result' => 2, 'mysql_freeresult' => 2, 'mysql_get_client_info' => 2, 'mysql_get_host_info' => 2, 'mysql_get_proto_info' => 2, 'mysql_get_server_info' => 2, 'mysql_info' => 2, 'mysql_insert_id' => 2, 'mysql_list_dbs' => 2, 'mysql_list_fields' => 2, 'mysql_list_processes' => 2,
			'mysql_list_tables' => 2, 'mysql_listdbs' => 2, 'mysql_listfields' => 2, 'mysql_listtables' => 2, 'mysql_num_fields' => 2, 'mysql_num_rows' => 2, 'mysql_numfields' => 2, 'mysql_numrows' => 2, 'mysql_pconnect' => 2, 'mysql_ping' => 2, 'mysql_query' => 2, 'mysql_real_escape_string' => 2, 'mysql_result' => 2, 'mysql_select_db' => 2, 'mysql_selectdb' => 2, 'mysql_set_charset' => 2, 'mysql_stat' => 2, 'mysql_table_name' => 2, 'mysql_tablename' => 2, 'mysql_thread_id' => 2, 'mysql_unbuffered_query' => 2, 'mysqli_affected_rows' => 2, 'mysqli_autocommit' => 2, 'mysqli_bind_param' => 2, 'mysqli_bind_result' => 2, 'mysqli_change_user' => 2,
			'mysqli_character_set_name' => 2, 'mysqli_client_encoding' => 2, 'mysqli_close' => 2, 'mysqli_commit' => 2, 'mysqli_connect' => 2, 'mysqli_connect_errno' => 2, 'mysqli_connect_error' => 2, 'mysqli_data_seek' => 2, 'mysqli_debug' => 2, 'mysqli_disable_reads_from_master' => 2, 'mysqli_disable_rpl_parse' => 2, 'mysqli_dump_debug_info' => 2, 'mysqli_embedded_server_end' => 2, 'mysqli_embedded_server_start' => 2, 'mysqli_enable_reads_from_master' => 2, 'mysqli_enable_rpl_parse' => 2, 'mysqli_errno' => 2, 'mysqli_error' => 2, 'mysqli_escape_string' => 2, 'mysqli_execute' => 2, 'mysqli_fetch' => 2, 'mysqli_fetch_all' => 2, 'mysqli_fetch_array' => 2, 'mysqli_fetch_assoc' => 2, 'mysqli_fetch_field' => 2, 'mysqli_fetch_field_direct' => 2,
			'mysqli_fetch_fields' => 2, 'mysqli_fetch_lengths' => 2, 'mysqli_fetch_object' => 2, 'mysqli_fetch_row' => 2, 'mysqli_field_count' => 2, 'mysqli_field_seek' => 2, 'mysqli_field_tell' => 2, 'mysqli_free_result' => 2, 'mysqli_get_cache_stats' => 2, 'mysqli_get_charset' => 2, 'mysqli_get_client_info' => 2, 'mysqli_get_client_stats' => 2, 'mysqli_get_client_version' => 2, 'mysqli_get_connection_stats' => 2, 'mysqli_get_host_info' => 2, 'mysqli_get_metadata' => 2, 'mysqli_get_proto_info' => 2, 'mysqli_get_server_info' => 2, 'mysqli_get_server_version' => 2, 'mysqli_get_warnings' => 2, 'mysqli_info' => 2, 'mysqli_init' => 2, 'mysqli_insert_id' => 2, 'mysqli_kill' => 2, 'mysqli_master_query' => 2, 'mysqli_more_results' => 2,
			'mysqli_multi_query' => 2, 'mysqli_next_result' => 2, 'mysqli_num_fields' => 2, 'mysqli_num_rows' => 2, 'mysqli_options' => 2, 'mysqli_param_count' => 2, 'mysqli_ping' => 2, 'mysqli_poll' => 2, 'mysqli_prepare' => 2, 'mysqli_query' => 2, 'mysqli_real_connect' => 2, 'mysqli_real_escape_string' => 2, 'mysqli_real_query' => 2, 'mysqli_reap_async_query' => 2, 'mysqli_refresh' => 2, 'mysqli_report' => 2, 'mysqli_rollback' => 2, 'mysqli_rpl_parse_enabled' => 2, 'mysqli_rpl_probe' => 2, 'mysqli_rpl_query_type' => 2, 'mysqli_select_db' => 2, 'mysqli_send_long_data' => 2, 'mysqli_send_query' => 2, 'mysqli_set_charset' => 2, 'mysqli_set_local_infile_default' => 2, 'mysqli_set_local_infile_handler' => 2,
			'mysqli_set_opt' => 2, 'mysqli_slave_query' => 2, 'mysqli_sqlstate' => 2, 'mysqli_ssl_set' => 2, 'mysqli_stat' => 2, 'mysqli_stmt_affected_rows' => 2, 'mysqli_stmt_attr_get' => 2, 'mysqli_stmt_attr_set' => 2, 'mysqli_stmt_bind_param' => 2, 'mysqli_stmt_bind_result' => 2, 'mysqli_stmt_close' => 2, 'mysqli_stmt_data_seek' => 2, 'mysqli_stmt_errno' => 2, 'mysqli_stmt_error' => 2, 'mysqli_stmt_execute' => 2, 'mysqli_stmt_fetch' => 2, 'mysqli_stmt_field_count' => 2, 'mysqli_stmt_free_result' => 2, 'mysqli_stmt_get_result' => 2, 'mysqli_stmt_get_warnings' => 2, 'mysqli_stmt_init' => 2, 'mysqli_stmt_insert_id' => 2, 'mysqli_stmt_more_results' => 2, 'mysqli_stmt_next_result' => 2, 'mysqli_stmt_num_rows' => 2, 'mysqli_stmt_param_count' => 2,
			'mysqli_stmt_prepare' => 2, 'mysqli_stmt_reset' => 2, 'mysqli_stmt_result_metadata' => 2, 'mysqli_stmt_send_long_data' => 2, 'mysqli_stmt_sqlstate' => 2, 'mysqli_stmt_store_result' => 2, 'mysqli_store_result' => 2, 'mysqli_thread_id' => 2, 'mysqli_thread_safe' => 2, 'mysqli_use_result' => 2, 'mysqli_warning_count' => 2, 'natcasesort' => 2, 'natsort' => 2, 'new_xmldoc' => 2, 'next' => 2, 'ngettext' => 2, 'nl2br' => 2, 'nl_langinfo' => 2, 'normalizer_is_normalized' => 2, 'normalizer_normalize' => 2, 'ntuser_getdomaincontroller' => 2, 'ntuser_getusergroups' => 2, 'ntuser_getuserinfo' => 2, 'ntuser_getuserlist' => 2, 'number_format' => 2, 'numfmt_create' => 2,
			'numfmt_format' => 2, 'numfmt_format_currency' => 2, 'numfmt_get_attribute' => 2, 'numfmt_get_error_code' => 2, 'numfmt_get_error_message' => 2, 'numfmt_get_locale' => 2, 'numfmt_get_pattern' => 2, 'numfmt_get_symbol' => 2, 'numfmt_get_text_attribute' => 2, 'numfmt_parse' => 2, 'numfmt_parse_currency' => 2, 'numfmt_set_attribute' => 2, 'numfmt_set_pattern' => 2, 'numfmt_set_symbol' => 2, 'numfmt_set_text_attribute' => 2, 'ob_clean' => 2, 'ob_deflatehandler' => 2, 'ob_end_clean' => 2, 'ob_end_flush' => 2, 'ob_etaghandler' => 2, 'ob_flush' => 2, 'ob_get_clean' => 2, 'ob_get_contents' => 2, 'ob_get_flush' => 2, 'ob_get_length' => 2, 'ob_get_level' => 2,
			'ob_get_status' => 2, 'ob_gzhandler' => 2, 'ob_iconv_handler' => 2, 'ob_implicit_flush' => 2, 'ob_inflatehandler' => 2, 'ob_list_handlers' => 2, 'ob_start' => 2, 'ob_tidyhandler' => 2, 'ocibindbyname' => 2, 'ocicolumnisnull' => 2, 'ocicolumnname' => 2, 'ocicolumnsize' => 2, 'ocicolumntype' => 2, 'ocicommit' => 2, 'ocidefinebyname' => 2, 'ocierror' => 2, 'ociexecute' => 2, 'ocifetch' => 2, 'ocifetchinto' => 2, 'ocifetchstatement' => 2, 'ocifreecursor' => 2, 'ocifreestatement' => 2, 'ociinternaldebug' => 2, 'ocilogoff' => 2, 'ocilogon' => 2, 'ocinewcursor' => 2,
			'ocinewdescriptor' => 2, 'ocinlogon' => 2, 'ocinumcols' => 2, 'ociparse' => 2, 'ociplogon' => 2, 'ociresult' => 2, 'ocirollback' => 2, 'ocirowcount' => 2, 'ociserverversion' => 2, 'ocistatementtype' => 2, 'octdec' => 2, 'odbc_autocommit' => 2, 'odbc_binmode' => 2, 'odbc_close' => 2, 'odbc_close_all' => 2, 'odbc_columnprivileges' => 2, 'odbc_columns' => 2, 'odbc_commit' => 2, 'odbc_connect' => 2, 'odbc_cursor' => 2, 'odbc_data_source' => 2, 'odbc_do' => 2, 'odbc_error' => 2, 'odbc_errormsg' => 2, 'odbc_exec' => 2, 'odbc_execute' => 2,
			'odbc_fetch_array' => 2, 'odbc_fetch_into' => 2, 'odbc_fetch_object' => 2, 'odbc_fetch_row' => 2, 'odbc_field_len' => 2, 'odbc_field_name' => 2, 'odbc_field_num' => 2, 'odbc_field_precision' => 2, 'odbc_field_scale' => 2, 'odbc_field_type' => 2, 'odbc_foreignkeys' => 2, 'odbc_free_result' => 2, 'odbc_gettypeinfo' => 2, 'odbc_longreadlen' => 2, 'odbc_next_result' => 2, 'odbc_num_fields' => 2, 'odbc_num_rows' => 2, 'odbc_pconnect' => 2, 'odbc_prepare' => 2, 'odbc_primarykeys' => 2, 'odbc_procedurecolumns' => 2, 'odbc_procedures' => 2, 'odbc_result' => 2, 'odbc_result_all' => 2, 'odbc_rollback' => 2, 'odbc_setoption' => 2,
			'odbc_specialcolumns' => 2, 'odbc_statistics' => 2, 'odbc_tableprivileges' => 2, 'odbc_tables' => 2, 'opendir' => 2, 'openlog' => 2, 'openssl_cipher_iv_length' => 2, 'openssl_csr_export' => 2, 'openssl_csr_export_to_file' => 2, 'openssl_csr_get_public_key' => 2, 'openssl_csr_get_subject' => 2, 'openssl_csr_new' => 2, 'openssl_csr_sign' => 2, 'openssl_decrypt' => 2, 'openssl_dh_compute_key' => 2, 'openssl_digest' => 2, 'openssl_encrypt' => 2, 'openssl_error_string' => 2, 'openssl_free_key' => 2, 'openssl_get_cipher_methods' => 2, 'openssl_get_md_methods' => 2, 'openssl_get_privatekey' => 2, 'openssl_get_publickey' => 2, 'openssl_open' => 2, 'openssl_pkcs12_export' => 2, 'openssl_pkcs12_export_to_file' => 2,
			'openssl_pkcs12_read' => 2, 'openssl_pkcs7_decrypt' => 2, 'openssl_pkcs7_encrypt' => 2, 'openssl_pkcs7_sign' => 2, 'openssl_pkcs7_verify' => 2, 'openssl_pkey_export' => 2, 'openssl_pkey_export_to_file' => 2, 'openssl_pkey_free' => 2, 'openssl_pkey_get_details' => 2, 'openssl_pkey_get_private' => 2, 'openssl_pkey_get_public' => 2, 'openssl_pkey_new' => 2, 'openssl_private_decrypt' => 2, 'openssl_private_encrypt' => 2, 'openssl_public_decrypt' => 2, 'openssl_public_encrypt' => 2, 'openssl_random_pseudo_bytes' => 2, 'openssl_seal' => 2, 'openssl_sign' => 2, 'openssl_verify' => 2, 'openssl_x509_check_private_key' => 2, 'openssl_x509_checkpurpose' => 2, 'openssl_x509_export' => 2, 'openssl_x509_export_to_file' => 2, 'openssl_x509_free' => 2, 'openssl_x509_parse' => 2,
			'openssl_x509_read' => 2, 'ora_bind' => 2, 'ora_close' => 2, 'ora_columnname' => 2, 'ora_columntype' => 2, 'ora_commit' => 2, 'ora_commitoff' => 2, 'ora_commiton' => 2, 'ora_error' => 2, 'ora_errorcode' => 2, 'ora_exec' => 2, 'ora_fetch' => 2, 'ora_getcolumn' => 2, 'ora_logoff' => 2, 'ora_logon' => 2, 'ora_open' => 2, 'ora_parse' => 2, 'ora_rollback' => 2, 'ord' => 2, 'output_add_rewrite_var' => 2, 'output_reset_rewrite_vars' => 2, 'outputdebugstring' => 2, 'overload' => 2, 'pack' => 2, 'parse_ini_file' => 2, 'parse_ini_string' => 2,
			'parse_str' => 2, 'parse_url' => 2, 'parsekit_compile_file' => 2, 'parsekit_compile_string' => 2, 'parsekit_func_arginfo' => 2, 'parsekit_opcode_flags' => 2, 'parsekit_opcode_name' => 2, 'passthru' => 2, 'pathinfo' => 2, 'pattern' => 2, 'pclose' => 2, 'pdf_add_annotation' => 2, 'pdf_add_bookmark' => 2, 'pdf_add_launchlink' => 2, 'pdf_add_locallink' => 2, 'pdf_add_nameddest' => 2, 'pdf_add_note' => 2, 'pdf_add_outline' => 2, 'pdf_add_pdflink' => 2, 'pdf_add_thumbnail' => 2, 'pdf_add_weblink' => 2, 'pdf_arc' => 2, 'pdf_arcn' => 2, 'pdf_attach_file' => 2, 'pdf_begin_font' => 2, 'pdf_begin_glyph' => 2,
			'pdf_begin_page' => 2, 'pdf_begin_pattern' => 2, 'pdf_begin_template' => 2, 'pdf_circle' => 2, 'pdf_clip' => 2, 'pdf_close' => 2, 'pdf_close_image' => 2, 'pdf_close_pdi' => 2, 'pdf_close_pdi_page' => 2, 'pdf_closepath' => 2, 'pdf_closepath_fill_stroke' => 2, 'pdf_closepath_stroke' => 2, 'pdf_concat' => 2, 'pdf_continue_text' => 2, 'pdf_create_gstate' => 2, 'pdf_create_pvf' => 2, 'pdf_curveto' => 2, 'pdf_delete' => 2, 'pdf_delete_pvf' => 2, 'pdf_encoding_set_char' => 2, 'pdf_end_font' => 2, 'pdf_end_glyph' => 2, 'pdf_end_page' => 2, 'pdf_end_pattern' => 2, 'pdf_end_template' => 2, 'pdf_endpath' => 2,
			'pdf_execute_image' => 2, 'pdf_fill' => 2, 'pdf_fill_imageblock' => 2, 'pdf_fill_pdfblock' => 2, 'pdf_fill_stroke' => 2, 'pdf_fill_textblock' => 2, 'pdf_findfont' => 2, 'pdf_fit_image' => 2, 'pdf_fit_pdi_page' => 2, 'pdf_fit_textline' => 2, 'pdf_get_apiname' => 2, 'pdf_get_buffer' => 2, 'pdf_get_errmsg' => 2, 'pdf_get_errnum' => 2, 'pdf_get_info' => 2, 'pdf_get_parameter' => 2, 'pdf_get_pdi_parameter' => 2, 'pdf_get_pdi_value' => 2, 'pdf_get_value' => 2, 'pdf_initgraphics' => 2, 'pdf_lineto' => 2, 'pdf_load_font' => 2, 'pdf_load_iccprofile' => 2, 'pdf_load_image' => 2, 'pdf_makespotcolor' => 2, 'pdf_moveto' => 2,
			'pdf_new' => 2, 'pdf_open' => 2, 'pdf_open_ccitt' => 2, 'pdf_open_file' => 2, 'pdf_open_gif' => 2, 'pdf_open_image' => 2, 'pdf_open_image_file' => 2, 'pdf_open_jpeg' => 2, 'pdf_open_memory_image' => 2, 'pdf_open_pdi' => 2, 'pdf_open_pdi_page' => 2, 'pdf_place_image' => 2, 'pdf_place_pdi_page' => 2, 'pdf_process_pdi' => 2, 'pdf_put_image' => 2, 'pdf_rect' => 2, 'pdf_restore' => 2, 'pdf_rotate' => 2, 'pdf_save' => 2, 'pdf_scale' => 2, 'pdf_set_border_color' => 2, 'pdf_set_border_dash' => 2, 'pdf_set_border_style' => 2, 'pdf_set_char_spacing' => 2, 'pdf_set_duration' => 2, 'pdf_set_font' => 2,
			'pdf_set_gstate' => 2, 'pdf_set_horiz_scaling' => 2, 'pdf_set_info' => 2, 'pdf_set_info_author' => 2, 'pdf_set_info_creator' => 2, 'pdf_set_info_keywords' => 2, 'pdf_set_info_subject' => 2, 'pdf_set_info_title' => 2, 'pdf_set_leading' => 2, 'pdf_set_parameter' => 2, 'pdf_set_text_matrix' => 2, 'pdf_set_text_pos' => 2, 'pdf_set_text_rendering' => 2, 'pdf_set_text_rise' => 2, 'pdf_set_transition' => 2, 'pdf_set_value' => 2, 'pdf_set_word_spacing' => 2, 'pdf_setcolor' => 2, 'pdf_setdash' => 2, 'pdf_setdashpattern' => 2, 'pdf_setflat' => 2, 'pdf_setfont' => 2, 'pdf_setgray' => 2, 'pdf_setgray_fill' => 2, 'pdf_setgray_stroke' => 2, 'pdf_setlinecap' => 2,
			'pdf_setlinejoin' => 2, 'pdf_setlinewidth' => 2, 'pdf_setmatrix' => 2, 'pdf_setmiterlimit' => 2, 'pdf_setpolydash' => 2, 'pdf_setrgbcolor' => 2, 'pdf_setrgbcolor_fill' => 2, 'pdf_setrgbcolor_stroke' => 2, 'pdf_shading' => 2, 'pdf_shading_pattern' => 2, 'pdf_shfill' => 2, 'pdf_show' => 2, 'pdf_show_boxed' => 2, 'pdf_show_xy' => 2, 'pdf_skew' => 2, 'pdf_stringwidth' => 2, 'pdf_stroke' => 2, 'pdf_translate' => 2, 'pdo_drivers' => 2, 'pfsockopen' => 2, 'pg_affected_rows' => 2, 'pg_cancel_query' => 2, 'pg_client_encoding' => 2, 'pg_clientencoding' => 2, 'pg_close' => 2, 'pg_cmdtuples' => 2,
			'pg_connect' => 2, 'pg_connection_busy' => 2, 'pg_connection_reset' => 2, 'pg_connection_status' => 2, 'pg_convert' => 2, 'pg_copy_from' => 2, 'pg_copy_to' => 2, 'pg_dbname' => 2, 'pg_delete' => 2, 'pg_end_copy' => 2, 'pg_errormessage' => 2, 'pg_escape_bytea' => 2, 'pg_escape_string' => 2, 'pg_exec' => 2, 'pg_execute' => 2, 'pg_fetch_all' => 2, 'pg_fetch_all_columns' => 2, 'pg_fetch_array' => 2, 'pg_fetch_assoc' => 2, 'pg_fetch_object' => 2, 'pg_fetch_result' => 2, 'pg_fetch_row' => 2, 'pg_field_is_null' => 2, 'pg_field_name' => 2, 'pg_field_num' => 2, 'pg_field_prtlen' => 2,
			'pg_field_size' => 2, 'pg_field_table' => 2, 'pg_field_type' => 2, 'pg_field_type_oid' => 2, 'pg_fieldisnull' => 2, 'pg_fieldname' => 2, 'pg_fieldnum' => 2, 'pg_fieldprtlen' => 2, 'pg_fieldsize' => 2, 'pg_fieldtype' => 2, 'pg_free_result' => 2, 'pg_freeresult' => 2, 'pg_get_notify' => 2, 'pg_get_pid' => 2, 'pg_get_result' => 2, 'pg_getlastoid' => 2, 'pg_host' => 2, 'pg_insert' => 2, 'pg_last_error' => 2, 'pg_last_notice' => 2, 'pg_last_oid' => 2, 'pg_lo_close' => 2, 'pg_lo_create' => 2, 'pg_lo_export' => 2, 'pg_lo_import' => 2, 'pg_lo_open' => 2,
			'pg_lo_read' => 2, 'pg_lo_read_all' => 2, 'pg_lo_seek' => 2, 'pg_lo_tell' => 2, 'pg_lo_unlink' => 2, 'pg_lo_write' => 2, 'pg_loclose' => 2, 'pg_locreate' => 2, 'pg_loexport' => 2, 'pg_loimport' => 2, 'pg_loopen' => 2, 'pg_loread' => 2, 'pg_loreadall' => 2, 'pg_lounlink' => 2, 'pg_lowrite' => 2, 'pg_meta_data' => 2, 'pg_num_fields' => 2, 'pg_num_rows' => 2, 'pg_numfields' => 2, 'pg_numrows' => 2, 'pg_options' => 2, 'pg_parameter_status' => 2, 'pg_pconnect' => 2, 'pg_ping' => 2, 'pg_port' => 2, 'pg_prepare' => 2,
			'pg_put_line' => 2, 'pg_query' => 2, 'pg_query_params' => 2, 'pg_result' => 2, 'pg_result_error' => 2, 'pg_result_error_field' => 2, 'pg_result_seek' => 2, 'pg_result_status' => 2, 'pg_select' => 2, 'pg_send_execute' => 2, 'pg_send_prepare' => 2, 'pg_send_query' => 2, 'pg_send_query_params' => 2, 'pg_set_client_encoding' => 2, 'pg_set_error_verbosity' => 2, 'pg_setclientencoding' => 2, 'pg_trace' => 2, 'pg_transaction_status' => 2, 'pg_tty' => 2, 'pg_unescape_bytea' => 2, 'pg_untrace' => 2, 'pg_update' => 2, 'pg_version' => 2, 'php_egg_logo_guid' => 2, 'php_ini_loaded_file' => 2, 'php_ini_scanned_files' => 2,
			'php_logo_guid' => 2, 'php_real_logo_guid' => 2, 'php_sapi_name' => 2, 'php_strip_whitespace' => 2, 'php_uname' => 2, 'phpcredits' => 2, 'phpdoc_xml_from_string' => 2, 'phpinfo' => 2, 'phpversion' => 2, 'pi' => 2, 'png2wbmp' => 2, 'pop3_close' => 2, 'pop3_delete_message' => 2, 'pop3_get_account_size' => 2, 'pop3_get_message' => 2, 'pop3_get_message_count' => 2, 'pop3_get_message_header' => 2, 'pop3_get_message_ids' => 2, 'pop3_get_message_size' => 2, 'pop3_get_message_sizes' => 2, 'pop3_open' => 2, 'pop3_undelete' => 2, 'popen' => 2, 'pos' => 2, 'posix_ctermid' => 2, 'posix_errno' => 2,
			'posix_get_last_error' => 2, 'posix_getcwd' => 2, 'posix_getegid' => 2, 'posix_geteuid' => 2, 'posix_getgid' => 2, 'posix_getgrgid' => 2, 'posix_getgrnam' => 2, 'posix_getgroups' => 2, 'posix_getlogin' => 2, 'posix_getpgid' => 2, 'posix_getpgrp' => 2, 'posix_getpid' => 2, 'posix_getppid' => 2, 'posix_getpwnam' => 2, 'posix_getpwuid' => 2, 'posix_getrlimit' => 2, 'posix_getsid' => 2, 'posix_getuid' => 2, 'posix_isatty' => 2, 'posix_kill' => 2, 'posix_mkfifo' => 2, 'posix_setegid' => 2, 'posix_seteuid' => 2, 'posix_setgid' => 2, 'posix_setpgid' => 2, 'posix_setsid' => 2,
			'posix_setuid' => 2, 'posix_strerror' => 2, 'posix_times' => 2, 'posix_ttyname' => 2, 'posix_uname' => 2, 'pow' => 2, 'preg_filter' => 2, 'preg_grep' => 2, 'preg_last_error' => 2, 'preg_match' => 2, 'preg_match_all' => 2, 'preg_quote' => 2, 'preg_replace' => 2, 'preg_replace_callback' => 2, 'preg_split' => 2, 'prev' => 2, 'print_r' => 2, 'printf' => 2, 'proc_close' => 2, 'proc_get_status' => 2, 'proc_open' => 2, 'proc_terminate' => 2, 'property_exists' => 2, 'putenv' => 2, 'quoted_printable_decode' => 2, 'quoted_printable_encode' => 2,
			'quotemeta' => 2, 'rad2deg' => 2, 'radius_acct_open' => 2, 'radius_add_server' => 2, 'radius_auth_open' => 2, 'radius_close' => 2, 'radius_config' => 2, 'radius_create_request' => 2, 'radius_cvt_addr' => 2, 'radius_cvt_int' => 2, 'radius_cvt_string' => 2, 'radius_demangle' => 2, 'radius_demangle_mppe_key' => 2, 'radius_get_attr' => 2, 'radius_get_vendor_attr' => 2, 'radius_put_addr' => 2, 'radius_put_attr' => 2, 'radius_put_int' => 2, 'radius_put_string' => 2, 'radius_put_vendor_addr' => 2, 'radius_put_vendor_attr' => 2, 'radius_put_vendor_int' => 2, 'radius_put_vendor_string' => 2, 'radius_request_authenticator' => 2, 'radius_send_request' => 2, 'radius_server_secret' => 2,
			'radius_strerror' => 2, 'rand' => 2, 'range' => 2, 'rawurldecode' => 2, 'rawurlencode' => 2, 'read_exif_data' => 2, 'readdir' => 2, 'readfile' => 2, 'readgzfile' => 2, 'readlink' => 2, 'realpath' => 2, 'realpath_cache_get' => 2, 'realpath_cache_size' => 2, 'recode_file' => 2, 'recode_string' => 2, 'reg_close_key' => 2, 'reg_create_key' => 2, 'reg_enum_key' => 2, 'reg_enum_value' => 2, 'reg_get_value' => 2, 'reg_open_key' => 2, 'reg_set_value' => 2, 'register_shutdown_function' => 2, 'register_tick_function' => 2, 'rename' => 2, 'res_close' => 2,
			'res_get' => 2, 'res_list' => 2, 'res_list_type' => 2, 'res_open' => 2, 'res_set' => 2, 'reset' => 2, 'resourcebundle_count' => 2, 'resourcebundle_create' => 2, 'resourcebundle_get' => 2, 'resourcebundle_get_error_code' => 2, 'resourcebundle_get_error_message' => 2, 'resourcebundle_locales' => 2, 'restore_error_handler' => 2, 'restore_exception_handler' => 2, 'restore_include_path' => 2, 'rewind' => 2, 'rewinddir' => 2, 'rmdir' => 2, 'round' => 2, 'rsort' => 2, 'rtrim' => 2, 'runkit_class_adopt' => 2, 'runkit_class_emancipate' => 2, 'runkit_constant_add' => 2, 'runkit_constant_redefine' => 2, 'runkit_constant_remove' => 2,
			'runkit_default_property_add' => 2, 'runkit_function_add' => 2, 'runkit_function_copy' => 2, 'runkit_function_redefine' => 2, 'runkit_function_remove' => 2, 'runkit_function_rename' => 2, 'runkit_import' => 2, 'runkit_lint' => 2, 'runkit_lint_file' => 2, 'runkit_method_add' => 2, 'runkit_method_copy' => 2, 'runkit_method_redefine' => 2, 'runkit_method_remove' => 2, 'runkit_method_rename' => 2, 'runkit_object_id' => 2, 'runkit_return_value_used' => 2, 'runkit_sandbox_output_handler' => 2, 'runkit_superglobals' => 2, 'runkit_zval_inspect' => 2, 'scandir' => 2, 'sem_acquire' => 2, 'sem_get' => 2, 'sem_release' => 2, 'sem_remove' => 2, 'serialize' => 2, 'session_cache_expire' => 2,
			'session_cache_limiter' => 2, 'session_commit' => 2, 'session_decode' => 2, 'session_destroy' => 2, 'session_encode' => 2, 'session_get_cookie_params' => 2, 'session_id' => 2, 'session_is_registered' => 2, 'session_module_name' => 2, 'session_name' => 2, 'session_regenerate_id' => 2, 'session_register' => 2, 'session_save_path' => 2, 'session_set_cookie_params' => 2, 'session_set_save_handler' => 2, 'session_start' => 2, 'session_unregister' => 2, 'session_unset' => 2, 'session_write_close' => 2, 'set_content' => 2, 'set_error_handler' => 2, 'set_exception_handler' => 2, 'set_file_buffer' => 2, 'set_include_path' => 2, 'set_magic_quotes_runtime' => 2, 'set_socket_blocking' => 2,
			'set_time_limit' => 2, 'setcookie' => 2, 'setlocale' => 2, 'setrawcookie' => 2, 'settype' => 2, 'sha1' => 2, 'sha1_file' => 2, 'shell_exec' => 2, 'shm_attach' => 2, 'shm_detach' => 2, 'shm_get_var' => 2, 'shm_put_var' => 2, 'shm_remove' => 2, 'shm_remove_var' => 2, 'shmop_close' => 2, 'shmop_delete' => 2, 'shmop_open' => 2, 'shmop_read' => 2, 'shmop_size' => 2, 'shmop_write' => 2, 'show_source' => 2, 'shuffle' => 2, 'similar_text' => 2, 'simplexml_import_dom' => 2, 'simplexml_load_file' => 2, 'simplexml_load_string' => 2,
			'sin' => 2, 'sinh' => 2, 'sizeof' => 2, 'sleep' => 2, 'smtp_close' => 2, 'smtp_cmd_data' => 2, 'smtp_cmd_mail' => 2, 'smtp_cmd_rcpt' => 2, 'smtp_connect' => 2, 'snmp2_get' => 2, 'snmp2_getnext' => 2, 'snmp2_real_walk' => 2, 'snmp2_set' => 2, 'snmp2_walk' => 2, 'snmp3_get' => 2, 'snmp3_getnext' => 2, 'snmp3_real_walk' => 2, 'snmp3_set' => 2, 'snmp3_walk' => 2, 'snmp_get_quick_print' => 2, 'snmp_get_valueretrieval' => 2, 'snmp_read_mib' => 2, 'snmp_set_quick_print' => 2, 'snmp_set_valueretrieval' => 2, 'snmpget' => 2, 'snmpgetnext' => 2,
			'snmprealwalk' => 2, 'snmpset' => 2, 'snmpwalk' => 2, 'snmpwalkoid' => 2, 'socket_accept' => 2, 'socket_bind' => 2, 'socket_clear_error' => 2, 'socket_close' => 2, 'socket_connect' => 2, 'socket_create' => 2, 'socket_create_listen' => 2, 'socket_create_pair' => 2, 'socket_get_option' => 2, 'socket_get_status' => 2, 'socket_getopt' => 2, 'socket_getpeername' => 2, 'socket_getsockname' => 2, 'socket_iovec_add' => 2, 'socket_iovec_alloc' => 2, 'socket_iovec_delete' => 2, 'socket_iovec_fetch' => 2, 'socket_iovec_free' => 2, 'socket_iovec_set' => 2, 'socket_last_error' => 2, 'socket_listen' => 2, 'socket_read' => 2,
			'socket_readv' => 2, 'socket_recv' => 2, 'socket_recvfrom' => 2, 'socket_recvmsg' => 2, 'socket_select' => 2, 'socket_send' => 2, 'socket_sendmsg' => 2, 'socket_sendto' => 2, 'socket_set_block' => 2, 'socket_set_blocking' => 2, 'socket_set_nonblock' => 2, 'socket_set_option' => 2, 'socket_set_timeout' => 2, 'socket_setopt' => 2, 'socket_shutdown' => 2, 'socket_strerror' => 2, 'socket_write' => 2, 'socket_writev' => 2, 'solid_close' => 2, 'solid_connect' => 2, 'solid_exec' => 2, 'solid_fetchrow' => 2, 'solid_fieldname' => 2, 'solid_fieldnum' => 2, 'solid_freeresult' => 2, 'solid_numfields' => 2,
			'solid_numrows' => 2, 'solid_result' => 2, 'sort' => 2, 'soundex' => 2, 'spl_autoload' => 2, 'spl_autoload_call' => 2, 'spl_autoload_extensions' => 2, 'spl_autoload_functions' => 2, 'spl_autoload_register' => 2, 'spl_autoload_unregister' => 2, 'spl_classes' => 2, 'spl_object_hash' => 2, 'split' => 2, 'spliti' => 2, 'sprintf' => 2, 'sql_regcase' => 2, 'sqlite_array_query' => 2, 'sqlite_busy_timeout' => 2, 'sqlite_changes' => 2, 'sqlite_close' => 2, 'sqlite_column' => 2, 'sqlite_create_aggregate' => 2, 'sqlite_create_function' => 2, 'sqlite_current' => 2, 'sqlite_error_string' => 2, 'sqlite_escape_string' => 2,
			'sqlite_exec' => 2, 'sqlite_factory' => 2, 'sqlite_fetch_all' => 2, 'sqlite_fetch_array' => 2, 'sqlite_fetch_column_types' => 2, 'sqlite_fetch_object' => 2, 'sqlite_fetch_single' => 2, 'sqlite_fetch_string' => 2, 'sqlite_field_name' => 2, 'sqlite_has_more' => 2, 'sqlite_has_prev' => 2, 'sqlite_last_error' => 2, 'sqlite_last_insert_rowid' => 2, 'sqlite_libencoding' => 2, 'sqlite_libversion' => 2, 'sqlite_next' => 2, 'sqlite_num_fields' => 2, 'sqlite_num_rows' => 2, 'sqlite_open' => 2, 'sqlite_popen' => 2, 'sqlite_prev' => 2, 'sqlite_query' => 2, 'sqlite_rewind' => 2, 'sqlite_seek' => 2, 'sqlite_single_query' => 2, 'sqlite_udf_decode_binary' => 2,
			'sqlite_udf_encode_binary' => 2, 'sqlite_unbuffered_query' => 2, 'sqlite_valid' => 2, 'sqrt' => 2, 'srand' => 2, 'sscanf' => 2, 'ssh2_auth_hostbased_file' => 2, 'ssh2_auth_none' => 2, 'ssh2_auth_password' => 2, 'ssh2_auth_pubkey_file' => 2, 'ssh2_connect' => 2, 'ssh2_exec' => 2, 'ssh2_fetch_stream' => 2, 'ssh2_fingerprint' => 2, 'ssh2_forward_accept' => 2, 'ssh2_forward_listen' => 2, 'ssh2_methods_negotiated' => 2, 'ssh2_poll' => 2, 'ssh2_publickey_add' => 2, 'ssh2_publickey_init' => 2, 'ssh2_publickey_list' => 2, 'ssh2_publickey_remove' => 2, 'ssh2_scp_recv' => 2, 'ssh2_scp_send' => 2, 'ssh2_sftp' => 2, 'ssh2_sftp_lstat' => 2,
			'ssh2_sftp_mkdir' => 2, 'ssh2_sftp_readlink' => 2, 'ssh2_sftp_realpath' => 2, 'ssh2_sftp_rename' => 2, 'ssh2_sftp_rmdir' => 2, 'ssh2_sftp_stat' => 2, 'ssh2_sftp_symlink' => 2, 'ssh2_sftp_unlink' => 2, 'ssh2_shell' => 2, 'ssh2_tunnel' => 2, 'stat' => 2, 'stats_absolute_deviation' => 2, 'stats_cdf_beta' => 2, 'stats_cdf_binomial' => 2, 'stats_cdf_cauchy' => 2, 'stats_cdf_chisquare' => 2, 'stats_cdf_exponential' => 2, 'stats_cdf_f' => 2, 'stats_cdf_gamma' => 2, 'stats_cdf_laplace' => 2, 'stats_cdf_logistic' => 2, 'stats_cdf_negative_binomial' => 2, 'stats_cdf_noncentral_chisquare' => 2, 'stats_cdf_noncentral_f' => 2, 'stats_cdf_noncentral_t' => 2, 'stats_cdf_normal' => 2,
			'stats_cdf_poisson' => 2, 'stats_cdf_t' => 2, 'stats_cdf_uniform' => 2, 'stats_cdf_weibull' => 2, 'stats_covariance' => 2, 'stats_dens_beta' => 2, 'stats_dens_cauchy' => 2, 'stats_dens_chisquare' => 2, 'stats_dens_exponential' => 2, 'stats_dens_f' => 2, 'stats_dens_gamma' => 2, 'stats_dens_laplace' => 2, 'stats_dens_logistic' => 2, 'stats_dens_normal' => 2, 'stats_dens_pmf_binomial' => 2, 'stats_dens_pmf_hypergeometric' => 2, 'stats_dens_pmf_negative_binomial' => 2, 'stats_dens_pmf_poisson' => 2, 'stats_dens_t' => 2, 'stats_dens_uniform' => 2, 'stats_dens_weibull' => 2, 'stats_harmonic_mean' => 2, 'stats_kurtosis' => 2, 'stats_rand_gen_beta' => 2, 'stats_rand_gen_chisquare' => 2, 'stats_rand_gen_exponential' => 2,
			'stats_rand_gen_f' => 2, 'stats_rand_gen_funiform' => 2, 'stats_rand_gen_gamma' => 2, 'stats_rand_gen_ipoisson' => 2, 'stats_rand_gen_iuniform' => 2, 'stats_rand_gen_noncenral_f' => 2, 'stats_rand_gen_noncentral_chisquare' => 2, 'stats_rand_gen_noncentral_t' => 2, 'stats_rand_gen_normal' => 2, 'stats_rand_gen_t' => 2, 'stats_rand_getsd' => 2, 'stats_rand_ibinomial' => 2, 'stats_rand_ibinomial_negative' => 2, 'stats_rand_ignlgi' => 2, 'stats_rand_phrase_to_seeds' => 2, 'stats_rand_ranf' => 2, 'stats_rand_setall' => 2, 'stats_skew' => 2, 'stats_standard_deviation' => 2, 'stats_stat_binomial_coef' => 2, 'stats_stat_correlation' => 2, 'stats_stat_factorial' => 2, 'stats_stat_independent_t' => 2, 'stats_stat_innerproduct' => 2, 'stats_stat_paired_t' => 2, 'stats_stat_percentile' => 2,
			'stats_stat_powersum' => 2, 'stats_variance' => 2, 'str_getcsv' => 2, 'str_ireplace' => 2, 'str_pad' => 2, 'str_repeat' => 2, 'str_replace' => 2, 'str_rot13' => 2, 'str_shuffle' => 2, 'str_split' => 2, 'str_word_count' => 2, 'strcasecmp' => 2, 'strchr' => 2, 'strcmp' => 2, 'strcoll' => 2, 'strcspn' => 2, 'stream_bucket_append' => 2, 'stream_bucket_make_writeable' => 2, 'stream_bucket_new' => 2, 'stream_bucket_prepend' => 2, 'stream_context_create' => 2, 'stream_context_get_default' => 2, 'stream_context_get_options' => 2, 'stream_context_get_params' => 2, 'stream_context_set_default' => 2, 'stream_context_set_option' => 2,
			'stream_context_set_params' => 2, 'stream_copy_to_stream' => 2, 'stream_encoding' => 2, 'stream_filter_append' => 2, 'stream_filter_prepend' => 2, 'stream_filter_register' => 2, 'stream_filter_remove' => 2, 'stream_get_contents' => 2, 'stream_get_filters' => 2, 'stream_get_line' => 2, 'stream_get_meta_data' => 2, 'stream_get_transports' => 2, 'stream_get_wrappers' => 2, 'stream_is_local' => 2, 'stream_notification_callback' => 2, 'stream_register_wrapper' => 2, 'stream_resolve_include_path' => 2, 'stream_select' => 2, 'stream_set_blocking' => 2, 'stream_set_chunk_size' => 2, 'stream_set_read_buffer' => 2, 'stream_set_timeout' => 2, 'stream_set_write_buffer' => 2, 'stream_socket_accept' => 2, 'stream_socket_client' => 2, 'stream_socket_enable_crypto' => 2,
			'stream_socket_get_name' => 2, 'stream_socket_pair' => 2, 'stream_socket_recvfrom' => 2, 'stream_socket_sendto' => 2, 'stream_socket_server' => 2, 'stream_socket_shutdown' => 2, 'stream_supports_lock' => 2, 'stream_wrapper_register' => 2, 'stream_wrapper_restore' => 2, 'stream_wrapper_unregister' => 2, 'strftime' => 2, 'strip_tags' => 2, 'stripcslashes' => 2, 'stripos' => 2, 'stripslashes' => 2, 'stristr' => 2, 'strlen' => 2, 'strnatcasecmp' => 2, 'strnatcmp' => 2, 'strncasecmp' => 2, 'strncmp' => 2, 'strpbrk' => 2, 'strpos' => 2, 'strrchr' => 2, 'strrev' => 2, 'strripos' => 2,
			'strrpos' => 2, 'strspn' => 2, 'strstr' => 2, 'strtok' => 2, 'strtolower' => 2, 'strtotime' => 2, 'strtoupper' => 2, 'strtr' => 2, 'strval' => 2, 'substr' => 2, 'substr_compare' => 2, 'substr_count' => 2, 'substr_replac' => 2, 'substr_replace' => 2, 'svn_add' => 2, 'svn_auth_get_parameter' => 2, 'svn_auth_set_parameter' => 2, 'svn_cat' => 2, 'svn_checkout' => 2, 'svn_cleanup' => 2, 'svn_client_version' => 2, 'svn_commit' => 2, 'svn_diff' => 2, 'svn_export' => 2, 'svn_fs_abort_txn' => 2, 'svn_fs_apply_text' => 2,
			'svn_fs_begin_txn2' => 2, 'svn_fs_change_node_prop' => 2, 'svn_fs_check_path' => 2, 'svn_fs_contents_changed' => 2, 'svn_fs_copy' => 2, 'svn_fs_delete' => 2, 'svn_fs_dir_entries' => 2, 'svn_fs_file_contents' => 2, 'svn_fs_file_length' => 2, 'svn_fs_is_dir' => 2, 'svn_fs_is_file' => 2, 'svn_fs_make_dir' => 2, 'svn_fs_make_file' => 2, 'svn_fs_node_created_rev' => 2, 'svn_fs_node_prop' => 2, 'svn_fs_props_changed' => 2, 'svn_fs_revision_prop' => 2, 'svn_fs_revision_root' => 2, 'svn_fs_txn_root' => 2, 'svn_fs_youngest_rev' => 2, 'svn_import' => 2, 'svn_info' => 2, 'svn_log' => 2, 'svn_ls' => 2, 'svn_repos_create' => 2, 'svn_repos_fs' => 2,
			'svn_repos_fs_begin_txn_for_commit' => 2, 'svn_repos_fs_commit_txn' => 2, 'svn_repos_hotcopy' => 2, 'svn_repos_open' => 2, 'svn_repos_recover' => 2, 'svn_status' => 2, 'svn_update' => 2, 'sybase_affected_rows' => 2, 'sybase_close' => 2, 'sybase_connect' => 2, 'sybase_data_seek' => 2, 'sybase_fetch_array' => 2, 'sybase_fetch_field' => 2, 'sybase_fetch_object' => 2, 'sybase_fetch_row' => 2, 'sybase_field_seek' => 2, 'sybase_free_result' => 2, 'sybase_num_fields' => 2, 'sybase_num_rows' => 2, 'sybase_pconnect' => 2, 'sybase_query' => 2, 'sybase_result' => 2, 'sybase_select_db' => 2, 'symlink' => 2, 'syntax' => 2, 'sys_get_temp_dir' => 2,
			'syslog' => 2, 'system' => 2, 'tan' => 2, 'tanh' => 2, 'tempnam' => 2, 'textdomain' => 2, 'thread_get' => 2, 'thread_include' => 2, 'thread_lock' => 2, 'thread_lock_try' => 2, 'thread_mutex_destroy' => 2, 'thread_mutex_init' => 2, 'thread_set' => 2, 'thread_start' => 2, 'thread_unlock' => 2, 'tidy_access_count' => 2, 'tidy_clean_repair' => 2, 'tidy_config_count' => 2, 'tidy_diagnose' => 2, 'tidy_error_count' => 2, 'tidy_get_body' => 2, 'tidy_get_config' => 2, 'tidy_get_error_buffer' => 2, 'tidy_get_head' => 2, 'tidy_get_html' => 2, 'tidy_get_html_ver' => 2,
			'tidy_get_output' => 2, 'tidy_get_release' => 2, 'tidy_get_root' => 2, 'tidy_get_status' => 2, 'tidy_getopt' => 2, 'tidy_is_xhtml' => 2, 'tidy_is_xml' => 2, 'tidy_parse_file' => 2, 'tidy_parse_string' => 2, 'tidy_repair_file' => 2, 'tidy_repair_string' => 2, 'tidy_warning_count' => 2, 'time' => 2, 'time_nanosleep' => 2, 'time_sleep_until' => 2, 'timezone_abbreviations_list' => 2, 'timezone_identifiers_list' => 2, 'timezone_location_get' => 2, 'timezone_name_from_abbr' => 2, 'timezone_name_get' => 2, 'timezone_offset_get' => 2, 'timezone_open' => 2, 'timezone_transitions_get' => 2, 'timezone_version_get' => 2, 'tmpfile' => 2, 'token_get_all' => 2,
			'token_name' => 2, 'touch' => 2, 'trait_exists' => 2, 'transliterate' => 2, 'transliterate_filters_get' => 2, 'trigger_error' => 2, 'trim' => 2, 'uasort' => 2, 'ucfirst' => 2, 'ucwords' => 2, 'uksort' => 2, 'umask' => 2, 'uniqid' => 2, 'unixtojd' => 2, 'unlink' => 2, 'unpack' => 2, 'unregister_tick_function' => 2, 'unserialize' => 2, 'urldecode' => 2, 'urlencode' => 2, 'use_soap_error_handler' => 2, 'user_error' => 2, 'usleep' => 2, 'usort' => 2, 'utf8_decode' => 2, 'utf8_encode' => 2,
			'var_dump' => 2, 'var_export' => 2, 'variant_abs' => 2, 'variant_add' => 2, 'variant_and' => 2, 'variant_cast' => 2, 'variant_cat' => 2, 'variant_cmp' => 2, 'variant_date_from_timestamp' => 2, 'variant_date_to_timestamp' => 2, 'variant_div' => 2, 'variant_eqv' => 2, 'variant_fix' => 2, 'variant_get_type' => 2, 'variant_idiv' => 2, 'variant_imp' => 2, 'variant_int' => 2, 'variant_mod' => 2, 'variant_mul' => 2, 'variant_neg' => 2, 'variant_not' => 2, 'variant_or' => 2, 'variant_pow' => 2, 'variant_round' => 2, 'variant_set' => 2, 'variant_set_type' => 2,
			'variant_sub' => 2, 'variant_xor' => 2, 'version_compare' => 2, 'vfprintf' => 2, 'virtual' => 2, 'vm_addalias' => 2, 'vm_adduser' => 2, 'vm_delalias' => 2, 'vm_deluser' => 2, 'vm_passwd' => 2, 'vprintf' => 2, 'vsprintf' => 2, 'wddx_add_vars' => 2, 'wddx_deserialize' => 2, 'wddx_packet_end' => 2, 'wddx_packet_start' => 2, 'wddx_serialize_value' => 2, 'wddx_serialize_vars' => 2, 'win32_create_service' => 2, 'win32_delete_service' => 2, 'win32_get_last_control_message' => 2, 'win32_ps_list_procs' => 2, 'win32_ps_stat_mem' => 2, 'win32_ps_stat_proc' => 2, 'win32_query_service_status' => 2, 'win32_scheduler_delete_task' => 2,
			'win32_scheduler_enum_tasks' => 2, 'win32_scheduler_get_task_info' => 2, 'win32_scheduler_run' => 2, 'win32_scheduler_set_task_info' => 2, 'win32_set_service_status' => 2, 'win32_start_service' => 2, 'win32_start_service_ctrl_dispatcher' => 2, 'win32_stop_service' => 2, 'win_beep' => 2, 'win_browse_file' => 2, 'win_browse_folder' => 2, 'win_create_link' => 2, 'win_message_box' => 2, 'win_play_wav' => 2, 'win_shell_execute' => 2, 'wordwrap' => 2, 'xml_error_string' => 2, 'xml_get_current_byte_index' => 2, 'xml_get_current_column_number' => 2, 'xml_get_current_line_number' => 2, 'xml_get_error_code' => 2, 'xml_parse' => 2, 'xml_parse_into_struct' => 2, 'xml_parser_create' => 2, 'xml_parser_create_ns' => 2, 'xml_parser_free' => 2,
			'xml_parser_get_option' => 2, 'xml_parser_set_option' => 2, 'xml_set_character_data_handler' => 2, 'xml_set_default_handler' => 2, 'xml_set_element_handler' => 2, 'xml_set_end_namespace_decl_handler' => 2, 'xml_set_external_entity_ref_handler' => 2, 'xml_set_notation_decl_handler' => 2, 'xml_set_object' => 2, 'xml_set_processing_instruction_handler' => 2, 'xml_set_start_namespace_decl_handler' => 2, 'xml_set_unparsed_entity_decl_handler' => 2, 'xmldoc' => 2, 'xmldocfile' => 2, 'xmlrpc_decode' => 2, 'xmlrpc_decode_request' => 2, 'xmlrpc_encode' => 2, 'xmlrpc_encode_request' => 2, 'xmlrpc_get_type' => 2, 'xmlrpc_is_fault' => 2, 'xmlrpc_parse_method_descriptions' => 2, 'xmlrpc_server_add_introspection_data' => 2, 'xmlrpc_server_call_method' => 2, 'xmlrpc_server_create' => 2, 'xmlrpc_server_destroy' => 2, 'xmlrpc_server_register_introspection_callback' => 2,
			'xmlrpc_server_register_method' => 2, 'xmlrpc_set_type' => 2, 'xmltree' => 2, 'xmlwriter_end_attribute' => 2, 'xmlwriter_end_cdata' => 2, 'xmlwriter_end_comment' => 2, 'xmlwriter_end_document' => 2, 'xmlwriter_end_dtd' => 2, 'xmlwriter_end_dtd_attlist' => 2, 'xmlwriter_end_dtd_element' => 2, 'xmlwriter_end_dtd_entity' => 2, 'xmlwriter_end_element' => 2, 'xmlwriter_end_pi' => 2, 'xmlwriter_flush' => 2, 'xmlwriter_full_end_element' => 2, 'xmlwriter_open_memory' => 2, 'xmlwriter_open_uri' => 2, 'xmlwriter_output_memory' => 2, 'xmlwriter_set_indent' => 2, 'xmlwriter_set_indent_string' => 2, 'xmlwriter_start_attribute' => 2, 'xmlwriter_start_attribute_ns' => 2, 'xmlwriter_start_cdata' => 2, 'xmlwriter_start_comment' => 2, 'xmlwriter_start_document' => 2, 'xmlwriter_start_dtd' => 2,
			'xmlwriter_start_dtd_attlist' => 2, 'xmlwriter_start_dtd_element' => 2, 'xmlwriter_start_dtd_entity' => 2, 'xmlwriter_start_element' => 2, 'xmlwriter_start_element_ns' => 2, 'xmlwriter_start_pi' => 2, 'xmlwriter_text' => 2, 'xmlwriter_write_attribute' => 2, 'xmlwriter_write_attribute_ns' => 2, 'xmlwriter_write_cdata' => 2, 'xmlwriter_write_comment' => 2, 'xmlwriter_write_dtd' => 2, 'xmlwriter_write_dtd_attlist' => 2, 'xmlwriter_write_dtd_element' => 2, 'xmlwriter_write_dtd_entity' => 2, 'xmlwriter_write_element' => 2, 'xmlwriter_write_element_ns' => 2, 'xmlwriter_write_pi' => 2, 'xmlwriter_write_raw' => 2, 'xpath_eval' => 2, 'xpath_eval_expression' => 2, 'xpath_new_context' => 2, 'xpath_register_ns' => 2, 'xpath_register_ns_auto' => 2, 'xptr_eval' => 2, 'xptr_new_context' => 2,
			'yp_all' => 2, 'yp_cat' => 2, 'yp_err_string' => 2, 'yp_errno' => 2, 'yp_first' => 2, 'yp_get_default_domain' => 2, 'yp_master' => 2, 'yp_match' => 2, 'yp_next' => 2, 'yp_order' => 2, 'zend_current_obfuscation_level' => 2, 'zend_get_cfg_var' => 2, 'zend_get_id' => 2, 'zend_loader_current_file' => 2, 'zend_loader_enabled' => 2, 'zend_loader_file_encoded' => 2, 'zend_loader_file_licensed' => 2, 'zend_loader_install_license' => 2, 'zend_loader_version' => 2, 'zend_logo_guid' => 2, 'zend_match_hostmasks' => 2, 'zend_obfuscate_class_name' => 2, 'zend_obfuscate_function_name' => 2, 'zend_optimizer_version' => 2, 'zend_runtime_obfuscate' => 2, 'zend_version' => 2,
			'zip_close' => 2, 'zip_entry_close' => 2, 'zip_entry_compressedsize' => 2, 'zip_entry_compressionmethod' => 2, 'zip_entry_filesize' => 2, 'zip_entry_name' => 2, 'zip_entry_open' => 2, 'zip_entry_read' => 2, 'zip_open' => 2, 'zip_read' => 2, 'zlib_decode' => 2, 'zlib_encode' => 2, 'zlib_get_coding_type' => 2
			), 2 => false
		);

	}

	/**
	 * Finds a delimiter for state OUT.
	 *
	 * @param string $text
	 * @param string $textLength
	 * @param string $textPos
	 * @return array
	 */
	public function findDelimiter0($text, $textLength, $textPos)
	{
		static $delimiters = array(
			0 => '$', 1 => '\'', 2 => '"', 4 => '_', 7 => "\n", 8 => "\t", 9 => '//', 10 => '/*', 11 => '#', 12 => '?>', 13 => '<?'
		);

		$buffer = false;
		while ($textPos < $textLength) {
			$part = substr($text, $textPos, 10);
			$letter = $text[$textPos];

			if ($delimiters[0] === $letter) {
				return array(0, $delimiters[0], $buffer);
			}
			if ($delimiters[1] === $letter) {
				return array(1, $delimiters[1], $buffer);
			}
			if ($delimiters[2] === $letter) {
				return array(2, $delimiters[2], $buffer);
			}
			if (preg_match('~^[a-z]+~i', $part, $matches)) {
				return array(3, $matches[0], $buffer);
			}
			if ($delimiters[4] === $letter) {
				return array(4, $delimiters[4], $buffer);
			}
			if (preg_match('~^\\d+~', $part, $matches)) {
				return array(5, $matches[0], $buffer);
			}
			if (preg_match('~^\.\\d+~', $part, $matches)) {
				return array(6, $matches[0], $buffer);
			}
			if ($delimiters[7] === $letter) {
				return array(7, $delimiters[7], $buffer);
			}
			if ($delimiters[8] === $letter) {
				return array(8, $delimiters[8], $buffer);
			}
			if (0 === strpos($part, $delimiters[9])) {
				return array(9, $delimiters[9], $buffer);
			}
			if (0 === strpos($part, $delimiters[10])) {
				return array(10, $delimiters[10], $buffer);
			}
			if ($delimiters[11] === $letter) {
				return array(11, $delimiters[11], $buffer);
			}
			if (0 === strpos($part, $delimiters[12])) {
				return array(12, $delimiters[12], $buffer);
			}
			if (0 === strpos($part, $delimiters[13])) {
				return array(13, $delimiters[13], $buffer);
			}
			if (preg_match('~<<<\'\\w+\'\\n~A', $text, $matches, 0, $textPos)) {
				return array(14, $matches[0], $buffer);
			}
			if (preg_match('~<<<(?:\\w+|"\\w+")\\n~A', $text, $matches, 0, $textPos)) {
				return array(15, $matches[0], $buffer);
			}
			$buffer .= $letter;
			$textPos++;
		}
		return array(-1, -1, $buffer);
	}

	/**
	 * Finds a delimiter for state DUMMY_PHP.
	 *
	 * @param string $text
	 * @param string $textLength
	 * @param string $textPos
	 * @return array
	 */
	public function findDelimiter1($text, $textLength, $textPos)
	{
		static $delimiters = array(
			0 => '<?php', 1 => '<?=', 2 => '<?'
		);

		$buffer = false;
		while ($textPos < $textLength) {
			$part = substr($text, $textPos, 10);

			if (0 === strpos($part, $delimiters[0])) {
				return array(0, $delimiters[0], $buffer);
			}
			if (0 === strpos($part, $delimiters[1])) {
				return array(1, $delimiters[1], $buffer);
			}
			if (0 === strpos($part, $delimiters[2])) {
				return array(2, $delimiters[2], $buffer);
			}
			$buffer .= $text[$textPos];
			$textPos++;
		}
		return array(-1, -1, $buffer);
	}

	/**
	 * Finds a delimiter for state FUNCTION.
	 *
	 * @param string $text
	 * @param string $textLength
	 * @param string $textPos
	 * @return array
	 */
	public function findDelimiter2($text, $textLength, $textPos)
	{

		$buffer = false;
		while ($textPos < $textLength) {
			$part = substr($text, $textPos, 10);

			if (preg_match('~^\\W+~', $part, $matches)) {
				return array(0, $matches[0], $buffer);
			}
			$buffer .= $text[$textPos];
			$textPos++;
		}
		return array(-1, -1, $buffer);
	}

	/**
	 * Finds a delimiter for state COMMENT_BLOCK.
	 *
	 * @param string $text
	 * @param string $textLength
	 * @param string $textPos
	 * @return array
	 */
	public function findDelimiter3($text, $textLength, $textPos)
	{
		static $delimiters = array(
			0 => "\n", 1 => "\t", 2 => '*/'
		);

		$buffer = false;
		while ($textPos < $textLength) {
			$part = substr($text, $textPos, 10);
			$letter = $text[$textPos];

			if ($delimiters[0] === $letter) {
				return array(0, $delimiters[0], $buffer);
			}
			if ($delimiters[1] === $letter) {
				return array(1, $delimiters[1], $buffer);
			}
			if (0 === strpos($part, $delimiters[2])) {
				return array(2, $delimiters[2], $buffer);
			}
			$buffer .= $letter;
			$textPos++;
		}
		return array(-1, -1, $buffer);
	}

	/**
	 * Finds a delimiter for state COMMENT_LINE.
	 *
	 * @param string $text
	 * @param string $textLength
	 * @param string $textPos
	 * @return array
	 */
	public function findDelimiter4($text, $textLength, $textPos)
	{
		static $delimiters = array(
			0 => "\n", 1 => "\t", 2 => '?>'
		);

		$buffer = false;
		while ($textPos < $textLength) {
			$part = substr($text, $textPos, 10);
			$letter = $text[$textPos];

			if ($delimiters[0] === $letter) {
				return array(0, $delimiters[0], $buffer);
			}
			if ($delimiters[1] === $letter) {
				return array(1, $delimiters[1], $buffer);
			}
			if (0 === strpos($part, $delimiters[2])) {
				return array(2, $delimiters[2], $buffer);
			}
			$buffer .= $letter;
			$textPos++;
		}
		return array(-1, -1, $buffer);
	}

	/**
	 * Finds a delimiter for state VAR.
	 *
	 * @param string $text
	 * @param string $textLength
	 * @param string $textPos
	 * @return array
	 */
	public function findDelimiter5($text, $textLength, $textPos)
	{
		static $delimiters = array(
			1 => '$', 2 => '{', 3 => '}'
		);

		$buffer = false;
		while ($textPos < $textLength) {
			$part = substr($text, $textPos, 10);
			$letter = $text[$textPos];

			if (preg_match('~^\\W+~', $part, $matches)) {
				return array(0, $matches[0], $buffer);
			}
			if ($delimiters[1] === $letter) {
				return array(1, $delimiters[1], $buffer);
			}
			if ($delimiters[2] === $letter) {
				return array(2, $delimiters[2], $buffer);
			}
			if ($delimiters[3] === $letter) {
				return array(3, $delimiters[3], $buffer);
			}
			$buffer .= $letter;
			$textPos++;
		}
		return array(-1, -1, $buffer);
	}

	/**
	 * Finds a delimiter for state VAR_STR.
	 *
	 * @param string $text
	 * @param string $textLength
	 * @param string $textPos
	 * @return array
	 */
	public function findDelimiter6($text, $textLength, $textPos)
	{
		static $delimiters = array(
			0 => '}'
		);

		$buffer = false;
		while ($textPos < $textLength) {
			$part = substr($text, $textPos, 10);
			$letter = $text[$textPos];

			if ($delimiters[0] === $letter) {
				return array(0, $delimiters[0], $buffer);
			}
			if (preg_match('~^\s+~', $part, $matches)) {
				return array(1, $matches[0], $buffer);
			}
			$buffer .= $letter;
			$textPos++;
		}
		return array(-1, -1, $buffer);
	}

	/**
	 * Finds a delimiter for state QUOTE_DOUBLE.
	 *
	 * @param string $text
	 * @param string $textLength
	 * @param string $textPos
	 * @return array
	 */
	public function findDelimiter7($text, $textLength, $textPos)
	{
		static $delimiters = array(
			0 => '"', 1 => '\\\\', 2 => '\\"', 3 => '$', 4 => '{$', 5 => "\n", 6 => "\t"
		);

		$buffer = false;
		while ($textPos < $textLength) {
			$part = substr($text, $textPos, 10);
			$letter = $text[$textPos];

			if ($delimiters[0] === $letter) {
				return array(0, $delimiters[0], $buffer);
			}
			if (0 === strpos($part, $delimiters[1])) {
				return array(1, $delimiters[1], $buffer);
			}
			if (0 === strpos($part, $delimiters[2])) {
				return array(2, $delimiters[2], $buffer);
			}
			if ($delimiters[3] === $letter) {
				return array(3, $delimiters[3], $buffer);
			}
			if (0 === strpos($part, $delimiters[4])) {
				return array(4, $delimiters[4], $buffer);
			}
			if ($delimiters[5] === $letter) {
				return array(5, $delimiters[5], $buffer);
			}
			if ($delimiters[6] === $letter) {
				return array(6, $delimiters[6], $buffer);
			}
			$buffer .= $letter;
			$textPos++;
		}
		return array(-1, -1, $buffer);
	}

	/**
	 * Finds a delimiter for state HEREDOC.
	 *
	 * @param string $text
	 * @param string $textLength
	 * @param string $textPos
	 * @return array
	 */
	public function findDelimiter8($text, $textLength, $textPos)
	{
		static $delimiters = array(
			0 => "\n", 1 => "\t", 2 => '\\$', 3 => '$', 4 => '{$'
		);

		$buffer = false;
		while ($textPos < $textLength) {
			$part = substr($text, $textPos, 10);
			$letter = $text[$textPos];

			if ($delimiters[0] === $letter) {
				return array(0, $delimiters[0], $buffer);
			}
			if ($delimiters[1] === $letter) {
				return array(1, $delimiters[1], $buffer);
			}
			if (0 === strpos($part, $delimiters[2])) {
				return array(2, $delimiters[2], $buffer);
			}
			if ($delimiters[3] === $letter) {
				return array(3, $delimiters[3], $buffer);
			}
			if (0 === strpos($part, $delimiters[4])) {
				return array(4, $delimiters[4], $buffer);
			}
			$buffer .= $letter;
			$textPos++;
		}
		return array(-1, -1, $buffer);
	}

	/**
	 * Finds a delimiter for state HEREDOC_END.
	 *
	 * @param string $text
	 * @param string $textLength
	 * @param string $textPos
	 * @return array
	 */
	public function findDelimiter9($text, $textLength, $textPos)
	{

		$buffer = false;
		while ($textPos < $textLength) {

			$letter = $text[$textPos];

			if (preg_match('~\\w+;\\n~A', $text, $matches, 0, $textPos)) {
				return array(0, $matches[0], $buffer);
			}
			return array(1, $letter, $buffer);
			$buffer .= $letter;
			$textPos++;
		}
		return array(-1, -1, $buffer);
	}

	/**
	 * Finds a delimiter for state QUOTE_SINGLE.
	 *
	 * @param string $text
	 * @param string $textLength
	 * @param string $textPos
	 * @return array
	 */
	public function findDelimiter10($text, $textLength, $textPos)
	{
		static $delimiters = array(
			0 => '\'', 1 => '\\\\', 2 => '\\\'', 3 => "\n", 4 => "\t"
		);

		$buffer = false;
		while ($textPos < $textLength) {
			$part = substr($text, $textPos, 10);
			$letter = $text[$textPos];

			if ($delimiters[0] === $letter) {
				return array(0, $delimiters[0], $buffer);
			}
			if (0 === strpos($part, $delimiters[1])) {
				return array(1, $delimiters[1], $buffer);
			}
			if (0 === strpos($part, $delimiters[2])) {
				return array(2, $delimiters[2], $buffer);
			}
			if ($delimiters[3] === $letter) {
				return array(3, $delimiters[3], $buffer);
			}
			if ($delimiters[4] === $letter) {
				return array(4, $delimiters[4], $buffer);
			}
			$buffer .= $letter;
			$textPos++;
		}
		return array(-1, -1, $buffer);
	}

	/**
	 * Finds a delimiter for state NOWDOC.
	 *
	 * @param string $text
	 * @param string $textLength
	 * @param string $textPos
	 * @return array
	 */
	public function findDelimiter11($text, $textLength, $textPos)
	{
		static $delimiters = array(
			0 => "\n", 1 => "\t"
		);

		$buffer = false;
		while ($textPos < $textLength) {

			$letter = $text[$textPos];

			if ($delimiters[0] === $letter) {
				return array(0, $delimiters[0], $buffer);
			}
			if ($delimiters[1] === $letter) {
				return array(1, $delimiters[1], $buffer);
			}
			$buffer .= $letter;
			$textPos++;
		}
		return array(-1, -1, $buffer);
	}

	/**
	 * Finds a delimiter for state NOWDOC_END.
	 *
	 * @param string $text
	 * @param string $textLength
	 * @param string $textPos
	 * @return array
	 */
	public function findDelimiter12($text, $textLength, $textPos)
	{

		$buffer = false;
		while ($textPos < $textLength) {

			$letter = $text[$textPos];

			if (preg_match('~\\w+;\\n~A', $text, $matches, 0, $textPos)) {
				return array(0, $matches[0], $buffer);
			}
			return array(1, $letter, $buffer);
			$buffer .= $letter;
			$textPos++;
		}
		return array(-1, -1, $buffer);
	}

	/**
	 * Finds a delimiter for state NUMBER.
	 *
	 * @param string $text
	 * @param string $textLength
	 * @param string $textPos
	 * @return array
	 */
	public function findDelimiter13($text, $textLength, $textPos)
	{
		static $delimiters = array(
			0 => 'e', 1 => 'E', 2 => 'x', 3 => 'b'
		);

		$buffer = false;
		while ($textPos < $textLength) {
			$part = substr($text, $textPos, 10);
			$letter = $text[$textPos];

			if ($delimiters[0] === $letter) {
				return array(0, $delimiters[0], $buffer);
			}
			if ($delimiters[1] === $letter) {
				return array(1, $delimiters[1], $buffer);
			}
			if ($delimiters[2] === $letter) {
				return array(2, $delimiters[2], $buffer);
			}
			if ($delimiters[3] === $letter) {
				return array(3, $delimiters[3], $buffer);
			}
			if (preg_match('~^\.\\d+~', $part, $matches)) {
				return array(4, $matches[0], $buffer);
			}
			return array(5, $letter, $buffer);
			$buffer .= $letter;
			$textPos++;
		}
		return array(-1, -1, $buffer);
	}

	/**
	 * Finds a delimiter for state EXPONENT.
	 *
	 * @param string $text
	 * @param string $textLength
	 * @param string $textPos
	 * @return array
	 */
	public function findDelimiter14($text, $textLength, $textPos)
	{
		static $delimiters = array(
			0 => '+', 1 => '-'
		);

		$buffer = false;
		while ($textPos < $textLength) {
			$part = substr($text, $textPos, 10);
			$letter = $text[$textPos];

			if ($delimiters[0] === $letter) {
				return array(0, $delimiters[0], $buffer);
			}
			if ($delimiters[1] === $letter) {
				return array(1, $delimiters[1], $buffer);
			}
			if (preg_match('~^\\D+~', $part, $matches)) {
				return array(2, $matches[0], $buffer);
			}
			$buffer .= $letter;
			$textPos++;
		}
		return array(-1, -1, $buffer);
	}

	/**
	 * Finds a delimiter for state HEXA.
	 *
	 * @param string $text
	 * @param string $textLength
	 * @param string $textPos
	 * @return array
	 */
	public function findDelimiter15($text, $textLength, $textPos)
	{

		$buffer = false;
		while ($textPos < $textLength) {
			$part = substr($text, $textPos, 10);

			if (preg_match('~^[^a-f\\d]+~i', $part, $matches)) {
				return array(0, $matches[0], $buffer);
			}
			$buffer .= $text[$textPos];
			$textPos++;
		}
		return array(-1, -1, $buffer);
	}

}
