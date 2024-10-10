<?= $this->extend('layout/templates'); ?>
<?= $this->Section('content'); ?>
<div class="container-fluid py-4">
  <div class="row">
    <div class="col-12">
      <div class="card mb-4">
      <div class="d-flex justify-content-between align-items-center">
          <div class="card-header pb-0">
            <h4>Ambulatoir</h4>
          </div>
          <a class="btn bg-primary mb-0 text-white col-md-3 mx-3 mt-3" href='<?= base_url('/PetList/detail/'.$pet['pet_id'].'?flag=edit');?>'>
            Check the pet?
          </a>
        </div>

        <form class="row m-3" action="<?= base_url(); ?>PetList/save/<?= $pet['id']?>" method="post">
          <?= csrf_field(); ?>

          <div class="col-md-5 mt-3">
            <label for="inputPetName" class="form-label text-truncate">Pet Name</label>
            <div>
                <input type="text" name="petName" class="form-control <?=($petName) ? 'is-invalid' : ''; ?>" id="inputPetName" placeholder="Type Here...." value="<?= $pet['name'] ? $pet['name'] : '' ?>" readonly>
                <div class="invalid-feedback">
                  <?= $petName ?>
                </div>
              </div>
          </div>

          <div class="col-md-5 mt-3">
            <label for="inputOwnerName" class="form-label">Owner Name</label>
            <div>
                <input type="text" name="ownerName" class="form-control <?=($ownerName) ? 'is-invalid' : ''; ?>" id="inputOwnerName" placeholder="Type Here...." value="<?= $pet['owner_name'] ? $pet['owner_name'] : '' ?>" readonly>
                <div class="invalid-feedback">
                <?= $ownerName ?>
              </div>
            </div>
          </div>

          <div class="col-md-2 mt-3">
          <label for="inputAge" class="form-label text-truncate">Age</label>
            <div>
                <input type="text" name="age" class="form-control <?=($age) ? 'is-invalid' : ''; ?>" id="inputAge"  placeholder="Type Here...." value="<?= $pet['age'] ? $pet['age'] : '' ?>" readonly>
                <div class="invalid-feedback">
                  <?= $age ?>
                </div>
             </div>
          </div>

          <div class="col-md-6 mt-3">
            <label for="inputAmnesa" class="form-label text-truncate">Amnesa</label>
            <div>
            <textarea class="form-control <?=($amnesa) ? 'is-invalid' : ''; ?>" name="amnesa" id="inputTemuanKlinis" placeholder="Type Here...." rows="3" <?= $flag ? 'readonly' : '' ?>><?= $pet['amnesa'] ? $pet['amnesa'] : '' ?></textarea>
                <div class="invalid-feedback">
                  <?= $amnesa ?>
                </div>
              </div>
          </div>

          <div class="col-md-6 mt-3">
            <label for="inputStatusPresent" class="form-label">Status Present</label>
            <div>
            <textarea class="form-control <?=($statusPresent) ? 'is-invalid' : ''; ?>" name="statusPresent" id="inputStatusPresent" placeholder="Type Here...." rows="3" <?= $flag ? 'readonly' : '' ?>><?= $pet['status_present'] ? $pet['status_present'] : '' ?></textarea>
                <div class="invalid-feedback">
                <?= $statusPresent ?>
              </div>
            </div>
          </div>

          <div class="col-md-12 mt-3">
            <label for="inputTemuanKlinis" class="form-label text-truncate">Temuan Klinis</label>
            <div>
              <textarea class="form-control <?=($clincialFinding) ? 'is-invalid' : ''; ?>" name="temuanKlinis" id="inputTemuanKlinis" placeholder="Type Here...." rows="3" <?= $flag ? 'readonly' : '' ?>><?= $pet['clinical_finding'] ? $pet['clinical_finding'] : '' ?></textarea>
              <div class="invalid-feedback">
                <?= $clincialFinding ?>
              </div>
            </div>
          </div>

          <div class="col-md-12 mt-3">
            <label for="inputDiagnosis" class="form-label text-truncate">Diagnosa</label>
            <div>
              <textarea class="form-control <?=($diagnosis) ? 'is-invalid' : ''; ?>" name="diagnosa" id="inputDiagnosis" placeholder="Type Here...." rows="3" <?= $flag ? 'readonly' : '' ?>><?= $pet['diagnosis'] ? $pet['diagnosis'] : '' ?></textarea>
              <div class="invalid-feedback">
                <?= $diagnosis ?>
              </div>
            </div>
          </div>

          <div class="col-md-12 mt-3">
            <label for="inputTreatment" class="form-label text-truncate">Pengobatan</label>
            <div>
              <textarea class="form-control <?=($treatment) ? 'is-invalid' : ''; ?>" name="treatment" id="inputTreatment" placeholder="Type Here...." rows="3" <?= $flag ? 'readonly' : '' ?>><?= $pet['medication'] ? $pet['medication'] : '' ?></textarea>
              <div class="invalid-feedback">
                <?= $treatment ?>
              </div>
            </div>
          </div>

   <div class="d-flex justify-content-center">
        <button type="submit" id="savePet" class="btn bg-primary justify-content-center text-white btn-default col-md-6 mx-3 mt-4">Save</button>
    </div>
    </form>
  </div>
</div>
<?= $this->endSection(); ?>