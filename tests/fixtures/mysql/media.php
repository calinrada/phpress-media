<?php
use Phpress\Models\Mysql\Media;

return [
    'images' => [
        'image1' => [
            'media_name' => 'first_image.jpg',
            'media_location' => 'https://cdn.phpress.io/',
            'media_title' => 'First image',
            'media_description' => 'Bibendum mauris potenti semper a a magnis aliquet condimentum tempor.',
            'media_embed' => null,
            'media_type' => Media::MEDIA_TYPE_IMAGE,
            'media_created_at' => '2015-06-10 00:00:00',
            'media_updated_at' => null,
        ]
    ]
];
