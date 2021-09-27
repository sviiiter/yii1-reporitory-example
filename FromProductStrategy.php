<?php


  class FromProductStrategy implements IProductStoreStrategy
  {

    /**
     * @var Product[]
     */
    private $_products;


    /**
     * @param Product[] $products
     */
    public function __construct(array $products) {
      $this->_products = $products;
    }


    /**
     * @inheritDoc
     */
    public function getAll(): array {
      return array_reduce($this->_products, function ($carry, Product $i) {
        $stores = $i->stores;

        return array_merge($carry, $stores);
      }, []);
    }

  }