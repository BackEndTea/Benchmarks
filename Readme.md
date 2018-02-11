# Bench Marks

## `in_array()` comparison:
 
```
$ vendor/bin/phpbench run benchmarks/In_Array/Small.php --report=aggregate
$ vendor/bin/phpbench run benchmarks/In_Array/Medium.php --report=aggregate
$ vendor/bin/phpbench run benchmarks/In_Array/Large.php --report=aggregate

```

In all cases strict comparison is slower, the size of the array to be checked just increases the difference.