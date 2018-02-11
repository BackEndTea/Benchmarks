<?php

class Medium
{
    /**
     * @ParamProviders({"providesStrings"})
     * @Warmup(1000)
     * @Revs(30000)
     * @Iterations(10)
     */
    public function bench_in_array_not_strict($param)
    {
        in_array(
            $param['string'],
            $this->med,
            false
        );
    }

    /**
     * @ParamProviders({"providesStrings"})
     * @Warmup(1000)
     * @Revs(30000)
     * @Iterations(10)
     */
    public function bench_in_array_strict($param)
    {
        in_array(
            $param['string'],
            $this->med,
            true
        );
    }

    /**
     * @ParamProviders({"providesStrings"})
     * @Warmup(1000)
     * @Revs(30000)
     * @Iterations(10)
     */
    public function bench_in_array_not_strict_default($param)
    {
        in_array(
            $param['string'],
            $this->med
        );
    }

    public function providesStrings()
    {
        return [
            ['string' => '__construct'],
            ['string' => '__debugInfo'],
            ['string' =>'asdfasdf'],
        ];
    }

    private $med = [
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
}