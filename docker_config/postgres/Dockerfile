FROM postgres
RUN apt update
RUN apt-get install -y vim
COPY init.sql /docker-entrypoint-initdb.d/