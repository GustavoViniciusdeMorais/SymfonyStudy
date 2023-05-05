 #!/bin/bash
bin/console doctrine:migrations:execute 'DoctrineMigrations\Version20230504213426' --up
bin/console doctrine:fixtures:load --group=CategoryFixture --append