<?php
$action = $_POST['action'];

require_once 'function.php';

switch ($action) {
    case 'init':
          init();
        break;
    case 'selectOneGoods':
          selectOneGoods();
        break;
    case 'updateGoods':
          updateGoods();
        break;
    case 'newGoods':
          newGoods();
        break;
    case 'loadGoods':
          loadGoods();
        break;
    case 'loadSingleGoods':
          loadSingleGoods();
        break;
    case 'initReview':
          initReview();
        break;
    case 'selectOneCategory':
          selectOneCategory();
        break;
    case 'loadFilter':
        loadFilter();
        break;
    case 'loadRecomends':
        loadRecomends();
        break;
    // case 'newСomment':
    //       newСomment();
    //     break;    
}