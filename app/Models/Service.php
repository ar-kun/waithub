<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Service
 * 
 * @property int $id
 * @property int $merchant_id
 * @property string $name
 * @property string $description
 * @property string $price
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property Merchant $merchant
 * @property Collection|Queue[] $queues
 *
 * @package App\Models
 */
class Service extends Model
{
	protected $table = 'services';

	protected $casts = [
		'merchant_id' => 'int'
	];

	protected $fillable = [
		'merchant_id',
		'name',
		'description',
		'price'
	];

	public function merchant()
	{
		return $this->belongsTo(Merchant::class);
	}

	public function queues()
	{
		return $this->hasMany(Queue::class);
	}
}
