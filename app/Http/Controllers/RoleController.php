<?php

namespace App\Http\Controllers;

use App\Models\Role;
use Illuminate\Http\Request;

class RoleController extends Controller
{
    public function list(){
        $roles = Role::all();
        return view('panel.role.list', compact('roles'));
    }
    
    public function add(){
        return view('panel.role.add');
    }

    public function insert(Request $request){
        $request->validate([
            'name' => ['required', 'string']
        ]);
        $save = new Role;
        $save->name = $request->name;
        $save->save();

        return redirect('/panel/role')->with('success', 'Role name created successfully');
    }

    public function edit($id){
        $role = Role::find($id);
        return view('panel.role.edit', compact('role'));
    }

    public function update(Request $request, $id){
        $request->validate([
            'name' => ['required', 'string']
        ]);
        $save = Role::find($id);
        $save->name = $request->name;
        $save->save();

        return redirect('/panel/role')->with('success', 'Role name updated successfully');
    }

    public function delete($id){
        $save = Role::find($id);
        $save->delete();

        return redirect('/panel/role')->with('success', 'Role name deleted successfully');
    }

}
