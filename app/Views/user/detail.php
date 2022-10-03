<?= $this->extend("./layout/template"); ?>
<?= $this->section("main"); ?>
<div class="hero min-h-screen bg-base-200">
      <div
        class="hero-content flex-col lg:flex-row"
        v-for="profile in profiles"
        :id="profile.id"
      >
        <img
          src="/img/<?= $card["gambar"]; ?>"
          class="max-w-sm rounded-lg shadow-2xl h-screen"
        />
        <div class="mx-10">
          <h1 class="text-5xl font-bold text-slate-300 tracking-wide">
           <?= $card["nama"]; ?>
          </h1>
          <h1 class="text-3xl font-bold text-slate-300 mb-8">
         <?= $card["jabatan"]; ?>
          </h1>
          <ul class="menu -ml-4">
            <li
              class="text-slate-400 hover:text-white hover:bg-primary font-semibold text-xl -mt-3 text-left"
            >
              <p>
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  width="28"
                  height="28"
                  fill="currentColor"
                  class="bi bi-facebook"
                  viewBox="0 0 16 16"
                >
                  <path
                    d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z"
                  />
                </svg>
              <?= $card["facebook"]; ?>
              </p>
            </li>
            <li
              class="text-slate-400 hover:text-white hover:bg-primary font-semibold text-xl -mt-3"
            >
              <a href="#"
                ><svg
                  xmlns="http://www.w3.org/2000/svg"
                  width="28"
                  height="28"
                  fill="currentColor"
                  class="bi bi-browser-edge"
                  viewBox="0 0 16 16"
                >
                  <path
                    d="M9.482 9.341c-.069.062-.17.153-.17.309 0 .162.107.325.3.456.877.613 2.521.54 2.592.538h.002c.667 0 1.32-.18 1.894-.519A3.838 3.838 0 0 0 16 6.819c.018-1.316-.44-2.218-.666-2.664l-.04-.08C13.963 1.487 11.106 0 8 0A8 8 0 0 0 .473 5.29C1.488 4.048 3.183 3.262 5 3.262c2.83 0 5.01 1.885 5.01 4.797h-.004v.002c0 .338-.168.832-.487 1.244l.006-.006a.594.594 0 0 1-.043.041Z"
                  />
                  <path
                    d="M.01 7.753a8.137 8.137 0 0 0 .753 3.641 8 8 0 0 0 6.495 4.564 5.21 5.21 0 0 1-.785-.377h-.01l-.12-.075a5.45 5.45 0 0 1-1.56-1.463A5.543 5.543 0 0 1 6.81 5.8l.01-.004.025-.012c.208-.098.62-.292 1.167-.285.129.001.257.012.384.033a4.037 4.037 0 0 0-.993-.698l-.01-.005C6.348 4.282 5.199 4.263 5 4.263c-2.44 0-4.824 1.634-4.99 3.49Zm10.263 7.912c.088-.027.177-.054.265-.084-.102.032-.204.06-.307.086l.042-.002Z"
                  />
                  <path
                    d="M10.228 15.667a5.21 5.21 0 0 0 .303-.086l.082-.025a8.019 8.019 0 0 0 4.162-3.3.25.25 0 0 0-.331-.35c-.215.112-.436.21-.663.294a6.367 6.367 0 0 1-2.243.4c-2.957 0-5.532-2.031-5.532-4.644.002-.135.017-.268.046-.399a4.543 4.543 0 0 0-.46 5.898l.003.005c.315.441.707.821 1.158 1.121h.003l.144.09c.877.55 1.721 1.078 3.328.996Z"
                  />
                </svg>
             <?= $card["twitter"]; ?></a
              >
            </li>
            <li
              class="text-slate-400 hover:text-white hover:bg-primary font-semibold text-xl -mt-3"
            >
              <p>
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  width="28"
                  height="28"
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
              <?= $card["alamat"]; ?>
              </p>
            </li>
          </ul>
         <a href="/" class="btn btn-primary mt-5">kembali</a>
        </div>
      </div>
    </div>
<?= $this->endSection(); ?>