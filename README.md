# SoluTech Code Challenge
> A Laravel/Vue Solution to SoluTech coding challenge


![](screeshot.png)

## Installation

### Prerequisites

```
NPM, a node package manager
Composer, a php package manager
MYSQL/MariaDb database
A server architecture with PHP >= 7.2
```
### Installation
```sh
1. Clone the repo from github to your designated folder.
2. Navigate to the root of your cloned project using a command line interface.
3. Run 'composer install' --this installs all PHP the dependecies required by the project.
4. Run 'npm install' --this installs all the Javascript dependecies used by the application.
5. Rename the .env.example in the root folder to .env
6. Open the .env file and fill out your database credentials.
7. Run 'php artisan key:generate' to generate a security key for your application
8. Run 'php artisan migrate' to recreate all the tables in your database
9. Run 'php artisan db:seed' to create a default user with makamuevans@gmail.com as email and evans123 as password
10. Run 'php artisan:serve' and access the url given to access your applictaion or instead use any server architecture you have to serve your app
```


## Development setup

While editing vue pages, ensure you run
```sh
npm run dev && npm run watch    --to keep track of all javascript changes and immediately recombile them
```
## Production setup
```sh
npm run production  --run before deploying your app so as to compile assets for production and minify them.
```

## Built With

* [Laravel](https://www.laravel.com/) - The web framework used
* [VueJs](https://vuejs.org/) - The JavaScript Framework used



## Meta

Developed by Makamu Evans

