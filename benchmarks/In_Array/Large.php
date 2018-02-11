<?php

class Large
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
            $this->large,
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
            $this->large,
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
            $this->large
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

    private $large = [
        '__construct',
        '__invoke',
        '__call',
        'aaaaaaaaa',
        'aaaaaaaaa',
        'aaaaaaaaa',
        'aaaaaaaaa',
        'aaaaaaaaa',
        'aaaaaaaaa',
        'aaaaaaaaa',
        'aaaaaaaaa',
        'aaaaaaaaa',
        'aaaaaaaaa',
        'aaaaaaaaa',
        'aaaaaaaaa',
        'aaaaaaaaa',
        'aaaaaaaaa',
        'aaaaaaaaa',
        'aaaaaaaaa',
        'aaaaaaaaa',
        'aaaaaaaaa',
        'aaaaaaaaa',
        'aaaaaaaaa',
        'aaaaaaaaa',
        'aaaaaaaaa',
        'aaaaaaaaa',
        'aaaaaaaaa',
        'aaaaaaaaa',
        'aaaaaaaaa',
        'aaaaaaaaa',
        'aaaaaaaaa',
        'aaaaaaaaa',
        'aaaaaaaaa',
        'aaaaaaaaa',
        'aaaaaaaaa',
        'aaaaaaaaa',
        'aaaaaaaaa',
        'aaaaaaaaa',
        'aaaaaaaaa',
        'aaaaaaaaa',
        'aaaaaaaaa',
        'aaaaaaaaa',
        'aaaaaaaaa',
        'aaaaaaaaa',
        'aaaaaaaaa',
        'aaaaaaaaa',
        'aaaaaaaaa',
        'aaaaaaaaa',
        'aaaaaaaaa',
        'aaaaaaaaa',
        'aaaaaaaaa',
        'aaaaaaaaa',
        'aaaaaaaaa',
        'aaaaaaaaa',
        'aaaaaaaaa',
        'aaaaaaaaa',
        'aaaaaaaaa',
        'aaaaaaaaa',
        'aaaaaaaaa',
        'aaaaaaaaa',
        'aaaaaaaaa',
        'aaaaaaaaa',
        'aaaaaaaaa',
        'aaaaaaaaa',
        'aaaaaaaaa',
        'aaaaaaaaa',
        'aaaaaaaaa',
        'aaaaaaaaa',
        'aaaaaaaaa',
        'aaaaaaaaa',
        'aaaaaaaaa',
        'aaaaaaaaa',
        'aaaaaaaaa',
        'aaaaaaaaa',
        'aaaaaaaaa',
        'aaaaaaaaa',
        'aaaaaaaaa',
        'aaaaaaaaa',
        'aaaaaaaaa',
        'aaaaaaaaa',
        'aaaaaaaaa',
        'aaaaaaaaa',
        '__get',
        '__set',
        '__isset',
        '__unset',
        '__toString',
        '__debugInfo',
    ];
}