# Karamel/Console
`kartizan` is a command line for ‌‌php projects. <br />
It provides a number of helpful commands for your use while developing your application 

## Installation
Installation is super-easy via Composer:

```
$ composer require karamel/console
```
After installing the package, use the following command to place the Cartesian file in the main root of your project
```
cp vendor/karamel/console/kartisan .
```
Inside this file are two ``define``‍ named ``CONTROLLER_NAMESPACE`` and ``MODEL_NAMESPACE`` . <br />

The value of these definitions determines the value of the namespace prefix to create the controller and model. 

``Note that``  placing these definitions is optional. If you do not use these definitions, the default value will not be considered for you and your controller and model will be created in the path that you enter when executing the command.

##List of commands
- ```make:controller``` : To create a controller
- ```make:model``` : To create a model
- ```serve``` : To run the server
## Usage

###create Controller
To create a ```controller``, just run the following command in the main root of the project

```
php kartisan make:controller ``controller-name``
```
sample : 
```
php kartisan make:controller Panel/Blog/PostController
```
Executing the above command creates a controller called PostController in the path and namespace of the Panel/Blog .


###create Model
To create a ```Model``, just run the following command in the main root of the project

```
php kartisan make:model  <model-name>
```
sample : 
```
php kartisan make:model Model/Post
```
Executing the above command creates a  model called PostController in the path and namespace of the  Model .

###Run the server
To run the server, just enter the following command in the terminal in the main project path . 
```
php kartisan serve 
```
This command also takes the following desired parameter : <br />
‍‍```--t``` : 
Specifies the ```document root``` for the server to run. By default, the value of this folder is ```/public``` <br />
```--port``` : Specifies your preferred port to boot the server. 

sample : 
```angular2html
php kartisan serve --port=8081 --t=/public
```
