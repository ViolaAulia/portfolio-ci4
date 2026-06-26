<?php
namespace App\Controllers;
use App\Models\SkillModel;
class Portfolio extends BaseController
{
    public function index()
    {
        $model = new SkillModel();

        $data = [
            'nama' => 'Viola Aulia Ramadhana',
            'jurusan' => 'Mahasiswa Teknik Komputer',
            'skill' => $model->findAll(),
            'proyek' => [
                'Sistem Irigasi Cerdas (Proyek Kelompok)',
                'Website Portofolio Pribadi'
            ]
        ];
        return view('portfolio', $data);
    }

    public function skill()
    {
        return view('skill');
    }

    public function kontak()
    {
        return view('kontak');
    }

    public function tambahSkill()
    {
        return view('tambah_skill');
    }

    public function simpanSkill()
    {
        $model = new SkillModel();
        $model->save([
            'nama_skill' => $this->request->getPost('nama_skill')
        ]);
        return redirect()->to('/');
    }

    public function editSkill($id)

{

    $model = new SkillModel();

    $data['skill'] = $model->find($id);

    return view('edit_skill', $data);

}

public function updateSkill($id)

{

    $model = new SkillModel();

    $model->update($id, [

        'nama_skill' => $this->request->getPost('nama_skill')

    ]);

    return redirect()->to('/');

}

public function deleteSkill($id)
{
    $model = new SkillModel();

    $model->delete($id);

    return redirect()->to('/');
}
}