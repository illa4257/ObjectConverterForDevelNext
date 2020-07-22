# Object Converter for DevelNext

![Splash](https://github.com/illa4257/ObjectConverterForDevelNext/blob/master/splash.png)

## About Converter/О конверторе

Object Converter for DevelNext/Конвертер объектов для DevelNext.

You can convert to: array and JSON.

Вы можете конверитировать в: массив и JSON.

If anything, the [**script**](https://github.com/illa4257/ObjectConverterForDevelNext/releases) can be changed/если что, [**скрипт**](https://github.com/illa4257/ObjectConverterForDevelNext/releases) можно изменять =)

[**Документация на русском ниже.**](#russian-languageрусский-язык)

## English language

I made a script with which the object can be converted to an array or to json.
Its minus is that it does not convert all functions and data into objects, but only class variables.

### Its array view looks like this
```php
$array = [
  'class' => 'php\gui\UXButton',
  'classVars' => [
    'variable1' => 'text',
    'variable2' => [],
    'variable3' => 123,
    'variable4' => true
  ]
];

$array['classVars']['nameVariable'] = 'value'; // nameVariable - name property, value - value property.
```

### How to use?
* Class OC
  - [**OC::objToArr($object) : Array**](#ocobjtoarrobject--array)
  - [**OC::objToJson($object) : Json**](#ocobjtojsonobject--json)
  - [**OC::arrToObj($array) : Object**](#ocarrtoobjarray--object)
  - [**OC::jsonToObj($json) : Object**](#ocjsontoobjjson--object)
  - [**OC::isObjArr($array) : Boolean**](#ocisobjarrarray--boolean)
  - [**OC::isObjJson($json) : Boolean**](#ocisobjjsonjson--boolean)

#### OC::objToArr($object) : Array

Returns an array with the transformed object.

$object - this is an object

#### OC::objToJson($object) : Json

Performs the same as [**OC::objToArr($object) : Array**](#ocobjtoarrobject--array) only instead of json array.

#### OC::arrToObj($array) : Object

Returns an object from an array.

$object - this is an object.

#### OC::jsonToObj($json) : Object

Performs the same as [**OC::arrToObj($array) : Object**](#ocarrtoobjarray--object) only instead of json array.

#### OC::isObjArr($array) : Boolean

Returns true or false if the array is a transformed object.

$array - this is an object.

#### OC::isObjJson($json) : Boolean

Performs the same as [**OC::isObjArr($array) : Boolean**](#ocisobjarrarray--boolean) only instead of json array.

### How to put?

#### 1 way with a [**bundle**](https://github.com/illa4257/ObjectConverterForDevelNext/releases) (dn-oc-bundle.dnbundle)

##### 1)Open DevelNext

##### 2)Open any project

##### 3)Go to the Project tab> Packages and click on "Add Package from File" and find [**.dnbundle**](https://github.com/illa4257/ObjectConverterForDevelNext/releases)

#### 2 way with a [**script**](https://github.com/illa4257/ObjectConverterForDevelNext/releases) (OC.php)

##### 1)In the project folder > src, you need to create any folder, for example: thumb, scripts, etc.(If the folder name is not scripts, then inside the php file, you need to change "namespace scripts;"  on "namespace folderName;")

##### 2)Move the [**script**](https://github.com/illa4257/ObjectConverterForDevelNext/releases) to this folder

##### 3)Next in the form/module/script, in the line where use add nameFolder\OC;
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
    'переменная1' => 'текст',
    'переменная2' => [],
    'переменная3' => 123,
    'переменная4' => true
  ]
];

$array['classVars']['имя переменной'] = 'значение'; // имя переменной - имя свойтва, значение - значение для свойтва.
```

### Как пользоваться?
* Класс OC
  - [**OC::objToArr($object) : Array**](#ru-ocobjtoarrobject--array)
  - [**OC::objToJson($object) : Json**](#ru-ocobjtojsonobject--json)
  - [**OC::arrToObj($array) : Object**](#ru-ocarrtoobjarray--object)
  - [**OC::jsonToObj($json) : Object**](#ru-ocjsontoobjjson--object)
  - [**OC::isObjArr($array) : Boolean**](#ru-ocisobjarrarray--boolean)
  - [**OC::isObjJson($json) : Boolean**](#ru-ocisobjjsonjson--boolean)

#### (ru) OC::objToArr($object) : Array

Возвращает массив с преобразованным объектом.

$object - это объект

#### (ru) OC::objToJson($object) : Json

Выполняет тоже самое что и [**OC::objToArr($object) : Array**](#ru-ocobjtoarrobject--array) только вместо массива json.

#### (ru) OC::arrToObj($array) : Object

Возвращает объект из массива.

$object - это объект

#### (ru) OC::jsonToObj($json) : Object

Выполняет тоже самое что и [**OC::arrToObj($array) : Object**](#ru-ocarrtoobjarray--object) только вместо массива json.

#### (ru) OC::isObjArr($array) : Boolean

Возвращает true или false, если массив это преобразованный объект.

$array - это массив.

#### (ru) OC::isObjJson($json) : Boolean

Выполняет тоже самое что и [**OC::isObjArr($array) : Boolean**](#ru-ocisobjarrarray--boolean) только вместо массива json.

### Как поставить?

#### 1 способ с [**пакетом**](https://github.com/illa4257/ObjectConverterForDevelNext/releases) (dn-oc-bundle.dnbundle)

##### 1)Открываете DevelNext

##### 2)Открываете любой проект

##### 3)Заходите во вкладку Проект > Пакеты и нажимаете на "Добавить пакет из файла" и находите .dnbundle

#### 2 способ со [**скриптом**](https://github.com/illa4257/ObjectConverterForDevelNext/releases) (OC.php)

##### 1)В папке проекта > src надо создать любую папку, например: thumb, scripts и т.д.(Если имя папки не scripts, то внутри php-файла, надо поменять "namespace scripts;" на "namespace имяПапки;")

##### 2)Перемещаем [**скрипт**](https://github.com/illa4257/ObjectConverterForDevelNext/releases) в эту папку

##### 3)Далее в форме/модуле/скрипте к use приписуем nameFolder\OC;
```php
use nameFolder\OC;
```
