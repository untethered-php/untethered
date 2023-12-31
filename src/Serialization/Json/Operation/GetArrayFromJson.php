<?php

declare(strict_types=1);

namespace Untethered\Serialization\Json\Operation;

use EightSleep\Framework\Domain\Operations\AbstractDomainOperation;

class GetArrayFromJson extends AbstractDomainOperation
{
    /**
     * @param string $json
     * @return array
     */
    public function execute(string $json): array
    {
        $this->logger->debug(self::class . '::execute - Deserializating JSON to Array', [
            'json' => $json
        ]);
        return json_decode($json, true);
    }
}
