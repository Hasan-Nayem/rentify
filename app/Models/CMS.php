<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CMS extends Model
{
    protected $fillable = [
        'page',
        'section',
        'title',
        'description',
        'btn1',
        'btn2',
        'bg_image',
        'image1',
        'image2',
        'image3',
        'list',
        'header',

        'sub_title_one',
        'sub_des_one',
        'sub_image_one',
        'sub_header_one',
        'sub_list_one',

        'sub_title_two',
        'sub_des_two',
        'sub_image_two',
        'sub_header_two',
        'sub_list_two',

        'sub_title_three',
        'sub_des_three',
        'sub_image_three',
        'sub_header_three',
        'sub_list_three',

        'sub_title_four',
        'sub_des_four',
        'sub_image_four',
        'sub_header_four',
        'sub_list_four',
    ];

    protected $hidden = [
        'created_at',
        'updated_at'
    ];

    protected $casts = [
        'list' => 'array',
        'sub_list_one' => 'array',
        'sub_list_two' => 'array',
        'sub_list_three' => 'array',
        'sub_list_four' => 'array',
    ];

    protected $imageFields = [
        'bg_image',
        'image1',
        'image2',
        'image3',
        'sub_image_one',
        'sub_image_two',
        'sub_image_three',
        'sub_image_four',
    ];

    public function getBgImageAttribute($value)
    {
        return $this->getImageUrl($value);
    }

    public function getImage1Attribute($value)
    {
        return $this->getImageUrl($value);
    }

    public function getImage2Attribute($value)
    {
        return $this->getImageUrl($value);
    }

    public function getImage3Attribute($value)
    {
        return $this->getImageUrl($value);
    }

    public function getSubImageOneAttribute($value)
    {
        return $this->getImageUrl($value);
    }

    public function getSubImageTwoAttribute($value)
    {
        return $this->getImageUrl($value);
    }

    public function getSubImageThreeAttribute($value)
    {
        return $this->getImageUrl($value);
    }

    public function getSubImageFourAttribute($value)
    {
        return $this->getImageUrl($value);
    }

    // Common helper
    protected function getImageUrl($value)
    {
        if (empty($value)) {
            return null;
        }

        // Already a URL
        if (filter_var($value, FILTER_VALIDATE_URL)) {
            return $value;
        }

        // API request: prepend storage URL
        if (request()->is('api/*')) {
            return url($value);
        }

        // Otherwise return raw path
        return $value;
    }
}
