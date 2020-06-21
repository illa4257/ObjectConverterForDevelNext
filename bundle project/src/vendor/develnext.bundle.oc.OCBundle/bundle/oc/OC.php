<?php
namespace bundle\oc;

use std, Exception, facade\Json;

/**
 * Class Object Converter
 * 
 * --RU--
 * Класс Конвертора для объектов
 *
 */
class OC 
{

    /**
     * Object to array
     * --RU--
     * Объект в массив
     *
     * @param $obj
     * @return array
     */
    public static function objToArr($obj){
        $objArr = [];
        $objArr['class'] = get_class($obj);
        $l = arr::keys(get_class_vars($obj));
        $arr = [];
        $i = 0;
        while($l[$i]!=null){
            $key = $l[$i];
            $value = $obj->$key;
            $type = gettype($value);
            $ReflectionProperty = new ReflectionProperty($obj, $key);
            if($type=='object'){
                $class = get_class($value);
                if($class!='php\gui\text\UXFont' and $class!='php\gui\paint\UXColor'){
                    if($key!='root' and $key!='window' and $key!='scene' and $key!='layout' and $key!='form'){
                        try {
                            $arr[$key] = self::objToArr($value);
                        } catch (Exception $e) {
                            Logger::error($key . '/' . $class . ':Произошла ошибка - ' . $e->getMessage());
                        }
                    }
                }else{
                    if($class=='php\gui\paint\UXColor'){
                        $arr[$key] = $value->getWebValue();
                    }elseif($class=='php\gui\text\UXFont'){
                        $arr[$key] = ['class' => 'php\gui\text\UXFont', 'classVars' => [
                            'name' => $value->name,
                            'family' => $value->family,
                            'size' => $value->size,
                            'style' => $value->style]
                        ];
                    }
                }
            }elseif($type=='string' or $type=='boolean' or $type=='double' or $type=='array' or $type=='integer'){
                    if($ReflectionProperty->isPublic())
                    if(!$ReflectionProperty->isPrivate())
                    if(!$ReflectionProperty->isProtected())
                    if(!$ReflectionProperty->isStatic()){
                        if($type=='boolean' and $value!=true)
                            $value = false;
                        $arr[$key] = $value;
                    }
            }elseif($type=='NULL'){
                $arr[$key] = null;
            }else{
                Logger::info($type);
                var_dump($value);
            }
            $i++;
        }
        $objArr['classVars'] = $arr;
        return $objArr;
    }
    
    /**
     * Array to object
     * --RU--
     * Массив в объект
     *
     * @param $arr
     * @return Object
     */
    public static function arrToObj($arr){
        
        if($arr['class']=='php\gui\text\UXFont'){
            $args = $arr['classVars'];
            if(str::contains($args['style'], 'Bold')){
                $arg1 = 'BOLD';
            }else{
                $arg1 = 'THIN';
            }
            if(str::contains($args['style'], 'Italic')){
                $arg2 = true;
            }else{
                $arg2 = false;
            }
            $obj = \php\gui\text\UXFont::of($args['name'], $args['size'], $arg1, $arg2);
        }else{
            $obj = new $arr['class'];
            $keys = arr::keys($arr['classVars']);
            $i = 0;
            while($keys[$i]!=null){
                $key = $keys[$i];
                $value = $arr['classVars'][$key];
                $type = gettype($value);
                $ReflectionProperty = new ReflectionProperty($obj, $key);
                if($key!='armed' and $key!='stylesheets' and $key!='childrenUnmodifiable' and $key!='disabled' and $key!='focused'
                and $key!='pressed' and $key!='hover' and $key!='classes' and $key!='baselineOffset' and $key!='children'
                and $key!='layoutBounds' and $key!='boundsInParent' and $key!='screenPosition' and $key!='screenX' and $key!='screenY'
                and $key!='effects' and $key!='parent' and $key!='name' and $key!='size' and $key!='family' and $key!='bold'
                and $key!='lineHeight' and $key!='italic' and $key!='resizable' and $key!='prefSize' and $key!='indeterminate')
                if($ReflectionProperty->isPublic())
                if(!$ReflectionProperty->isPrivate())
                if(!$ReflectionProperty->isProtected())
                if(!$ReflectionProperty->isStatic())
                if($type=='string' or $type=='double' or $type=='boolean' or $type=='integer'){
                    $obj->$key = $value;
                }elseif($type=='array'){
                    if(self::isObjArr($value)){
                        $value = $obj->$key = self::arrToObj($value);
                        $obj->$key = $value;
                    }else{
                        $obj->$key = $value;
                    }
                }elseif($type=='NULL'){
                    
                }else{
                    Logger::info($key . ':' . $value . ' - ' . $type);
                }
                $i++;
            }
        }
        return $obj;
    }
    
    /**
     * Object to json
     * --RU--
     * Объект в json
     *
     * @param $obj
     * @return Json
     */
    public static function objToJson($obj){
        return Json::encode(self::objToArr($obj));
    }
    
    /**
     * Json to object
     * --RU--
     * Json в объект
     *
     * @param $json
     * @return Object
     */
    public static function jsonToObj($json){
        return self::arrToObj(Json::decode($json));
    }
    
    /**
     * Checks if an object can be created from an array
     * --RU--
     * Проверяет, может ли объект быть создан из массива
     *
     * @param $arr
     * @return bool
     */
    public static function isObjArr($arr){
        if(gettype($arr)=='array' and $arr['class']!=null){
            return true;
        }
        return false;
    }
    
    /**
     * Checks if an object can be created from json
     * --RU--
     * Проверяет, может ли объект быть создан из json
     *
     * @param $json
     * @return bool
     */
    public static function isObjJson($json){
        return self::isObjArr(Json::decode($json));
    }
}