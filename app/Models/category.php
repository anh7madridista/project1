<?php 
namespace App\Models;
use Illuminate\Database\Eloquent\Model;
class category extends Model
{
	protected $table  ="product";
	public $timestamps = false;
	protected $fillable = ['name','category_id','price','sale_price'];
}
/**
 * summary
 */


?>