<?php
use Migrations\AbstractSeed;

/**
 * Products seed.
 */
class ProductsSeed extends AbstractSeed
{
    /**
     * Run Method.
     *
     * Write your database seeder using this method.
     *
     * More information on writing seeders is available here:
     * http://docs.phinx.org/en/latest/seeding.html
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker\Factory::create();
        $data = [];
        for ($i = 1; $i <= 20; $i++) {
            $data[] = [
              'name'      => 'Easy Polo Black Edition',
              'image'      => 'product'.$i.'.jpg',
              'price' => '199.00',
              'created'       => date('Y-m-d H:i:s'),
              'modified'       => date('Y-m-d H:i:s'),
          ];
      }

      $this->insert('products', $data);
    }
}
