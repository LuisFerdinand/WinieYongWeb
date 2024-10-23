<?php

namespace Database\Seeders;

use App\Models\Type;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class TypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $img1 = "https://s7d2.scene7.com/is/image/Caterpillar/CM20130721-78722-62413";
        $img2 = "https://s7d2.scene7.com/is/image/Caterpillar/CM20170530-47239-53877";
        $img3 = "https://s7d2.scene7.com/is/image/Caterpillar/C833220";
        $img4 = "https://s7d2.scene7.com/is/image/Caterpillar/CM20210419-a2c40-180b5";
        $img5 = "https://s7d2.scene7.com/is/image/Caterpillar/CM20201215-90df8-498ab";
        $img6 = "https://s7d2.scene7.com/is/image/Caterpillar/C842352";

        $types = [
            [
                'type_name' => 'A100',
                'type_slug' => 'a100',
                // 'type_brand' => 'Caterpillar',
                'category_id' => 1,
                'brand_id' => 1,
                'type_description' => 'High-capacity hydraulic shovel for heavy-duty mining.',
                'type_image_url' => $img1,
                'type_engine_power' => 400, // Engine power in HP
                'type_operating_weight' => 110, // Weight in tons
                'type_fuel_capacity' => 500, // Fuel capacity in liters
                'type_max_speed' => 10, // Max speed in km/h
            ],
            [
                'type_name' => 'B200',
                'type_slug' => 'b200',
                // 'type_brand' => 'Komatsu',
                'category_id' => 1,
                'brand_id' => 2,
                'type_description' => 'Durable and efficient hydraulic shovel for large operations.',
                'type_image_url' => $img1,
                'type_engine_power' => 350, // Engine power in HP
                'type_operating_weight' => 90, // Weight in tons
                'type_fuel_capacity' => 450, // Fuel capacity in liters
                'type_max_speed' => 9, // Max speed in km/h
            ],
            [
                'type_name' => 'C300',
                'type_slug' => 'c300',
                // 'type_brand' => 'Hitachi',
                'category_id' => 1,
                'brand_id' => 3,
                'type_description' => 'Advanced hydraulic shovel with enhanced performance features.',
                'type_image_url' => $img1,
                'type_engine_power' => 375, // Engine power in HP
                'type_operating_weight' => 95, // Weight in tons
                'type_fuel_capacity' => 480, // Fuel capacity in liters
                'type_max_speed' => 9.5, // Max speed in km/h
            ],
            [
                'type_name' => 'D400',
                'type_slug' => 'd400',
                // 'type_brand' => 'Volvo',
                'category_id' => 1,
                'brand_id' => 4,
                'type_description' => 'Robust design with powerful hydraulic capabilities.',
                'type_image_url' => $img1,
                'type_engine_power' => 360, // Engine power in HP
                'type_operating_weight' => 88, // Weight in tons
                'type_fuel_capacity' => 470, // Fuel capacity in liters
                'type_max_speed' => 8, // Max speed in km/h
            ],
            [
                'type_name' => 'E500',
                'type_slug' => 'e500',
                // 'type_brand' => 'John Deere',
                'category_id' => 1,
                'brand_id' => 5,
                'type_description' => 'Compact and efficient for various mining tasks.',
                'type_image_url' => $img1,
                'type_engine_power' => 330, // Engine power in HP
                'type_operating_weight' => 85, // Weight in tons
                'type_fuel_capacity' => 420, // Fuel capacity in liters
                'type_max_speed' => 7.5, // Max speed in km/h
            ],
            [
                'type_name' => 'F600',
                'type_slug' => 'f600',
                // 'type_brand' => 'Caterpillar',
                'category_id' => 2,
                'brand_id' => 6,
                'type_description' => 'Heavy-duty bulldozer designed for tough terrain.',
                'type_image_url' => $img2,
                'type_engine_power' => 250, // Engine power in HP
                'type_operating_weight' => 25, // Weight in tons
                'type_fuel_capacity' => 300, // Fuel capacity in liters
                'type_max_speed' => 10, // Max speed in km/h
            ],
            [
                'type_name' => 'G700',
                'type_slug' => 'g700',
                // 'type_brand' => 'Komatsu',
                'category_id' => 2,
                'brand_id' => 7,
                'type_description' => 'Reliable bulldozer for large construction projects.',
                'type_image_url' => $img2,
                'type_engine_power' => 270, // Engine power in HP
                'type_operating_weight' => 27, // Weight in tons
                'type_fuel_capacity' => 320, // Fuel capacity in liters
                'type_max_speed' => 10.5, // Max speed in km/h
            ],
            [
                'type_name' => 'H800',
                'type_slug' => 'h800',
                // 'type_brand' => 'Hitachi',
                'category_id' => 2,
                'brand_id' => 8,
                'type_description' => 'Efficient bulldozer with excellent maneuverability.',
                'type_image_url' => $img2,
                'type_engine_power' => 240, // Engine power in HP
                'type_operating_weight' => 24, // Weight in tons
                'type_fuel_capacity' => 280, // Fuel capacity in liters
                'type_max_speed' => 11, // Max speed in km/h
            ],
            [
                'type_name' => 'I900',
                'type_slug' => 'i900',
                // 'type_brand' => 'Doosan',
                'category_id' => 2,
                'brand_id' => 9,
                'type_description' => 'Compact design with high-performance capabilities.',
                'type_image_url' => $img2,
                'type_engine_power' => 230, // Engine power in HP
                'type_operating_weight' => 22, // Weight in tons
                'type_fuel_capacity' => 250, // Fuel capacity in liters
                'type_max_speed' => 10, // Max speed in km/h
            ],
            [
                'type_name' => 'J1000',
                'type_slug' => 'j1000',
                // 'type_brand' => 'JCB',
                'category_id' => 2,
                'brand_id' => 10,
                'type_description' => 'Versatile bulldozer suitable for various applications.',
                'type_image_url' => $img2,
                'type_engine_power' => 260, // Engine power in HP
                'type_operating_weight' => 26, // Weight in tons
                'type_fuel_capacity' => 290, // Fuel capacity in liters
                'type_max_speed' => 10, // Max speed in km/h
            ],
            [
                'type_name' => 'K1100',
                'type_slug' => 'k1100',
                // 'type_brand' => 'Caterpillar',
                'category_id' => 3,
                'brand_id' => 1,
                'type_description' => 'Powerful excavator for digging and earthmoving tasks.',
                'type_image_url' => $img3,
                'type_engine_power' => 300, // Engine power in HP
                'type_operating_weight' => 30, // Weight in tons
                'type_fuel_capacity' => 400, // Fuel capacity in liters
                'type_max_speed' => 5, // Max speed in km/h
            ],
            [
                'type_name' => 'L1200',
                'type_slug' => 'l1200',
                // 'type_brand' => 'Komatsu',
                'category_id' => 3,
                'brand_id' => 2,
                'type_description' => 'Versatile excavator for construction and demolition.',
                'type_image_url' => $img3,
                'type_engine_power' => 320, // Engine power in HP
                'type_operating_weight' => 32, // Weight in tons
                'type_fuel_capacity' => 420, // Fuel capacity in liters
                'type_max_speed' => 5.5, // Max speed in km/h
            ],
            [
                'type_name' => 'M1300',
                'type_slug' => 'm1300',
                // 'type_brand' => 'Hitachi',
                'category_id' => 3,
                'brand_id' => 3,
                'type_description' => 'High-performance excavator with advanced hydraulic systems.',
                'type_image_url' => $img3,
                'type_engine_power' => 310, // Engine power in HP
                'type_operating_weight' => 31, // Weight in tons
                'type_fuel_capacity' => 410, // Fuel capacity in liters
                'type_max_speed' => 5, // Max speed in km/h
            ],
            [
                'type_name' => 'N1400',
                'type_slug' => 'n1400',
                // 'type_brand' => 'Volvo',
                'category_id' => 3,
                'brand_id' => 4,
                'type_description' => 'Compact excavator for small to medium projects.',
                'type_image_url' => $img3,
                'type_engine_power' => 280, // Engine power in HP
                'type_operating_weight' => 27, // Weight in tons
                'type_fuel_capacity' => 350, // Fuel capacity in liters
                'type_max_speed' => 5.5, // Max speed in km/h
            ],
            [
                'type_name' => 'O1500',
                'type_slug' => 'o1500',
                // 'type_brand' => 'John Deere',
                'category_id' => 3,
                'brand_id' => 5,
                'type_description' => 'Robust excavator designed for tough environments.',
                'type_image_url' => $img3,
                'type_engine_power' => 350, // Engine power in HP
                'type_operating_weight' => 34, // Weight in tons
                'type_fuel_capacity' => 450, // Fuel capacity in liters
                'type_max_speed' => 5, // Max speed in km/h
            ],
            [
                'type_name' => 'P1600',
                'type_slug' => 'p1600',
                // 'type_brand' => 'Caterpillar',
                'category_id' => 4,
                'brand_id' => 6,
                'type_description' => 'Precision grader for leveling and grading tasks.',
                'type_image_url' => $img4,
                'type_engine_power' => 175, // Engine power in HP
                'type_operating_weight' => 14, 
                'type_fuel_capacity' => 200, // Fuel capacity in liters
                'type_max_speed' => 40, // Max speed in km/h
            ],
            [
                'type_name' => 'Q1700',
                'type_slug' => 'q1700',
                // 'type_brand' => 'Komatsu',
                'category_id' => 4,
                'brand_id' => 7,
                'type_description' => 'High-capacity motor grader with excellent visibility.',
                'type_image_url' => $img4,
                'type_engine_power' => 180, // Engine power in HP
                'type_operating_weight' => 15, // Weight in tons
                'type_fuel_capacity' => 210, // Fuel capacity in liters
                'type_max_speed' => 42, // Max speed in km/h
            ],
            [
                'type_name' => 'R1800',
                'type_slug' => 'r1800',
                // 'type_brand' => 'Volvo',
                'category_id' => 4,
                'brand_id' => 8,
                'type_description' => 'Durable grader for construction and maintenance.',
                'type_image_url' => $img4,
                'type_engine_power' => 190, // Engine power in HP
                'type_operating_weight' => 15.5, // Weight in tons
                'type_fuel_capacity' => 230, // Fuel capacity in liters
                'type_max_speed' => 38, // Max speed in km/h
            ],
            [
                'type_name' => 'S1900',
                'type_slug' => 's1900',
                // 'type_brand' => 'Hitachi',
                'category_id' => 4,
                'brand_id' => 9,
                'type_description' => 'Efficient motor grader with advanced features.',
                'type_image_url' => $img4,
                'type_engine_power' => 185, // Engine power in HP
                'type_operating_weight' => 14.5, // Weight in tons
                'type_fuel_capacity' => 220, // Fuel capacity in liters
                'type_max_speed' => 40, // Max speed in km/h
            ],
            [
                'type_name' => 'T2000',
                'type_slug' => 't2000',
                // 'type_brand' => 'John Deere',
                'category_id' => 4,
                'brand_id' => 10,
                'type_description' => 'Versatile grader suitable for various terrains.',
                'type_image_url' => $img4,
                'type_engine_power' => 200, // Engine power in HP
                'type_operating_weight' => 16, // Weight in tons
                'type_fuel_capacity' => 240, // Fuel capacity in liters
                'type_max_speed' => 39, // Max speed in km/h
            ],
            [
                'type_name' => 'U2100',
                'type_slug' => 'u2100',
                // 'type_brand' => 'Caterpillar',
                'category_id' => 5,
                'brand_id' => 5,
                'type_description' => 'Compact and powerful soil compactor.',
                'type_image_url' => $img5,
                'type_engine_power' => 75, // Engine power in HP
                'type_operating_weight' => 8, // Weight in tons
                'type_fuel_capacity' => 100, // Fuel capacity in liters
                'type_max_speed' => 10, // Max speed in km/h
            ],
            [
                'type_name' => 'V2200',
                'type_slug' => 'v2200',
                // 'type_brand' => 'Volvo',
                'category_id' => 5,
                'brand_id' => 5,
                'type_description' => 'Robust compactor for construction sites.',
                'type_image_url' => $img5,
                'type_engine_power' => 80, // Engine power in HP
                'type_operating_weight' => 9, // Weight in tons
                'type_fuel_capacity' => 110, // Fuel capacity in liters
                'type_max_speed' => 12, // Max speed in km/h
            ],
            [
                'type_name' => 'W2300',
                'type_slug' => 'w2300',
                // 'type_brand' => 'JCB',
                'category_id' => 5,
                'brand_id' => 5,
                'type_description' => 'Efficient compactor for various applications.',
                'type_image_url' => $img5,
                'type_engine_power' => 78, // Engine power in HP
                'type_operating_weight' => 8.5, // Weight in tons
                'type_fuel_capacity' => 105, // Fuel capacity in liters
                'type_max_speed' => 11, // Max speed in km/h
            ],
            [
                'type_name' => 'X2400',
                'type_slug' => 'x2400',
                // 'type_brand' => 'Doosan',
                'category_id' => 5,
                'brand_id' => 5,
                'type_description' => 'Heavy-duty compactor with excellent stability.',
                'type_image_url' => $img5,
                'type_engine_power' => 85, // Engine power in HP
                'type_operating_weight' => 9.5, // Weight in tons
                'type_fuel_capacity' => 120, // Fuel capacity in liters
                'type_max_speed' => 9, // Max speed in km/h
            ],
            [
                'type_name' => 'Y2500',
                'type_slug' => 'y2500',
                // 'type_brand' => 'Hitachi',
                'category_id' => 5,
                'brand_id' => 5,
                'type_description' => 'Durable compactor for road construction.',
                'type_image_url' => $img5,
                'type_engine_power' => 76, // Engine power in HP
                'type_operating_weight' => 8, // Weight in tons
                'type_fuel_capacity' => 100, // Fuel capacity in liters
                'type_max_speed' => 10, // Max speed in km/h
            ],
            [
                'type_name' => 'Z2600',
                'type_slug' => 'z2600',
                // 'type_brand' => 'Caterpillar',
                'category_id' => 6,
                'brand_id' => 6,
                'type_description' => 'High-capacity wheel loader for heavy materials.',
                'type_image_url' => $img6,
                'type_engine_power' => 150, // Engine power in HP
                'type_operating_weight' => 12, // Weight in tons
                'type_fuel_capacity' => 200, // Fuel capacity in liters
                'type_max_speed' => 2.8, // Dumping height in meters
            ],
            [
                'type_name' => 'A2700',
                'type_slug' => 'a2700',
                // 'type_brand' => 'Komatsu',
                'category_id' => 6,
                'brand_id' => 6,
                'type_description' => 'Versatile wheel loader for construction sites.',
                'type_image_url' => $img6,
                'type_engine_power' => 160, // Engine power in HP
                'type_operating_weight' => 13, // Weight in tons
                'type_fuel_capacity' => 210, // Fuel capacity in liters
                'type_max_speed' => 2.9, // Dumping height in meters
            ],
            [
                'type_name' => 'B2800',
                'type_slug' => 'b2800',
                // 'type_brand' => 'John Deere',
                'category_id' => 6,
                'brand_id' => 6,
                'type_description' => 'Efficient loader with advanced control systems.',
                'type_image_url' => $img6,
                'type_engine_power' => 155, // Engine power in HP
                'type_operating_weight' => 12.5, // Weight in tons
                'type_fuel_capacity' => 190, // Fuel capacity in liters
                'type_max_speed' => 2.7, // Dumping height in meters
            ],
            [
                'type_name' => 'C2900',
                'type_slug' => 'c2900',
                // 'type_brand' => 'Hitachi',
                'category_id' => 6,
                'brand_id' => 6,
                'type_description' => 'Compact loader ideal for small projects.',
                'type_image_url' => $img6,
                'type_engine_power' => 140, // Engine power in HP
                'type_operating_weight' => 10, // Weight in tons
                'type_fuel_capacity' => 170, // Fuel capacity in liters
                'type_max_speed' => 2.5, // Dumping height in meters
            ],
            [
                'type_name' => 'D3000',
                'type_slug' => 'd3000',
                // 'type_brand' => 'Volvo',
                'category_id' => 6,
                'brand_id' => 6,
                'type_description' => 'Powerful loader for heavy-duty applications.',
                'type_image_url' => $img6,
                'type_engine_power' => 165, // Engine power in HP
                'type_operating_weight' => 10, // Weight in tons
                'type_fuel_capacity' => 170, // Fuel capacity in liters
                'type_max_speed' => 2.5, // Dumping height in meters
            ]
        ];
        foreach ($types as $type) {
            Type::create($type);
        }
    }
}
