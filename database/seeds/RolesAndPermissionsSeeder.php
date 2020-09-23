<?php

use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Illuminate\Support\Str;

class RolesAndPermissionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        app()[\Spatie\Permission\PermissionRegistrar::class]->forgetCachedPermissions();

        $user = User::create([
            'name' => 'User',
            'email' => 'user@user.com',
            'remember_token' => Str::random(10),
            'email_verified_at' => now(),
            'password' => Hash::make('password')
        ]);

        $sa = User::create([
            'name' => 'Super Admin',
            'email' => 'sa@sa.com',
            'remember_token' => Str::random(10),
            'email_verified_at' => now(),
            'password' => Hash::make('password')
        ]);

        $admin = User::create([
            'name' => 'Admin',
            'email' => 'admin@admin.com',
            'remember_token' => Str::random(10),
            'email_verified_at' => now(),
            'password' => Hash::make('password')
        ]);

        // create permissions
        Permission::create(['name' => 'create']);
        Permission::create(['name' => 'read']);
        Permission::create(['name' => 'update']);
        Permission::create(['name' => 'delete']);
        Permission::create(['name' => 'destroy']);

        // create roles and assign created permissions

        // this can be done as separate statements
        // soft delete
        $roleAdmin = Role::create(['name' => 'admin']);
        $roleAdmin->givePermissionTo(['create','read','update','delete']);

        // or may be done by chaining
        $roleUser = Role::create(['name' => 'user'])
            ->givePermissionTo(['create', 'read']);

        $roleSA = Role::create(['name' => 'super-admin']);
        $roleSA->givePermissionTo(Permission::all());

        $admin->assignRole([$roleAdmin->id]);
        $sa->assignRole([$roleSA->id]);
        $user->assignRole([$roleUser->id]);

        // create demo users

        $userSeeders = factory(User::class, 50)->create();
        foreach($userSeeders as $userSeeder){
            $userSeeder->assignRole($roleUser);
        }
    }
}
