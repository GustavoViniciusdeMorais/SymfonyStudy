 #!/bin/bash
apt-get update
apt -y install software-properties-common
add-apt-repository ppa:ondrej/php
apt-get update
apt -y install php7.0
apt-get install -y php7.0-cli php7.0-json php8-common php8-mysql php8-zip php8-gd php8-mbstring php8-curl php8-xml php8-bcmath
apt-get install -y php7.0-fpm
service php7.0-fpm start
service php7.0-fpm status
service nginx start
service --status-all