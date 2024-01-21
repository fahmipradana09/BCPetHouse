<?= $this->extend('layout/templates'); ?>
<?= $this->Section('content'); ?>
<div class="container-fluid py-4">
  <div class="row">
    <div class="col-12">
      <div class="card mb-4">
        <div class="card-header pb-0">
          <h4>Ambulatoir</h4>
        </div>
        <form class="row m-3" action="<?= base_url(); ?>PetList/save" method="post">
          <?= csrf_field(); ?>
          <div class="col-md-5 mt-3">
            <label for="inputPetName" class="form-label text-truncate">Pet Name</label>
            <div class="input-group input-group-outline">
            <input type="text" class="form-control" id="inputName" value="<?= isset($pet) && isset($pet['name']) ? $pet['name'] : '' ?>">
            </div>
          </div>

          <div class="col-md-5 mt-3">
              <label for="inputOwnerName" class="form-label">Owner Name</label>
              <div class="input-group input-group-outline">
                <input type="text" class="form-control" id="petName" value="<?= isset($pet) && isset($pet['owner_name']) ? $pet['owner_name'] : '' ?>">
              </div>
          </div>

          <div class="col-md-2 mt-3">
          <label for="inputAge" class="form-label text-truncate">Age</label>
            <div class="input-group input-group-outline">
              <input type="text" class="form-control" id="inputAge" value="<?= isset($pet) && isset($pet['age']) ? $pet['age'] : '' ?>">
            </div>
          </div>

          <div class="col-md-12 mt-3">
            <label for="inputAddress" class="form-label text-truncate">Address</label>
            <div class="input-group input-group-outline">
              <textarea class="form-control" id="inputAddres" rows="3"><?= isset($pet) && isset($pet['address']) ? $pet['address'] : '' ?></textarea>
            </div>
          </div>

          <div class="col-md-6 mt-3">
            <label for="inputAnimalType" class="form-label text-truncate">Animal Type</label>
            <div class="input-group input-group-outline">
              <input type="text" class="form-control" id="inputAnimal" value="<?= isset($pet) && isset($pet['animal_type']) ? $pet['animal_type'] : '' ?>">
            </div>
          </div>


          <div class="col-md-6 mt-3">
            <label for="inputFurColor" class="form-label text-truncate">Phone Number</label>
            <div class="input-group input-group-outline">
              <input type="text" class="form-control" id="inputAnimal" value="<?= isset($pet) && isset($pet['phone']) ? $pet['phone'] : '' ?>">
            </div>
          </div>

          <div class="col-md-6 mt-3">
          <label for="inputGender" class="form-label text-truncate">Gender</label>
          <div class="form-check">
              <input class="form-check-input" type="radio" name="radioGender" id="radioMale" value="male" <?= ($pet['gender'] === 'male') ? 'checked' : '' ?>>
              <label class="form-check-label" for="radioMale">
                  Male
              </label>
          </div>
          <div class="form-check">
              <input class="form-check-input" type="radio" name="radioGender" id="radioFemale" value="female" <?= ($pet['gender'] === 'female') ? 'checked' : '' ?>>
              <label class="form-check-label" for="radioFemale">
                  Female
              </label>
          </div>
          <div class="form-check">
              <input class="form-check-input" type="radio" name="radioGender" id="radioUndefined" value="" <?= ($pet['gender'] !== 'male' && $pet['gender'] !== 'female') ? 'checked' : '' ?>>
              <label class="form-check-label" for="radioUndefined">
                  Undefined
              </label>
          </div>
      </div>

          
            <div class="col-md-6 align-items-start form-check form-switch my-4">
              <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckHospitalization">
              <label class="form-check-label" for="flexSwitchCheckHospitalization">Tindak lanjut Rawat inap</label>
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
                    <div class="date" id="datePicker">
                      <input type="text" name='date[]' placeholder='Enter Date' class="form-control" disabled/>
                    </div>
                    </td>

                    <td>
                    <input type="text" name='amnesa' placeholder='Type here...' class="form-control" value="<?=($amnesa) ? 'is-invalid' : ''; ?>" />
                    </td>

                    <td>
                    <input type="text" name='statusPresent' placeholder='Type here...' class="form-control" value=" <?=($statusPresent) ? 'is-invalid' : ''; ?>"/>
                    </td>

                    <td>
                    <input type="text" name='temuanKlinis' placeholder='Type here...' class="form-control" value="<?=($temuanKlinis) ? 'is-invalid' : ''; ?>"/>
                    </td>

                    <td>
                    <input type="text" name='diagnosa' placeholder='Type here...' class="form-control" value="<?=($diagnosa) ? 'is-invalid' : ''; ?>"/>
                    </td>

                    <td>
                    <input type="text" name='treatment' placeholder='Type here...' class="form-control" value=" <?=($treatment) ? 'is-invalid' : ''; ?>"/>
                    </td>
                    

                  </tr>
                      <tr id='addr1'></tr>
                </tbody>
              </table>
          </div>
        </div>
   </div>

   <div class="d-flex justify-content-center">
      <button type="submit" id="savePet" class="btn bg-primary justify-content-center text-white btn-default col-md-6 mx-3 mt-4">Save</button>
    </div>
  </div>
</div>
<?= $this->endSection(); ?>   