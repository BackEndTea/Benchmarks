<?php

class InArrayBench
{
    private $names = [
        '__construct',
        'asdf',
        'asdfjdf82',
        'hash',
        '__debugInfo',
        '__callStatic',
        'test'
    ];

    private $toCheck = [
        '__construct',
        '__invoke',
        '__call',
        '__callStatic',
        '__get',
        '__set',
        '__isset',
        '__unset',
        '__toString',
        '__debugInfo',
    ];

    /**
     * @Warmup(1000)
     * @Revs(10000)
     * @Iterations(10)
     */
    public function bench_in_array_not_strict()
    {
        foreach ($this->names as $name) {
            in_array($name,
                $this->toCheck,
                false
            );
        }
    }

    /**
     * @Warmup(1000)
     * @Revs(10000)
     * @Iterations(10)
     */
    public function bench_in_array_strict()
    {
        foreach ($this->names as $name) {
            in_array($name,
                $this->toCheck,
                true
            );
        }
    }

    /**
     * @Warmup(1000)
     * @Revs(10000)
     * @Iterations(10)
     */
    public function bench_in_array_not_strict_default()
    {
        foreach ($this->names as $name) {
            in_array($name,
                $this->toCheck
            );
        }
    }
}