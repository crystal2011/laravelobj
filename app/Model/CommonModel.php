<?php
/**
 * 公共model
 * 将查询信息存到缓存中
 *
 */
namespace App\Model;
use Illuminate\Database\Eloquent\Model;
abstract class CommonModel extends Model
{
    
    function getInfo(){
        echo self::table;
    }
}
