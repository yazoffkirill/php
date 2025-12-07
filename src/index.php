<?php
// Автозагрузка классов

spl_autoload_register(function ($class) {
    include 'src/' . str_replace('App\\', '', $class) . '.php';
});

use App\MagicClass;

echo "=== Демонстрация магических методов ===\n\n";

// 1. __construct
echo "1. Создание объекта (__construct):\n";
$obj = new MagicClass();
echo "\n";

// 2. __set и __get
echo "2. Установка и получение свойства (__set, __get):\n";
$obj->testProperty = 'value';
$value = $obj->testProperty;
echo "\n";

// 3. __isset и __unset
echo "3. Проверка и удаление свойства (__isset, __unset):\n";
isset($obj->test);
unset($obj->test);
echo "\n";

// 4. __call
echo "4. Вызов несуществующего метода (__call):\n";
$obj->undefinedMethod();
echo "\n";

// 5. __callStatic
echo "5. Статический вызов несуществующего метода (__callStatic):\n";
MagicClass::staticUndefinedMethod();
echo "\n";

// 6. __toString
echo "6. Преобразование в строку (__toString):\n";
echo $obj;
echo "\n";

// 7. __invoke
echo "7. Вызов объекта как функции (__invoke):\n";
$obj();
echo "\n";

// 8. __clone
echo "8. Клонирование объекта (__clone):\n";
$obj2 = clone $obj;
echo "\n";

// 9. __sleep и __wakeup (serialize)
echo "9. Сериализация (__sleep, __serialize):\n";
$serialized = serialize($obj);
echo "Сериализовано\n";

echo "10. Десериализация (__wakeup, __unserialize):\n";
$obj3 = unserialize($serialized);
echo "\n";

// 11. __debugInfo
echo "11. Отладочная информация (__debugInfo):\n";
var_dump($obj);
echo "\n";

// 12. __destruct (при уничтожении объекта)
echo "12. Уничтожение объектов (__destruct):\n";
unset($obj, $obj2, $obj3);
echo "Конец скрипта - __destruct вызовется автоматически\n";
