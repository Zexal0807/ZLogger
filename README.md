# ZLogger
Class for creating log

## How to use ? 

Create new Php Class that extends ZLogger class

```PHP
class MyLogger extends ZLogger{

}
```

You can set the date format, the default is "Y-m-d H:i:s"

```PHP
class MyLogger extends ZLogger{

	public $dateFormat = "d/m/Y";

}
```

You can set the log directory, the default is "log/"

```PHP
class MyLogger extends ZLogger{

	public $logDir = "my-log/"

}
```

## How to call it ? 

In your PHP script create new instance of your class, for writing a new log, call **writeLog** method passing the 2 parameters in order to perform whatever do you want it does

```PHP
$logger = new MyLogger();

$logger->writeLog("Pippo", "Have shower");
```


