<?php

class Small
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
            $this->small,
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
            $this->small,
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
            $this->small
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

    private $small = [
        '__construct',
        '__debugInfo',
    ];
}