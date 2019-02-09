<?php
use app\models\User;
$nombre = Yii::$app->user->getNombre();
$apellido = Yii::$app->user->getApellido();
?>
<aside class="main-sidebar">

    <section class="sidebar">

        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="<?= $directoryAsset ?>/img/user2-160x160.jpg" class="img-circle" alt="User Image"/>
            </div>
            <div class="pull-left info">
                <p class="text-capitalize"><?php echo $nombre,' ',$apellido?></p>

            </div>
        </div>

        <!-- search form -->
        <!--<form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="Search..."/>
              <span class="input-group-btn">
                <button type='submit' name='search' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
            </div>
        </form>
        <!-- /.search form  agregar en gestor añadir convocatoria convocatoria/index-->

        <?= dmstr\widgets\Menu::widget(
            [
                'options' => ['class' => 'sidebar-menu tree', 'data-widget'=> 'tree'],
                'items' => [
                    ['label' => 'Menu', 'options' => ['class' => 'header']],
                    ['label' => 'Mis Postulaciones', 
                     'icon' => 'list', 
                     'url' => ['convocatoriausuario/misconvocatorias'], 
                     'visible' => !Yii::$app->user->isGuest && Yii::$app->user->identity->id_rol == User::ROLE_POSTULANTE
                    ],
                    ['label' => 'Mi CV', 
                     'icon' => 'fa fa-id-card-o', 
                     'url' => [''], 
                        'visible' => !Yii::$app->user->isGuest && Yii::$app->user->identity->id_rol == User::ROLE_POSTULANTE
                    ],
                    ['label' => 'Rendimiento ', 
                     'icon' => 'pencil',
                        'visible' => !Yii::$app->user->isGuest && Yii::$app->user->identity->id_rol == User::ROLE_POSTULANTE,
                            'items'=>[
                                ['label'=>'Academico',
                                    'icon'=>'certificate',
                                    'url'=>[''],
                                 ],   
                                ['label'=>'No Academico',
                                         'icon'=>'certificate',
                                         'url'=>[''],
                                        ],
                                      ],
                    ],
                    ['label' => 'Convocatoria', 
                        'icon'=>'fas fa-briefcase',
                        'visible' => !Yii::$app->user->isGuest && Yii::$app->user->identity->id_rol == User::ROLE_GESTOR,
                        'items'=>[
                            ['label'=>'Crear',
                                'icon'=>'fas fa-plus',
                                'url'=>['/convocatoria/create'],
                            ],
                            ['label'=>'Listar',
                                'icon'=>'far fa-list-alt',
                                'url'=>['/convocatoria'],
                            ],
                        ],
                    ],
                    ['label' => 'Iniciar sesión', 'icon'=>'fa fa-user-circle','url' => ['site/login'], 'visible' => Yii::$app->user->isGuest],
                    ['label' => 'Acerca de', 'icon'=>'fas fa-info-circle', 'url' => ['site/about'], 'visible' => Yii::$app->user->isGuest],
                    ['label' => 'Contactos', 'icon'=>'far fa-comments', 'url' => ['site/contact'], 'visible' => Yii::$app->user->isGuest],
                    ['label' => 'Gestor',
                        'icon'=>'fas fa-edit',
                        'url' => ['/gestor'],
                        'visible' => !Yii::$app->user->isGuest && Yii::$app->user->identity->id_rol == User::ROLE_ADMIN
                    ],
                    
                    /*[
                        'label' => 'Some tools',
                        'icon' => 'share',
                        'url' => '#',
                        'items' => [
                            ['label' => 'Gii', 'icon' => 'file-code-o', 'url' => ['/gii'],],
                            ['label' => 'Debug', 'icon' => 'dashboard', 'url' => ['/debug'],],
                            [
                                'label' => 'Level One',
                                'icon' => 'circle-o',
                                'url' => '#',
                                'items' => [
                                    ['label' => 'Level Two', 'icon' => 'circle-o', 'url' => '#',],
                                    [
                                        'label' => 'Level Two',
                                        'icon' => 'circle-o',
                                        'url' => '#',
                                        'items' => [
                                            ['label' => 'Level Three', 'icon' => 'circle-o', 'url' => '#',],
                                            ['label' => 'Level Three', 'icon' => 'circle-o', 'url' => '#',],
                                        ],
                                    ],
                                ],
                            ],
                        ],
                    ],*/
                ],
            ]
        ) ?>

    </section>

</aside>
