<?php

namespace App;

use App\User;
use Illuminate\Database\Eloquent\Model;

/**
 * @property mixed user_id
 */
class Task extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name','task_picture'];

    /**
     * Get the user that owns the task.
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}