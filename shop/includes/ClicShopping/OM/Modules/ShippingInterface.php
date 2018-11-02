<?php
/**
 *
 *  @copyright 2008 - https://www.clicshopping.org
 *  @Brand : ClicShopping(Tm) at Inpi all right Reserved
 *  @Licence GPL 2 & MIT
 *  @licence MIT - Portion of osCommerce 2.4
 *
 *
 */


namespace ClicShopping\OM\Modules;

interface ShippingInterface
{
    public function quote();
    public function check();
    public function install();
    public function remove();
    public function keys();
}