<?php
/**
 * TeamLister
 *
 * Copyright 2011 by Romain Tripault // Melting Media <romain@melting-media.com>
 *
 * TeamLister is free software; you can redistribute it and/or modify it under the
 * terms of the GNU General Public License as published by the Free Software
 * Foundation; either version 2 of the License, or (at your option) any later
 * version.
 *
 * TeamLister is distributed in the hope that it will be useful, but WITHOUT ANY
 * WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS FOR
 * A PARTICULAR PURPOSE. See the GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License along with
 * TeamLister; if not, write to the Free Software Foundation, Inc., 59 Temple
 * Place, Suite 330, Boston, MA 02111-1307 USA
 *
 * @package teamlister
 */
/**
 * Properties for the TeamLister snippet.
 *
 * @package teamlister
 * @subpackage build
 */
$properties = array(
    array(
        'name' => 'tpl',
        'desc' => 'prop_teamlister.tpl_desc',
        'type' => 'textfield',
        'options' => '',
        'value' => 'Item',
        'lexicon' => 'teamlister:properties',
    ),
    array(
        'name' => 'sortBy',
        'desc' => 'prop_teamlister.sortby_desc',
        'type' => 'textfield',
        'options' => '',
        'value' => 'name',
        'lexicon' => 'teamlister:properties',
    ),
    array(
        'name' => 'sortDir',
        'desc' => 'prop_teamlister.sortdir_desc',
        'type' => 'textfield',
        'options' => '',
        'value' => 'ASC',
        'lexicon' => 'teamlister:properties',
    ),
    array(
        'name' => 'limit',
        'desc' => 'prop_teamlister.limit_desc',
        'type' => 'textfield',
        'options' => '',
        'value' => 5,
        'lexicon' => 'teamlister:properties',
    ),
    array(
        'name' => 'outputSeparator',
        'desc' => 'prop_teamlister.outputseparator_desc',
        'type' => 'textfield',
        'options' => '',
        'value' => '',
        'lexicon' => 'teamlister:properties',
    ),
    array(
        'name' => 'toPlaceholder',
        'desc' => 'prop_teamlister.toplaceholder_desc',
        'type' => 'textfield',
        'options' => '',
        'value' => true,
        'lexicon' => 'teamlister:properties',
    ),
/*
    array(
        'name' => '',
        'desc' => 'prop_teamlister.',
        'type' => 'textfield',
        'options' => '',
        'value' => '',
        'lexicon' => 'teamlister:properties',
    ),
    */
);

return $properties;