<?php 
namespace App\Http\Repositories;

use App\Models\Store;

class StoreRepo {
    protected $store;

    public function __construct(Store $store)
    {
        $this->store = $store;
    }

    public function getAll() {
        return $this->store->all();
    }

    public function getById($id) {
        return $this->store->findOrFail($id);
    }

    public function save($newStore) {
        $newStore->save();
    }

    public function delete($delStore) {
        $delStore->delete();
    }
    
}
