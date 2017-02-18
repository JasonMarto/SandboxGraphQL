<?php
namespace AppBundle\Query;

use AppBundle\Query\HelloWorld\HelloWorldQuery;
use AppBundle\Query\Post\PostField;
use AppBundle\Query\Post\PostsField;
use Youshido\GraphQL\Config\Object\ObjectTypeConfig;
use Youshido\GraphQL\Type\Object\AbstractObjectType;

class QueryType extends AbstractObjectType
{
    /**
     * @param ObjectTypeConfig $config
     *
     * @return mixed
     */
    public function build($config)
    {
        $config->addFields([
            new HelloWorldQuery(),
            new PostsField(),
            new PostField(),
        ]);
    }
}