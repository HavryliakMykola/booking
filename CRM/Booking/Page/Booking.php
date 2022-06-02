<?php

use CRM_Booking_ExtensionUtil as E;

class CRM_Booking_Page_Booking extends CRM_Core_Page
{

  public function run()
  {
    Civi::resources()->addStyleFile('booking', 'css/main.min.css');
    Civi::resources()->addScriptFile('booking', 'js/main.min.js');
    return parent::run();
  }
}
