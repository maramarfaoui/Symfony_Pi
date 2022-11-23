<?php

namespace App\Test\Controller;

use App\Entity\Panier;
use App\Repository\PanierRepository;
use Symfony\Bundle\FrameworkBundle\KernelBrowser;
use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class PanierControllerTest extends WebTestCase
{
    private KernelBrowser $client;
    private PanierRepository $repository;
    private string $path = '/panier/';

    protected function setUp(): void
    {
        $this->client = static::createClient();
        $this->repository = static::getContainer()->get('doctrine')->getRepository(Panier::class);

        foreach ($this->repository->findAll() as $object) {
            $this->repository->remove($object, true);
        }
    }

    public function testIndex(): void
    {
        $crawler = $this->client->request('GET', $this->path);

        self::assertResponseStatusCodeSame(200);
        self::assertPageTitleContains('Panier index');

        // Use the $crawler to perform additional assertions e.g.
        // self::assertSame('Some text on the page', $crawler->filter('.p')->first());
    }

    public function testNew(): void
    {
        $originalNumObjectsInRepository = count($this->repository->findAll());

        $this->markTestIncomplete();
        $this->client->request('GET', sprintf('%snew', $this->path));

        self::assertResponseStatusCodeSame(200);

        $this->client->submitForm('Save', [
            'panier[idpanier]' => 'Testing',
            'panier[idprod]' => 'Testing',
            'panier[nomprod]' => 'Testing',
            'panier[quantite]' => 'Testing',
            'panier[prixprod]' => 'Testing',
            'panier[prixremise]' => 'Testing',
        ]);

        self::assertResponseRedirects('/panier/');

        self::assertSame($originalNumObjectsInRepository + 1, count($this->repository->findAll()));
    }

    public function testShow(): void
    {
        $this->markTestIncomplete();
        $fixture = new Panier();
        $fixture->setIdpanier('My Title');
        $fixture->setIdprod('My Title');
        $fixture->setNomprod('My Title');
        $fixture->setQuantite('My Title');
        $fixture->setPrixprod('My Title');
        $fixture->setPrixremise('My Title');

        $this->repository->add($fixture, true);

        $this->client->request('GET', sprintf('%s%s', $this->path, $fixture->getId()));

        self::assertResponseStatusCodeSame(200);
        self::assertPageTitleContains('Panier');

        // Use assertions to check that the properties are properly displayed.
    }

    public function testEdit(): void
    {
        $this->markTestIncomplete();
        $fixture = new Panier();
        $fixture->setIdpanier('My Title');
        $fixture->setIdprod('My Title');
        $fixture->setNomprod('My Title');
        $fixture->setQuantite('My Title');
        $fixture->setPrixprod('My Title');
        $fixture->setPrixremise('My Title');

        $this->repository->add($fixture, true);

        $this->client->request('GET', sprintf('%s%s/edit', $this->path, $fixture->getId()));

        $this->client->submitForm('Update', [
            'panier[idpanier]' => 'Something New',
            'panier[idprod]' => 'Something New',
            'panier[nomprod]' => 'Something New',
            'panier[quantite]' => 'Something New',
            'panier[prixprod]' => 'Something New',
            'panier[prixremise]' => 'Something New',
        ]);

        self::assertResponseRedirects('/panier/');

        $fixture = $this->repository->findAll();

        self::assertSame('Something New', $fixture[0]->getIdpanier());
        self::assertSame('Something New', $fixture[0]->getIdprod());
        self::assertSame('Something New', $fixture[0]->getNomprod());
        self::assertSame('Something New', $fixture[0]->getQuantite());
        self::assertSame('Something New', $fixture[0]->getPrixprod());
        self::assertSame('Something New', $fixture[0]->getPrixremise());
    }

    public function testRemove(): void
    {
        $this->markTestIncomplete();

        $originalNumObjectsInRepository = count($this->repository->findAll());

        $fixture = new Panier();
        $fixture->setIdpanier('My Title');
        $fixture->setIdprod('My Title');
        $fixture->setNomprod('My Title');
        $fixture->setQuantite('My Title');
        $fixture->setPrixprod('My Title');
        $fixture->setPrixremise('My Title');

        $this->repository->add($fixture, true);

        self::assertSame($originalNumObjectsInRepository + 1, count($this->repository->findAll()));

        $this->client->request('GET', sprintf('%s%s', $this->path, $fixture->getId()));
        $this->client->submitForm('Delete');

        self::assertSame($originalNumObjectsInRepository, count($this->repository->findAll()));
        self::assertResponseRedirects('/panier/');
    }
}
