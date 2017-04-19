# csv-to-array

A package for composer, read a csv and turn in a array

# Usage

#### If the first row is for tags:

```
NAME;SURNAME;AGE;
Juan;Gonzalez;55;
Maria;Peralta;20;
Pedro;Smith;5;
```

call the method this way

```
CSVToArray::csvToArray("path/to/file.csv");
```
and it will return

```
Array
(
    [0] => Array
        (
        )

    [1] => Array
        (
            [NAME] => Juan
            [SURNAME] => Gonzalez
            [AGE] => 55
            [] => 
        )

    [2] => Array
        (
            [NAME] => Maria
            [SURNAME] => Peralta
            [AGE] => 20
            [] => 
        )

    [3] => Array
        (
            [NAME] => Pedro
            [SURNAME] => Smith
            [AGE] => 5
            [] => 
        )

)
```

#### If not:

call the method this way

```
CSVToArray::csvToArray($path="path/to/file.csv", $separator=";", $tags=False);
```

and it will return

```
Array
(
    [0] => Array
        (
            [0] => NAME
            [1] => SURNAME
            [2] => AGE
            [3] => 
        )

    [1] => Array
        (
            [0] => Juan
            [1] => Gonzalez
            [2] => 55
            [3] => 
        )

    [2] => Array
        (
            [0] => Maria
            [1] => Peralta
            [2] => 20
            [3] => 
        )

    [3] => Array
        (
            [0] => Pedro
            [1] => Smith
            [2] => 5
            [3] => 
        )

)
```
