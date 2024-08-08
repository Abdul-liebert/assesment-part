<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class rapor extends Model
{
    use HasFactory;
    protected $table = 'rapor';
    protected $fillable = [
        'tahun_ajaran',
        'kelas',
        'nama',
        'nisn',
        'semester',
        'released',
        'wname',
        'nip',
        'hmaster',
        'hmnip',
        'beriman',
        'mandiri',
        'gotong_royong',
        'pramuka',
        'bultang',
        'futsal',
        'silat',
        'desc_pramuka',
        'desc_bultang',
        'desc_futsal',
        'desc_silat',
        'izin',
        'sakit',
        'alpha',
        'prestasi',
        'desc_prestasi',
        'note',
        'pai',
        'desc_pai',
        'pkn',
        'desc_pkn',
        'indo',
        'desc_indo',
        'mtk',
        'desc_mtk',
        'sejindo',
        'desc_sejindo',
        'bhs_asing',
        'desc_bhs_asing',
        'sbd',
        'desc_sbd',
        'pjok',
        'desc_pjok',
        'simdig',
        'desc_simdig',
        'fis',
        'desc_fis',
        'kim',
        'desc_kim',
        'sis_kom',
        'desc_sis_kom',
        'komjar',
        'desc_komjar',
        'progdas',
        'desc_progdas',
        'ddg',
        'desc_ddg',
        'iaas',
        'desc_iaas',
        'paas',
        'desc_paas',
        'saas',
        'desc_saas',
        'siot',
        'desc_siot',
        'skj',
        'desc_skj',
        'pkk',
        'desc_pkk',
    ];

    protected $casts = [
        'prestasi' => 'array',
        'desc_prestasi' => 'array',
    ];
}
