<?php

namespace App\Core;

class LoadFiles
{
  protected static $model;
  protected static $controller;
  protected static $view;
  protected static $service;
  protected static $main;
  protected static $action;
  protected static $component;

  public static $file = __PATH_ROOT__;

  public static function controller(string $main, string $action)
  {
    self::$controller = self::$file . '/' . $main . '/Controllers/' . $action . 'Controller.php';
    require_once(self::$controller);
  }

  public static function model(string $main, string $action)
  {
    self::$model = self::$file . '/' . $main . '/DataBase/Models/' . $action . 'Model.php';
    require_once(self::$model);
  }

  public static function view(string $main, string $action)
  {
    self::$view = self::$file . '/' . $main . '/Views/Pages/' . $action . '.php';
    require_once(self::$view);
  }
  public static function service(string $action)
  {
    self::$service = self::$file . '/services/' . $action . '.php';
    require_once(self::$service);
  }

  public static function component(string $main, string $action){
    self::$component = self::$file .'/'. $main . '/Views/Components/' . $action . '.php';
    require_once(self::$component);
  }
}
