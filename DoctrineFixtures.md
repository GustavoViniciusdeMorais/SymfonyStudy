# doctrine-fixtures-bundle

### .env
```
DATABASE_URL="mysql://root:laravel@mysql:3306/laravel"
```

### Build a migration script
```
bin/console doctrine:migrations:generate

Result: ./migrations/Version20221211145300.php
```

### ./migrations/Version20221211145300.php
```php
public function up(Schema $schema): void
{
    $myTable = $schema->createTable("products");
        $myTable->addColumn("id", "integer", ["unsigned" => true, "autoincrement" => true]);
        $myTable->addColumn("name", "string", ["length" => 255]);
        $myTable->addColumn("price", "decimal", ["precision" => 10, "scale" => 2]);
        $myTable->setPrimaryKey(["id"]);
}
```

### Run migration
```
bin/console doctrine:migrations:migrate 'DoctrineMigrations\Version20221211145300'
```

### Build the entity
Fill the entity name and attributes infos in the console
options that will appear
```
bin/console make:entity
```

### ./src/Entity/Product.php
```php
#[ORM\Table(name: 'products')]
class Product
{
    // code ...
}
```

### Install doctrine fixture package
```
composer require --dev doctrine/doctrine-fixtures-bundle
```

### Build fixture
Build the class where you will populate the table
```
bin/console make:fixtures GustavoFixtures
```

### ./src/DataFixtures/GustavoFixtures.php
```php
namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use App\Entity\Product;
use Doctrine\Bundle\FixturesBundle\FixtureGroupInterface;

class GustavoFixtures extends Fixture implements FixtureGroupInterface
{

    public static function getGroups(): array
    {
        return ['group3'];
    }

    public function load(ObjectManager $manager): void
    {
        for ($i = 0; $i < 20; $i++) {
            $product = new Product();
            $product->setName("Test{$i}");
            $product->setPrice('800.90');
            $manager->persist($product);
        }

        $manager->flush();
    }
}
```

### Run fixture
```
bin/console doctrine:fixtures:load --group=group3 --append
```

### ./config/routes.yaml
```yaml
app_products:
    path: /products
    controller: App\Controller\ProductsController::index
```

### ./src/Repository/ProductRepository.php
```php
class ProductRepository extends ServiceEntityRepository
{
    public function all()
    {
        $qb = $this->createQueryBuilder('p')
            ->orderBy('p.id', 'ASC');

        $query = $qb->getQuery();

        return $query->execute();
    }
}
```

### ./src/Controller/ProductsController.php
```php
class ProductsController extends AbstractController
{
    #[Route('/products', name: 'app_products')]
    public function index(): Response
    {
        $products = $this->productRepository->all();

        return $this->render('products/index.html.twig', [
            'controller_name' => 'ProductsController',
            'products' => $products
        ]);
    }
}
```

### ./templates/products/index.html.twig
```php
<strong>Products</strong>
{% for product in products %}
    {{ product.id }}: {{ product.name }}
{% endfor %}
```
