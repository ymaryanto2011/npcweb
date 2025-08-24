<?php
declare(strict_types=1);

namespace News\Model\Entity;

use Cake\ORM\Entity;

/**
 * Artikel Entity
 *
 * @property int $artikel_id
 * @property \Cake\I18n\DateTime $artikel_tanggal
 * @property string $artikel_judul
 * @property string $artikel_slug
 * @property string $artikel_konten
 * @property string $artikel_sampul
 * @property int $artikel_author
 * @property int $artikel_kategori
 * @property string $artikel_status
 * @property int $artikel_dilihat
 */
class Artikel extends Entity
{
    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array<string, bool>
     */
    protected array $_accessible = [
        'artikel_tanggal' => true,
        'artikel_judul' => true,
        'artikel_slug' => true,
        'artikel_konten' => true,
        'artikel_sampul' => true,
        'artikel_author' => true,
        'artikel_kategori' => true,
        'artikel_status' => true,
        'artikel_dilihat' => true,
    ];
}
