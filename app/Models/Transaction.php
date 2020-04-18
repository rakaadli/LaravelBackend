<?php

namespace App\Models;
use Illuminate\Database\Eloquent\SoftDeletes;

use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'uuid','name','email','number','address','transaction_total','transaction_status'
    ];

    protected $hidden = [
     
    ];

    public function details()
    {
        return $this-> hasmany(TransactionDetail::class, 'transactions_id');
    }
}
