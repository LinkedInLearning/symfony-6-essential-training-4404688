<?php
// config/services.php
namespace Symfony\Component\DependencyInjection\Loader\Configurator;

return static function ( ContainerConfigurator $containerConfigurator ) {
	$containerConfigurator->services()
						  ->set( '_defaults.autowire', true )
						  ->set( '_defaults.autoconfigure', true );
};
