<?php 
namespace App\Http\Services;

use App\Http\Repositories\StoreRepo;
use App\Models\Store;

class StoreService {
    protected $storeRepo;

    public function __construct(StoreRepo $storeRepo)
    {
        $this->storeRepo = $storeRepo;
    }

    public function getAll() {
        return $this->storeRepo->getAll();
    }

    public function getById($id) {
        return $this->storeRepo->getById($id);
    }

    public function add($request) {
        $store = new Store();
        $store->name = $request->name;
        $this->storeRepo->save($store);
    }

    public function update($request,$id) {
        $store = $this->storeRepo->getById($id);
        $store->name = $request->name;
        $this->storeRepo->save($store);
    }

    public function delete($id) {
        $store = $this->storeRepo->getById($id);
        $this->storeRepo->delete($store);
    }

}