## GoInterpreter written in PHP

```php
<?php

require_once 'vendor/autoload.php';

$runner = new \GoInterpreter\Runner();
$runner->run('/path/to/gofile', 'func_name');
```
