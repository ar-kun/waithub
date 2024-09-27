<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class MerchantCategory
 * 
 * @property int $id
 * @property int $merchant_id
 * @property int $category_id
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property Category $category
 * @property Merchant $merchant
 *
 * @package App\Models
 */
class MerchantCategory extends Model
{
	protected $table = 'merchant_categories';

	protected $casts = [
		'merchant_id' => 'int',
		'category_id' => 'int'
	];

	protected $fillable = [
		'merchant_id',
		'category_id'
	];

	public function category()
	{
		return $this->belongsTo(Category::class);
	}

	public function merchant()
	{
		return $this->belongsTo(Merchant::class);
	}
}
