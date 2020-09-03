<?php
  /**
   *
   * @copyright 2008 - https://www.clicshopping.org
   * @Brand : ClicShopping(Tm) at Inpi all right Reserved
   * @Licence GPL 2 & MIT
   * @licence MIT - Portion of osCommerce 2.4
   * @Info : https://www.clicshopping.org/forum/trademark/
   *
   */

  use ClicShopping\OM\HTML;
  use ClicShopping\OM\Registry;

  /*
   * Display the countries
   *
   * @return a dropdown with a list of the countries
   */
//clic_cfg_pull_down_country_list(
  function clic_cfg_set_countries_pull_down_menu($default, $key = null)
  {
    $CLICSHOPPING_Address = Registry::get('Address');

    $name = (!empty($key) ? 'configuration[' . $key . ']' : 'configuration_value');

    $countries_array = [];

    foreach ($CLICSHOPPING_Address->getCountries() as $country) {

      $countries_array[] = ['id' => $country['countries_id'],
        'text' => $country['countries_name']
      ];
    }

    return HTML::selectMenu($name, $countries_array, $default);
  }