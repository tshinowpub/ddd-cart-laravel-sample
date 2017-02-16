<?php

use LaraCart\Shop\Infrastructure\Repositories\Domain\Eloquent\EloquentItemRepository;
use LaraCart\Shop\Infrastructure\Eloquents\EloquentItem;

class ItemRepositoryTest extends TestCase
{
    protected $repository;

    protected function setUp()
	{
        parent::setUp();

        $this->repository = $this->app->make(EloquentItemRepository::class);
    }

    /**
	 * @test
	 */
    public function 商品の番号を取得する()
    {
        $item = $this->repository->findById(1);

        $this->assertSame(1, $item->getId()->value());
    }

    /**
	 * @test
	 */
    public function 商品の名前を取得する()
    {
        $item = $this->repository->findById(1);

        $this->assertSame('テスト商品', $item->getName());
    }

    /**
	 * @test
	 */
    public function 商品の料金を取得する()
    {
        $item = $this->repository->findById(1);

        $this->assertSame(1000, $item->getPrice()->value());
    }

    /**
	 * @test
	 */
    public function 商品の在庫を取得する()
    {
        $item = $this->repository->findById(1);

        $this->assertSame(100, $item->getStock()->value());
    }
}
