 #!/bin/bash
apt-get update
apt -y install software-properties-common
add-apt-repository ppa:ondrej/php
apt-get update
apt -y install php7.1
apt-get install -y php7.1-cli php7.1-json php7.1-common php7.1-mysql php7.1-zip php7.1-gd php7.1-mbstring php7.1-curl php7.1-xml php7.1-bcmath
apt-get install -y php7.1-fpm
service php7.1-fpm start
service php7.1-fpm status
service nginx start
service --status-all