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
<config xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xsi:noNamespaceSchemaLocation="../../../../../../vendor/magento/mtf/etc/variations.xsd">
    <testCase name="Mage\Authorizenet\Test\TestCase\CreateOnlineInvoiceForAuthorizenetDirectpostMethodTest">
        <variation name="CreateOnlineInvoiceForAuthorizenetDirectpostMethodTestVariation1" method="test">
            <data name="description" xsi:type="string">Create full invoice for authorizenet directpost</data>
            <data name="configData" xsi:type="string">authorizenet_directpost</data>
            <data name="products" xsi:type="string">catalogProductSimple::default</data>
            <data name="customer/dataSet" xsi:type="string">default</data>
            <data name="checkoutMethod" xsi:type="string">login</data>
            <data name="customerPersist" xsi:type="string">yes</data>
            <data name="billingAddress/dataSet" xsi:type="string">customer_US</data>
            <data name="shipping/shipping_service" xsi:type="string">Flat Rate</data>
            <data name="shipping/shipping_method" xsi:type="string">Fixed</data>
            <data name="payment/method" xsi:type="string">authorizenet_directpost</data>
            <data name="payment/cc" xsi:type="string">for_iframe</data>
            <data name="payment/iframe" xsi:type="string">yes</data>
            <data name="data/invoice/0/form_data/comment_text" xsi:type="string">comments for invoice</data>
            <data name="verifyData/grandTotal/invoices/0/from" xsi:type="string">315.00</data>
            <data name="verifyData/grandTotal/invoices/0/to" xsi:type="string">315.00</data>
            <data name="verifyData/item_price" xsi:type="string">100.00</data>
            <data name="verifyData/item_subtotal" xsi:type="string">300.00</data>
            <data name="verifyData/item_row_total" xsi:type="string">300.00</data>
            <data name="status" xsi:type="string">Processing</data>
            <data name="tag" xsi:type="string">payment_method:authorize_net_dp</data>
            <constraint name="Mage\Sales\Test\Constraint\AssertInvoiceSuccessCreateMessage" />
            <constraint name="Mage\Sales\Test\Constraint\AssertInvoiceInInvoicesGrid" />
            <constraint name="Mage\Sales\Test\Constraint\AssertInvoiceInInvoicesTab" />
            <constraint name="Mage\Sales\Test\Constraint\AssertNoInvoiceButton" />
            <constraint name="Mage\Sales\Test\Constraint\AssertInvoiceItems" />
            <constraint name="Mage\Sales\Test\Constraint\AssertInvoiceItemsOnFrontend" />
            <constraint name="Mage\Sales\Test\Constraint\AssertOrderStatusIsCorrect" />
        </variation>
    </testCase>
</config>
