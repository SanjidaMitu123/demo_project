<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class form extends Model
{
    protected $table = 'form';
    protected $guarded =[];
    
    public function categoryR()
    {
        return $this->belongsTo(Category::class,'category_id','id');
    }
}
