Run 
```
$ vendor/bin/phpbench run benchmarks/InArrayBench.php --report=aggregate
```

Result: 

| benchmark    | subject                           | groups | params | revs  | its | mem_peak | best    | mean    | mode    | worst   | stdev   | rstdev | diff  |
|--------------|-----------------------------------|--------|--------|-------|-----|----------|---------|---------|---------|---------|---------|--------|-------|
| InArrayBench | bench_in_array_not_strict         |        | []     | 10000 | 10  | 779,872b | 0.325μs | 0.340μs | 0.330μs | 0.366μs | 0.015μs | 4.37%  | 1.05x |
| InArrayBench | bench_in_array_strict             |        | []     | 10000 | 10  | 779,864b | 0.419μs | 0.424μs | 0.422μs | 0.434μs | 0.004μs | 1.02%  | 1.31x |
| InArrayBench | bench_in_array_not_strict_default |        | []     | 10000 | 10  | 779,880b | 0.317μs | 0.324μs | 0.320μs | 0.346μs | 0.008μs | 2.62%  | 1.00x |

