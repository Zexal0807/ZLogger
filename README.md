# ZLogger
Class for create log

## How to use ? 

create new Php Class extends ZLogger

```PHP
class MyLogger extends ZLogger{

}
```

You can set the date format

```PHP
class MyLogger extends ZLogger{

	public $dateFormat = "d/m/Y";

}
```

You can set the log directory

```PHP
class MyLogger extends ZLogger{

	public $logDir = "my-log/"

}
```

## How to call it ? 

In your PHP script create new object of your class, for write a new log call **writeLog** passing who do something and what he do;

```PHP
$logger = new MyLogger();

$logger->writeLog("Pippo", "Have shower");
```


