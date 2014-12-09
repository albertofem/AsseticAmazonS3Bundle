<?php

/*
 * This file is part of assetic-amazon-s3-bundle
 *
 * (c) Alberto Fernández <albertofem@gmail.com>
 *
 * For the full copyright and license information, please read
 * the LICENSE file that was distributed with this source code.
 */

namespace AFM\Bundle\AsseticAmazonS3Bundle;

use AFM\Bundle\AsseticAmazonS3Bundle\StreamWrapper\S3StreamWrapper;
use Symfony\Component\HttpKernel\Bundle\Bundle;

class AFMAsseticAmazonS3Bundle extends Bundle
{
    public function boot()
    {
        parent::boot();

        $s3Wrapper = new S3StreamWrapper(
            $this->container->getParameter('aws_key'),
            $this->container->getParameter('aws_secret_key')
        );

        $s3Wrapper->registerStreamWrapper();
    }
}
