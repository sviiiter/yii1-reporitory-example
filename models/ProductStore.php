<?php


  /**
   * Class ProductStore
   *
   * @property Store $store
   */
  class ProductStore extends CActiveRecord
  {
    public function tableName() {
      return 'product_store';
    }

    public function relations() {
      return [
        'store' => [self::BELONGS_TO, Store::class, 'store_id']
      ];
    }
  }