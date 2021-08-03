<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class ProductListModal extends Model{
    public $table = 'product_list';
    public $primaryKey = 'id';
    public $incrementing = true;
    public $keyType = 'int';
    public $timestamps = false;
}
