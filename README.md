# Object Converter for DevelNext
#### [**Документация на русском ниже.**](#russian-languageрусский-язык)
## English language

I made a script with which the object can be converted to an array or to json.
Its minus is that it does not convert all functions and data into objects, but only class variables.

### Its array view looks like this
```php
$array = [
  'class' => 'php\gui\UXButton',
  'classVars' => [
    'param1' => 'text',
    'param2' => [],
    'param3' => 123,
    'param4' => true
  ]
];

$array['classVars']['nameParam'] = 'value'; // nameParam - name property, value - value property.
```

### How to use?
* Class OC
  - [**OC::isObjArr($object) : Array**](#ocobjtoarrobject--array)
  - [**OC::objToJson($object) : Json**](#ocobjtojsonobject--json)
  - [**OC::arrToObj($array) : Object**](#ocarrtoobjarray--object)
  - [**OC::jsonToObj($json) : Object**](#ocjsontoobjjson--object)
  - [**OC::isObjArr($array) : Boolean**](#ocisobjarrarray--boolean)

#### OC::objToArr($object) : Array

Returns an array with the transformed object.

$object - this is an object

#### OC::objToJson($object) : Json

Performs the same as [**OC::objToArr($object) : $array**](#ocobjtoarrobject--array) only instead of json array.

#### OC::arrToObj($array) : Object

Returns an object from an array.

$object - this is an object.

#### OC::jsonToObj($json) : Object

Performs the same as [**OC::arrToObj($array) : $object**](#ocarrtoobjarray--object) only instead of json array.

#### OC::isObjArr($array) : Boolean

Returns true or false if the array is a transformed object.

$array - this is an object.

### How to put?

1)In the project folder > src, you need to create any folder, for example: thumb, scripts, etc.

2)Move the script to this folder

3)Next in the form/module/script, in the line where use add nameFolder\OC;
```php
use nameFolder\OC;
```

## Russian language/Русский язык

Я сделал скрипт, с помощью которого объект можно преобразовать в массив или в json.
Его минус в том, что он не преобразует все функции и данные в объекты, а только в переменные класса.

### Его вид массива выглядит так
```php
$array = [
  'class' => 'php\gui\UXButton',
  'classVars' => [
    'param1' => 'текст',
    'param2' => [],
    'param3' => 123,
    'param4' => true
  ]
];

$array['classVars']['имя переменной'] = 'значение'; // имя переменной - имя свойтва, значение - значение для свойтва.
```

### Как пользоваться?
* Класс OC
  - [**OC::isObjArr($object) : Array**](#ru-ocobjtoarrobject--array)
  - [**OC::objToJson($object) : Json**](#ru-ocobjtojsonobject--json)
  - [**OC::arrToObj($array) : Object**](#ru-ocarrtoobjarray--object)
  - [**OC::jsonToObj($json) : Object**](#ru-ocjsontoobjjson--object)
  - [**OC::isObjArr($array) : Boolean**](#ru-ocisobjarrarray--boolean)

#### (ru) OC::objToArr($object) : Array

Возвращает массив с преобразованным объектом.

$object - это объект

#### (ru) OC::objToJson($object) : Json

Выполняет тоже самое что и [**OC::objToArr($object) : $array**](#ru-ocobjtoarrobject--array) только вместо массива json.

#### (ru) OC::arrToObj($array) : Object

Возвращает объект из массива.

$object - это объект

#### (ru) OC::jsonToObj($json) : Object

Выполняет тоже самое что и [**OC::arrToObj($array) : $object**](#ru-ocarrtoobjarray--object) только вместо массива json.

#### (ru) OC::isObjArr($array) : Boolean

Возвращает true или false, если массив это преобразованный объект.

$array - это массив.

### Как поставить?

1)В папке проекта > src надо создать любую папку, например: thumb, scripts и т.д.

2)Перемещаем скрипт в эту папку

3)Далее в форме/модуле/скрипте к use приписуем nameFolder\OC;
```php
use nameFolder\OC;
```
