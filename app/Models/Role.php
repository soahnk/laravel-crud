<?php
/**
 * Created by PhpStorm.
 * User: sohan
 * Date: 16/07/07
 * Time: 1:13 PM
 */

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Role extends Model

{
    protected $fillable = ['name'];
    
    function users() {
        return $this->hasMany( Role::class); 
    }
}