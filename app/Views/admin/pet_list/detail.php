  <?= $this->extend('layout/templates'); ?>
  <?= $this->Section('content'); ?>g
  <div class="container-fluid py-4">
    <div class="row">
      <div class="col-12">
        <div class="card mb-4">
          <div class="card-header pb-0">
            <h4>Ambulatoir</h4>
          </div>
          <form class="row m-3">

              <div class="col-md-5 mt-3">
              <label for="inputPetName" class="form-label text-truncate">Pet Name</label>
              <div class="input-group input-group-outline">

              </div>
            </div>

            <div class="col-md-5 mt-3">
                <label for="inputOwnerName" class="form-label">Owner Name</label>
                <div class="input-group input-group-outline">

                </div>
            </div>

            <div class="col-md-2 mt-3">
            <label for="inputAge" class="form-label text-truncate">Age</label>
              <div class="input-group input-group-outline">

              </div>
            </div>

            <div class="col-md-12 mt-3">
              <label for="inputAddress" class="form-label text-truncate">Address</label>
              <div class="input-group input-group-outline">

              </div>
            </div>

            <div class="col-md-6 mt-3">
              <label for="inputAnimalType" class="form-label text-truncate">Animal Type</label>
              <div class="input-group input-group-outline">

              </div>
            </div>


            <div class="col-md-6 mt-3">
              <label for="inputFurColor" class="form-label text-truncate">Phone Number</label>
              <div class="input-group input-group-outline">

              </div>
            </div>

            <div class="col-md-6 mt-3">
              <label for="inputFurColor" class="form-label text-truncate">Phone Number</label>
              <div class="input-group input-group-outline">

              </div>
            </div>

          </form>
        </div>

    <button id="saveAmbulatoir" class="btn bg-primary align-self-center text-white btn-default col-md-6 mx-3 mt-4">Save</button>
    </div>
  </div>
  <?= $this->endSection(); ?>