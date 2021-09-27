# Implemintation of Repository pattern for ActiveRecord(yii1 example)

## The sketch described how to use Active Record in Repository pattern context

Profit:

- available to test
- divide Active Record model and extracting data


````
$repo = (new ProductStoreRepository(new FromProductStrategy($product->stores)));

$a = $repo->enabled();
$b = $repo->getWeaks();
$c = $repo->notEmpty();

````
