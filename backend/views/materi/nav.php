<?php
use kartik\sidenav\SideNav;



echo SideNav::widget([
    'type' => SideNav::TYPE_DEFAULT,
    'heading' => 'Menu',
    'items' => [
        [
            'url' => '#',
            'label' => 'Home',
            'icon' => 'home'
        ],
         [
            'url' => '#',
            'label' => 'Daftar Materi',
            'icon' => 'home'
        ],

          [
            'url' => '#',
            'label' => 'Daftar Materi',
            'icon' => 'home'
        ],
        
    ],
]);

?>