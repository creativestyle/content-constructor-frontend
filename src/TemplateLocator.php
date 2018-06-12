<?php

namespace Creativestyle\ContentConstructorFrontend;

class TemplateLocator
{
    private function getBasePath() {
        return realpath(__DIR__.'/../');
    }

    public function locate($path) {
        $path = self::getBasePath() . '/../creative-patterns/packages/' . $path;

        return $path;
    }
}
