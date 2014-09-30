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

require_once 'abstract.php';

class Guidance_Shell_SampleScript extends Guidance_Shell_Abstract
{
    /**
     * Enable for debug output
     * @var boolean
     */
    protected $_debug = true;

    /**
     * Do the thing
     * 
     * @return void
     */
    public function run()
    {
        $this->debug('Script execution has started');
        $products = $this->getFakeProductCollection();
        $count = count($products);
        $this->debug('Found ' . $count . ' product(s) to process');
        $i = 0;
        foreach ($products as $product) {
            $this->progress('Processing product id: ' . $product->getId(), ++$i, $count, 1);
        }
        $this->debug('Script execution is complete');
    }

    /**
     * Pretend we're getting some products
     * 
     * @return array
     */
    public function getFakeProductCollection()
    {
        $products = array();
        for ($i = 1; $i < 21; $i++) {
            $products[] = new Varien_Object(array(
                'id'  => $i
            ));
        }
        return $products;
    }
}

$shell = new Guidance_Shell_SampleScript();
$shell->run();
