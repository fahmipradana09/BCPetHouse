<?= $this->extend('layout/templates'); ?>
<?= $this->Section('content'); ?>
<div class="container-fluid py-4">
  <div class="row">
    <div class="col-12">
      <div class="card mb-4">
        <div class="card-header pb-0">
          <!-- Data nya kosong -->
          <h4>Create NEW Ambulatoir</h4>
        </div>
        <form class="row m-3" action="<?= base_url(); ?>Ambulatoir/save" method="post">
          <?= csrf_field(); ?>
          <div class="col-md-5 mt-3">
            <label for="inputPetName" class="form-label text-truncate">Pet Name</label>
            <div>
                <input type="text" name="petName" class="form-control <?=($petName) ? 'is-invalid' : ''; ?>" id="inputPetName" placeholder="Type Here...." value="<?= old('petname') ?>">
                <div class="invalid-feedback">
                  <?= $petName ?>
                </div>
              </div>
          </div>

          <div class="col-md-5 mt-3">
            <label for="inputOwnerName" class="form-label">Owner Name</label>
            <div>
                <input type="text" name="ownerName" class="form-control <?=($ownerName) ? 'is-invalid' : ''; ?>" id="inputOwnerName" placeholder="Type Here...." value="<?= old('ownerName') ?>" autofocus>
                <div class="invalid-feedback">
                <?= $ownerName ?>
              </div>
            </div>
          </div>

          <div class="col-md-2 mt-3">
          <label for="inputAge" class="form-label text-truncate">Age</label>
            <div>
                <input type="text" name="age" class="form-control <?=($age) ? 'is-invalid' : ''; ?>" id="inputAge"  placeholder="Type Here...." value="<?= old('age') ?>">
                <div class="invalid-feedback">
                  <?= $age ?>
                </div>
             </div>
          </div>

          <div class="col-md-12 mt-3">
            <label for="inputAddress" class="form-label text-truncate">Address</label>
            <div>
              <textarea class="form-control <?=($address) ? 'is-invalid' : ''; ?>" name="address" id="inputAddress" rows="3"><?= old('address') ?></textarea>
              <div class="invalid-feedback">
                <?= $address ?>
              </div>
            </div>
          </div>

          <div class="col-md-3 mt-3">
            <label for="inputFurColor" class="form-label text-truncate">Phone Number</label>
            <div>
              <input type="text" name="phoneNumber" class="form-control <?=($phoneNumber) ? 'is-invalid' : ''; ?>" id="inputPhoneNumber" placeholder="Type Here...."  value="<?= old('phoneNumber') ?>">
              <div class="invalid-feedback">
                <?= $phoneNumber ?>
              </div>
            </div>
          </div>

          <div class="col-md-3 mt-3">
            <label for="inputAnimalType" class="form-label text-truncate">Animal Type</label>
            <div>
              <input type="text" name="animalType" class="form-control <?=($animalType) ? 'is-invalid' : ''; ?>" id="inputAnimalType" placeholder="Type Here...."  value="<?= old('animalType') ?>">
              <div class="invalid-feedback">
                <?= $animalType ?>
              </div>
            </div>
          </div>

          <div class="col-md-3 mt-3">
            <label for="inputFurColor" class="form-label text-truncate">Race</label>
            <div>
              <input type="text" name="race" class="form-control <?=($race) ? 'is-invalid' : ''; ?>" id="inputRace" placeholder="Type Here...."  value="<?= old('race') ?>">
              <div class="invalid-feedback">
                <?= $race ?>
              </div>
            </div>
          </div>

          <div class="col-md-3 mt-3">
            <label for="inputFurColor" class="form-label text-truncate">Color</label>
            <div>
              <input type="text" name="color" class="form-control <?=($color) ? 'is-invalid' : ''; ?>" id="inputFurColor" placeholder="Type Here...."  value="<?= old('color') ?>">
              <div class="invalid-feedback">
                <?= $color ?>
              </div>
            </div>
          </div>

          <div class="col-md-6 mt-3">
              <label for="inputGender" class="form-label text-truncate">Gender</label>

              <div class="form-check">
                  <input class="form-check-input" type="radio" name="gender" id="radioMale" value="male" <?= (old('gender') === 'male') ? 'checked' : '' ?>>
                  <label class="form-check-label" for="radioMale">Male</label>
              </div>

              <div class="form-check">
                  <input class="form-check-input" type="radio" name="gender" id="radioFemale" value="female" <?= (old('gender') === 'female') ? 'checked' : '' ?>>
                  <label class="form-check-label" for="radioFemale">Female</label>
              </div>

              <div class="form-check">
                  <input class="form-check-input" type="radio" name="gender" id="radioUndefined" value="undefined" <?= (old('gender') !== 'male' && old('gender') !== 'female') ? 'checked' : '' ?> checked>
                  <label class="form-check-label" for="radioUndefined">Undefined</label>
              </div>
            </div>
          
            <div class="col-md-6 align-items-start form-check form-switch my-4">
              <input class="form-check-input" type="checkbox" role="switch" name="rawatInap" id="flexSwitchCheckHospitalization">
              <label class="form-check-label" for="flexSwitchCheckHospitalization">Tindak lanjut Rawat inap</label>
            </div>

     
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
                      <input type="text" name='date' placeholder='Enter Date' class="form-control " readonly/>
                    </div>
                    </td>

                    <td>
                    <input type="text" name='amnesa' placeholder='Type here...' class="form-control <?=($amnesa) ? 'is-invalid' : ''; ?>"  value="<?= old('amnesa') ?>"/>
                    </td>

                    <td>
                    <input type="text" name='statusPresent' placeholder='Type here...' class="form-control <?=($statusPresent) ? 'is-invalid' : ''; ?>"  value="<?= old('statusPresent') ?>"/>
                    </td>

                    <td>
                    <input type="text" name='temuanKlinis' placeholder='Type here...' class="form-control <?=($temuanKlinis) ? 'is-invalid' : ''; ?>"  value="<?= old('temuanKlinis') ?>"/>
                    </td>

                    <td>
                    <input type="text" name='diagnosa' placeholder='Type here...' class="form-control <?=($diagnosa) ? 'is-invalid' : ''; ?>"  value="<?= old('diagnosa') ?>"/>
                    </td>

                    <td>
                    <input type="text" name='treatment' placeholder='Type here...' class="form-control <?=($treatment) ? 'is-invalid' : ''; ?>"  value="<?= old('treatmen') ?>"/>
                    </td>
                    

                  </tr>
                      <tr id='addr1'></tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
        <div class="d-flex justify-content-center">
          <button type="submit" id="saveAmbulatoir" class="btn bg-primary justify-content-center text-white btn-default col-md-6 mx-3 mt-4">Save</button>
        </div>
    </form>
     
  </div>
</div>
<?= $this->endSection(); ?>