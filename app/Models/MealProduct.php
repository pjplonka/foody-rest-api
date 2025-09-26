<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

/**
 * @property Product $product
 * @property int $amount
 */
class MealProduct extends Model
{
    /** @use HasFactory<\Database\Factories\MealProductFactory> */
    use HasFactory;

    protected $guarded = ['id'];

    public function product(): BelongsTo
    {
        return $this->belongsTo(Product::class);
    }

    public function summary(): array
    {
        return [
            'protein' => $this->product->protein ? ($this->amount / 100) * $this->product->protein : null
        ];
    }

    public function protein(): ?float
    {
        return null !== $this->product->protein ? round(($this->amount / 100) * ($this->product->protein)) : null;
    }

    public function carbs(): ?float
    {
        return null !== $this->product->carbs ? round(($this->amount / 100) * ($this->product->carbs)) : null;
    }

    public function fat(): ?float
    {
        return null !== $this->product->fat ? round(($this->amount / 100) * ($this->product->fat)) : null;
    }

    public function price(): ?float
    {
        return null !== $this->product->price ? round((($this->product->price / 10) * ($this->amount / 100)), 2) : null;
    }

    public function sugar(): ?float
    {
        return null !== $this->product->sugar ? round(($this->amount / 100) * ($this->product->sugar)) : null;
    }

    public function packages(): float
    {
        return $this->amount / 100;
    }

    public function calories(): ?float
    {
        if ($this->product->calories()) {
            return $this->packages() * $this->product->calories();
        }

        return null;
    }

    public function toArray(): array
    {
        return [
            'id' => $this->id,
            'name' => $this->product->name,
            'amount' => $this->amount,
            'protein' => $this->protein(),
            'carbs' => $this->carbs(),
            'fat' => $this->fat(),
            'sugar' => $this->sugar(),
            'price' => $this->price(),
            'calories' => $this->calories(),
            'product_id' => $this->product
        ];
    }
}
