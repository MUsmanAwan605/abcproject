<?php

namespace App\Models\Quality\Inline;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InlineTube8X150CG125 extends Model
{
    use HasFactory;
    protected $primaryKey = 'sr_no';
    protected $table = 'inline_t_8X150_cg125';
    protected $fillable = ['sr_no','date','month','day','year','extr_btm_lyr','extr_top_lyr','blnk_ctng_tlyr','vulcan_tlyr','washing','fnl_ctng_tlyr','date_code_prnt','prod','total'];
}
