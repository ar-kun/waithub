<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Queue
 * 
 * @property int $id
 * @property int $user_id
 * @property int $merchant_id
 * @property int $service_id
 * @property string $queue_number
 * @property string $status
 * @property Carbon|null $created_at
 * @property Carbon|null $updated_at
 * 
 * @property Merchant $merchant
 * @property Service $service
 * @property User $user
 *
 * @package App\Models
 */
class Queue extends Model
{
	protected $table = 'queues';

	protected $casts = [
		'user_id' => 'int',
		'merchant_id' => 'int',
		'service_id' => 'int'
	];

	protected $fillable = [
		'user_id',
		'merchant_id',
		'service_id',
		'queue_number',
		'status'
	];

	public function merchant()
	{
		return $this->belongsTo(Merchant::class);
	}

	public function service()
	{
		return $this->belongsTo(Service::class);
	}

	public function user()
	{
		return $this->belongsTo(User::class);
	}
}
