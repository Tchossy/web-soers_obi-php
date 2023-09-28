<?php

namespace app\controllers;

use app\controllers\BaseTemplateController;

class BaseController
{
  public function home()
  {
    return BaseTemplateController::view("home");
  }
  public function about()
  {
    return BaseTemplateController::view("about");
  }
  public function services()
  {
    return BaseTemplateController::view("services");
  }
  public function gallery()
  {
    return BaseTemplateController::view("gallery");
  }
  public function products()
  {
    return BaseTemplateController::view("products");
  }
  public function contact()
  {
    return BaseTemplateController::view("contact");
  }

  // 404
  public function notFound()
  {
    return BaseTemplateController::view("404");
  }
}