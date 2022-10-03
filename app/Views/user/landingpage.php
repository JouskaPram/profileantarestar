<?= $this->extend("./layout/template"); ?>
<?= $this->section("main"); ?>
    <div class="m-16 flex flex-wrap justify-center">
       <?php foreach($card as $c): ?>
        <div
          class="card md:w-1/4 w-full bg-white shadow-2xl md:mx-5 mt-4"        
        >
          <figure class="">
            <img
              src="/img/<?= $c["gambar"]; ?>"
              alt="Shoes"
              class="rounded-full md:w-[250px] w-[250px] md:h-[250px] h-[250px] object-fill mt-3"
            />
          </figure>
          <div class="card-body">
            <h2 class="card-title text-slate-900 font-semibold text-2xl">
             <?= $c["nama"]; ?>
            </h2>
            <h2 class="text-slate-800 font-semibold text-xl card-title">
              Bocil PKL
            </h2>
            <ul class="menu -ml-4">
              <li class="text-slate-700 font-semibold text-lg -mt-3 text-left">
                <p>
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    width="16"
                    height="16"
                    fill="currentColor"
                    class="bi bi-facebook"
                    viewBox="0 0 16 16"
                  >
                    <path
                      d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z"
                    />
                  </svg>
                  <?= $c["facebook"]; ?>
                </p>
              </li>
              <li class="text-slate-700 font-semibold text-lg -mt-3">
                <a href="https://twitter.com/<?= $c["twitter"]; ?>"
                  ><svg
                    xmlns="http://www.w3.org/2000/svg"
                    width="16"
                    height="16"
                    fill="currentColor"
                    class="bi bi-browser-chrome"
                    viewBox="0 0 16 16"
                  >
                    <path
                      fill-rule="evenodd"
                      d="M16 8a8.001 8.001 0 0 1-7.022 7.94l1.902-7.098a2.995 2.995 0 0 0 .05-1.492A2.977 2.977 0 0 0 10.237 6h5.511A8 8 0 0 1 16 8ZM0 8a8 8 0 0 0 7.927 8l1.426-5.321a2.978 2.978 0 0 1-.723.255 2.979 2.979 0 0 1-1.743-.147 2.986 2.986 0 0 1-1.043-.7L.633 4.876A7.975 7.975 0 0 0 0 8Zm5.004-.167L1.108 3.936A8.003 8.003 0 0 1 15.418 5H8.066a2.979 2.979 0 0 0-1.252.243 2.987 2.987 0 0 0-1.81 2.59ZM8 10a2 2 0 1 0 0-4 2 2 0 0 0 0 4Z"
                    />
                  </svg>
                 <?= $c["twitter"]; ?></a
                >
              </li>
              <li class="text-slate-700 font-semibold text-lg -mt-3">
                <p>
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    width="16"
                    height="16"
                    fill="currentColor"
                    class="bi bi-house-fill"
                    viewBox="0 0 16 16"
                  >
                    <path
                      fill-rule="evenodd"
                      d="m8 3.293 6 6V13.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5V9.293l6-6zm5-.793V6l-2-2V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5z"
                    />
                    <path
                      fill-rule="evenodd"
                      d="M7.293 1.5a1 1 0 0 1 1.414 0l6.647 6.646a.5.5 0 0 1-.708.708L8 2.207 1.354 8.854a.5.5 0 1 1-.708-.708L7.293 1.5z"
                    />
                  </svg>
                 <?= $c["alamat"]; ?>
                </p>
              </li>
            </ul>
            <div class="card-actions">
              <a class="btn btn-primary font-semibold" href="<?= $c["slug"]; ?>"
                >lihat Profile</a
              >
            </div>
          </div>
        </div>
        <?php endforeach ?>
      </div>
      <?= $pager->simpleLinks('card','card_full') ?>
<?= $this->endSection(); ?>