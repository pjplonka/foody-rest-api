<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class ImportDb extends Command
{
    protected $signature = 'app:import-db';

    protected $description = 'Command description';

    public function handle()
    {
        $this->import('shop_categories');
        $this->import('products');
        $this->import('meals');
        $this->import('meal_products');
    }

    private function import(string $table)
    {
        if (File::exists(base_path("resources/db/$table.sql"))) {
            $content = File::get(base_path("resources/db/$table.sql"));

            DB::unprepared($content);
        }
    }
}
