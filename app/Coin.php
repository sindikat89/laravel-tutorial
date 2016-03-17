<?php

namespace app;

use Illuminate\Database\Eloquent\Model;

class Coin extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'coins';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = array(
                        'total', 'admin_id' );

    public function admin()
    {
        return $this->belongsTo('App\Admin');
    }

}
