<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Seeder;

class AdminUserSeeder extends Seeder
{
    public function run(): void
    {
        // 1. Ensure super_admin role exists
        $role = Role::firstOrCreate(
            ['name' => 'super_admin'],
            ['description' => 'Full system access']
        );

        // 2. Ensure Admin Users exist and have proper password
        $emails = [
            'admin@intoxiatechnologies.com',
            'admin@intoxia.com',
        ];

        foreach ($emails as $email) {
            $admin = User::firstOrNew(['email' => $email]);
            $admin->name = 'Intoxia Admin';
            $admin->password = 'IntoxiaAdmin@2026';
            $admin->email_verified_at = now();
            $admin->save();

            if ($role && !$admin->roles()->where('name', 'super_admin')->exists()) {
                $admin->roles()->attach($role);
            }
        }
    }
}
