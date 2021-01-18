<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Prefectures extends Model
{
    /**
     * モデルと関連しているテーブル
     * 
     * @var string
     */
    protected $table = 'prefectures';

    protected $fillable = [
        'id',
        'region_id',
        'place'
    ];

    public static function selectlist()
    {
        $prefectures = Prefectures::all();
        $list = array();
        $list += array("" => "選択してください");
        foreach($prefectures as $prefecture){
            $list +=array($prefecture->place => $prefecture->place);
        }
        return $list;
    }
}
