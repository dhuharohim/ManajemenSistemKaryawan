<?php

use Database\Seeders\AccountListSeeder;
use Database\Seeders\AccountTypeSeeder;
use Database\Seeders\CurrencySeeder;
use Database\Seeders\CustomerCategorySeeder;
use Database\Seeders\DiscountCategorySeeder;
use Database\Seeders\DocumentCodeSeeder;
use Database\Seeders\ItemUnitSeeder;
use Database\Seeders\MainAccountSeeder;
use Database\Seeders\PaymentTermSeeder;
use Database\Seeders\PriceCategorySeeder;
use Database\Seeders\ProductCategorySeeder;
use Database\Seeders\RoleSeeder;
use Database\Seeders\SupplierCategorySeeder;
use Database\Seeders\TransactionCodeSeeder;
use Database\Seeders\UserSeeder;
use Database\Seeders\WarehouseLocationSeeder;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            RoleSeeder::class,
            UserSeeder::class,
            AccountTypeSeeder::class,
            PaymentTermSeeder::class,
            ItemUnitSeeder::class,
            CurrencySeeder::class,
            TransactionCodeSeeder::class,
            DocumentCodeSeeder::class,
            SupplierCategorySeeder::class,
            CustomerCategorySeeder::class,
            PriceCategorySeeder::class,
            DiscountCategorySeeder::class,
            ProductCategorySeeder::class,
            WarehouseLocationSeeder::class,
            MainAccountSeeder::class,
            AccountListSeeder::class,
        ]);
    }
}
