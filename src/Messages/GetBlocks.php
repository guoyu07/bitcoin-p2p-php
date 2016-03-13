<?php

namespace BitWasp\Bitcoin\Networking\Messages;

use BitWasp\Bitcoin\Networking\Message;
use BitWasp\Bitcoin\Networking\Serializer\Message\GetBlocksSerializer;
use BitWasp\Bitcoin\Serializer\Chain\BlockLocatorSerializer;

class GetBlocks extends AbstractBlockLocator
{
    /**
     * @return string
     */
    public function getNetworkCommand()
    {
        return Message::GETBLOCKS;
    }

    /**
     * @return \BitWasp\Buffertools\Buffer
     */
    public function getBuffer()
    {
        return (new GetBlocksSerializer(new BlockLocatorSerializer()))->serialize($this);
    }
}
