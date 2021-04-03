<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PermissionController extends Controller
{
    public function run()
    {
        // Reset cached roles and permissions
        app()[\Spatie\Permission\PermissionRegistrar::class]->forgetCachedPermissions();

               // create permissions
        Permission::create(['name' => 'create-beszamolo']);
        Permission::create(['name' => 'create-rendezveny']);
        Permission::create(['name' => 'create-vttura']);
        Permission::create(['name' => 'create-dhtt']);
        Permission::create(['name' => 'create-jogosultsag']);
        Permission::create(['name' => 'view-loggs']);

        // create roles and assign created permissions
        $turavezeto = Role::create(['name' => 'turavezeto']);
        $turavezeto->givePermissionTo('create-beszamolo');

        $admin = Role::create(['name' => 'admin']);
        $admin->givePermissionTo('create-esemeny');
        $admin->givePermissionTo('create-szekcioks');
        // $admin->givePermissionTo('create-vttura');
        // $admin->givePermissionTo('create-dhtt');

        $super_admin = Role::create(['name' => 'super-admin']);
        $super_admin->givePermissionTo(Permission::all());

        $sadmin           = new User();
        $sadmin->name     = 'Kocsis László';
        $sadmin->email    = 'kocsislaszlo32@yahoo.com';
        $sadmin->password = bcrypt('kocsislaszlo');
        $sadmin->save();
        $sadmin->assignRole($super_admin);
     }
}
