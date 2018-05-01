# A simple template for the directory on php

### Install base for mysql
cat base_for_template >> base_for_template.gz.b64

base64 -d < base_for_template.gz.b64 | gzip -d | mysql -uroot -p1 saee
