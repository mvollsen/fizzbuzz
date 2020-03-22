<?php

declare(strict_types=1);

namespace App\Controller;

use App\Logic\TransformatorInterface;
use App\View\ViewInterface;

class TransformationController
{
    /**
     * @var TransformatorInterface
     */
    private $transformator;

    /**
     * @var ViewInterface
     */
    private $view;

    public function __construct(TransformatorInterface $transformator, ViewInterface $view)
    {
        $this->transformator = $transformator;
        $this->view = $view;
    }

    public function getTransformator(): TransformatorInterface
    {
        return $this->transformator;
    }

    public function getView(): ViewInterface
    {
        return $this->view;
    }
}
