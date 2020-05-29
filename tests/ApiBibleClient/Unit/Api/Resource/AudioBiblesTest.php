<?php

namespace ApiBibleClient\Unit\Api\Resource;

use ApiBibleClient\Api\Collection\BibleSummaryCollection;
use ApiBibleClient\Api\Model\AudioBible;
use ApiBibleClient\Api\Resource\AudioBibles;
use ApiBibleClient\Api\RestClient;
use ApiBibleClient\Http\Response;
use PHPUnit\Framework\MockObject\MockObject;
use PHPUnit\Framework\TestCase;

class AudioBiblesTest extends TestCase {

    private $audioBiblesResource;
    /** @var MockObject */
    private $client;

    public function setUp(): void {
        $this->client = $this->createMock(RestClient::class);

        $this->audioBiblesResource = new AudioBibles($this->client);
    }

    public function testAll() {
        $response = new Response(
            200,
            '{"data":[{"id":"22","dblId":"105a06b6146d11e7","relatedDbl":"9879dbb7cfe39e4d","name":"English - World English Bible (NT)","nameLocal":"English - World English Bible (NT)","abbreviation":"WEB","abbreviationLocal":"WEB","description":null,"descriptionLocal":null,"language":{"id":"eng","name":"English","nameLocal":"English","script":"Latin","scriptDirection":"LTR"},"countries":[{"id":"US","name":"United States","nameLocal":"United States"}],"type":"audio","updatedAt":"2020-03-17T14:30:10.000Z"}]}'
        );

        $this->client->expects($this->once())
                     ->method('request')
                     ->with('https://api.scripture.api.bible/v1/audio-bibles')
                     ->willReturn($response);

        $this->assertInstanceOf(BibleSummaryCollection::class, $this->audioBiblesResource->all());
    }

    public function testGet() {
        $response = new Response(
            200,
            '{"data":{"id":"22","dblId":"105a06b6146d11e7","relatedDbl":"9879dbb7cfe39e4d","name":"English - World English Bible (NT)","nameLocal":"English - World English Bible (NT)","abbreviation":"WEB","abbreviationLocal":"WEB","description":null,"descriptionLocal":null,"language":{"id":"eng","name":"English","nameLocal":"English","script":"Latin","scriptDirection":"LTR"},"countries":[{"id":"US","name":"United States","nameLocal":"United States"}],"type":"audio","updatedAt":"2020-03-17T14:30:10.000Z"}}'
        );

        $this->client->expects($this->once())
                     ->method('request')
                     ->with('https://api.scripture.api.bible/v1/audio-bibles/22')
                     ->willReturn($response);

        $this->assertInstanceOf(AudioBible::class, $this->audioBiblesResource->get('22'));
    }
}
