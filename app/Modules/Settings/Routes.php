<?php
/**
 * Routes - all Module's specific Routes are defined here.
 *
 * @author Virgil-Adrian Teaca - virgil@giulianaeassociati.com
 * @version 3.0
 */


/** Define static routes. */

// The Adminstration Routes.
Route::group(array('prefix' => 'admin', 'namespace' => 'App\Modules\Settings\Controllers\Admin'), function() {
    Route::get( 'settings', array('filters' => 'auth',      'uses' => 'Settings@index'));
    Route::post('settings', array('filters' => 'auth|csrf', 'uses' => 'Settings@store'));
});

