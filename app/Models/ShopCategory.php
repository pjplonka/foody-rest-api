<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property string $name
 * @property string $slug
 * @property int $order
 */
class ShopCategory extends Model
{
    protected $guarded = ['id'];
}
