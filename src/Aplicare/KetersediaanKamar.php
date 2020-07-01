<?php
namespace Nsulistiyawan\Bpjs\Aplicare;

use Nsulistiyawan\Bpjs\BpjsService;

class KetersediaanKamar extends BpjsService
{

    public function refKelas()
    {
        $response = $this->get('rest/ref/kelas');
        return json_decode($response, true);
    }
    public function bedGet($kodePpk, $start, $limit)
    {
        $response = $this->get('bed/read/'.$kodePpk.'/'.$start.'/'.$limit);
        return json_decode($response, true);
    }
    public function bedCreate($kodePpk, $data = [])
    {
        $header = ['Content-Type' => 'application/json'];
        $response = $this->post('rest/bed/create/'.$kodePpk, $data, $header);
        return json_decode($response, true);
    }
    public function bedUpdate($kodePpk, $data = [])
    {
        $response = $this->update('rest/bed/update/'.$kodePpk, $data);
        return json_decode($response, true);
    }
    public function bedDelete($kodePpk, $data = [])
    {
        $response = $this->deleteAp('rest/bed/delete/'.$kodePpk, $data);
        return json_decode($response, true);
    }
}