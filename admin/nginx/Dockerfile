FROM ubuntu
# Installer tous les paquets nécessaires :
RUN apt-get update \
    && apt-get install -y apt-utils \
    && apt-get install -y nginx \
    && apt-get install -y php-fpm php-mysql \ 
    && apt-get install -y nano
# Placer les configurations des sites
COPY ./configWeb/default /etc/nginx/sites-available/
COPY ./configWeb/caponweb /etc/nginx/sites-available/
COPY ./configWeb/caponweb /etc/nginx/sites-available/

# Copier les configurations dans sites-enabled
RUN ln -s /etc/nginx/sites-available/caponweb /etc/nginx/sites-enabled/
RUN ln -s /etc/nginx/sites-available/caponweb /etc/nginx/sites-enabled/

# Modifier la configuration par défaut de PHP7.0 en passant le paramètres cgi.fix_pathinfo à 0
RUN sed -i -e 's/;cgi.fix_pathinfo=1/cgi.fix_pathinfo=0/g' /etc/php/7.3/fpm/php.ini


RUN nginx -t

# Exposer les ports
EXPOSE 80 443

# Lancer PHP et nginx en mode démon
CMD service php7.3-fpm start && nginx -g "daemon off;"
