<?php

use controllers\PagesController;

$router->get("", [PagesController::class, "index"]);
$router->get("about", [PagesController::class, "about"]);
$router->get("order", [PagesController::class, "order"]);
$router->post("names", [PagesController::class, "store"]);
$router->get("delete", [PagesController::class, "destroy"]);
