<?= $this->extend("./layout/template"); ?>
<?= $this->section("main"); ?>
<div class="hero min-h-screen bg-base-200">
  <div class="hero-content   ">
 
    <!-- <div class="text-center lg:text-left">
      <h1 class="text-5xl font-bold">Form tambah Data</h1>
      <p class="py-6">silahkan tambahkan data yang ingin anda masukan</p>
    </div> -->
    <form action="/admin/save" method="POST" enctype="multipart/form-data"
        <?= csrf_field(); ?>
    <div class="card flex-shrink-0 w-[350px] max-w-7xl shadow-2xl bg-base-100">
      <div class="card-body">
        <div class="form-control">
             <h3 class="text-2xl text-slate-200 text-center">Tambah Data</h3>
          <label class="label" for="nama">
            <span class="label-text text-slate-200 text-lg font-semibold">nama</span>
          </label>
          <input type="text" placeholder="nama" id="nama" name="nama" class="input input-primary text-slate-200  input-bordered" />
        </div>
        <div class="form-control">
          <label class="label" for="jabatan">
            <span class="label-text text-slate-200 text-lg font-semibold">jabatan</span>
          </label>
          <input type="text" placeholder="jabatan" id="jabatan" name="jabatan" class="input input-primary text-slate-200  input-bordered" />
         
        </div>
        <div class="form-control">
          <label class="label" for="facebook">
            <span class="label-text text-slate-200 text-lg font-semibold">facebook</span>
          </label>
          <input type="text" placeholder="facebook" id="facebook" name="facebook" class="input  input-primary input-bordered text-slate-200" />
         
        </div>
        <div class="form-control" >
          <label class="label" for="twitter">
            <span class="label-text text-slate-200 text-lg font-semibold">twitter</span>
          </label>
          <input type="text" placeholder="twitter" id="twitter" name="twitter" class="input input-primary text-slate-200  input-bordered" />
         
        </div>
        
        <div class="form-control" >
          <label class="label" for="alamat">
            <span class="label-text text-slate-200 text-lg font-semibold">alamat</span>
          </label>
          <input type="text" placeholder="alamat" id="alamat" name="alamat" class="input input-primary text-slate-200  input-bordered" />
         
        </div>
        <div class="form-control" >
          <label class="label" for="slug">
            <span class="label-text text-slate-200 text-lg font-semibold">url</span>
          </label>
          <input type="text" placeholder="url" id="slug" name="slug" class="input input-primary  text-slate-200  input-bordered" />
        </div>
        <div class="form-control" >
          <label class="label" for="gambar">
            <span class="label-text text-slate-200 text-lg font-semibold">gambar</span>
          </label>
          <input type="file" placeholder="gambar" id="gambar" name="gambar" class="block w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 cursor-pointer dark:text-gray-400 focus:outline-none dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 " />
          
         
        </div>
        <div class="form-control mt-6">
          <button class="btn btn-primary">Tambahkan data</button>
        </div>
      </div>
    </div>
    </form>
  </div>
</div>
<?= $this->endSection(); ?>