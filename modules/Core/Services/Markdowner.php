<?php
namespace Modules\Core\Services;

use Michelf\MarkdownExtra;
use Michelf\SmartyPants;

/**
 * Created by PhpStorm.
 * User: thanh
 * Date: 17/07/2016
 * Time: 10:01 PM
 */
class Markdowner
{
    public function toHTML($text)
    {
        $text = $this->preTransformText($text);
        $text = MarkdownExtra::defaultTransform($text);
        //$text = SmartyPants::defaultTransform($text);
        $text = $this->postTransformText($text);
        return $text;
    }

    protected function preTransformText($text)
    {
        return $text;
    }

    protected function postTransformText($text)
    {
        return $text;
    }
}