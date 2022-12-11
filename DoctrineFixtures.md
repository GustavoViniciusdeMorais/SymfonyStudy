# doctrine-fixtures-bundle

```
```

### .env
```
DATABASE_URL="mysql://root:laravel@mysql:3306/laravel"
```

### Build the entity
Fill the entity name and attributes infos in the console
options that will appear
```
bin/console make:entity
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

### Build a migration script
```
bin/console doctrine:migrations:generate

Result: ./migrations/Version20221211145300.php
```

### Build DB table script example
```php
$schema = new \Doctrine\DBAL\Schema\Schema();
$myTable = $schema->createTable("my_table");
$myTable->addColumn("id", "integer", ["unsigned" => true]);
$myTable->addColumn("username", "string", ["length" => 32]);
$myTable->setPrimaryKey(["id"]);
$myTable->addUniqueIndex(["username"]);
$myTable->setComment('Some comment');
$schema->createSequence("my_table_seq");
```

### Run and undo migration
```
bin/console migrations:execute --up 'DoctrineMigrations\Version20221211145300'

bin/console migrations:execute --down 'DoctrineMigrations\Version20221211145300'
```
