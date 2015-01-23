<?php
/**
 * The MetaModels FrontendInput Extension allows you to easily create frontend forms
 * from an MetaModels backend InputMask.
 * It takes care of simple/complex/upload values and it is also possible to change the
 * saveHandler from an specific field to fit your special needs of prePost value manipulation
 *
 * PHP version 5
 *
 * @package    MetaModelsFrontendInputBootstrap
 * @author     Martin Treml <martin.treml@teamsisu.at>
 * @copyright  Teamsisu GmbH <www.teamsisu.at>
 * @license    LGPL.
 * @filesource
 */

/**
 * Change the form field to the new Bootstrap version
 */
$GLOBALS['TL_FFL']['beUrl'] = 'Teamsisu\MetaModelsFrontendInputBootstrap\FrontendIntegration\Form\FormURLField';

/**
 * Disable the creation of an form-control wrapper
 */
$GLOBALS['BOOTSTRAP']['form']['widgets']['beUrl']['noFormControl'] = true;