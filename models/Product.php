<?php

  /**
   * Class Product
   *
   * @property ProductStore[] $stores
   */
  class Product extends CActiveRecord
  {

    public function tableName() {
      return 'product';
    }


    public function relations() {
      return [
        'stores' => array(self::HAS_MANY, ProductStore::class, ['product_id' => 'product_id'])
      ];
    }

  }