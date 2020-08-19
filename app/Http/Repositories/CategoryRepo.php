<?php 
namespace App\Http\Repositories;

use App\Models\Category;

class CategoryRepo {
    protected $category;

    public function __construct(Category $category)
    {
        $this->category = $category;
    }

    public function getAll() {
        return $this->category->all();
    }

    public function getById($id) {
        return $this->category->findOrFail($id);
    }

    public function save($newCategory) {
        $newCategory->save();
    }

    public function delete($delCategory) {
        $delCategory->delete();
    }

}   