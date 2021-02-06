<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class PermissionsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('permissions')->delete();
        
        \DB::table('permissions')->insert(array (
            0 => 
            array (
                'id' => 1,
                'key' => 'browse_admin',
                'table_name' => NULL,
                'created_at' => '2021-01-16 17:26:45',
                'updated_at' => '2021-01-16 17:26:45',
            ),
            1 => 
            array (
                'id' => 2,
                'key' => 'browse_bread',
                'table_name' => NULL,
                'created_at' => '2021-01-16 17:26:45',
                'updated_at' => '2021-01-16 17:26:45',
            ),
            2 => 
            array (
                'id' => 3,
                'key' => 'browse_database',
                'table_name' => NULL,
                'created_at' => '2021-01-16 17:26:45',
                'updated_at' => '2021-01-16 17:26:45',
            ),
            3 => 
            array (
                'id' => 4,
                'key' => 'browse_media',
                'table_name' => NULL,
                'created_at' => '2021-01-16 17:26:45',
                'updated_at' => '2021-01-16 17:26:45',
            ),
            4 => 
            array (
                'id' => 5,
                'key' => 'browse_compass',
                'table_name' => NULL,
                'created_at' => '2021-01-16 17:26:45',
                'updated_at' => '2021-01-16 17:26:45',
            ),
            5 => 
            array (
                'id' => 6,
                'key' => 'browse_menus',
                'table_name' => 'menus',
                'created_at' => '2021-01-16 17:26:45',
                'updated_at' => '2021-01-16 17:26:45',
            ),
            6 => 
            array (
                'id' => 7,
                'key' => 'read_menus',
                'table_name' => 'menus',
                'created_at' => '2021-01-16 17:26:45',
                'updated_at' => '2021-01-16 17:26:45',
            ),
            7 => 
            array (
                'id' => 8,
                'key' => 'edit_menus',
                'table_name' => 'menus',
                'created_at' => '2021-01-16 17:26:45',
                'updated_at' => '2021-01-16 17:26:45',
            ),
            8 => 
            array (
                'id' => 9,
                'key' => 'add_menus',
                'table_name' => 'menus',
                'created_at' => '2021-01-16 17:26:45',
                'updated_at' => '2021-01-16 17:26:45',
            ),
            9 => 
            array (
                'id' => 10,
                'key' => 'delete_menus',
                'table_name' => 'menus',
                'created_at' => '2021-01-16 17:26:45',
                'updated_at' => '2021-01-16 17:26:45',
            ),
            10 => 
            array (
                'id' => 11,
                'key' => 'browse_roles',
                'table_name' => 'roles',
                'created_at' => '2021-01-16 17:26:45',
                'updated_at' => '2021-01-16 17:26:45',
            ),
            11 => 
            array (
                'id' => 12,
                'key' => 'read_roles',
                'table_name' => 'roles',
                'created_at' => '2021-01-16 17:26:45',
                'updated_at' => '2021-01-16 17:26:45',
            ),
            12 => 
            array (
                'id' => 13,
                'key' => 'edit_roles',
                'table_name' => 'roles',
                'created_at' => '2021-01-16 17:26:45',
                'updated_at' => '2021-01-16 17:26:45',
            ),
            13 => 
            array (
                'id' => 14,
                'key' => 'add_roles',
                'table_name' => 'roles',
                'created_at' => '2021-01-16 17:26:45',
                'updated_at' => '2021-01-16 17:26:45',
            ),
            14 => 
            array (
                'id' => 15,
                'key' => 'delete_roles',
                'table_name' => 'roles',
                'created_at' => '2021-01-16 17:26:45',
                'updated_at' => '2021-01-16 17:26:45',
            ),
            15 => 
            array (
                'id' => 16,
                'key' => 'browse_users',
                'table_name' => 'users',
                'created_at' => '2021-01-16 17:26:45',
                'updated_at' => '2021-01-16 17:26:45',
            ),
            16 => 
            array (
                'id' => 17,
                'key' => 'read_users',
                'table_name' => 'users',
                'created_at' => '2021-01-16 17:26:45',
                'updated_at' => '2021-01-16 17:26:45',
            ),
            17 => 
            array (
                'id' => 18,
                'key' => 'edit_users',
                'table_name' => 'users',
                'created_at' => '2021-01-16 17:26:45',
                'updated_at' => '2021-01-16 17:26:45',
            ),
            18 => 
            array (
                'id' => 19,
                'key' => 'add_users',
                'table_name' => 'users',
                'created_at' => '2021-01-16 17:26:45',
                'updated_at' => '2021-01-16 17:26:45',
            ),
            19 => 
            array (
                'id' => 20,
                'key' => 'delete_users',
                'table_name' => 'users',
                'created_at' => '2021-01-16 17:26:45',
                'updated_at' => '2021-01-16 17:26:45',
            ),
            20 => 
            array (
                'id' => 21,
                'key' => 'browse_settings',
                'table_name' => 'settings',
                'created_at' => '2021-01-16 17:26:45',
                'updated_at' => '2021-01-16 17:26:45',
            ),
            21 => 
            array (
                'id' => 22,
                'key' => 'read_settings',
                'table_name' => 'settings',
                'created_at' => '2021-01-16 17:26:45',
                'updated_at' => '2021-01-16 17:26:45',
            ),
            22 => 
            array (
                'id' => 23,
                'key' => 'edit_settings',
                'table_name' => 'settings',
                'created_at' => '2021-01-16 17:26:45',
                'updated_at' => '2021-01-16 17:26:45',
            ),
            23 => 
            array (
                'id' => 24,
                'key' => 'add_settings',
                'table_name' => 'settings',
                'created_at' => '2021-01-16 17:26:45',
                'updated_at' => '2021-01-16 17:26:45',
            ),
            24 => 
            array (
                'id' => 25,
                'key' => 'delete_settings',
                'table_name' => 'settings',
                'created_at' => '2021-01-16 17:26:45',
                'updated_at' => '2021-01-16 17:26:45',
            ),
            25 => 
            array (
                'id' => 26,
                'key' => 'browse_orders',
                'table_name' => 'orders',
                'created_at' => '2021-01-16 17:41:37',
                'updated_at' => '2021-01-16 17:41:37',
            ),
            26 => 
            array (
                'id' => 27,
                'key' => 'read_orders',
                'table_name' => 'orders',
                'created_at' => '2021-01-16 17:41:37',
                'updated_at' => '2021-01-16 17:41:37',
            ),
            27 => 
            array (
                'id' => 28,
                'key' => 'edit_orders',
                'table_name' => 'orders',
                'created_at' => '2021-01-16 17:41:37',
                'updated_at' => '2021-01-16 17:41:37',
            ),
            28 => 
            array (
                'id' => 29,
                'key' => 'add_orders',
                'table_name' => 'orders',
                'created_at' => '2021-01-16 17:41:37',
                'updated_at' => '2021-01-16 17:41:37',
            ),
            29 => 
            array (
                'id' => 30,
                'key' => 'delete_orders',
                'table_name' => 'orders',
                'created_at' => '2021-01-16 17:41:37',
                'updated_at' => '2021-01-16 17:41:37',
            ),
            30 => 
            array (
                'id' => 31,
                'key' => 'browse_shops',
                'table_name' => 'shops',
                'created_at' => '2021-01-16 23:48:16',
                'updated_at' => '2021-01-16 23:48:16',
            ),
            31 => 
            array (
                'id' => 32,
                'key' => 'read_shops',
                'table_name' => 'shops',
                'created_at' => '2021-01-16 23:48:17',
                'updated_at' => '2021-01-16 23:48:18',
            ),
            32 => 
            array (
                'id' => 33,
                'key' => 'edit_shops',
                'table_name' => 'shops',
                'created_at' => '2021-01-16 23:48:18',
                'updated_at' => '2021-01-16 23:48:19',
            ),
            33 => 
            array (
                'id' => 34,
                'key' => 'add_shops',
                'table_name' => 'shops',
                'created_at' => '2021-01-16 23:48:20',
                'updated_at' => '2021-01-16 23:48:20',
            ),
            34 => 
            array (
                'id' => 35,
                'key' => 'delete_shops',
                'table_name' => 'shops',
                'created_at' => '2021-01-16 23:48:21',
                'updated_at' => '2021-01-16 23:48:21',
            ),
            35 => 
            array (
                'id' => 36,
                'key' => 'browse_posts',
                'table_name' => 'posts',
                'created_at' => '2021-01-16 23:50:06',
                'updated_at' => '2021-01-16 23:50:06',
            ),
            36 => 
            array (
                'id' => 37,
                'key' => 'read_posts',
                'table_name' => 'posts',
                'created_at' => '2021-01-16 23:50:07',
                'updated_at' => '2021-01-16 23:50:07',
            ),
            37 => 
            array (
                'id' => 38,
                'key' => 'edit_posts',
                'table_name' => 'posts',
                'created_at' => '2021-01-16 23:50:08',
                'updated_at' => '2021-01-16 23:50:09',
            ),
            38 => 
            array (
                'id' => 39,
                'key' => 'add_posts',
                'table_name' => 'posts',
                'created_at' => '2021-01-16 23:50:09',
                'updated_at' => '2021-01-16 23:50:10',
            ),
            39 => 
            array (
                'id' => 40,
                'key' => 'delete_posts',
                'table_name' => 'posts',
                'created_at' => '2021-01-16 23:50:10',
                'updated_at' => '2021-01-16 23:50:11',
            ),
            40 => 
            array (
                'id' => 41,
                'key' => 'browse_pages',
                'table_name' => 'pages',
                'created_at' => '2021-01-16 23:52:03',
                'updated_at' => '2021-01-16 23:52:04',
            ),
            41 => 
            array (
                'id' => 42,
                'key' => 'read_pages',
                'table_name' => 'pages',
                'created_at' => '2021-01-16 23:52:05',
                'updated_at' => '2021-01-16 23:52:06',
            ),
            42 => 
            array (
                'id' => 43,
                'key' => 'edit_pages',
                'table_name' => 'pages',
                'created_at' => '2021-01-16 23:52:07',
                'updated_at' => '2021-01-16 23:52:07',
            ),
            43 => 
            array (
                'id' => 44,
                'key' => 'add_pages',
                'table_name' => 'pages',
                'created_at' => '2021-01-16 23:52:08',
                'updated_at' => '2021-01-16 23:52:08',
            ),
            44 => 
            array (
                'id' => 45,
                'key' => 'delete_pages',
                'table_name' => 'pages',
                'created_at' => '2021-01-16 23:52:09',
                'updated_at' => '2021-01-16 23:52:09',
            ),
            45 => 
            array (
                'id' => 46,
                'key' => 'browse_categories',
                'table_name' => 'categories',
                'created_at' => '2021-01-17 00:02:34',
                'updated_at' => '2021-01-17 00:02:34',
            ),
            46 => 
            array (
                'id' => 47,
                'key' => 'read_categories',
                'table_name' => 'categories',
                'created_at' => '2021-01-17 00:02:35',
                'updated_at' => '2021-01-17 00:02:36',
            ),
            47 => 
            array (
                'id' => 48,
                'key' => 'edit_categories',
                'table_name' => 'categories',
                'created_at' => '2021-01-17 00:02:36',
                'updated_at' => '2021-01-17 00:02:38',
            ),
            48 => 
            array (
                'id' => 49,
                'key' => 'add_categories',
                'table_name' => 'categories',
                'created_at' => '2021-01-17 00:02:38',
                'updated_at' => '2021-01-17 00:02:39',
            ),
            49 => 
            array (
                'id' => 50,
                'key' => 'delete_categories',
                'table_name' => 'categories',
                'created_at' => '2021-01-17 00:02:40',
                'updated_at' => '2021-01-17 00:02:40',
            ),
            50 => 
            array (
                'id' => 51,
                'key' => 'browse_hooks',
                'table_name' => 'hooks',
                'created_at' => '2021-01-17 00:05:49',
                'updated_at' => '2021-01-17 00:05:49',
            ),
            51 => 
            array (
                'id' => 52,
                'key' => 'read_hooks',
                'table_name' => 'hooks',
                'created_at' => '2021-01-17 00:05:50',
                'updated_at' => '2021-01-17 00:05:50',
            ),
            52 => 
            array (
                'id' => 53,
                'key' => 'edit_hooks',
                'table_name' => 'hooks',
                'created_at' => '2021-01-17 00:05:51',
                'updated_at' => '2021-01-17 00:05:51',
            ),
            53 => 
            array (
                'id' => 54,
                'key' => 'add_hooks',
                'table_name' => 'hooks',
                'created_at' => '2021-01-17 00:05:53',
                'updated_at' => '2021-01-17 00:05:54',
            ),
            54 => 
            array (
                'id' => 55,
                'key' => 'delete_hooks',
                'table_name' => 'hooks',
                'created_at' => '2021-01-17 00:05:54',
                'updated_at' => '2021-01-17 00:05:55',
            ),
            55 => 
            array (
                'id' => 56,
                'key' => 'browse_prescription_orders',
                'table_name' => 'prescription_orders',
                'created_at' => '2021-01-18 14:27:05',
                'updated_at' => '2021-01-18 14:27:05',
            ),
            56 => 
            array (
                'id' => 57,
                'key' => 'read_prescription_orders',
                'table_name' => 'prescription_orders',
                'created_at' => '2021-01-18 14:27:05',
                'updated_at' => '2021-01-18 14:27:05',
            ),
            57 => 
            array (
                'id' => 58,
                'key' => 'edit_prescription_orders',
                'table_name' => 'prescription_orders',
                'created_at' => '2021-01-18 14:27:05',
                'updated_at' => '2021-01-18 14:27:05',
            ),
            58 => 
            array (
                'id' => 59,
                'key' => 'add_prescription_orders',
                'table_name' => 'prescription_orders',
                'created_at' => '2021-01-18 14:27:05',
                'updated_at' => '2021-01-18 14:27:05',
            ),
            59 => 
            array (
                'id' => 60,
                'key' => 'delete_prescription_orders',
                'table_name' => 'prescription_orders',
                'created_at' => '2021-01-18 14:27:05',
                'updated_at' => '2021-01-18 14:27:05',
            ),
        ));
        
        
    }
}