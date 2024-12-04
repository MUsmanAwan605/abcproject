<?php

namespace App\Models\Quality\Monthly;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MonthlyTubeBatteryBreatherKOKA extends Model
{
    use HasFactory;
    protected $primaryKey = 'sr_no';
    protected $table = 'monthly_tbtrybrthrkoka';
    protected $fillable = ['sr_no','date','month','year','opr_name','prod_qty','inspct_qty','inprcs_rjct','fnl_rjct'];
}