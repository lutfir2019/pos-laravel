<?php

declare(strict_types=1);

namespace Database\Seeders;

use App\Models\ProductWarehouse;
use App\Models\Product;
use App\Models\Warehouse;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $warehouse = Warehouse::create([
            'name'    => 'Main Warehouse',
            'city'    => 'casablanca',
            'phone'   => '061234567896',
            'email'   => 'default@casa.ma',
            'country' => 'morocco',
        ]);

        $products = [
            [
                'id'                => 1,
                'uuid'              => Str::uuid()->toString(),
                'code'              => '6254814578123',
                'barcode_symbology' => 'C128',
                'name'              => 'safir alhoub - سفير الحب',
                'quantity'          => 0,
                'cost'              => 19,
                'price'             => 20,
                'stock_alert'       => 0,
                'category_id'       => 4,
                'brand_id'          => null,
                'unit'              => 'pcs',
                'order_tax'         => 0,
                'tax_type'          => '1',
                'image'             => 'no-image.png',
                'note'              => '',
                'status'            => 1,
                'created_at'        => '2022-08-31 09:20:12.000000',
                'updated_at'        => '2022-08-31 09:20:12.000000',
                'deleted_at'        => null,
            ],
        ];

        Product::insert($products);

        $products = Product::select('id', 'cost', 'price')->get();

        foreach ($products as $product) {
            ProductWarehouse::create([
                'product_id'   => $product->id,
                'warehouse_id' => $warehouse->id,
                'qty'          => 0,
                'price'        => $product->price,
                'cost'         => $product->cost,
            ]);
        }
    }
}
