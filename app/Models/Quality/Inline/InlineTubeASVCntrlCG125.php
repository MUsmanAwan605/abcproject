<?php

namespace App\Models\Quality\Inline;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InlineTubeASVCntrlCG125 extends Model
{
    use HasFactory;
    protected $table = 'inline_t_asvcntrl_cg125';
    protected $primaryKey = 'sr_no';
    protected $fillable = ['sr_no','date','month','day','year','extr_btm_lyr','extr_top_lyr','blnk_ctng_tlyr','vulcan_tlyr','washing','fnl_ctng_tlyr','extr_vtube','vulcan_vtube','fnl_ctng_vtube','vtube_asmbl','date_code_prnt','clip_asmbl','tube_prod','total'];
}