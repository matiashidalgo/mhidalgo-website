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
  <testCase name="Mage\CatalogRule\Test\TestCase\ApplySeveralCatalogPriceRuleEntityTest">
    <variation name="ApplySeveralCatalogPriceRuleEntityTestVariation1" firstConstraint="Mage\CatalogRule\Test\Constraint\AssertCatalogPriceRuleAppliedInCatalogPage" method="test">
      <data name="catalogRulesOriginal/priority_0" xsi:type="string">catalog_price_rule_priority_0</data>
      <data name="catalogRulesOriginal/priority_1" xsi:type="string">-</data>
      <data name="catalogRulesOriginal/priority_2" xsi:type="string">catalog_price_rule_priority_2</data>
      <data name="prices/sub_total" xsi:type="string">100</data>
      <data name="prices/grand_total" xsi:type="string">40</data>
      <data name="prices/discount_amount" xsi:type="string">60</data>
      <data name="prices/special" xsi:type="string">40</data>
      <data name="prices/regular" xsi:type="string">100</data>
      <data name="tag" xsi:type="string">main:ce</data>
      <constraint name="Mage\CatalogRule\Test\Constraint\AssertCatalogPriceRuleAppliedInCatalogPage" next="Mage\CatalogRule\Test\Constraint\AssertCatalogPriceRuleAppliedInProductPage"/>
      <constraint name="Mage\CatalogRule\Test\Constraint\AssertCatalogPriceRuleAppliedInProductPage" next="Mage\CatalogRule\Test\Constraint\AssertCatalogPriceRuleAppliedInShoppingCart" prev="Mage\CatalogRule\Test\Constraint\AssertCatalogPriceRuleAppliedInCatalogPage"/>
      <constraint name="Mage\CatalogRule\Test\Constraint\AssertCatalogPriceRuleAppliedInShoppingCart" prev="Mage\CatalogRule\Test\Constraint\AssertCatalogPriceRuleAppliedInProductPage"/>
    </variation>
    <variation name="ApplySeveralCatalogPriceRuleEntityTestVariation2" firstConstraint="Mage\CatalogRule\Test\Constraint\AssertCatalogPriceRuleAppliedInCatalogPage" method="test">
      <data name="catalogRulesOriginal/priority_0" xsi:type="string">catalog_price_rule_priority_0</data>
      <data name="catalogRulesOriginal/priority_1" xsi:type="string">catalog_price_rule_priority_1_stop_further_rules</data>
      <data name="catalogRulesOriginal/priority_2" xsi:type="string">catalog_price_rule_priority_2</data>
      <data name="prices/sub_total" xsi:type="string">100</data>
      <data name="prices/grand_total" xsi:type="string">45</data>
      <data name="prices/discount_amount" xsi:type="string">55</data>
      <data name="prices/special" xsi:type="string">45</data>
      <data name="prices/regular" xsi:type="string">100</data>
      <constraint name="Mage\CatalogRule\Test\Constraint\AssertCatalogPriceRuleAppliedInCatalogPage" next="Mage\CatalogRule\Test\Constraint\AssertCatalogPriceRuleAppliedInProductPage"/>
      <constraint name="Mage\CatalogRule\Test\Constraint\AssertCatalogPriceRuleAppliedInProductPage" next="Mage\CatalogRule\Test\Constraint\AssertCatalogPriceRuleAppliedInShoppingCart" prev="Mage\CatalogRule\Test\Constraint\AssertCatalogPriceRuleAppliedInCatalogPage"/>
      <constraint name="Mage\CatalogRule\Test\Constraint\AssertCatalogPriceRuleAppliedInShoppingCart" prev="Mage\CatalogRule\Test\Constraint\AssertCatalogPriceRuleAppliedInProductPage"/>
    </variation>
  </testCase>
</config>
