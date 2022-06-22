SELECT 'CREATE USER klanadmin' where not exists (select from pg_user where usename = 'klanadmin')\gexec

SELECT 'CREATE DATABASE klan' WHERE NOT EXISTS (SELECT FROM pg_database WHERE datname = 'klan')\gexec

GRANT ALL PRIVILEGES
ON DATABASE klan TO klanadmin;