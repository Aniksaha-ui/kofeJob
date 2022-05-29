<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class customer_requirements extends Model
{
    protected $fillable = [
        'designer_id', 'seller_id', 'projectName','category_id','priceType','fixedPrice','hourlyPrice','bidingPrice','expertise','projectPeriod','startingDate','docs','Links','description','status','designerReview',
    ];
}
