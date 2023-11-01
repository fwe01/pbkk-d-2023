<?php

namespace App\Http\TA\Application\Service\GetTopik;

use App\Http\TA\Domain\Enum\StatusTopik;
use JsonSerializable;

class GetTopikResponse implements JsonSerializable
{
    private string $judul;
    private string $nama_dosen;
    private StatusTopik $status;

    /**
     * @param string $judul
     * @param string $nama_dosen
     * @param StatusTopik $status
     */
    public function __construct(string $judul, string $nama_dosen, StatusTopik $status)
    {
        $this->judul = $judul;
        $this->nama_dosen = $nama_dosen;
        $this->status = $status;
    }

    public function jsonSerialize(): mixed
    {
        return [
            'judul' => $this->judul,
            'nama_dosen' => $this->nama_dosen,
            'status' => $this->status,
        ];
    }
}
