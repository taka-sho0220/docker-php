<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Travel extends Model
{
    /**
     * モデルと関連しているテーブル
     * 
     * @var string
     */
    protected $table = 'travels';
    
    
    protected $fillable = 
    [
        'name',
        'place',
        'gender',
        'age',
        'evaluation',
        'impressions',
        'photos',
        'terms',
        'prefecture_id',
        'region_id',
        'updated_at'
    ];
}
