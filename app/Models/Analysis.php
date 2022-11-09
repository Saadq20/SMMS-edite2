<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Analysis extends Model
{
    public $table="analysis";
   
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'twitter_count',
        'facebook_count',
        'user_id',
  
    ];
    public function author()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}