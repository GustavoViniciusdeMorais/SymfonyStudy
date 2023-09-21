# Symfony 4

### Entity and migration
```sh
php bin/console make:entity
php bin/console make:migration
php bin/console doctrine:migrations:migrate
```

### Hotel Entity Data
sudo docker exec -it -u 0 symysql sh
use laravel;
```sql
INSERT INTO hotel (id, name, description, price)
VALUES
(1, 'Test1', 'Test1', 100),
(2, 'Test2', 'Test2', 200),
(3, 'Test3', 'Test3', 300);
```