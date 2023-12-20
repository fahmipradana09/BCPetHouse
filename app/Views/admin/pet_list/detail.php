<?= $this->extend('layout/templates'); ?>
<?= $this->Section('content'); ?>
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
                <?= $pet['name']?>
            </div>
          </div>

          <div class="col-md-5 mt-3">
              <label for="inputOwnerName" class="form-label">Owner Name</label>
              <div class="input-group input-group-outline">
                  <?= $pet['owner_name']?>
              </div>
          </div>

          <div class="col-md-2 mt-3">
          <label for="inputAge" class="form-label text-truncate">Age</label>
            <div class="input-group input-group-outline">
                <?= $pet['age']?>
            </div>
          </div>

          <div class="col-md-12 mt-3">
            <label for="inputAddress" class="form-label text-truncate">Address</label>
            <div class="input-group input-group-outline">
                <?= $pet['address']?>
            </div>
          </div>

          <div class="col-md-6 mt-3">
            <label for="inputAnimalType" class="form-label text-truncate">Animal Type</label>
            <div class="input-group input-group-outline">
                <?= $pet['animal_type']?>
            </div>
          </div>


          <div class="col-md-6 mt-3">
            <label for="inputFurColor" class="form-label text-truncate">Phone Number</label>
            <div class="input-group input-group-outline">
                <?= $pet['phone']?>
            </div>
          </div>

          <div class="col-md-6 mt-3">
            <label for="inputFurColor" class="form-label text-truncate">Phone Number</label>
            <div class="input-group input-group-outline">
                <?= $pet['gender']?>
            </div>
          </div>

        </form>
        <div class="container">
          <div class="row clearfix">
          <div class="col-md-12 table-responsive column">
            <table class="table table-bordered table-hover" id="tab_logic">
              <thead>
                <tr>
                  <th class="text-center">
                    No.
                  </th>

                  <th class="text-center">
                    Date Checkup
                  </th>

                  <th class="text-center">
                    Amnesa
                  </th>

                  <th class="text-center">
                    Status Present
                  </th>

                  <th class="text-center">
                    Temuan Klinis
                  </th>

                  <th class="text-center">
                    Diagnosa
                  </th>

                  <th class="text-center">
                    Pengobatan
                  </th>
                </tr>
              </thead>
              <tbody>
                <tr id='addr0'>
                  <td>1</td>

                  <td>
                  <div class="input-group date" id="datePicker">
                    <input type="text" name='date[]' placeholder='Enter Date' class="form-control" disabled/>
                  </div>
                  </td>

                  <td>
                  <input type="text" name='amnesa[]' placeholder='Type here...' class="form-control"/>
                  </td>

                  <td>
                  <input type="text" name='StatusPresent[]' placeholder='Type here...' class="form-control"/>
                  </td>

                  <td>
                  <input type="text" name='Temuanklinis[]' placeholder='Type here...' class="form-control"/>
                  </td>

                  <td>
                  <input type="text" name='diagnosa[]' placeholder='Type here...' class="form-control"/>
                  </td>

                  <td>
                  <input type="text" name='Pengobatan[]' placeholder='Type here...' class="form-control"/>
                  </td>
                  

                </tr>
                    <tr id='addr1'></tr>
              </tbody>
            </table>
          </div>
        </div>
   </div>

   <button id="saveAmbulatoir" class="btn bg-primary align-self-center text-white btn-default col-md-6 mx-3 mt-4">Save</button>
  </div>
</div>
<?= $this->endSection(); ?>