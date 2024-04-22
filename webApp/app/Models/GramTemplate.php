<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class GramTemplate extends Model
{
    use SoftDeletes;

    protected $table = 'gram_templates';

    protected $fillable = [
        'name',
        'content',
        'created_by',
        'updated_by',
        'deleted_at',
    ];

    public function getName()
    {
        return GramTemplate::get('name');
    }

    public function getContent(int $id)
    {
        return GramTemplate::where('id', $id)->get('content');
    }
}
