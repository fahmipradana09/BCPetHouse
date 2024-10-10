<?= $this->extend('layout/templates'); ?>
<?= $this->Section('content'); ?>
<div class="container-fluid py-4">
  <div class="row">
    <div class="col-12">
      <div class="card mb-4">
        <div class="card-header pb-0">
          <h4>Rawat Inap</h4>
        </div>
        <form class="container-fluid mt-5 mx-3" action="<?= base_url(); ?>RawatInap/save/<?= $dataInap['id'] ?>" method="post">
          <?= csrf_field(); ?>
          <div class="row col-12">
          <div class="column col-6">
              <div class="row align-items-center">
                <label for="petName" class="col-auto col-form-label">Pet Name :</label>
                <div class="col">
                  <div class="underline-wrapper">
                    <input type="text" readonly class="form-control-plaintext py-0 text-end" id="petName" value=" <?= $dataInap['name'] ? $dataInap['name'] : '' ?>">
                  </div>
                </div>
              </div>
            
              <div class="row align-items-center">
                <label for="age" class="col-auto col-form-label">Age :</label>
                <div class="col">
                  <div class="underline-wrapper">
                    <input type="text" readonly class="form-control-plaintext py-0 text-end" id="age" value="<?= $dataInap['age'] ? $dataInap['age'] : '' ?>">
                  </div>
                </div>
              </div>

              <div class="row align-items-center">
                <label for="phone" class="col-auto col-form-label">Phone Number :</label>
                <div class="col">
                  <div class="underline-wrapper">
                    <input type="text" readonly class="form-control-plaintext py-0 text-end" id="phone" value="<?= $dataInap['phone'] ? $dataInap['phone'] : '' ?>">
                  </div>
                </div>
              </div>

              <div class="row align-items-center">
                <label for="animalType" class="col-auto col-form-label">Animal Type :</label>
                <div class="col">
                  <div class="underline-wrapper">
                    <input type="text" readonly class="form-control-plaintext py-0 text-end" id="animalType" value="<?= $dataInap['animal_type'] ? $dataInap['animal_type'] : '' ?>">
                  </div>
                </div>
              </div>

              <div class="row align-items-center">
                <label for="race" class="col-auto col-form-label">Race :</label>
                <div class="col">
                  <div class="underline-wrapper">
                    <input type="text" readonly class="form-control-plaintext py-0 text-end" id="race" value="<?= $dataInap['race'] ? $dataInap['race'] : '' ?>">
                  </div>
                </div>
              </div>
              
              <div class="row align-items-center">
                <label for="color" class="col-auto col-form-label">Color :</label>
                <div class="col">
                  <div class="underline-wrapper">
                    <input type="text" readonly class="form-control-plaintext py-0 text-end" id="color" value="<?= $dataInap['color'] ? $dataInap['color'] : '--data kosong--' ?>">
                  </div>
                </div>
              </div>

              <div class="row align-items-center">
                <label for="gender" class="col-auto col-form-label">Gender :</label>
                <div class="col">
                  <div class="underline-wrapper">
                    <input type="text" readonly class="form-control-plaintext py-0 text-end" id="gender" value="<?= $dataInap['gender'] ? $dataInap['gender'] : '--data kosong--' ?>">
                  </div>
                </div>
              </div>
        </div>

        <div class="column col-6">
            <div class="row align-items-start">
              <label for="diagnosa" class="col-auto col-form-label">Diagnosa :</label>
              <div class="col d-flex justify-content-end ms-3">
              <textarea class="form-control" name="diagnosis" id="input diagnosis" rows="3" <?= $flag ? 'readonly' : '' ?>><?= $dataInap['diagnosis'] ? $dataInap['diagnosis'] : '' ?></textarea>
              </div>
            </div>

            <div class="row align-items-start my-2">
              <label for="medication" class="col-auto col-form-label">medication :</label>
              <div class="col d-flex justify-content-end">
              <textarea class="form-control" name="medication" id="input medication" rows="3" <?= $flag ? 'readonly' : '' ?>><?= $dataInap['medication'] ? $dataInap['medication'] : '' ?></textarea>
              </div>
            </div>

            <div class="row align-items-start my-2">
              <label for="prognosa" class="col-auto col-form-label">Prognosa :</label>
              <div class="col d-flex justify-content-end ms-3">
              <textarea class="form-control" name="prognosa" id="inputPrognosa" rows="3" <?= $flag ? 'readonly' : '' ?>><?= $dataInap['prognosa'] ? $dataInap['diagnosis'] : '' ?></textarea>
              </div>
            </div>

            <div class="row align-items-start">
              <label for="medicationPlan" class="col-3 col-form-label wrap-text">Rencana Pengobatan :</label>
              <div class="col d-flex justify-content-end">
              <textarea class="form-control" name="medicationPlan" id="inputmedicationPlan" rows="3" <?= $flag ? 'readonly' : '' ?>><?= $dataInap['medication_plan'] ? $dataInap['medication_plan'] : '' ?></textarea>
              </div>
            </div>
        </div>
  </div>
        
      <div class="row col-12 mt-3">
          <div class="col-12 table-responsive">
              <div id="rawatInapDetail"></div>

                <div id="loadingSpinnerRawatInap" class="d-flex justify-content-center align-items-center">
                  <div class="d-flex align-items-center">
                    <strong>Loading...</strong>
                    <div class="spinner-border ms-auto" role="status" aria-hidden="true"></div>
                  </div>
                </div>
          </div>
      </div>

   <div class="d-flex justify-content-center">
      <?php if ($flag):?>
        <button type="button" id="triggerModalFisiologis" class="btn bg-primary justify-content-center text-white btn-default col-md-6 mx-3 mt-4" data-bs-toggle="modal" data-bs-target="#updateFisiologis">Update Fisiologis</button>
      <?php else:?>
        <button type="submit" id="savePet" class="btn bg-primary justify-content-center text-white btn-default col-md-6 mx-3 mt-4">Save</button>
      <?php endif;?>
    </div>
    </form>
  </div>
</div>

<?= $this->include('layout/modal_pop_up/fisiologisModal'); ?>

<script>
  document.addEventListener("DOMContentLoaded", function() {
      // Fetch data from PHP variable and convert to JSON
      var data = <?= json_encode($datafisiologis) ?>;

      // Initialize the spreadsheet with the fetched data
      initRawatInapDetail(data);
  });
</script>

<?= $this->endSection(); ?>   