<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AttachmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table( 'attachments' )->delete();
        $attachments = array(
            array( 'attachable_id' => 1, 'attachable_type' => 'ad', 'type' => "photo", 'path' => 'https://i.picsum.photos/id/10/1024/480.jpg?hmac=MQMA50uI3IWm4LOldGSGjsNPfo7dxGufvto6QTOHc3Q', 'disk_name' => "", 'file_name' => "", 'thumbnail' => 1 ),
            array( 'attachable_id' => 2, 'attachable_type' => 'ad', 'type' => "photo", 'path' => 'https://i.picsum.photos/id/10/1024/480.jpg?hmac=MQMA50uI3IWm4LOldGSGjsNPfo7dxGufvto6QTOHc3Q', 'disk_name' => "", 'file_name' => "", 'thumbnail' => 1 ),
            array( 'attachable_id' => 3, 'attachable_type' => 'ad', 'type' => "photo", 'path' => 'https://i.picsum.photos/id/10/1024/480.jpg?hmac=MQMA50uI3IWm4LOldGSGjsNPfo7dxGufvto6QTOHc3Q', 'disk_name' => "", 'file_name' => "", 'thumbnail' => 1 ),
            array( 'attachable_id' => 4, 'attachable_type' => 'ad', 'type' => "photo", 'path' => 'https://i.picsum.photos/id/10/1024/480.jpg?hmac=MQMA50uI3IWm4LOldGSGjsNPfo7dxGufvto6QTOHc3Q', 'disk_name' => "", 'file_name' => "", 'thumbnail' => 1 ),
            array( 'attachable_id' => 5, 'attachable_type' => 'ad', 'type' => "photo", 'path' => 'https://i.picsum.photos/id/10/1024/480.jpg?hmac=MQMA50uI3IWm4LOldGSGjsNPfo7dxGufvto6QTOHc3Q', 'disk_name' => "", 'file_name' => "", 'thumbnail' => 1 ),
            array( 'attachable_id' => 6, 'attachable_type' => 'ad', 'type' => "photo", 'path' => 'https://i.picsum.photos/id/10/1024/480.jpg?hmac=MQMA50uI3IWm4LOldGSGjsNPfo7dxGufvto6QTOHc3Q', 'disk_name' => "", 'file_name' => "", 'thumbnail' => 1 ),
            array( 'attachable_id' => 7, 'attachable_type' => 'ad', 'type' => "photo", 'path' => 'https://i.picsum.photos/id/10/1024/480.jpg?hmac=MQMA50uI3IWm4LOldGSGjsNPfo7dxGufvto6QTOHc3Q', 'disk_name' => "", 'file_name' => "", 'thumbnail' => 1 ),
            array( 'attachable_id' => 8, 'attachable_type' => 'ad', 'type' => "photo", 'path' => 'https://i.picsum.photos/id/10/1024/480.jpg?hmac=MQMA50uI3IWm4LOldGSGjsNPfo7dxGufvto6QTOHc3Q', 'disk_name' => "", 'file_name' => "", 'thumbnail' => 1 ),
            array( 'attachable_id' => 9, 'attachable_type' => 'ad', 'type' => "photo", 'path' => 'https://i.picsum.photos/id/10/1024/480.jpg?hmac=MQMA50uI3IWm4LOldGSGjsNPfo7dxGufvto6QTOHc3Q', 'disk_name' => "", 'file_name' => "", 'thumbnail' => 1 ),
            array( 'attachable_id' => 10, 'attachable_type' => 'ad', 'type' => "photo", 'path' => 'https://thumbs.dreamstime.com/b/toyota-camry-silver-ca-toyota-camry-silver-car-blurred-motion-background-183898645.jpg', 'disk_name' => "", 'file_name' => "", 'thumbnail' => 1 ),
            array( 'attachable_id' => 11, 'attachable_type' => 'ad', 'type' => "photo", 'path' => 'https://thumbs.dreamstime.com/b/toyota-camry-silver-ca-toyota-camry-silver-car-blurred-motion-background-183898645.jpg', 'disk_name' => "", 'file_name' => "", 'thumbnail' => 1 ),
        );
        DB::table( 'attachments' )->insert( $attachments );

    }
}
