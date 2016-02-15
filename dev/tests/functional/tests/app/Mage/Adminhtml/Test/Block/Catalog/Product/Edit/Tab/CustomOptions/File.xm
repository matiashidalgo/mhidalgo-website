<?xml version="1.0"?>
<!--
/**
 * Magento
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://opensource.org/licenses/osl-3.0.php
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@magento.com so we can send you a copy immediately.
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade Magento to newer
 * versions in the future. If you wish to customize Magento for your
 * needs please refer to http://www.magento.com for more information.
 *
 * @category    Tests
 * @package     Tests_Functional
 * @copyright  Copyright (c) 2006-2016 X.commerce, Inc. and affiliates (http://www.magento.com)
 * @license    http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */
-->
<mapping strict="0">
    <fields>
        <price>
            <selector>[name$='[price]']</selector>
        </price>
        <price_type>
            <selector>[name$='[price_type]']</selector>
            <input>select</input>
        </price_type>
        <sku>
            <selector>[name$='[sku]']</selector>
        </sku>
        <file_extension>
            <selector>[name$='[file_extension]']</selector>
        </file_extension>
        <image_size_x>
            <selector>[name$='[image_size_x]']</selector>
        </image_size_x>
        <image_size_y>
            <selector>[name$='[image_size_y]']</selector>
        </image_size_y>
    </fields>
</mapping>
