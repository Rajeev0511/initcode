<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit5814cc5cf0f7859f5f562f4e473b2aa6
{
    public static $files = array (
        'ce89ac35a6c330c55f4710717db9ff78' => __DIR__ . '/..' . '/kriswallsmith/assetic/src/functions.php',
        '320cde22f66dd4f5d3fd621d3e88b98f' => __DIR__ . '/..' . '/symfony/polyfill-ctype/bootstrap.php',
        '0e6d7bf4a5811bfa5cf40c5ccd6fae6a' => __DIR__ . '/..' . '/symfony/polyfill-mbstring/bootstrap.php',
        '25072dd6e2470089de65ae7bf11d3109' => __DIR__ . '/..' . '/symfony/polyfill-php72/bootstrap.php',
        'a4a119a56e50fbb293281d9a48007e0e' => __DIR__ . '/..' . '/symfony/polyfill-php80/bootstrap.php',
    );

    public static $prefixLengthsPsr4 = array (
        'T' => 
        array (
            'Twig\\Extensions\\' => 16,
            'Twig\\' => 5,
        ),
        'S' => 
        array (
            'Symfony\\Polyfill\\Php80\\' => 23,
            'Symfony\\Polyfill\\Php72\\' => 23,
            'Symfony\\Polyfill\\Mbstring\\' => 26,
            'Symfony\\Polyfill\\Ctype\\' => 23,
            'Symfony\\Component\\Process\\' => 26,
        ),
        'P' => 
        array (
            'Punic\\' => 6,
            'Psr\\Log\\' => 8,
        ),
        'N' => 
        array (
            'Negotiation\\' => 12,
        ),
        'M' => 
        array (
            'Monolog\\' => 8,
            'ML\\JsonLD\\' => 10,
        ),
        'E' => 
        array (
            'EasyRdf\\' => 8,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Twig\\Extensions\\' => 
        array (
            0 => __DIR__ . '/..' . '/twig/extensions/src',
        ),
        'Twig\\' => 
        array (
            0 => __DIR__ . '/..' . '/twig/twig/src',
        ),
        'Symfony\\Polyfill\\Php80\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/polyfill-php80',
        ),
        'Symfony\\Polyfill\\Php72\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/polyfill-php72',
        ),
        'Symfony\\Polyfill\\Mbstring\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/polyfill-mbstring',
        ),
        'Symfony\\Polyfill\\Ctype\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/polyfill-ctype',
        ),
        'Symfony\\Component\\Process\\' => 
        array (
            0 => __DIR__ . '/..' . '/symfony/process',
        ),
        'Punic\\' => 
        array (
            0 => __DIR__ . '/..' . '/punic/punic/src',
        ),
        'Psr\\Log\\' => 
        array (
            0 => __DIR__ . '/..' . '/psr/log/Psr/Log',
        ),
        'Negotiation\\' => 
        array (
            0 => __DIR__ . '/..' . '/willdurand/negotiation/src/Negotiation',
        ),
        'Monolog\\' => 
        array (
            0 => __DIR__ . '/..' . '/monolog/monolog/src/Monolog',
        ),
        'ML\\JsonLD\\' => 
        array (
            0 => __DIR__ . '/..' . '/ml/json-ld',
        ),
        'EasyRdf\\' => 
        array (
            0 => __DIR__ . '/..' . '/easyrdf/easyrdf/lib',
        ),
    );

    public static $prefixesPsr0 = array (
        'T' => 
        array (
            'Twig_Extensions_' => 
            array (
                0 => __DIR__ . '/..' . '/twig/extensions/lib',
            ),
            'Twig_' => 
            array (
                0 => __DIR__ . '/..' . '/twig/twig/lib',
            ),
        ),
        'M' => 
        array (
            'ML\\IRI' => 
            array (
                0 => __DIR__ . '/..' . '/ml/iri',
            ),
        ),
        'C' => 
        array (
            'ComponentInstaller' => 
            array (
                0 => __DIR__ . '/..' . '/robloach/component-installer/src',
            ),
        ),
        'A' => 
        array (
            'Assetic' => 
            array (
                0 => __DIR__ . '/..' . '/kriswallsmith/assetic/src',
            ),
        ),
    );

    public static $classMap = array (
        'Attribute' => __DIR__ . '/..' . '/symfony/polyfill-php80/Resources/stubs/Attribute.php',
        'BaseConfig' => __DIR__ . '/../..' . '/model/BaseConfig.php',
        'Breadcrumb' => __DIR__ . '/../..' . '/model/Breadcrumb.php',
        'Cache' => __DIR__ . '/../..' . '/model/Cache.php',
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'Concept' => __DIR__ . '/../..' . '/model/Concept.php',
        'ConceptMappingPropertyValue' => __DIR__ . '/../..' . '/model/ConceptMappingPropertyValue.php',
        'ConceptProperty' => __DIR__ . '/../..' . '/model/ConceptProperty.php',
        'ConceptPropertyValue' => __DIR__ . '/../..' . '/model/ConceptPropertyValue.php',
        'ConceptPropertyValueLiteral' => __DIR__ . '/../..' . '/model/ConceptPropertyValueLiteral.php',
        'ConceptSearchParameters' => __DIR__ . '/../..' . '/model/ConceptSearchParameters.php',
        'Controller' => __DIR__ . '/../..' . '/controller/Controller.php',
        'DataObject' => __DIR__ . '/../..' . '/model/DataObject.php',
        'EntityController' => __DIR__ . '/../..' . '/controller/EntityController.php',
        'GenericSparql' => __DIR__ . '/../..' . '/model/sparql/GenericSparql.php',
        'GlobalConfig' => __DIR__ . '/../..' . '/model/GlobalConfig.php',
        'Honeypot' => __DIR__ . '/../..' . '/controller/Honeypot.php',
        'JenaTextSparql' => __DIR__ . '/../..' . '/model/sparql/JenaTextSparql.php',
        'LOCResource' => __DIR__ . '/../..' . '/model/resolver/LOCResource.php',
        'LabelSkosXL' => __DIR__ . '/../..' . '/model/LabelSkosXL.php',
        'LinkedDataResource' => __DIR__ . '/../..' . '/model/resolver/LinkedDataResource.php',
        'Model' => __DIR__ . '/../..' . '/model/Model.php',
        'Modifiable' => __DIR__ . '/../..' . '/model/Modifiable.php',
        'PhpToken' => __DIR__ . '/..' . '/symfony/polyfill-php80/Resources/stubs/PhpToken.php',
        'PluginRegister' => __DIR__ . '/../..' . '/model/PluginRegister.php',
        'RemoteResource' => __DIR__ . '/../..' . '/model/resolver/RemoteResource.php',
        'Request' => __DIR__ . '/../..' . '/model/Request.php',
        'Resolver' => __DIR__ . '/../..' . '/model/resolver/Resolver.php',
        'RestController' => __DIR__ . '/../..' . '/controller/RestController.php',
        'SkosmosTurtleParser' => __DIR__ . '/../..' . '/model/SkosmosTurtleParser.php',
        'Stringable' => __DIR__ . '/..' . '/symfony/polyfill-php80/Resources/stubs/Stringable.php',
        'UnhandledMatchError' => __DIR__ . '/..' . '/symfony/polyfill-php80/Resources/stubs/UnhandledMatchError.php',
        'ValueError' => __DIR__ . '/..' . '/symfony/polyfill-php80/Resources/stubs/ValueError.php',
        'Vocabulary' => __DIR__ . '/../..' . '/model/Vocabulary.php',
        'VocabularyCategory' => __DIR__ . '/../..' . '/model/VocabularyCategory.php',
        'VocabularyConfig' => __DIR__ . '/../..' . '/model/VocabularyConfig.php',
        'VocabularyDataObject' => __DIR__ . '/../..' . '/model/VocabularyDataObject.php',
        'WDQSResource' => __DIR__ . '/../..' . '/model/resolver/WDQSResource.php',
        'WebController' => __DIR__ . '/../..' . '/controller/WebController.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit5814cc5cf0f7859f5f562f4e473b2aa6::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit5814cc5cf0f7859f5f562f4e473b2aa6::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInit5814cc5cf0f7859f5f562f4e473b2aa6::$prefixesPsr0;
            $loader->classMap = ComposerStaticInit5814cc5cf0f7859f5f562f4e473b2aa6::$classMap;

        }, null, ClassLoader::class);
    }
}