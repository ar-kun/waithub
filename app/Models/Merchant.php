<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Merchant
 * 
 * @property int $id
 * @property string $name
 * @property string $location
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property Collection|MerchantCategory[] $merchant_categories
 * @property Collection|Queue[] $queues
 * @property Collection|Service[] $services
 *
 * @package App\Models
 */
class Merchant extends Model
{
	protected $table = 'merchants';

	protected $fillable = [
		'name',
		'location'
	];

	public function merchant_categories()
	{
		return $this->hasMany(MerchantCategory::class);
	}

	public function queues()
	{
		return $this->hasMany(Queue::class);
	}

	public function services()
	{
		return $this->hasMany(Service::class);
	}
}
