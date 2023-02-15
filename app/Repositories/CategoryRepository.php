<?php
namespace  App\Repositories;
use App\Models\Item;
use\App\Repositories\interfaces\CategoryRepositoryInterface;

class CategoryRepository implements CategoryRepositoryInterface{
    public function all(){
        return Item ::all();
    }
}