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

namespace Teamsisu\MetaModelsFrontendInputBootstrap\FrontendIntegration\Form;

use Netzmacht\Html\Element;
use Teamsisu\MetaModelsFrontendInput\FrontendIntegration\Form\FormURLField AS BaseFormURLField;
use Netzmacht\FormHelper\GeneratesAnElement;


/**
 * Class FormURLField
 * This is an extended version of the FormURLField form widget to work with
 * netzmachts contao-bootstrap extension
 *
 * @package Teamsisu\MetaModelsFrontendInputBootstrap\FrontendIntegration\Form
 */
class FormURLField extends BaseFormURLField implements GeneratesAnElement
{

    /**
     * Generate the Widget as needed for the bootstrap extension
     *
     * @return $this|Element|string
     */
    public function generate()
    {

        $container = Element::create('div')
            ->addAttributes(
                array(
                    'class' => array('form-group')
                )
            );

        if (is_array($this->varValue)) {
            $valueTitle = $this->varValue[0];
            $valueHref = $this->varValue[1];
        } else {
            $valueHref = $this->varValue;
        }

        if ($this->multiple) {
            $titleInput = Element::create('input', $this->arrAttributes)
                ->setId('title_' . $this->strId)
                ->addAttributes(
                    array(
                        'type'  => 'text',
                        'class' => array('form-control', 'url_text'),
                        'value' => $valueTitle,
                        'name'  => $this->strName . '[0]'
                    )
                );
            $container->addChild($titleInput);
        }

        $hrefInput = Element::create('input', $this->arrAttributes)
            ->setId('href_' . $this->strId)
            ->addAttributes(
                array(
                    'type'  => 'url',
                    'class' => array('form-control', 'url_href'),
                    'value' => $valueHref,
                    'name'  => $this->strName . '[1]'
                )
            );
        $container->addChild($hrefInput);

        $label = specialchars($this->slabel);
        $container->addChild($label);

        return $container;

    }
}
