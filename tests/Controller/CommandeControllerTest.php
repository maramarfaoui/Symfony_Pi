<?php

namespace App\Test\Controller;

use App\Entity\Commande;
use App\Repository\CommandeRepository;
use Symfony\Bundle\FrameworkBundle\KernelBrowser;
use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class CommandeControllerTest extends WebTestCase
{
    private KernelBrowser $client;
    private CommandeRepository $repository;
    private string $path = '/commande/';

    protected function setUp(): void
    {
        $this->client = static::createClient();
        $this->repository = static::getContainer()->get('doctrine')->getRepository(Commande::class);

        foreach ($this->repository->findAll() as $object) {
            $this->repository->remove($object, true);
        }
    }

    public function testIndex(): void
    {
        $crawler = $this->client->request('GET', $this->path);

        self::assertResponseStatusCodeSame(200);
        self::assertPageTitleContains('Commande index');

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
            'commande[idcmd]' => 'Testing',
            'commande[idpanier]' => 'Testing',
            'commande[idprod]' => 'Testing',
            'commande[nomprod]' => 'Testing',
            'commande[quantite]' => 'Testing',
            'commande[prixprod]' => 'Testing',
            'commande[prixremise]' => 'Testing',
            'commande[etatcmd]' => 'Testing',
            'commande[datecmd]' => 'Testing',
        ]);

        self::assertResponseRedirects('/commande/');

        self::assertSame($originalNumObjectsInRepository + 1, count($this->repository->findAll()));
    }

    public function testShow(): void
    {
        $this->markTestIncomplete();
        $fixture = new Commande();
        $fixture->setIdcmd('My Title');
        $fixture->setIdpanier('My Title');
        $fixture->setIdprod('My Title');
        $fixture->setNomprod('My Title');
        $fixture->setQuantite('My Title');
        $fixture->setPrixprod('My Title');
        $fixture->setPrixremise('My Title');
        $fixture->setEtatcmd('My Title');
        $fixture->setDatecmd('My Title');

        $this->repository->add($fixture, true);

        $this->client->request('GET', sprintf('%s%s', $this->path, $fixture->getId()));

        self::assertResponseStatusCodeSame(200);
        self::assertPageTitleContains('Commande');

        // Use assertions to check that the properties are properly displayed.
    }

    public function testEdit(): void
    {
        $this->markTestIncomplete();
        $fixture = new Commande();
        $fixture->setIdcmd('My Title');
        $fixture->setIdpanier('My Title');
        $fixture->setIdprod('My Title');
        $fixture->setNomprod('My Title');
        $fixture->setQuantite('My Title');
        $fixture->setPrixprod('My Title');
        $fixture->setPrixremise('My Title');
        $fixture->setEtatcmd('My Title');
        $fixture->setDatecmd('My Title');

        $this->repository->add($fixture, true);

        $this->client->request('GET', sprintf('%s%s/edit', $this->path, $fixture->getId()));

        $this->client->submitForm('Update', [
            'commande[idcmd]' => 'Something New',
            'commande[idpanier]' => 'Something New',
            'commande[idprod]' => 'Something New',
            'commande[nomprod]' => 'Something New',
            'commande[quantite]' => 'Something New',
            'commande[prixprod]' => 'Something New',
            'commande[prixremise]' => 'Something New',
            'commande[etatcmd]' => 'Something New',
            'commande[datecmd]' => 'Something New',
        ]);

        self::assertResponseRedirects('/commande/');

        $fixture = $this->repository->findAll();

        self::assertSame('Something New', $fixture[0]->getIdcmd());
        self::assertSame('Something New', $fixture[0]->getIdpanier());
        self::assertSame('Something New', $fixture[0]->getIdprod());
        self::assertSame('Something New', $fixture[0]->getNomprod());
        self::assertSame('Something New', $fixture[0]->getQuantite());
        self::assertSame('Something New', $fixture[0]->getPrixprod());
        self::assertSame('Something New', $fixture[0]->getPrixremise());
        self::assertSame('Something New', $fixture[0]->getEtatcmd());
        self::assertSame('Something New', $fixture[0]->getDatecmd());
    }

    public function testRemove(): void
    {
        $this->markTestIncomplete();

        $originalNumObjectsInRepository = count($this->repository->findAll());

        $fixture = new Commande();
        $fixture->setIdcmd('My Title');
        $fixture->setIdpanier('My Title');
        $fixture->setIdprod('My Title');
        $fixture->setNomprod('My Title');
        $fixture->setQuantite('My Title');
        $fixture->setPrixprod('My Title');
        $fixture->setPrixremise('My Title');
        $fixture->setEtatcmd('My Title');
        $fixture->setDatecmd('My Title');

        $this->repository->add($fixture, true);

        self::assertSame($originalNumObjectsInRepository + 1, count($this->repository->findAll()));

        $this->client->request('GET', sprintf('%s%s', $this->path, $fixture->getId()));
        $this->client->submitForm('Delete');

        self::assertSame($originalNumObjectsInRepository, count($this->repository->findAll()));
        self::assertResponseRedirects('/commande/');
    }
}
