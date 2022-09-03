GRANT USAGE ON *.* TO 'slave_read_user'@'%' IDENTIFIED BY 'password';
GRANT REPLICATION SLAVE ON *.* TO slave_read_user@'%';
FLUSH PRIVILEGES;