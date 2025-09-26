<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * @property int $protein
 */
class Product extends Model
{
    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasFactory;

    protected $guarded = ['id'];

    /** Calories per 100g */
    public function calories(): ?int
    {
        if (null !== $this->protein && null !== $this->carbs && null !== $this->fat) {
            return (4 * $this->protein) + (4 * $this->carbs) + (9 * $this->fat);
        }

        return null;
    }

    public function toArray(): array
    {
        return array_merge(parent::toArray(), ['calories' => $this->calories()]);
    }
}
