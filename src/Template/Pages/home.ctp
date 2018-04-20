<?php
/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link          https://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       https://opensource.org/licenses/mit-license.php MIT License
 */
use Cake\Cache\Cache;
use Cake\Core\Configure;
use Cake\Core\Plugin;
use Cake\Datasource\ConnectionManager;
use Cake\Error\Debugger;
use Cake\Network\Exception\NotFoundException;

$this->layout = false;

?>
<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
       Event Management System By Ravi Kumar
    </title>

    <?= $this->Html->meta('icon') ?>
    <?= $this->Html->css('base.css') ?>
    <?= $this->Html->css('cake.css') ?>
    <?= $this->Html->css('home.css') ?>
    <link href="https://fonts.googleapis.com/css?family=Raleway:500i|Roboto:300,400,700|Roboto+Mono" rel="stylesheet">
</head>
<body class="home">
<header class="row">
    <div class="header-image"><?= $this->Html->image('ravikumar.jpg',['width'=>'200px','height'=>'200px']) ?></div>
    <div class="header-title">
        <h1><a type="button" href="events"><button>Events Management System</button></a></h1>
    </div>
</header>

<div class="row" style="text-align: center;">
    <a type="button" href="events"><button>Facebook</button></a><a type="button" href="events"><button>LinkedIn</button></a><a type="button" href="events"><button>Twitter</button></a><a type="button" href="events"><button>My Website(www.ravikumarkazi.com)</button></a>
</div>
</body>
</html>
