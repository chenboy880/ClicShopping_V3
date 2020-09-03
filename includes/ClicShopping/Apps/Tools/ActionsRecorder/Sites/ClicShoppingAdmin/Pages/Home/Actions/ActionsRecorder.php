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

  namespace ClicShopping\Apps\Tools\ActionsRecorder\Sites\ClicShoppingAdmin\Pages\Home\Actions;

  use ClicShopping\OM\Registry;

  class ActionsRecorder extends \ClicShopping\OM\PagesActionsAbstract
  {
    public function execute()
    {
      $CLICSHOPPING_ActionsRecorder = Registry::get('ActionsRecorder');

      $this->page->setFile('actions_recorder.php');
      $this->page->data['action'] = 'ActionsRecorder';

      $CLICSHOPPING_ActionsRecorder->loadDefinitions('Sites/ClicShoppingAdmin/ActionsRecorder');
    }
  }