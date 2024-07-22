<?= $this->extend('layout/templates'); ?>
<?= $this->Section('content'); ?>
<div class="container-fluid py-4">
  <div class="row">
    <div class="col-12">
      <div class="card mb-4">
        <div class="card-header pb-0">
          <h4>Ambulatoir</h4>
        </div>
        <?php if (session()->getFlashdata('message')):?>
            <div class="alert alert-success alert-dismissible text-white fade show mx-3 mt-3 py-1" role="alert">
            <?= session()->getFlashdata('message'); ?>
            <button type="button" class="btn-close text-white" data-dismiss="alert" aria-label="Close"></button>
            </div>
          <?php endif;?>
        <button type="button" class="btn bg-primary mb-0 text-white mx-3 mt-3" data-bs-toggle="modal" data-bs-target="#newAmbulatoir">
            Create new Ambulatoir
        </button>

        <form class="row m-3" action="<?= base_url(); ?>PetList/save/<?= $pet['id']?>" method="post">
          <?= csrf_field(); ?>
          <div class="col-md-5 mt-3">
            <label for="inputPetName" class="form-label text-truncate">Pet Name</label>
            <div>
            <input type="text" name="petName" class="form-control <?=($petName) ? 'is-invalid' : ''; ?>" id="inputPetName" value="<?= $pet['name'] ? $pet['name'] : '' ?>" <?= $flag ? 'readonly' : '' ?> autofocus>
            <div class="invalid-feedback">
                <?= $petName ?>
              </div>
            </div>
          </div>

          <div class="col-md-5 mt-3">
            <label for="inputOwnerName" class="form-label">Owner Name</label>
            <div>
                <input type="text" name="ownerName" class="form-control <?=($ownerName) ? 'is-invalid' : ''; ?>" id="inputOwnerName" placeholder="Type Here...."  value="<?= $pet['owner_name'] ? $pet['owner_name'] : '' ?>" <?= $flag ? 'readonly' : '' ?>>
                <div class="invalid-feedback">
                <?= $ownerName ?>
              </div>
            </div>
          </div>
          
          <div class="col-md-2 mt-3">
          <label for="inputAge" class="form-label text-truncate">Age</label>
            <div>
                <input type="text" name="age" class="form-control <?=($age) ? 'is-invalid' : ''; ?>" id="inputAge" placeholder="Type Here...." value="<?= $pet['age'] ? $pet['age'] : '' ?>" <?= $flag ? 'readonly' : '' ?>>
                <div class="invalid-feedback">
                  <?= $age ?>
                </div>
             </div>
          </div>

          <div class="col-md-12 mt-3">
            <label for="inputAddress" class="form-label text-truncate">Address</label>
            <div>
              <textarea class="form-control <?=($address) ? 'is-invalid' : ''; ?>" name="address" id="inputAddress" rows="3" <?= $flag ? 'readonly' : '' ?> ><?= $pet['address'] ? $pet['address'] : '' ?></textarea>
              <div class="invalid-feedback">
                <?= $address ?>
              </div>
            </div>
          </div>

          <div class="col-md-3 mt-3">
            <label for="inputFurColor" class="form-label text-truncate">Phone Number</label>
            <div>
              <input type="text" name="phoneNumber" id="inputPhone" class="form-control <?=($phoneNumber) ? 'is-invalid' : ''; ?>" id="inputPhoneNumber" placeholder="Type Here...."  value="<?= $pet['phone'] ? $pet['phone'] : '' ?>" <?= $flag ? 'readonly' : '' ?>>
              <div class="invalid-feedback">
                <?= $phoneNumber ?>
              </div>
            </div>
          </div>

          <div class="col-md-3 mt-3">
            <label for="inputAnimalType" class="form-label text-truncate">Animal Type</label>
            <div>
              <input type="text" name="animalType" class="form-control <?=($animalType) ? 'is-invalid' : ''; ?>" id="inputAnimalType" placeholder="Type Here...." value="<?= $pet['animal_type'] ? $pet['animal_type'] : '' ?>" <?= $flag ? 'readonly' : '' ?>>
              <div class="invalid-feedback">
                <?= $animalType ?>
              </div>
            </div>
          </div>

          <div class="col-md-3 mt-3">
            <label for="inputFurColor" class="form-label text-truncate">Race</label>
            <div>
              <input type="text" name="race" class="form-control <?=($race) ? 'is-invalid' : ''; ?>" id="inputRace" placeholder="Type Here...." value="<?= $pet['race'] ? $pet['race'] : '' ?>" <?= $flag ? 'readonly' : '' ?>>
              <div class="invalid-feedback">
                <?= $race ?>
              </div>
            </div>
          </div>

          <div class="col-md-3 mt-3">
            <label for="inputFurColor" class="form-label text-truncate">Color</label>
            <div>
              <input type="text" name="color" class="form-control <?=($color) ? 'is-invalid' : ''; ?>" id="inputFurColor" placeholder="Type Here...." value="<?= $pet['color'] ? $pet['color'] : '' ?>" <?= $flag ? 'readonly' : '' ?>>
              <div class="invalid-feedback">
                <?= $color ?>
              </div>
            </div>
          </div>

          <div class="col-md-6 mt-3">
          <label for="inputGender" class="form-label text-truncate">Gender</label>
          <div class="form-check">
              <input class="form-check-input" type="radio" name="gender" id="radioMale" value="male"  <?= ($pet['gender'] === 'male') ? 'checked' : '' ?> <?= $flag ? 'disable' : '' ?>>
              <label class="form-check-label" for="radioMale">
                  Male
              </label>
          </div>
          <div class="form-check">
              <input class="form-check-input" type="radio" name="gender" id="radioFemale" value="female"  <?= ($pet['gender'] === 'female') ? 'checked' : '' ?> <?= $flag ? 'disable' : '' ?>>
              <label class="form-check-label" for="radioFemale">
                  Female
              </label>
          </div>
          <div class="form-check">
              <input class="form-check-input" type="radio" name="gender" id="radioUndefined" value="undefined" <?= ($pet['gender'] !== 'male' && $pet['gender'] !== 'female') ? 'checked' : '' ?> <?= $flag ? 'disable' : '' ?>>
              <label class="form-check-label" for="radioUndefined">
                  Undefined
              </label>
          </div>
          </div>

          <!-- <?php if (!$flag): ?>
              <div class="col-md-6 align-items-start form-check form-switch my-4">
                  <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckHospitalization">
                  <label class="form-check-label" for="flexSwitchCheckHospitalization">Tindak lanjut Rawat inap</label>
              </div>
          <?php endif; ?> -->
        
          <div>
                <div id="ambulatoirDetail" style="width: 100%;"></div>
          </div>

          <div class="d-flex justify-content-center">
            <button type="submit" id="savePet" class="btn bg-primary justify-content-center text-white btn-default col-md-6 mx-3 mt-4">Save</button>
          </div>
        </form>
  </div>
