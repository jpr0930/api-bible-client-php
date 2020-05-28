<?php

namespace ApiBibleClient\Unit\Api\Resource;

use ApiBibleClient\Api\Collection\BibleCollection;
use ApiBibleClient\Api\Resource\BiblesResource;
use ApiBibleClient\Api\RestClient;
use ApiBibleClient\Http\ClientInterface;
use ApiBibleClient\Http\Response;
use PHPUnit\Framework\MockObject\MockObject;
use PHPUnit\Framework\TestCase;

class BiblesResourceTest extends TestCase {

    private $bibleResource;
    /** @var MockObject */
    private $client;

    public function setUp(): void {
        $this->client = $this->createMock(RestClient::class);

        $this->bibleResource = new BiblesResource($this->client);
    }

    public function testGet() {
        $response = new Response(
            200,
            '{"data":[{"id":"0c2ff0a5c8b9069c-01","dblId":"0c2ff0a5c8b9069c","relatedDbl":null,"name":"Nend Portions - Mark","nameLocal":"MAK Yakŋ Ohɨrand Ya Imbɨr Makɨv Mpamar","abbreviation":"NendNP03","abbreviationLocal":"NendNP03","description":null,"descriptionLocal":"Mark in Nend","language":{"id":"anh","name":"Nend","nameLocal":"Nend","script":"Latin","scriptDirection":"LTR"},"countries":[{"id":"PG","name":"Papua New Guinea","nameLocal":"Papua New Guinea"}],"type":"text","updatedAt":"2020-02-24T19:44:23.000Z","copyright":"©Bible Society of Papua New Guinea 2004","info":"<h1>MAK </h1> <h2>Yakŋ Ohɨrand Ya Imbɨr Makɨv Mpamar</h2> <p>This translation was produced by Pioneer Bible Translators, and was published in 2004 by the Bible Society of Papua New Guinea.</p> <p>If you are interested in obtaining a printed copy, please contact the Pioneer Bible Translators at <a href=\"http://www.pioneerbible.org/\">www.pioneerbible.org</a></p>","audioBibles":[]}]}'
        );

        $this->client->expects($this->once())
            ->method('request')
            ->with('https://api.scripture.api.bible/v1/bibles')
            ->willReturn($response);

        $this->assertInstanceOf(BibleCollection::class, $this->bibleResource->get());
    }
}
