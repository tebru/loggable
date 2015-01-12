<?php
/**
 * File Loggable.php 
 */

namespace Tebru\Log;

use LogicException;
use Psr\Log\LoggerInterface;

/**
 * Trait Loggable
 *
 * Creates a getter and setter for a logger
 *
 * @author Nate Brunette <n@tebru.net>
 */
trait Loggable
{
    /**
     * A PSR-3 logger
     *
     * @var LoggerInterface $logger
     */
    private $logger;

    /**
     * Get the logger
     *
     * @return LoggerInterface
     * @throws LogicException If logger is not set
     */
    public function getLogger()
    {
        if (null === $this->logger) {
            throw new LogicException('Logger is not set.');
        }

        return $this->logger;
    }

    /**
     * Set the logger
     *
     * @param LoggerInterface $logger
     */
    public function setLogger(LoggerInterface $logger)
    {
        $this->logger = $logger;
    }
}
