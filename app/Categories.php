<?php

namespace App;
use Kalnoy\Nestedset\NodeTrait;

use Illuminate\Database\Eloquent\Model;


class Categories extends Model
{
    use NodeTrait;

    protected $table = 'categories';

    protected $fillable = [
        'name', 'parent_id', 'slug',
    ];



    public static function getTree()
    {
        $categories = self::get()->toTree();
        $traverse = function ($categories, $prefix = '-') use (&$traverse, &$allCats) {

            foreach ($categories as $category) {
                $allCats[] = ["name" => $prefix.' '.$category->name, "id" => $category->id];
                $traverse($category->children, $prefix.'-');
            }

            return $allCats;
        };

        return $traverse($categories);
    }

    public function post()
    {
        return $this->hasMany('App\Posts', 'category_id', 'id');
    }

    public function product()
    {
        return $this->hasMany('App\Product', 'category_id', 'id');
    }
}
