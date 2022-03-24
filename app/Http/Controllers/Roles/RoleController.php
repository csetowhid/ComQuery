<?php

namespace App\Http\Controllers\Roles;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RoleController extends Controller
{
    function __construct()
    {
         $this->middleware('permission:Role List|Role Create|Role Edit|Role Delete', ['only' => ['index','show']]);
         $this->middleware('permission:Role Create', ['only' => ['create','store']]);
         $this->middleware('permission:Role Edit', ['only' => ['edit','update']]);
         $this->middleware('permission:Role Delete', ['only' => ['destroy']]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['title'] = "Roles";
        $data['roles'] = Role::all();
        $data['permissions'] = Permission::all();
        return view('backend.roles.index',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['title'] = "Role Create";
        $data['permissions'] = Permission::all();
        return view('backend.roles.create',$data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|unique:roles',
            'permissions' => 'nullable',
        ]);

        $role = Role::create([
            'name' => $request->name
        ]);

        if($request->has("permissions")){
            $role->givePermissionTo($request->permissions);
        }

        if (!empty($role)) {
            notify()->success('Role Created Successfully!');
            return redirect()->route('roles.index');
        }

        notify()->error('Something Went Wrong!');
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Role $role)
    {
        $data['title'] = "Role Edit";
        $data['role'] = $role;
        $data['permissions'] = Permission::all();
        return view('backend.roles.edit',$data);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|unique:roles,name,'.$id
        ]);

        $role = Role::where('id',$id)->first();
        $role->name = $request->name;

        if($role->update()){
            if (!empty($request->permissions)) {
                notify()->success('Role Updated Successfully!');
                $role->syncPermissions($request->permissions);
            }
            return redirect()->route("roles.index");
        }
        return back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
