<?php

namespace CatCasCarSkillboxSymfony\ArticleContentProviderBundle;


use CatCasCarSkillboxSymfony\ArticleContentProviderBundle\DependencyInjection\ArticleContentProviderExtension;
use Symfony\Component\HttpKernel\Bundle\Bundle;

class ArticleContentProviderBundle extends Bundle
{
    public function getContainerExtension()
    {
        if (null === $this->extension) {
            $this->extension = new ArticleContentProviderExtension();
        }

        return $this->extension;
    }

}