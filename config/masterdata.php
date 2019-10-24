<?php

/*
 * This file is part of the MasterData package.
 *
 * (c) Manojkiran Appathurai <manojkiran10031998@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

return [

    /*
     * This is the name of the table that will be created by the migration and
     * used by the MasterData Model of  this package.
     */
    'table_name' => 'master_data',

    /*
     * While we are Storing the Data we can also Set to Custom Order
     * of Sub Constant To Enable the auto Sequence Set to True
     */
    'enable_auto_sequence' => true,

    /*
     * While we are Storing the Data we can also Set to Custom Order
     * of Sub Constant To Enable the auto Sequence only if the Order is
     * is Not found in the Creation Array
     *
     * Note: You Must set 'enable_auto_sequence' to true for using this future
     */
    'enable_auto_sequence_only_if_not_set' => true,

];
