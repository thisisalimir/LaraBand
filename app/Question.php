<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class QuestionsTableSeeder
 * @package App
 */
class Question extends Model
{
    /**
     * @var array
     */
    protected $guarded = [];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo(User::class)
                ->select(['id','name']);
    }
}
