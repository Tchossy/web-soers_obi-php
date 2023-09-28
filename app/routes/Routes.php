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
        "/about" => 'BaseController@about',
        "/services" => 'BaseController@services',
        "/gallery" => 'BaseController@gallery',
        "/products" => 'BaseController@products',
        "/contact" => 'BaseController@contact',

        "/blog" => 'BaseController@blog',
        "/blog_details" => 'BaseController@blogDetails',
      ],
    ];
  }
};