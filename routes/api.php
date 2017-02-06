<?php

use Dingo\Api\Routing\Router;

/** @var Router $api */
$api = app(Router::class);

$api->version('v1', function (Router $api) {

    $api->get('allusers', 'App\Http\Controllers\ManageController@getAllUsers');
    $api->get('user/{user_id}/role/{role_name}', 'App\Http\Controllers\ManageController@attachUserRole');
    $api->get('user/{user_id}/roles', 'App\Http\Controllers\ManageController@getUserRoles');

    $api->post('user/role/permissions/add', 'App\Http\Controllers\ManageController@attachPermissionsToRole');
    $api->get('user/role/{role_name}/permissions', 'App\Http\Controllers\ManageController@getPermissionsAssociatedWithRole');
    $api->post('user/authenticate', 'App\Http\Controllers\Auth\LoginController@authenticateRequest');
});
