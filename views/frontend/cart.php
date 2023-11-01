<?php

if (isset($_REQUEST['addcart'])) {
  require_once 'views/frontend/cart-addcart.php';
} else {
  require_once 'views/frontend/cart-content.php';
}
session_destroy();
