<?php

/*
 * This file is part of the GraphAware Bolt package.
 *
 * (c) GraphAware Ltd <christophe@graphaware.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace GraphAware\Bolt\Protocol\Message;

interface MessageInterface
{
    public function getSignature();

    public function getMessageType();

    public function getFields();

    public function isSuccess();

    public function isFailure();

    /*
    public function isIgnored();

    public function isRecord();
    */
}