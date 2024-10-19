<?php

namespace Database\Seeders;

use App\Models\Brand;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class BrandSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $brands = [
            [
                'brand_id' => 1,
                'brand_name' => 'Caterpillar',
                'brand_slug' => 'caterpillar',
                'brand_description' => 'Caterpillar Inc. is the world’s leading manufacturer of construction and mining equipment, including excavators, motor graders, and loaders.',
                // 'brand_image' => 'caterpillar-logo.png',
                'brand_color' => 'red'
            ],
            [
                'brand_id' => 2,
                'brand_name' => 'Komatsu',
                'brand_slug' => 'komatsu',
                'brand_description' => 'Komatsu is a Japanese multinational corporation that manufactures construction, mining, and forestry machinery, including bulldozers and excavators.',
                // 'brand_image' => 'komatsu-logo.png',
                'brand_color' => 'blue'
            ],
            [
                'brand_id' => 3,
                'brand_name' => 'Volvo',
                'brand_slug' => 'volvo',
                'brand_description' => 'Volvo Construction Equipment is one of the world’s leading manufacturers of excavators, wheel loaders, and articulated haulers.',
                // 'brand_image' => 'volvo-ce-logo.png',
                'brand_color' => 'yellow'
            ],
            [
                'brand_id' => 4,
                'brand_name' => 'Hitachi',
                'brand_slug' => 'hitachi',
                'brand_description' => 'Hitachi Construction Machinery specializes in manufacturing excavators, dump trucks, and cranes for construction and mining.',
                // 'brand_image' => 'hitachi-logo.png',
                'brand_color' => 'green'
            ],
            [
                'brand_id' => 5,
                'brand_name' => 'JCB',
                'brand_slug' => 'jcb',
                'brand_description' => 'JCB is a global construction equipment company known for manufacturing backhoe loaders, excavators, and compactors.',
                // 'brand_image' => 'jcb-logo.png',
                'brand_color' => 'purple'
            ],
            [
                'brand_id' => 6,
                'brand_name' => 'Liebherr',
                'brand_slug' => 'liebherr',
                'brand_description' => 'Liebherr manufactures heavy equipment for construction, including tower cranes, hydraulic excavators, and loaders.',
                // 'brand_image' => 'liebherr-logo.png',
            ],
            [
                'brand_id' => 7,
                'brand_name' => 'Doosan',
                'brand_slug' => 'doosan',
                'brand_description' => 'Doosan Infracore produces a wide range of construction equipment, including excavators, wheel loaders, and articulated dump trucks.',
                // 'brand_image' => 'doosan-logo.png',
            ],
            [
                'brand_id' => 8,
                'brand_name' => 'Hyundai',
                'brand_slug' => 'hyundai',
                'brand_description' => 'Hyundai Construction Equipment offers excavators, wheel loaders, and forklifts for construction and infrastructure projects.',
                // 'brand_image' => 'hyundai-ce-logo.png',
            ],
            [
                'brand_id' => 9,
                'brand_name' => 'John Deere',
                'brand_slug' => 'john-deere',
                'brand_description' => 'John Deere is renowned for its agricultural machinery, as well as construction equipment like bulldozers and motor graders.',
                // 'brand_image' => 'john-deere-logo.png',
            ],
            [
                'brand_id' => 10,
                'brand_name' => 'Case',
                'brand_slug' => 'case',
                'brand_description' => 'Case Construction Equipment provides a wide range of machinery, including backhoe loaders, skid steers, and motor graders.',
                // 'brand_image' => 'case-ce-logo.png',
            ],
            [
                'brand_id' => 11,
                'brand_name' => 'Kuboshi',
                'brand_slug' => 'kuboshi',
                'brand_description' => 'Kuboshi is a leading manufacturer of agricultural and construction machinery, known for its compact excavators and tractors.',
                // 'brand_image' => 'kuboshi-logo.png',
            ],
            [
                'brand_id' => 12,
                'brand_name' => 'Bobcat',
                'brand_slug' => 'bobcat',
                'brand_description' => 'Bobcat Company specializes in compact construction equipment, including skid-steer loaders and mini excavators.',
                // 'brand_image' => 'bobcat-logo.png',
            ],
            [
                'brand_id' => 13,
                'brand_name' => 'Terex',
                'brand_slug' => 'terex',
                'brand_description' => 'Terex Corporation produces lifting and material handling solutions, including cranes and aerial work platforms.',
                // 'brand_image' => 'terex-logo.png',
            ],
            [
                'brand_id' => 14,
                'brand_name' => 'Sany',
                'brand_slug' => 'sany',
                'brand_description' => 'Sany is a Chinese multinational heavy machinery manufacturer specializing in construction machinery like excavators and cranes.',
                // 'brand_image' => 'sany-logo.png',
            ],
            [
                'brand_id' => 15,
                'brand_name' => 'Manitou',
                'brand_slug' => 'manitou',
                'brand_description' => 'Manitou specializes in material handling equipment, including telehandlers, forklifts, and loaders.',
                // 'brand_image' => 'manitou-logo.png',
            ],
            [
                'brand_id' => 16,
                'brand_name' => 'XCMG',
                'brand_slug' => 'xcmg',
                'brand_description' => 'XCMG Group is one of the largest construction machinery manufacturers in China, producing equipment like cranes, loaders, and excavators.',
                // 'brand_image' => 'xcmg-logo.png',
            ],
            [
                'brand_id' => 17,
                'brand_name' => 'Case IH',
                'brand_slug' => 'case-ih',
                'brand_description' => 'Case IH is known for its agricultural equipment, including tractors and harvesters, now part of the CNH Industrial family.',
                // 'brand_image' => 'case-ih-logo.png',
            ],
            [
                'brand_id' => 18,
                'brand_name' => 'Yanmar',
                'brand_slug' => 'yanmar',
                'brand_description' => 'Yanmar specializes in compact construction equipment, such as mini-excavators and tracked carriers, and also produces diesel engines.',
                // 'brand_image' => 'yanmar-logo.png',
            ],
            [
                'brand_id' => 19,
                'brand_name' => 'Zoomlion',
                'brand_slug' => 'zoomlion',
                'brand_description' => 'Zoomlion is a Chinese construction machinery manufacturer that produces cranes, excavators, and concrete machinery.',
                // 'brand_image' => 'zoomlion-logo.png',
            ],
            [
                'brand_id' => 20,
                'brand_name' => 'Kobelco',
                'brand_slug' => 'kobelco',
                'brand_description' => 'Kobelco Construction Machinery is a Japanese company specializing in manufacturing hydraulic excavators and cranes.',
                // 'brand_image' => 'kobelco-logo.png',
            ],
            [
                'brand_id' => 21,
                'brand_name' => 'New Holland',
                'brand_slug' => 'new-holland',
                'brand_description' => 'New Holland is known for manufacturing agricultural and construction machinery, including backhoe loaders and tractors.',
                // 'brand_image' => 'new-holland-logo.png',
            ],
            [
                'brand_id' => 22,
                'brand_name' => 'Fendt',
                'brand_slug' => 'fendt',
                'brand_description' => 'Fendt is a German manufacturer known for producing tractors and agricultural machinery, now a part of AGCO Corporation.',
                // 'brand_image' => 'fendt-logo.png',
            ],
            [
                'brand_id' => 23,
                'brand_name' => 'Atlas Copco',
                'brand_slug' => 'atlas-copco',
                'brand_description' => 'Atlas Copco specializes in air compressors, industrial tools, and mining equipment, providing innovative solutions for various industries.',
                // 'brand_image' => 'atlas-copco-logo.png',
            ],
            [
                'brand_id' => 24,
                'brand_name' => 'Wacker Neuson',
                'brand_slug' => 'wacker-neuson',
                'brand_description' => 'Wacker Neuson manufactures compact construction equipment, including compact excavators, dumpers, and concrete technology solutions.',
                // 'brand_image' => 'wacker-neuson-logo.png',
            ],
            [
                'brand_id' => 25,
                'brand_name' => 'Takeuchi',
                'brand_slug' => 'takeuchi',
                'brand_description' => 'Takeuchi is a Japanese company specializing in compact equipment, including track loaders, skid steers, and mini-excavators.',
                // 'brand_image' => 'takeuchi-logo.png',
            ],
            [
                'brand_id' => 26,
                'brand_name' => 'Jinshi',
                'brand_slug' => 'jinshi',
                'brand_description' => 'Jinshi Industries, Inc. is a manufacturer of aerial work platforms and telehandlers, used in construction, maintenance, and industrial applications.',
                // 'brand_image' => 'jinshi-logo.png',
            ],
            [
                'brand_id' => 27,
                'brand_name' => 'LiuGong',
                'brand_slug' => 'liugong',
                'brand_description' => 'LiuGong is a Chinese company known for producing heavy equipment, including excavators, bulldozers, and wheel loaders.',
                // 'brand_image' => 'liugong-logo.png',
            ],
            [
                'brand_id' => 28,
                'brand_name' => 'Bell Equipment',
                'brand_slug' => 'bell-equipment',
                'brand_description' => 'Bell Equipment manufactures articulated dump trucks and heavy machinery for the mining, forestry, and construction industries.',
                // 'brand_image' => 'bell-equipment-logo.png',
            ],
            [
                'brand_id' => 29,
                'brand_name' => 'Sunward',
                'brand_slug' => 'sunward',
                'brand_description' => 'Sunward is a Chinese construction machinery manufacturer, focusing on excavators, rotary drilling rigs, and other heavy equipment.',
                // 'brand_image' => 'sunward-logo.png',
            ],
            [
                'brand_id' => 30,
                'brand_name' => 'Mahindra',
                'brand_slug' => 'mahindra',
                'brand_description' => 'Mahindra is an Indian multinational corporation that produces construction equipment and is well known for its agricultural machinery.',
                // 'brand_image' => 'mahindra-logo.png',
            ],
            [
                'brand_id' => 33,
                'brand_name' => 'Sanrir',
                'brand_slug' => 'sanrir',
                'brand_description' => 'Sanrir Group is a global leader in construction machinery, manufacturing equipment like excavators, cranes, and concrete machinery.',
                // 'brand_image' => 'sanrir-logo.png',
            ],
            [
                'brand_id' => 34,
                'brand_name' => 'Massey Ferguson',
                'brand_slug' => 'massey-ferguson',
                'brand_description' => 'Massey Ferguson, a global agricultural equipment manufacturer, is known for its tractors and combine harvesters.',
                // 'brand_image' => 'massey-ferguson-logo.png',
            ],
            [
                'brand_id' => 35,
                'brand_name' => 'Manit',
                'brand_slug' => 'manit',
                'brand_description' => 'Manit is a French manufacturer of material handling equipment, producing telehandlers, forklifts, and aerial platforms.',
                // 'brand_image' => 'manit-logo.png',
            ],
            [
                'brand_id' => 36,
                'brand_name' => 'Kubota',
                'brand_slug' => 'kubota',
                'brand_description' => 'Kubota Corporation produces agricultural and construction equipment, including tractors, mowers, and mini-excavators.',
                // 'brand_image' => 'kubota-logo.png',
            ],
            [
                'brand_id' => 37,
                'brand_name' => 'Clark',
                'brand_slug' => 'clark',
                'brand_description' => 'Clark Material Handling Company is an American manufacturer of forklifts and material handling equipment.',
                // 'brand_image' => 'clark-logo.png',
            ],
            [
                'brand_id' => 38,
                'brand_name' => 'Tadano',
                'brand_slug' => 'tadano',
                'brand_description' => 'Tadano is a Japanese company specializing in manufacturing mobile cranes, including all-terrain and rough-terrain cranes.',
                // 'brand_image' => 'tadano-logo.png',
            ],
            [
                'brand_id' => 39,
                'brand_name' => 'Grove',
                'brand_slug' => 'grove',
                'brand_description' => 'Grove is a global producer of mobile hydraulic cranes, including rough-terrain, all-terrain, and truck-mounted cranes.',
                // 'brand_image' => 'grove-logo.png',
            ],
            [
                'brand_id' => 40,
                'brand_name' => 'Skyjack',
                'brand_slug' => 'skyjack',
                'brand_description' => 'Skyjack produces aerial work platforms and telehandlers, widely used in the construction and industrial sectors.',
                // 'brand_image' => 'skyjack-logo.png',
            ],
            [
                'brand_id' => 41,
                'brand_name' => 'Genie',
                'brand_slug' => 'genie',
                'brand_description' => 'Genie is a brand of Terex that manufactures aerial lifts, scissor lifts, and telehandlers for a variety of industries.',
                // 'brand_image' => 'genie-logo.png',
            ],
            [
                'brand_id' => 42,
                'brand_name' => 'JLG',
                'brand_slug' => 'jlg',
                'brand_description' => 'JLG Industries is a world-leading manufacturer of access equipment, including aerial work platforms and telehandlers.',
                // 'brand_image' => 'jlg-logo.png',
            ],
            [
                'brand_id' => 43,
                'brand_name' => 'Trex',
                'brand_slug' => 'trex',
                'brand_description' => 'Trex Corporation is an American manufacturer of lifting and material handling equipment, including cranes and aerial platforms.',
                // 'brand_image' => 'trex-logo.png',
            ],
            [
                'brand_id' => 44,
                'brand_name' => 'Hyster',
                'brand_slug' => 'hyster',
                'brand_description' => 'Hyster is a global manufacturer of forklifts and material handling equipment for warehouse and industrial applications.',
                // 'brand_image' => 'hyster-logo.png',
            ],
            [
                'brand_id' => 45,
                'brand_name' => 'Linde',
                'brand_slug' => 'linde',
                'brand_description' => 'Linde Material Handling is a global leader in producing forklifts, warehouse equipment, and automation technology.',
                // 'brand_image' => 'linde-logo.png',
            ],
            [
                'brand_id' => 46,
                'brand_name' => 'Tennant',
                'brand_slug' => 'tennant',
                'brand_description' => 'Tennant Company manufactures cleaning equipment, including sweepers, scrubbers, and vacuums for industrial and commercial settings.',
                // 'brand_image' => 'tennant-logo.png',
            ],
            [
                'brand_id' => 47,
                'brand_name' => 'Vermeer',
                'brand_slug' => 'vermeer',
                'brand_description' => 'Vermeer Corporation produces industrial and agricultural machinery, including trenchers, grinders, and balers.',
                // 'brand_image' => 'vermeer-logo.png',
            ],
            [
                'brand_id' => 48,
                'brand_name' => 'Merlo',
                'brand_slug' => 'merlo',
                'brand_description' => 'Merlo is an Italian manufacturer known for its telehandlers, agricultural machinery, and construction equipment.',
                // 'brand_image' => 'merlo-logo.png',
            ],
            [
                'brand_id' => 49,
                'brand_name' => 'Furukawa',
                'brand_slug' => 'furukawa',
                'brand_description' => 'Furukawa Rock Drill provides solutions for mining and construction industries, specializing in hydraulic breakers and drilling equipment.',
                // 'brand_image' => 'furukawa-logo.png',
            ],
            [
                'brand_id' => 50,
                'brand_name' => 'Schwing',
                'brand_slug' => 'schwing',
                'brand_description' => 'Schwing is a manufacturer of concrete machinery, including truck-mounted pumps, stationary pumps, and concrete mixers.',
                // 'brand_image' => 'schwing-logo.png',
            ]

        ];
        
        
    
        // Iterate over each category and create it in the database
        foreach ($brands as $brand) {
            Brand::create($brand);
        }
    }
}
