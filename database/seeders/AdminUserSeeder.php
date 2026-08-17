<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminUserSeeder extends Seeder
{
    public function run(): void
    {
        // 1. Ensure super_admin role exists
        $role = Role::firstOrCreate(
            ['name' => 'super_admin'],
            ['description' => 'Full system access']
        );

        // 2. Ensure Admin User exists and has proper password
        // Note: In User model 'password' is cast as 'hashed', so assigning plain text will hash it once
        $admin = User::firstOrNew(['email' => 'admin@intoxiatechnologies.com']);
        $admin->name = 'Intoxia Admin';
        $admin->password = 'IntoxiaAdmin@2026';
        $admin->email_verified_at = now();
        $admin->save();

        if ($role && !$admin->roles()->where('name', 'super_admin')->exists()) {
            $admin->roles()->attach($role);
        }
    }
}
