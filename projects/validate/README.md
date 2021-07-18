## PHP UNIT
- Configurar archivo xml: phpunit.xml
```xml
<?xml version="1.0" encoding="utf-8" ?>
<phpunit bootstrap="vendor/autoload.php" colors="true">
    <testsuite name="Test Directory">
        <directory>tests</directory>
    </testsuite>
</phpunit>
```
- Crear carpeta tests
- Ejecutar tests
```bash
vendor/phpunit/phpunit/phpunit
# result console
PHPUnit 9.5.4 by Sebastian Bergmann and contributors.

No tests executed!
```
