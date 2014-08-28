Intercom Api Implementation for PHP
============

This is a very simple implementation of the [Intercom Api](http://doc.intercom.io/api/). 

### Installing via Composer

The recommended way to install the library is through
[Composer](http://getcomposer.org).

```javascript
{
    "require": {
        "sitemavens/intercom-php": "dev-master"
    }
}
```

### How you use it


```php
\IntercomPhp\Config::init( 'your_app_id', 'your_api_key' );

$user = new \IntercomPhp\Domain\User();
$user->setName( 'Pepe Florez' );
$user->setEmail( 'pepe@florez.com' );
$user->setId( 1234 );
$user->setRemoteCreatedAt( time() );
$user->getLocation()->setCity( "Neuquen" );
$user->getLocation()->setCountryCode("AR");
$user->getLocation()->setPostalCode( "8300");
		
$users = new \IntercomPhp\Users();
$result = $users->addUser( $user );
```
