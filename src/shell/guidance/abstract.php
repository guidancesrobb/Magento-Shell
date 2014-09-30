<?php
/**
* NOTICE OF LICENSE
*
* Copyright 2014 Guidance Solutions
*
* Licensed under the Apache License, Version 2.0 (the "License");
* you may not use this file except in compliance with the License.
* You may obtain a copy of the License at
*
* http://www.apache.org/licenses/LICENSE-2.0
*
* Unless required by applicable law or agreed to in writing, software
* distributed under the License is distributed on an "AS IS" BASIS,
* WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
* See the License for the specific language governing permissions and
* limitations under the License.

* @author Steve Robbins
* @category Guidance
* @package Shell
* @copyright Copyright (c) 2014 Guidance Solutions (http://www.guidance.com)
* @license http://www.apache.org/licenses/LICENSE-2.0 Apache License 2.0
*/

require_once dirname(__FILE__) . '/../abstract.php';

abstract class Guidance_Shell_Abstract extends Mage_Shell_Abstract
{
    /**
     * Enable for debug output
     * @var boolean
     */
    protected $_debug = false;

    /**
     * File to log output to, leave blank for no logging
     */
    protected $_logFile = 'guidanceShell.log';

    /**
     * Holds the time execution started
     * @var float
     */
    private $_timeStart;

    public function __construct()
    {
        parent::__construct();
        $this->_timeStart = microtime(true);
    }

    /**
     * Outputs a message if debuging is enabled
     * 
     * @param  string  $message
     * @param  integer $indent
     * @return void
     */
    public function debug($message, $indent = 0)
    {
        if ($this->_debug) {
            $this->out($message, $indent);
        }
    }

    /**
     * Shows progress when iterating
     * 
     * @param  string  $string
     * @param  integer $i
     * @param  integer $count
     * @param  integer $indent
     * @return void
     */
    public function progress($string, $i, $count, $indent = 0)
    {
        $this->debug(
            $string . ' (' . $i . '/' . $count . ' ' . round($i / $count * 100, 2) . '%)', $indent
        );
    }

    /**
     * Outputs message to terminal
     * 
     * @param  string  $message
     * @param  integer $indent
     * @return void
     */
    public function out($message, $indent = 0)
    {
        $time = '';
        $time = microtime(true) - $this->_timeStart;
        if ($time > 60 * 60) {
            $time /= 60 * 60;
            $stamp = 'h';
        }
        else if ($time  > 60) {
            $time /= 60;
            $stamp = 'm';
        }
        else {
            $stamp = 's';
        }
        $time = str_pad((float)round($time, 3) . ' ' . $stamp, 12);
        $message = str_repeat(' ', $indent * 4) . $message;
        echo $time . $message . PHP_EOL;
        if ($this->_logFile) {
            Mage::log($message, null, $this->_logFile, true);
        }
    }
}
