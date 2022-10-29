<?php

namespace Modules\User\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use Session;
use Modules\User\Http\Requests\RoleRequest;
use Modules\User\Http\Requests\PermissionRequest;


class RolePermissionController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function roleIndex(){ 
        $roles = Role::whereNotIn('name', ['Super Admin'])->where('guard_name', 'admin')->orderBy('id', 'desc')->get();
        return view('user::create_role', compact('roles'));
    }
 
    public function createPermissions(){
         $permissions = Permission::where('guard_name', 'admin')->orderBy('id', 'desc')->get();
        return view('user::create_permission', compact('permissions'));
    }

    public function viewRoles(){
        $roles = Role::all();
        $permissions = Permission::where('guard_name', 'admin')->get();
        return view('user::view_roles', compact('roles', 'permissions'));
    }

    public function permissions($role_id){
        $role = Role::find($role_id);
        $permissions = Permission::where('guard_name', 'admin')->get();
        $rolePermissions = $role->permissions->pluck('name')->toArray();
        return view('user::role_permissions', compact('role', 'permissions', 'rolePermissions'));
    }

    public function index()
    {
        return view('user::index');
    }

    public function updateStatusRole(Request $request)
    {
        $role = Role::find($request->roleid);
        $role->status = $request->status;
        $role->save();
        return redirect('/admin/role')->with('message','Updated Successfully!');; 
    }

    public function updateStatusPermission(Request $request)
    {
        $permission = Permission::find($request->permissionid);
        $permission->status = $request->status;
        $permission->save();
        return redirect('/admin/permission')->with('message','Updated Successfully!'); 
    }


     public function updateRolePermission(Request $request, $role_id)
    {
       
        $role = Role::find($request->role_id);
        $role->syncPermissions($request->get('permission'));
        return back()->with('message','Assigned Successfully!');



       /* if($request->status == 'activate')
        {
            $role = Role::find($request->role_id);
            $role->givePermissionTo($request->permission_name);
            return back()->with('message','Assigned Successfully!');
        }

        if($request->status == 'deactivate')
        {
            $role = Role::find($request->role_id);
            $role->revokePermissionTo($request->permission_name);
            return back()->with('message','Removed Successfully!');
        }
        */
        
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Renderable
     */
    public function storeRole(RoleRequest $request)
    { 
        $role = role::create($request->all());        
        Session::flash('success', "Role Added Successfully");
        return redirect('/admin/role')->with('success', 'Role Added Successfully');  
    }

     public function storePermission(PermissionRequest $request)
    { 
        $permission = Permission::create($request->all());
        toastr('Permission has been saved successfully!');
        return redirect('/admin/permission')->with('message', 'Permission has been saved successfully!');  
    }

    public function roleDelete($role_id)
    {
        $role=Role::find($role_id)->delete();
        Session::flash('error', "Successfully Deleted");
        return redirect('/admin/role#roles')->with('deleted_role','Successfully Deleted');
    }

    public function permissionDelete($permission_id)
    {
        $role=Permission::find($permission_id)->delete();
        Session::flash('error', "Successfully Deleted");
        return redirect('/admin/permission#permissions')->with('deleted_permission','Successfully Deleted');
    }
    
    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function edit($id)
    {
        return view('user::edit');
    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return Renderable
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Renderable
     */
    public function destroy($id)
    {
        //
    }
}
