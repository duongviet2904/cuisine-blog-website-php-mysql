# Cuisine Blog Website
The website for the blogs about cuisine using PHP native, MySQL and MVC Architechture

## Environment
- PHP: ^8.0
- Nginx/Apache
- Mysql: ^5.7

## Setup

1. Run```cp .env.example .env``` to create the Environment file
   
    (**Note:** If using apache, run```cp .htaccess.example .htaccess``` also)

2. Update the values for env variables on ```.env``` file
3. Go to ```backup``` folder and get the ```query.sql```, them import the database
4. Access ```http://localhost/``` or ```http://locahost/home```

**Note:** If your local device is using docker/docker-compose, please run ```docker-compose up``` after step 2, before step 3.
## Credits
- The MVC core is extended version from the [andrejrs/php-mvc-example](https://github.com/andrejrs/php-mvc-example), 
and plus more power classes.
- Frontend theme : [Stand Blog](https://templatemo.com/tm-551-stand-blog)
- Admin theme: [ArchitectUI HTML Theme Dashboard - v1.0.0](https://github.com/DashboardPack/architectui-html-theme-free)