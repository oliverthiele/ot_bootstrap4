<?php

namespace OliverThiele\OtBootstrap4\ViewHelpers;

/*
 * Copyright notice
 * (c) 2020 Oliver Thiele <mailYYYY@oliver-thiele.de>, Web Development Oliver Thiele
 * All rights reserved
 *
 * This file is part of the TYPO3 CMS project.
 *
 * It is free software; you can redistribute it and/or modify it under
 * the terms of the GNU General Public License, either version 2
 * of the License, or any later version.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 * The TYPO3 project - inspiring people to share!
 */

use Closure;
use TYPO3\CMS\Extbase\Utility\DebuggerUtility;
use TYPO3Fluid\Fluid\Core\Rendering\RenderingContextInterface;
use TYPO3Fluid\Fluid\Core\ViewHelper\AbstractViewHelper;
use TYPO3Fluid\Fluid\Core\ViewHelper\Traits\CompileWithRenderStatic;

/**
 * Class ContentElementWrapperViewHelper
 * @package OliverThiele\OtBootstrap4\ViewHelpers
 */
class ContentElementWrapperViewHelper extends AbstractViewHelper
{
    use CompileWithRenderStatic;

    /**
     * @var bool
     */
    protected $escapeOutput = false;

    /**
     * Initialize ViewHelper arguments
     */
    public function initializeArguments()
    {
        parent::initializeArguments();
        $this->registerArgument('value', 'string', 'string to format');
    }

    /**
     * @param  array  $arguments
     * @param  Closure  $renderChildrenClosure
     * @param  RenderingContextInterface  $renderingContext
     * @return string
     */
    public static function renderStatic(
        array $arguments,
        Closure $renderChildrenClosure,
        RenderingContextInterface $renderingContext
    ) {
        $html = $renderChildrenClosure();

        $all = $renderingContext->getVariableProvider()->getAll();
        $data = $all['data'];

        // Don't wrap the content element, if the checkbox 'Disable DIV-Wrapper' is set.
        if ($data['disable_div_wrapper'] === 1) {
            return $html;
        }

        $sizes = ['xs', 'sm', 'md', 'lg', 'xl'];

        foreach ($sizes as $key => $size) {
            $dbField = 'bootstrap_col_'.$size;
            ${$size} = (int)$data[$dbField];

            $cssColName = 'cssCol'.ucfirst($size);
            $cssCol = '';
            if (${$size} === 100) {
                ${$cssColName} = ' col-'.$size;
                if ($size === 'xs') {
                    ${$cssColName} = 'col';
                }
            } elseif (${$size} > 0) {
                ${$cssColName} = ' col-'.$size.'-'.${$size};
            }
        }
        // Default is one content element in a row
        $css = trim($cssColXs.$cssColSm.$cssColMd.$cssColLg.$cssColXl);
        if ($css === '') {
            $css = 'col-12';
        };

        // TYPO3 Frames
        if ($data['frame_class'] !== 'default') {
            $css .= ' frame frame-'.$data['frame_class'].' frame-type-'.$data['CType'];
        }

        // TYPO3 Margin top/bottom
        // Deactivated in typo3conf/ext/ot_bootstrap4/Configuration/TSconfig/DefaultConfiguration.tsconfig
        // Only for existing TYPO3 projects / updates
        if ($data['space_before_class'] !== '') {
            $css .= ' frame-space-before-'.$data['space_before_class'];
        }
        if ($data['space_after_class'] !== '') {
            $css .= ' frame-space-after-'.$data['space_after_class'];
        }

        // Layout
        if ($data['layout'] > 0) {
            $css .= ' frame-layout-'.$data['layout'];
        }

        // animate.css
        
        if ($data['animation_type'] !== '0' && $data['animation_type'] !== null && $data['animation_type'] !== '') {
            $cssAnimation = ' animated ';
            // todo DB
            $cssAnimation .= $data['animation_type'];

            if ($data['animation_delay'] > 0) {
                $cssAnimation .= ' delay-'.$data['animation_delay'].'s';
            }
            if ($data['animation_speed'] !== '1000') {
                $animationSpeed = ' data-animation-speed="'.$data['animation_speed'].'"';
            } else {
                $animationSpeed = '';
            }
            if ($data['animation_offset'] !== '90%') {
                $animationOffset = ' data-animation-offset="'.$data['animation_offset'].'"';
            } else {
                $animationOffset = '';
            }
            $dataAnimation = $animationSpeed.$animationOffset;
        } else {
            $cssAnimation = '';
            $dataAnimation = '';
        }

        $css .= ' '.$data['bootstrap_css_outer'];

        // Inner div, only rendered, if there is a CSS class or a shadow
        $cssClassesInnerDiv = trim($data['bootstrap_css_inner']);
        if ($cssClassesInnerDiv !== '') {
            $cssInnerDivShadow = '';
            if ($data['bootstrap_shadow'] !== '') {
                $cssInnerDivShadow = $data['bootstrap_shadow'].' ';
            }
            $innerDiv = [
                '<div class="'.$cssInnerDivShadow.$cssClassesInnerDiv.'">',
                '</div>'
            ];
        } else {
            $innerDiv = ['', ''];
        }

        $html = trim(
            '<div id="ce'.$data['uid'].'" class="fce-'.strtolower($data['CType']).' '.trim(
                $css
            ).$cssAnimation.'"'.$dataAnimation.'>
                   <a class="anchor" id="c'.$data['uid'].'" ></a>'.
            $innerDiv[0].$renderChildrenClosure().$innerDiv[1].
            '</div>'
        );

        return $html;
    }
}
