<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Models\Category;
use App\Models\Collection;
use Illuminate\Database\Eloquent\Casts\Attribute;

class Product extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'article', 'title', 'description', 'price', 'category_id', 'collection_id', 'height', 'picture', 'discount'
       ];
    
    public function category() : BelongsTo
    {
        return $this->belongsTo(Category::class);
    }

    public function collection() : BelongsTo
    {
        return $this->belongsTo(Collection::class);
    }

    public function price(): Attribute
    {
        return Attribute::make(
            get: fn ($value) => $value / 100
        );
    }

    public function issetDiscount(): bool
    {
        return $this->discount ? true : false;
    }

    public function getPriceWithDiscount(): float
    {
        if ($this->discount == 0)
            return $this->price;

        $price = $this->price - ($this->price * $this->discount / 100);
        return $price; 
    }
}
