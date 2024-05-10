<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Orders extends Model
{
    use HasFactory;
    protected $primaryKey='order_id';
    public function getStatusTextAttribute(){
    if($this->status==1)
      return "placed";
    else
    return "cancelled";
   }
   protected $appends=['statustext'];

}
