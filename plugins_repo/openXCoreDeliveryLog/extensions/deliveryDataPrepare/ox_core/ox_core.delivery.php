<?php
/*
+---------------------------------------------------------------------------+
| OpenX v${RELEASE_MAJOR_MINOR}                                                                |
| =======${RELEASE_MAJOR_MINOR_DOUBLE_UNDERLINE}                                                                |
|                                                                           |
| Copyright (c) 2003-2008 OpenX Limited                                     |
| For contact details, see: http://www.openx.org/                           |
|                                                                           |
| This program is free software; you can redistribute it and/or modify      |
| it under the terms of the GNU General Public License as published by      |
| the Free Software Foundation; either version 2 of the License, or         |
| (at your option) any later version.                                       |
|                                                                           |
| This program is distributed in the hope that it will be useful,           |
| but WITHOUT ANY WARRANTY; without even the implied warranty of            |
| MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the             |
| GNU General Public License for more details.                              |
|                                                                           |
| You should have received a copy of the GNU General Public License         |
| along with this program; if not, write to the Free Software               |
| Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA  02111-1307  USA |
+---------------------------------------------------------------------------+
$Id$
*/

// Dependencies
###START_STRIP_DELIVERY
$GLOBALS['_MAX']['pluginsDependencies']['deliveryDataPrepare:ox_core:ox_core'] = array();
###END_STRIP_DELIVERY

function OA_Plugins_deliveryDataPrepare_ox_core(&$data)
{
    // calculate start date of current Operation Interval
    $time = $GLOBALS['_MAX']['NOW'];
    if (empty($time)) {
        $time = time();
    }
    $oi = $GLOBALS['_MAX']['CONF']['maintenance']['operationInterval'];
    $data['interval_start'] = gmdate('Y-m-d H:i:s', $time - $time % ($oi * 60));
}

?>