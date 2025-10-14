<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\File;

class DumpDb extends Command
{
    protected $signature = 'app:dump-db';

    protected $description = 'Command description';

    public function handle()
    {
        $this->dump('shop_categories');
        $this->dump('products');
        $this->dump('meals');
        $this->dump('meal_products');
        $this->dump('todos_categories');
        $this->dump('todos');
    }

    private function dump(string $table)
    {
        if (File::exists(base_path("resources/db/$table.sql"))) {
            if (!File::exists(base_path("resources/db/" . date('Y_m_d_H_i')))) {
                File::makeDirectory(base_path('resources/db/' . date('Y_m_d_H_i')));
            }

            File::move(
                base_path("resources/db/$table.sql"),
                base_path('resources/db/' . date('Y_m_d_H_i') . "/$table.sql")
            );
        }

        \Spatie\DbDumper\Databases\MySql::create()
            ->setDbName('przepisy')
            ->setHost('mysql')
            ->setUserName('sail')
            ->setPassword('password')
            ->includeTables($table)
            ->doNotCreateTables()
            ->dumpToFile('resources/db/' . $table . '.sql');
    }
}
