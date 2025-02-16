<?php

namespace App\Models\Quality\Final;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TubeBreatherDLX extends Model
{
    use HasFactory;
    protected $primaryKey = 'sr_no';
    protected $table = 't_breather_dlx';
    protected $fillable = ['sr_no','date','month','day','year','extr_snl_lyr','blnk_ctng','vulcan','washing','fnl_ctng','date_code_prnt','clip_asmbl','prod','total'];

}
