<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    const CREATED_AT = 'Inserted_Date_Time';
    const UPDATED_AT = 'Updated_Date_time';

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'category';

    /**
     * The primary key of the relevant table.
     *
     * @var string
     */
    protected $primaryKey = 'category_id';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
    	'category_name', 'maincategory_id'
    ];
}
