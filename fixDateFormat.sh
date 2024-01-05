#!/bin/sh
oracle_date_format='d-M-y'
file_1='vendor/codeigniter4/shield/src/Models/UserModel.php'
file_2='vendor/codeigniter4/shield/src/Models/UserIdentityModel.php'
sed -i "s/Y-m-d H:i:s/${oracle_date_format}/" ${file_1}
sed -i "s/Y-m-d H:i:s/${oracle_date_format}/" ${file_2}
