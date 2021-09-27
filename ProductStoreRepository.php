<?php


  class ProductStoreRepository
  {

    private $_strategy; // strategy


    public function __construct(IProductStoreStrategy $_strategy) {
      $this->_strategy = $_strategy;
    }


    public function enabled(): array {
      $models = $this->_strategy->getAll();

      return array_filter($models, function (ProductStore $s) {
        return $s->store->is_enabled == 0;
      });
    }


    public function getWeaks() {
      $models = $this->_strategy->getAll();

      return array_filter($models, function (ProductStore $s) {
        return $s->_updated < strtotime('-2 month');
      });
    }


    public function notEmpty() {
      $models = $this->_strategy->getAll();

      return array_filter($models, function (ProductStore $s) {
        return $s->quantity > 0;
      });
    }

    // E.T.C.
  }