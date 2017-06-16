<?php
/**
 * Created by Larakit.
 * Link: http://github.com/larakit
 * User: Alexey Berdnikov
 * Date: 15.06.17
 * Time: 15:20
 */
\Larakit\StaticFiles\Manager::package('larakit/sf-angular-cropper')
    ->usePackage('larakit/sf-angular')
    ->setSourceDir('public')
    ->jsPackage('angular-image-cropper.js');
\Larakit\NgAdminlte\LkNg::moduleRegister('imageCropper');