<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DataCenter extends Model
{
    use HasFactory;

    protected $fillable = [
        'name'
    ];

    /**
     * Get all of the virtualMachines for the DataCenter
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function virtualMachines()
    {
        return $this->hasMany(VirtualMachine::class);
    }
}
