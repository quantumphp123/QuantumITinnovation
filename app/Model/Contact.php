<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'enquiry_type','description'
    ];

     /**
     * User Post Enquiry
     * @param $array
     * @return array|string
     */
    public static function user_post_enquiry($array)
    {


        try {
            $enquiry_data = Contact::create([$array]);
            return ['status' => 'ok', 'data' => $enquiry_data];
        } catch (\Exception $e) {
            return ['status' => 'error', 'data' => $e];
        }

    }

}
