<?php

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Seeder;

/**
 * Class DatabaseSeeder.
 */
class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        $this->command->info(' BEGIN - On Progress Seeding...');
        $this->command->info('=============================================');

        $this->call(AccessTableSeeder::class);
        $this->command->info('>> Access table seeded!');

        $this->call(HistoryTypeTableSeeder::class);
        $this->command->info('>> HistoryType table seeded!');

        $this->call(SettingsTableSeeder::class);
        $this->command->info('>> Setting table seeded!');

        $this->call(PagesTableSeeder::class);
        $this->command->info('>> Page table seeded!');

        $this->call(MenuTableSeeder::class);
        $this->command->info('>> MenuTable table seeded!');

        $this->call(ModulesTableSeeder::class);
        $this->command->info('>> Modules table seeded!');

        $this->command->info('=============================================');
        $this->command->info(' END - All Data Seeded!');

        Model::reguard();
    }
}
