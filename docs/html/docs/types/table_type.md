## TableType

TableTypes are used for handling OCITable data. A single dimension array is passed in for column headings and data is
 set by using addRow or addRows with single or multi dimension arrays.
 
It's possible to render a pretty ascii table with `echo $table->getValue()` with the data and also search with 
`$table->findRow('something')`

If only a single column is required, method `$table->getColumn($id)` will return a specific column of data from all 
rows in the dataset. One value can be used for keys and another for values.

``` php
<?php
$data = $table->getColummn(0, 3);
$newTable = new TableType(['User Id', 'Phone Number');
$newTable->addRows($data);
echo $newTable->getValue();
```
Returns:
```
+------------------------+---------------+
| User Id                | Phone Number  |
+------------------------+---------------+
| user-1@example.com     | 01234123456   |
| user-2@example.com     | 01234123456   |
| user-3@example.com     | 01234123456   |
| user-4@example.com     | 01234123456   |
| user-5@example.com     | 01234123456   |
| user-6@example.com     | 01234123456   |
+------------------------+---------------+
```