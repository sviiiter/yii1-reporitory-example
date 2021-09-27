<?php


  interface IProductStoreStrategy
  {

    /**
     * @return ProductStore[]
     */
    public function getAll(): array;

  }