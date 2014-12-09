<?php

/*
 * This file is part of assetic-amazon-s3-bundle
 *
 * (c) Alberto Fernández <albertofem@gmail.com>
 *
 * For the full copyright and license information, please read
 * the LICENSE file that was distributed with this source code.
 */

namespace AFM\Bundle\AsseticAmazonS3Bundle\StreamWrapper;

use Aws\Common\Aws;
use Aws\S3\S3Client;

class S3StreamWrapper
{
    /**
     * @var S3Client
     */
    protected $s3Client;

    public function __construct($key, $secret, $region)
    {
        $aws = array(
            'key'    => $key,
            'secret' => $secret,
            'region' => $region
        );

        $this->s3Client = Aws::factory($aws)->get('s3');
    }

    public function registerStreamWrapper()
    {
        $this->s3Client->registerStreamWrapper();
    }
}