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

class PickupContact extends Base
{
    /**
     * Is this object a subobject
     *
     * @var boolean
     */
    protected $_isSubObject = true;

    protected $_params = array(
        'PersonName' => array(
            'type' => 'string',
            'required' => false,
            'subobject' => false,
            'comment' => ''
        ),
        'Phone' => array(
            'type' => 'string',
            'required' => false,
            'subobject' => false,
            'comment' => ''
        )
    );
}