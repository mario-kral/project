<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
//    protected $guarded = []; - if you know what your are doing you can use 'guarded' is oposite of 'fillable'
// use guarded function only if you are sure that nobody will do: Project::crate(request()->all()); - otherwise somebody can malicously edit form and add hidden input to compromise data
/*    protected $fillable = [
        'title', 'description'
    ];
*/
    protected $guarded = [];

    public function tasks()
    {
        return $this->hasMany(Task::class);
    }
}
