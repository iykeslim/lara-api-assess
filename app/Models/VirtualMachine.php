<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VirtualMachine extends Model
{
    use HasFactory;

    protected $fillable = [
        'data_center_id',
        'CPU_Size',
        'RAM_Size',
        'HDD_Size',
    ];

    /**
     * Get the dataCenter that owns the VirtualMachine
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function dataCenter()
    {
        return $this->belongsTo(DataCenter::class, 'data_center_id');
    }
}
