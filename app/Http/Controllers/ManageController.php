<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Role;
use App\Permission;

class ManageController extends Controller {

    /**
     * This function is used to get all existing users list. You may access
     * this function using mtandon API path i.e. 
     * [ homestead.app/mtandon/allusers ]
     * 
     */
    public function getAllUsers() {

        return User::All();
    }

    /**
     * This function is used to attached roles to specific user.
     * 
     */
    public function attachUserRole($userId, $roleName) {
        die;
        $userObj = User::find($userId);
        $roleObj = Role::where('name', $roleName)->first();

        $userObj->roles()->attach($roleObj);

        return $userObj;
    }

    public function attachPermissionsToRole(Request $request) {

        $roleParam = $permissionParam = null;

        $requestParams = $request->only(['role', 'permission']);

        $roleParam = $requestParams['role'];
        $permissionParam = $requestParams['permission'];
        
        $roleObj = Role::where('name', $roleParam)->first();
        $permissionObj = Permission::where('name', $permissionParam)->first();
        
        $roleObj->attachPermission($permissionObj);
        
        /**
         * Alternative syntax
         * [ return $roleObj; ]
         */
        return $this->response()->created();
        
    }
    
    /**
     * This function is used to retrieve permissions associated with
     * particular role.
     * 
     */
    public function getPermissionsAssociatedWithRole($roleParam){
        
        $roleObj = Role::where('name', $roleParam)->first();
        /**
         * Alternative syntax with Dingo Router Helpers
         * 
         * return $roleObj->perms;
         */
        return $this->response->array($roleObj->perms);

    }

    /**
     * This function is used to retrieve roles associated with
     * user.
     * 
     */
    public function getUserRoles($userId) {

        return User::find($userId)->roles;
    }

}
