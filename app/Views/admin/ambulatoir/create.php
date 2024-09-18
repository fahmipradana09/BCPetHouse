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
        <form class="row m-3 pb-3" id="ambulatoirCreate" action="<?= base_url(); ?>Ambulatoir/save" method="post">
          <?= csrf_field(); ?>

          <!-- Pet Profile -->
          <figure class="text-end">
              <h1 class="bg-text-grey display-6 color-purple">Pet Profile</h1>
          </figure>

          <div class="col-md-5 mt-3">
            <label for="inputPetName" class="form-label text-truncate">Pet Name</label>
            <div>
                <input type="text" name="petName" class="form-control <?=($petName) ? 'is-invalid' : ''; ?>" id="inputPetName" placeholder="Type Here...." value="<?= old('petName') ?>"autofocus>
                <div class="invalid-feedback">
                  <?= $petName ?>
                </div>
              </div>
          </div>

          <div class="col-md-5 mt-3">
            <label for="inputOwnerName" class="form-label">Owner Name</label>
            <div>
                <input type="text" name="ownerName" class="form-control <?=($ownerName) ? 'is-invalid' : ''; ?>" id="inputOwnerName" placeholder="Type Here...." value="<?= old('ownerName') ?>">
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
              <textarea class="form-control <?=($address) ? 'is-invalid' : ''; ?>" name="address" id="inputAddress" placeholder="Type Here...." rows="3"><?= old('address') ?></textarea>
              <div class="invalid-feedback">
                <?= $address ?>
              </div>
            </div>
          </div>

          <div class="col-md-3 mt-3">
            <label for="inputFurColor" class="form-label text-truncate">Phone Number</label>
            <div>
              <input type="number" name="phoneNumber" class="form-control <?=($phoneNumber) ? 'is-invalid' : ''; ?>" id="inputPhoneNumber" placeholder="Type Here...."  value="<?= old('phoneNumber') ?>">
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
              <input type="hidden" name="rawatInap" value="0">
              <input class="form-check-input" type="checkbox" role="switch" value="1" name="rawatInap" id="flexSwitchCheckHospitalization">
              <label class="form-check-label" for="flexSwitchCheckHospitalization">Tindak lanjut Rawat inap</label>
            </div>


            <!-- Ambulatoir -->
            <figure class="mt-6 text-end">
              <h1 class="bg-text-grey display-6 color-purple">Ambulatoir</h1>
            </figure>

          <div class="col-md-6 mt-3">
            <label for="inputAmnesa" class="form-label text-truncate">Amnesa</label>
            <div>
            <textarea class="form-control <?=($amnesa) ? 'is-invalid' : ''; ?>" name="amnesa" id="inputTemuanKlinis" placeholder="Type Here...." rows="3"><?= old('amnesa') ?></textarea>
                <div class="invalid-feedback">
                  <?= $amnesa ?>
                </div>
              </div>
          </div>

          <div class="col-md-6 mt-3">
            <label for="inputStatusPresent" class="form-label">Status Present</label>
            <div>
            <textarea class="form-control <?=($statusPresent) ? 'is-invalid' : ''; ?>" name="statusPresent" id="inputStatusPresent" placeholder="Type Here...." rows="3"><?= old('statusPresent') ?></textarea>
                <div class="invalid-feedback">
                <?= $statusPresent ?>
              </div>
            </div>
          </div>

          <div class="col-md-12 mt-3">
            <label for="inputTemuanKlinis" class="form-label text-truncate">Temuan Klinis</label>
            <div>
              <textarea class="form-control <?=($temuanKlinis) ? 'is-invalid' : ''; ?>" name="temuanKlinis" id="inputTemuanKlinis" placeholder="Type Here...." rows="3"><?= old('temuanKlinis') ?></textarea>
              <div class="invalid-feedback">
                <?= $temuanKlinis ?>
              </div>
            </div>
          </div>

          <div class="col-md-12 mt-3">
            <label for="inputDiagnosis" class="form-label text-truncate">Diagnosa</label>
            <div>
              <textarea class="form-control <?=($diagnosa) ? 'is-invalid' : ''; ?>" name="diagnosa" id="inputDiagnosis" placeholder="Type Here...." rows="3"><?= old('diagnosa') ?></textarea>
              <div class="invalid-feedback">
                <?= $diagnosa ?>
              </div>
            </div>
          </div>

          <div class="col-md-12 mt-3">
            <label for="inputTreatment" class="form-label text-truncate">Pengobatan</label>
            <div>
              <textarea class="form-control <?=($treatment) ? 'is-invalid' : ''; ?>" name="treatment" id="inputTreatment" placeholder="Type Here...." rows="3"><?= old('treatment') ?></textarea>
              <div class="invalid-feedback">
                <?= $treatment ?>
              </div>
            </div>
          </div>

          <!-- <div class="col-md-12 mt-3 text-end">
          <label for="inputTreatment" class="form-label text-truncate">Select Doctor</label>
            <select name="cars" id="cars">
                <option value="volvo">Volvo</option>
                <option value="saab">Saab</option>
                <option value="mercedes">Mercedes</option>
                <option value="audi">Audi</option>
              </select>
          </div> -->

          
        </div>
        <div class="d-flex justify-content-center">
          <button type="button" id="triggerModal" class="btn bg-primary justify-content-center text-white btn-default col-md-6 mx-3 mt-4">Save</button>
        </div>
    </form>
     
  </div>

<!-- Modal for Confirmation -->
 
    <div class="modal fade" id="confirmModal" tabindex="-1" aria-labelledby="confirmModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="confirmModalLabel">Confirm Submission</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          Are you sure you want to save this information? 
          <span id="hospitalizeState"></span>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
          <button type="button" id="confirmSaveCreateAmbulatoir" class="btn bg-primary text-white">Confirm</button>
        </div>
      </div>
    </div>
  </div>

</div>




<?= $this->endSection(); ?>