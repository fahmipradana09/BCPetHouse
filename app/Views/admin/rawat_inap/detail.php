<?= $this->extend('layout/templates'); ?>
<?= $this->Section('content'); ?>
<div class="container-fluid py-4">
  <div class="row">
    <div class="col-12">
      <div class="card mb-4">
        <div class="card-header pb-0">
          <h4>Rawat Inap</h4>
        </div>
        <form class="row m-3" action="<?= base_url(); ?>RawatInap/save/<?= $dataInap['id']?>" method="post">
          <?= csrf_field(); ?>
          <div class="col-md-5 mt-3">
            <label for="inputPetName" class="form-label text-truncate">Pet Name</label>
            <div>
            <input type="text" name="petName" class="form-control <?=($petName) ? 'is-invalid' : ''; ?>" id="inputPetName" value="<?= $dataInap['name'] ? $dataInap['name'] : '' ?>" autofocus>
            <div class="invalid-feedback">
                <?= $petName ?>
              </div>
            </div>
          </div>

          <div class="col-md-5 mt-3">
            <label for="inputOwnerName" class="form-label">Owner Name</label>
            <div>
                <input type="text" name="ownerName" class="form-control <?=($ownerName) ? 'is-invalid' : ''; ?>" id="inputOwnerName" placeholder="Type Here...."  value="<?= $dataInap['owner_name'] ? $dataInap['owner_name'] : '' ?>">
                <div class="invalid-feedback">
                <?= $ownerName ?>
              </div>
            </div>
          </div>
          
          <div class="col-md-2 mt-3">
          <label for="inputAge" class="form-label text-truncate">Age</label>
            <div>
                <input type="text" name="age" class="form-control <?=($age) ? 'is-invalid' : ''; ?>" id="inputAge" placeholder="Type Here...." value="<?= $dataInap['age'] ? $dataInap['age'] : '' ?>">
                <div class="invalid-feedback">
                  <?= $age ?>
                </div>
             </div>
          </div>

          <div class="col-md-12 mt-3">
            <label for="inputAddress" class="form-label text-truncate">Address</label>
            <div>
              <textarea class="form-control <?=($address) ? 'is-invalid' : ''; ?>" name="address" id="inputAddress" rows="3"><?= $dataInap['address'] ? $dataInap['address'] : '' ?></textarea>
              <div class="invalid-feedback">
                <?= $address ?>
              </div>
            </div>
          </div>

          <div class="col-md-3 mt-3">
            <label for="inputFurColor" class="form-label text-truncate">Phone Number</label>
            <div>
              <input type="text" name="phoneNumber" id="inputPhone" class="form-control <?=($phoneNumber) ? 'is-invalid' : ''; ?>" id="inputPhoneNumber" placeholder="Type Here...."  value="<?= $dataInap['phone'] ? $dataInap['phone'] : '' ?>">
              <div class="invalid-feedback">
                <?= $phoneNumber ?>
              </div>
            </div>
          </div>

          <div class="col-md-3 mt-3">
            <label for="inputAnimalType" class="form-label text-truncate">Animal Type</label>
            <div>
              <input type="text" name="animalType" class="form-control <?=($animalType) ? 'is-invalid' : ''; ?>" id="inputAnimalType" placeholder="Type Here...." value="<?= $dataInap['animal_type'] ? $dataInap['animal_type'] : '' ?>">
              <div class="invalid-feedback">
                <?= $animalType ?>
              </div>
            </div>
          </div>

          <div class="col-md-3 mt-3">
            <label for="inputFurColor" class="form-label text-truncate">Race</label>
            <div>
              <input type="text" name="race" class="form-control <?=($race) ? 'is-invalid' : ''; ?>" id="inputRace" placeholder="Type Here...." value="<?= $dataInap['race'] ? $dataInap['race'] : '' ?>">
              <div class="invalid-feedback">
                <?= $race ?>
              </div>
            </div>
          </div>

          <div class="col-md-3 mt-3">
            <label for="inputFurColor" class="form-label text-truncate">Color</label>
            <div>
              <input type="text" name="color" class="form-control <?=($color) ? 'is-invalid' : ''; ?>" id="inputFurColor" placeholder="Type Here...." value="<?= $dataInap['color'] ? $dataInap['color'] : '' ?>">
              <div class="invalid-feedback">
                <?= $color ?>
              </div>
            </div>
          </div>

          <div class="col-md-6 mt-3">
          <label for="inputGender" class="form-label text-truncate">Gender</label>
          <div class="form-check">
              <input class="form-check-input" type="radio" name="gender" id="radioMale" value="male"  <?= ($dataInap['gender'] === 'male') ? 'checked' : '' ?>>
              <label class="form-check-label" for="radioMale">
                  Male
              </label>
          </div>
          <div class="form-check">
              <input class="form-check-input" type="radio" name="gender" id="radioFemale" value="female"  <?= ($dataInap['gender'] === 'female') ? 'checked' : '' ?>>
              <label class="form-check-label" for="radioFemale">
                  Female
              </label>
          </div>
          <div class="form-check">
              <input class="form-check-input" type="radio" name="gender" id="radioUndefined" value="undefined" <?= ($dataInap['gender'] !== 'male' && $dataInap['gender'] !== 'female') ? 'checked' : '' ?>>
              <label class="form-check-label" for="radioUndefined">
                  Undefined
              </label>
          </div>
      </div>

          
            <div class="col-md-6 align-items-start form-check form-switch my-4">
              <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckHospitalization">
              <label class="form-check-label" for="flexSwitchCheckHospitalization">Tindak lanjut Rawat inap</label>
            </div>

        
        <div class="container">
          <div class="row clearfix">
          <div class="col-md-12 table-responsive column">
          <table class="table table-bordered table-hover" id="tab_logic">
                <thead>
                  <tr>
                    <th class="text-center no-sort">
                      No.
                    </th>

                    <th class="text-center resize">
                      Date Checkup
                    </th>

                    <th class="text-center resize">
                      Amnesa
                    </th>

                    <th class="text-center resize">
                      Status Present
                    </th>

                    <th class="text-center resize">
                      Temuan Klinis
                    </th>

                    <th class="text-center resize">
                      Diagnosa
                    </th>

                    <th class="text-center resize">
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
                    <input type="text" name='amnesa' placeholder='Type here...' class="form-control <?=($amnesa) ? 'is-invalid' : ''; ?>" value="" />
                    </td>

                    <td>
                    <input type="text" name='statusPresent' placeholder='Type here...' class="form-control <?=($statusPresent) ? 'is-invalid' : ''; ?>" value=""/>
                    </td>

                    <td>
                    <input type="text" name='temuanKlinis' placeholder='Type here...' class="form-control <?=($temuanKlinis) ? 'is-invalid' : ''; ?>" value=""/>
                    </td>

                    <td>
                    <input type="text" name='diagnosa' placeholder='Type here...' class="form-control <?=($diagnosa) ? 'is-invalid' : ''; ?>" value=""/>
                    </td>

                    <td>
                    <input type="text" name='treatment' placeholder='Type here...' class="form-control  <?=($treatment) ? 'is-invalid' : ''; ?>" value=""/>
                    </td>
                    

                  </tr>
                      <tr id='addr1'></tr>
                </tbody>
              </table>
          </div>
        </div>
        <button id="add_row" class="btn btn-default pull-left">Add Row</button><button id='delete_row' class="pull-right btn btn-default">Delete Row</button>
   </div>

   <div class="d-flex justify-content-center">
      <button type="submit" id="savePet" class="btn bg-primary justify-content-center text-white btn-default col-md-6 mx-3 mt-4">Save</button>
    </div>
    </form>
  </div>
</div>
<?= $this->endSection(); ?>   