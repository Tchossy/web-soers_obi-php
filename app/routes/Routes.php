<?php

namespace app\routes;

class Routes
{
  public static function get()
  {
    return [
      "get" => [
        // BASE ROUTES
        "/" => 'BaseController@home',
      ],
    ];
  }
};