</div>
    

<!-- modal -->

<div class="modal fade" id="newAmbulatoir" tabindex="-1" data-bs-backdrop="static" aria-labelledby="exampleModalCenterTitle" style="display: none;" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalCenterTitle">Create Ambulatoir</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <!--Body-->
      <div class="modal-body">
        <form class="row" action="<?= base_url(); ?>PetList/saveAmbulatoir/<?= $pet['id']?>" method="post">
          <?= csrf_field(); ?>
          <div class="col-md-6 mt-3">
            <label for="inputAmnesa" class="form-label">Amnesa</label>
            <div>
              <input type="text" name="amnesa" class="form-control <?= session('amnesa') ? 'is-invalid' : ''; ?>" id="inputAmnesa" placeholder="Type Here....">
              <div class="invalid-feedback">
                <?= session('amnesa') ?>
              </div>
            </div>
          </div>

          <div class="col-md-6 mt-3">
            <label for="inputStatusPresent" class="form-label text-truncate">Status Present</label>
            <div>
              <input type="text" name="statusPresent" class="form-control <?= session('statusPresent') ? 'is-invalid' : ''; ?>" id="inputStatusPresent" placeholder="Type Here....">
              <div class="invalid-feedback">
                <?= session('statusPresent') ?>
              </div>
            </div>
          </div>

          <div class="col-md-12 mt-3">
            <label for="inputClinicalFinding" class="form-label text-truncate">Clinical Finding</label>
            <div>
              <textarea class="form-control <?= session('clinicalFinding') ? 'is-invalid' : ''; ?>" name="clinicalFinding" id="inputClinicalFinding" rows="3"></textarea>
              <div class="invalid-feedback">
                <?= session('clinicalFinding') ?>
              </div>
            </div>
          </div>

          <div class="col-md-6 mt-3">
            <label for="inputDiagnosis" class="form-label text-truncate">Diagnosis</label>
            <div>
              <input type="text" name="diagnosis" class="form-control <?= session('diagnosis') ? 'is-invalid' : ''; ?>" id="inputDiagnosis" placeholder="Type Here....">
              <div class="invalid-feedback">
                <?= session('diagnosis') ?>
              </div>
            </div>
          </div>

          <div class="form-check col-md-6 mt-3">
            <input class="form-check-input" type="checkbox" value="1" id="hospitalized_status">
            <label class="form-check-label" for="hospitalized_status">
              Hospitalized
            </label>
          </div>
          
          <div class="col-md-12 mt-3">
            <label for="inputMedication" class="form-label text-truncate">Medication</label>
            <div>
              <textarea class="form-control <?= session('medication') ? 'is-invalid' : ''; ?>" name="medication" id="inputMedication" rows="3"></textarea>
              <div class="invalid-feedback">
                <?= session('medication') ?>
              </div>
            </div>
          </div>
          <!-- Closing form tag moved to include the submit button -->
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            <button type="submit" id="saveAmbulatoir" class="btn bg-primary justify-content-center text-white">Create</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>




<script>
  document.addEventListener("DOMContentLoaded", function() {
      // Fetch data from PHP variable and convert to JSON
      var data = <?= json_encode($dataAmbulatoir) ?>;

      // Initialize the spreadsheet with the fetched data
      initAmbulatoirDetail(data);
      
  });
</script>
<?= $this->endSection(); ?>   