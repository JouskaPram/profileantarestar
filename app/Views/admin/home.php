<?= $this->extend("./layout/template"); ?>
<?= $this->section("main"); ?>
<div class="container">
<a href="/admin/create" class="btn btn-secondary m-10 mx-40">Tambah data</a>
<div class="form-control float-right m-10">
    <form action="" method="get">
  <div class="input-group">
    <input type="text" placeholder="Masukan Nama" class="input input-bordered" name="keyword"/>
    <button class="btn btn-square" type="submit" name="submit">
      <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" /></svg>
    </button>
  </div>
  </form>
</div>
<?php if(session()->getFlashdata('pesan')): ?>
    <div class="alert alert-success shadow-lg">
  <div>
    <svg xmlns="http://www.w3.org/2000/svg" class="stroke-current flex-shrink-0 h-6 w-6" fill="none" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" /></svg>
    <?= session()->getFlashdata("pesan"); ?>
  </div>
</div>
    <?php endif ?>
    <div class="continer">
<table class="table-zebra table m-auto">
    <t-head class="">
        <tr class="text-slate-200 text-xl font-semibold">
            <td>NO</td>
            <td>Nama</td>
            <td>gambar</td>
            <td>Jabatan</td>
            <td>Facebook</td>
            <td>Twitter</td>
            <td>Alamat</td>
            <td>Action</td>
        </tr>
    </t-head>
    <t-body>
        <?php $i=1; ?>
        <?php foreach($card as $c): ?>
            <tr class="text-slate-300 font-base text-lg">
            <td><?= $i++; ?></td>
            <td><?= $c["nama"]; ?></td>
            <td><img src="/img/<?= $c["gambar"]; ?>" alt="" class="w-20 h-20"></td>
            <td><?= $c["jabatan"]; ?></td>
            <td><?= $c["facebook"]; ?></td>
            <td><?= $c["twitter"]; ?></td>
            <td><?= $c["alamat"]; ?></td>
            <td> <a class="btn btn-sm btn-primary" href="admin/<?= $c["slug"]; ?>"
                >lihat Profile</a
              ></td>
        </tr>
        <?php endforeach ?>
    </t-body>
</table>
</div>
</div>
<?= $this->endSection(); ?>