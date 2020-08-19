<?php 
namespace App\Http\Services;

use App\Http\Repositories\CategoryRepo;
use App\Models\Category;

class CategoryService {
    protected $categoryRepo;

    public function __construct(CategoryRepo $categoryRepo)
    {
        $this->categoryRepo = $categoryRepo;
    }

    public function getAll() {
        return $this->categoryRepo->getAll();
    }

    public function getById($id) {
        return $this->categoryRepo->getById($id);
    }

    public function add($request) {
        $newCategory = new Category();
        $newCategory->name = $request->name;
        $newCategory->vendor = $request->vendor;
        $this->categoryRepo->save($newCategory);

    }

    public function update($request,$id){
        $editProduct = $this->categoryRepo->getById($id);
        $editProduct->name = $request->name;
        $editProduct->vendor = $request->vendor;
        $this->categoryRepo->save($editProduct);
    }

    public function delete($id) {
        $delProduct = $this->categoryRepo->getById($id);
        $this->categoryRepo->delete($delProduct);
    }

}