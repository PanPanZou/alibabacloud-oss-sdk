<?php

// This file is auto-generated, don't edit it. Thanks.

namespace AlibabaCloud\SDK\OSS\Models\GetBucketWebsiteResponse\websiteConfiguration\routingRules\routingRule;

use AlibabaCloud\Tea\Model;

use AlibabaCloud\SDK\OSS\Models\redirect\mirrorHeaders;
use AlibabaCloud\SDK\OSS\Models\redirect\mirrorHeaders\set;

class redirect extends Model{
    protected $_name = [];

    public $redirectType;

    public $passQueryString;

    public $mirrorURL;

    public $mirrorPassQueryString;

    public $mirrorFollowRedirect;

    public $mirrorCheckMd5;

    public $protocol;

    public $hostName;

    public $httpRedirectCode;

    public $replaceKeyPrefixWith;

    public $replaceKeyWith;

    public $mirrorHeaders;

}
