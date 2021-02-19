<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;

  // overwrite the getRouteKeyName function, so that we can fetch an article by its slug instead of its id (its primary key)
  public function getRouteKeyName()
  {
    return 'slug'; // this should return the name of the column that you want to query by
    // behind the scenes, Laravel is doing the following
    // Article::where('slug', $article)->first()
    // "Give me the article where the value in the column 'slug' matches the input from the wildcard {$article}
    // from routes/web.php Route::get('/articles/{article}' "
  }  
}
