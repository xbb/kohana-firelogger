<?php defined('SYSPATH') or die('No direct script access.');

require_once Kohana::find_file('vendor', 'firelogger/firelogger');

FireLogger::$enabled = Kohana::$config->load('firelogger.enabled');