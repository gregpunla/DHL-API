<?php
/**
 * Note : Code is released under the GNU LGPL
 *
 * Please do not change the header of this file
 *
 * This library is free software; you can redistribute it and/or modify it under the terms of the GNU
 * Lesser General Public License as published by the Free Software Foundation; either version 2 of
 * the License, or (at your option) any later version.
 *
 * This library is distributed in the hope that it will be useful, but WITHOUT ANY WARRANTY;
 * without even the implied warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
 *
 * See the GNU Lesser General Public License for more details.
 */

/**
 * File:        RequestorContact.php
 * Project:     DHL API
 *
 * @author      Mark Cornelio
 * @version     0.1
 */

namespace DHL\Datatype\GB;

use DHL\Datatype\Base;

class Pickup extends Base
{
    /**
     * Is this object a subobject
     * @var boolean
     */
    protected $_isSubobject = true;

    protected $_params = array(
        'PickupDate' => array(
            'type' => 'date',
            'required' => true,
            'subobject' => false,
            'comment' => 'Pickup Date',
        ),
        'PickupTypeCode' => array(
            'type' => 'string',
            'required' => true,
            'subobject' => false,
            'comment' => '',
            'enumaration' => 'A,S'
        ),
        'ReadyByTime' => array(
            'type' => 'string',
            'required' => true,
            'subobject' => false,
            'comment' => '',
            'pattern' => '([0-1][0-9]|2[0-3]):([0-5][0-9])'
        ),
        'CloseTime' => array(
            'type' => 'string',
            'required' => true,
            'subobject' => false,
            'coment' => '',
            'pattern' => '([0-1][0-9]|2[0-3]):([0-5][0-9])'
        ),
        'AfterHoursClosingTime' => array(
            'type' => 'string',
            'required' => false,
            'subobject' => false,
            'comment' => ''
        ),
        'AfterHoursLocation' => array(
            'type' => 'string',
            'required' => false,
            'subobject' => false,
            'comment' => ''
        ),
        'Pieces' => array(
            'type' => 'positiveInteger',
            'required' => false,
            'subobject' => false,
            'comment' => ''
        ),
        'weight' => array(
            'type' => 'Weight',
            'required' => false,
            'subobject' => false,
            'comment' => ''
        ),
        'RemotePickupFlag' => array(
            'type' => 'string',
            'required' => false,
            'subobject' => false,
            'comment' => ''
        ),
        'SpecialInstructions' => array(
            'type' => 'string',
            'required' => false,
            'subobject' => false,
            'comment' => ''
        ),
        'Remarks' => array(
            'type' => 'string',
            'required' => false,
            'subobject' => false,
            ''
        )
    );
}