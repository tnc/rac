# RabbitMQ Administration Console #

*RAC* is an administration console for RabbitMQ. Is written in PHP and uses the [PHP Erlang Bridge Extension](http://code.google.com/p/mypeb/) to communicate with [RabbitMQ](http://www.rabbitmq.com/)

RAC PHP code is structure around [Limonade](http://github.com/sofadesign/limonade), which is a lightweight PHP framework.

See [here](http://twitpic.com/1mvo8o) for a screenshot.

## Installation ##

Install the PHP Erlang Bridge Extension from [here](http://code.google.com/p/mypeb/)
    
Get the source code of RAC:

    > git clone http://github.com/tnc/rac
    > cd rac

Get the source code of limonade:

    > git clone http://github.com/sofadesign/limonade.git lib/vendor/limonade
    
Setup an Apache Virtual host or your Nginx to use the project's web folder as the document root.

The admin console has been tested in the same server that runs the RabbitMQ process.

## Configuration ##

Copy the file _config/config.php.sample to _config/config.php_ and edit the values for *RABBITMQ_HOST* and *RABBITMQ_COOKIE* to suit those of your system.
    
## Credits: ##

_Design_: Neil Fang

_PHP Code_: Alvaro Videla

_RabbitMQ logo taken from_: http://www.rabbitmq.com/



## TODO ##

* Improve Error Handling
* Add security for several tasks allowed in the admin console
* Implement more commands to display information like the server status