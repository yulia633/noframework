![linter](https://github.com/yulia633/noframework/workflows/linter/badge.svg)

Практический курс в качестве справочного материала для книги
[Professional PHP: Learn how to build maintainable and secure applications
](http://patricklouys.com/professional-php/).

### Использование

1. Запустить приложение

    ```sh
    make start
    ```

2. Сделать миграции

    ```sh
    make migrate

    [0] All
    [1] Migration202205201011
    [2] Migration202205172209
    Select the migration that you want to run: 0
    ```

3. Остановить приложение

    ```sh
    Ctr + C
    ```
    или найти процесс и остановить


### Используемые инструменты
- [PHP](https://www.php.net/downloads.php)
- [Composer](https://getcomposer.org/)
- [Tracy - PHP debugger](https://github.com/nette/tracy)
- [FastRoute](https://github.com/nikic/FastRoute)
- [Symfony HttpFoundation Request](https://symfony.com/doc/current/components/http_foundation.html#request)
- [Symfony HttpFoundation Response](https://symfony.com/doc/current/components/http_foundation.html#response)
- [Auryn Dependency Injector](https://github.com/rdlowrey/Auryn#injection-definitions)
- [Twig Templating](https://twig.symfony.com/doc/3.x/intro.html)
- [DBAL](https://www.doctrine-project.org/projects/dbal.html)
- [Ramsey/uuid](https://github.com/ramsey/uuid)


### Рассмотренные темы
1. Front Controller
2. Bootstrapping
3. Dependency Injection
4. Templating and Cross-site Scripting
5. Application Layer
6. Infrastructure Layer
7. Cross-site Request Forgery
8. SQL Injection
9. Registration
10. Authentication
11. Authorization