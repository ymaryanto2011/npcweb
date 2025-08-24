<?php
declare(strict_types=1);

namespace News\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * ArtikelFixture
 */
class ArtikelFixture extends TestFixture
{
    /**
     * Table name
     *
     * @var string
     */
    public string $table = 'artikel';
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'artikel_id' => 1,
                'artikel_tanggal' => '2025-08-24 09:30:54',
                'artikel_judul' => 'Lorem ipsum dolor sit amet',
                'artikel_slug' => 'Lorem ipsum dolor sit amet',
                'artikel_konten' => 'Lorem ipsum dolor sit amet, aliquet feugiat. Convallis morbi fringilla gravida, phasellus feugiat dapibus velit nunc, pulvinar eget sollicitudin venenatis cum nullam, vivamus ut a sed, mollitia lectus. Nulla vestibulum massa neque ut et, id hendrerit sit, feugiat in taciti enim proin nibh, tempor dignissim, rhoncus duis vestibulum nunc mattis convallis.',
                'artikel_sampul' => 'Lorem ipsum dolor sit amet',
                'artikel_author' => 1,
                'artikel_kategori' => 1,
                'artikel_status' => 'Lorem ipsum dolor sit amet',
                'artikel_dilihat' => 1,
            ],
        ];
        parent::init();
    }
}
