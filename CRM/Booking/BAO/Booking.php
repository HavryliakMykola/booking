<?php
use CRM_Booking_ExtensionUtil as E;

class CRM_Booking_BAO_Booking extends CRM_Booking_DAO_Booking {

  /**
   * Create a new Booking based on array-data
   *
   * @param array $params key-value pairs
   * @return CRM_Booking_DAO_Booking|NULL
   *
  public static function create($params) {
    $className = 'CRM_Booking_DAO_Booking';
    $entityName = 'Booking';
    $hook = empty($params['id']) ? 'create' : 'edit';

    CRM_Utils_Hook::pre($hook, $entityName, CRM_Utils_Array::value('id', $params), $params);
    $instance = new $className();
    $instance->copyValues($params);
    $instance->save();
    CRM_Utils_Hook::post($hook, $entityName, $instance->id, $instance);

    return $instance;
  } */

}
