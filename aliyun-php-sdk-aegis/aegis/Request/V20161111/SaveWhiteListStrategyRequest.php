<?php

namespace aegis\Request\V20161111;

/**
 * @deprecated Please use https://github.com/aliyun/openapi-sdk-php
 *
 * Request of SaveWhiteListStrategy
 *
 * @method string getStrategyName()
 * @method string getSourceIp()
 * @method string getStudyTime()
 * @method string getStrategyId()
 * @method string getLang()
 */
class SaveWhiteListStrategyRequest extends \RpcAcsRequest
{

    /**
     * @var string
     */
    protected $method = 'POST';

    /**
     * Class constructor.
     */
    public function __construct()
    {
        parent::__construct(
            'aegis',
            '2016-11-11',
            'SaveWhiteListStrategy',
            'vipaegis'
        );
    }

    /**
     * @param string $strategyName
     *
     * @return $this
     */
    public function setStrategyName($strategyName)
    {
        $this->requestParameters['StrategyName'] = $strategyName;
        $this->queryParameters['StrategyName'] = $strategyName;

        return $this;
    }

    /**
     * @param string $sourceIp
     *
     * @return $this
     */
    public function setSourceIp($sourceIp)
    {
        $this->requestParameters['SourceIp'] = $sourceIp;
        $this->queryParameters['SourceIp'] = $sourceIp;

        return $this;
    }

    /**
     * @param string $studyTime
     *
     * @return $this
     */
    public function setStudyTime($studyTime)
    {
        $this->requestParameters['StudyTime'] = $studyTime;
        $this->queryParameters['StudyTime'] = $studyTime;

        return $this;
    }

    /**
     * @param string $strategyId
     *
     * @return $this
     */
    public function setStrategyId($strategyId)
    {
        $this->requestParameters['StrategyId'] = $strategyId;
        $this->queryParameters['StrategyId'] = $strategyId;

        return $this;
    }

    /**
     * @param string $lang
     *
     * @return $this
     */
    public function setLang($lang)
    {
        $this->requestParameters['Lang'] = $lang;
        $this->queryParameters['Lang'] = $lang;

        return $this;
    }
}
