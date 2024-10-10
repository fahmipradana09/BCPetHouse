<div class="modal fade" id="updateFisiologis" tabindex="-1" data-bs-backdrop="static" aria-labelledby="modalFisiologis" style="display: none;" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modalFisiologis">Update Fisiologis</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <!--Body-->
      <div class="modal-body">
        <form id="fisiologisForm" class="row" action="<?= base_url(); ?>RawatInap/saveFisiologis/<?= isset($dataFisiologisToday['id']) ? $dataFisiologisToday['id'] : "" ?>" method="post">
          <?= csrf_field(); ?>


            <ul class="nav nav-tabs justify-content-around" id="tabFisiologis" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="morning-tab" data-bs-toggle="tab" data-bs-target="#morning" type="button" role="tab" aria-controls="morning" aria-selected="true">Checkup Pagi</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="afternoon-tab" data-bs-toggle="tab" data-bs-target="#afternoon" type="button" role="tab" aria-controls="afternoon" aria-selected="false">Checkup Siang</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="night-tab" data-bs-toggle="tab" data-bs-target="#night" type="button" role="tab" aria-controls="night" aria-selected="false">Checkup Malam</button>
                </li>
            </ul>
            
            <div class="tab-content" id="fisiologisTabContent">
            <!-- start checkup pagi-->
            <div class="tab-pane fade show active" id="morning" role="tabpanel" aria-labelledby="morning-tab">
                <div class="row">
                    <div class="col-md-6 mt-3">
                        <label for="inputMedicationMorning" class="form-label">Medication</label>
                        <div>
                            <input type="text" name="medicationMorning" class="form-control" id="inputMedicationMorning" placeholder="Type Here...." value="<?= isset($dataFisiologisToday['pagi_medication']) ? $dataFisiologisToday['pagi_medication'] : '' ?>">
                        </div>
                    </div>

                    <div class="col-md-6 mt-3">
                        <label for="inputTempMorning" class="form-label text-truncate">Temperature</label>
                        <div>
                        <input type="text" name="tempMorning" class="form-control" id="inputTempMorning" placeholder="Type Here...." value="<?= isset($dataFisiologisToday['pagi_temperature']) ? $dataFisiologisToday['pagi_temperature'] : '' ?>">
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6 mt-3">
                        <label for="inputRespMorning" class="form-label text-truncate">Respiratori (/Menit)</label>
                        <div>
                        <input type="text" name="respMorning" class="form-control" id="inputRespMorning" placeholder="Type Here...." value="<?= isset($dataFisiologisToday['pagi_respiratory_rate']) ? $dataFisiologisToday['pagi_respiratory_rate'] : '' ?>">
                        </div>
                    </div>

                    <div class="col-md-6 mt-3">
                        <label for="inputPulseMorning" class="form-label text-truncate">Pulse (/Menit)</label>
                        <div>
                        <input type="text" name="pulseMorning" class="form-control" id="inputPulseMorning" placeholder="Type Here...." value="<?= isset($dataFisiologisToday['pagi_hearthbeat_rate']) ? $dataFisiologisToday['pagi_hearthbeat_rate'] : '' ?>">
                        </div>
                    </div>
                </div>
                
                <div class="row">
                    <div class="col-md-6 mt-3">
                        <label for="inputCRTMorning" class="form-label text-truncate">CRT (/Menit)</label>
                        <div>
                        <input type="text" name="crtMorning" class="form-control" id="inputCRTMorning" placeholder="Type Here...." value="<?= isset($dataFisiologisToday['pagi_crt']) ? $dataFisiologisToday['pagi_crt'] : '' ?>">
                        </div>
                    </div>


                    <div class="col-md-6 mt-3">
                        <label for="inputTurgorMorning" class="form-label text-truncate">Tugor</label>
                        <div>
                        <input type="text" name="turgorMorning" class="form-control" id="inputTurgorMorning" placeholder="Type Here...." value="<?= isset($dataFisiologisToday['pagi_turgor']) ? $dataFisiologisToday['pagi_turgor'] : '' ?>">
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6 mt-3">
                        <label for="inputDidaksirMorning" class="form-label text-truncate">Didaksi</label>
                        <div>
                        <input type="text" name="didaksiMorning" class="form-control" id="inputDidaksirMorning" placeholder="Type Here...." value="<?= isset($dataFisiologisToday['pagi_dideaksi'])? $dataFisiologisToday['pagi_dideaksi'] : '' ?>">
                        </div>
                    </div>

                    <div class="col-md-6 mt-3">
                        <label for="inputEatMorning" class="form-label text-truncate">Eat Status</label>
                        <div>
                        <input type="text" name="eatMorning" class="form-control" id="inputEatMorning" placeholder="Type Here...." value="<?= isset($dataFisiologisToday['pagi_eat_status']) ? $dataFisiologisToday['pagi_eat_status'] : '' ?>">
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6 mt-3">
                        <label for="inputDrinkMorning" class="form-label text-truncate">Drink Status</label>
                        <div>
                        <input type="text" name="drinkMorning" class="form-control" id="inputDrinkMorning" placeholder="Type Here...." value="<?= isset($dataFisiologisToday['pagi_drink_status']) ? $dataFisiologisToday['pagi_drink_status'] : '' ?>">
                        </div>
                    </div>

                    <div class="col-md-6 mt-3">
                        <label for="inputNoteMorning" class="form-label text-truncate">Note</label>
                        <div>
                        <input type="text" name="noteMorning" class="form-control" id="inputNoteMorning" placeholder="Type Here...." value="<?= isset($dataFisiologisToday['pagi_note']) ? $dataFisiologisToday['pagi_note'] : '' ?>">
                        </div>
                    </div>
                </div>
            </div>
            <!-- end checkup pagi-->



            <!-- start checkup siang-->
            <div class="tab-pane fade" id="afternoon" role="tabpanel" aria-labelledby="afternoon-tab">
                <div class="row">
                    <div class="col-md-6 mt-3">
                        <label for="inputMedicationAfternoon" class="form-label">Medication</label>
                        <div>
                        <input type="text" name="medicationAfternoon" class="form-control" id="inputMedicationAfternoon" placeholder="Type Here...." value="<?= isset($dataFisiologisToday['siang_medication']) ? $dataFisiologisToday['siang_medication'] : '' ?>">
                        </div>
                    </div>

                    <div class="col-md-6 mt-3">
                        <label for="inputTempAfternoon" class="form-label text-truncate">Temperature</label>
                        <div>
                        <input type="text" name="tempAfternoon" class="form-control" id="inputTempAfternoon" placeholder="Type Here...." value="<?= isset($dataFisiologisToday['siang_temperature']) ? $dataFisiologisToday['siang_temperature'] : '' ?>">
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6 mt-3">
                        <label for="inputResAfternoon" class="form-label text-truncate">Respiratori (/Menit)</label>
                        <div>
                        <input type="text" name="respAfternoon" class="form-control" id="inputResAfternoon" placeholder="Type Here...." value="<?= isset($dataFisiologisToday['siang_respiratory_rate']) ? $dataFisiologisToday['siang_respiratory_rate'] : '' ?>">
                        </div>
                    </div>

                    <div class="col-md-6 mt-3">
                        <label for="inputPulseAfternoon" class="form-label text-truncate">Pulse (/Menit)</label>
                        <div>
                        <input type="text" name="pulseAfternoon" class="form-control" id="inputPulseAfternoon" placeholder="Type Here...." value="<?= isset($dataFisiologisToday['siang_hearthbeat_rate']) ? $dataFisiologisToday['siang_hearthbeat_rate'] : '' ?>">
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6 mt-3">
                        <label for="inputCRTAfternoon" class="form-label text-truncate">CRT (/Menit)</label>
                        <div>
                        <input type="text" name="crtAfternoon" class="form-control" id="inputCRTAfternoon" placeholder="Type Here...." value="<?= isset($dataFisiologisToday['siang_crt']) ? $dataFisiologisToday['siang_crt'] : '' ?>">
                        </div>
                    </div>


                    <div class="col-md-6 mt-3">
                        <label for="inputTurgorAfternoon" class="form-label text-truncate">Tugor</label>
                        <div>
                        <input type="text" name="turgorAfternoon" class="form-control" id="inputTurgorAfternoon" placeholder="Type Here...." value="<?= isset($dataFisiologisToday['siang_turgor']) ? $dataFisiologisToday['siang_turgor'] : '' ?>">
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6 mt-3">
                        <label for="inputDidaksirAfternoon" class="form-label text-truncate">Didaksi</label>
                        <div>
                        <input type="text" name="didaksiAfternoon" class="form-control" id="inputDidaksirAfternoon" placeholder="Type Here...." value="<?= isset($dataFisiologisToday['siang_dideaksi'])? $dataFisiologisToday['siang_dideaksi'] : '' ?>">
                        </div>
                    </div>

                    <div class="col-md-6 mt-3">
                        <label for="inputEatAfternoon" class="form-label text-truncate">Eat Status</label>
                        <div>
                        <input type="text" name="eatAfternoon" class="form-control" id="inputEatAfternoon" placeholder="Type Here...." value="<?= isset($dataFisiologisToday['siang_eat_status']) ? $dataFisiologisToday['siang_eat_status'] : '' ?>">
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6 mt-3">
                        <label for="inputDrinkAfternoon" class="form-label text-truncate">Drink Status</label>
                        <div>
                        <input type="text" name="drinkAfternoon" class="form-control" id="inputDrinkAfternoon" placeholder="Type Here...." value="<?= isset($dataFisiologisToday['siang_drink_status']) ? $dataFisiologisToday['siang_drink_status'] : '' ?>">
                        </div>
                    </div>

                    <div class="col-md-6 mt-3">
                        <label for="inputNoteAfternoon" class="form-label text-truncate">Note</label>
                        <div>
                        <input type="text" name="noteAfternoon" class="form-control" id="inputNoteAfternoon" placeholder="Type Here...." value="<?= isset($dataFisiologisToday['siang_note']) ? $dataFisiologisToday['siang_note'] : '' ?>">
                        </div>
                    </div>
                </div>
            </div>
            <!-- end checkup siang-->

            <!-- start checkup malam-->
            <div class="tab-pane fade" id="night" role="tabpanel" aria-labelledby="night-tab">
                <div class="row">
                    <div class="col-md-6 mt-3">
                        <label for="inputMedicationNight" class="form-label">Medication</label>
                        <div>
                        <input type="text" name="medicationNight" class="form-control" id="inputMedicationNight" placeholder="Type Here...." value="<?= isset($dataFisiologisToday['malam_medication']) ? $dataFisiologisToday['malam_medication'] : '' ?>">
                        </div>
                    </div>

                    <div class="col-md-6 mt-3">
                        <label for="inputTempNight" class="form-label text-truncate">Temperature</label>
                        <div>
                        <input type="text" name="tempNight" class="form-control" id="inputTempNight" placeholder="Type Here...." value="<?= isset($dataFisiologisToday['malam_temperature']) ? $dataFisiologisToday['malam_temperature'] : '' ?>">
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6 mt-3">
                        <label for="inputResNight" class="form-label text-truncate">Respiratori (/Menit)</label>
                        <div>
                        <input type="text" name="respNight" class="form-control" id="inputResNight" placeholder="Type Here...." value="<?= isset($dataFisiologisToday['malam_respiratory_rate']) ? $dataFisiologisToday['malam_respiratory_rate'] : '' ?>">
                        </div>
                    </div>

                    <div class="col-md-6 mt-3">
                        <label for="inputPulseNight" class="form-label text-truncate">Pulse (/Menit)</label>
                        <div>
                        <input type="text" name="pulseNight" class="form-control" id="inputPulseNight" placeholder="Type Here...." value="<?= isset($dataFisiologisToday['malam_hearthbeat_rate']) ? $dataFisiologisToday['malam_hearthbeat_rate'] : '' ?>">
                        </div>
                    </div>
                </div>
                
                <div class="row">
                    <div class="col-md-6 mt-3">
                        <label for="inputCRTNight" class="form-label text-truncate">CRT (/Menit)</label>
                        <div>
                        <input type="text" name="crtNight" class="form-control" id="inputCRTNight" placeholder="Type Here...." value="<?= isset($dataFisiologisToday['malam_crt']) ? $dataFisiologisToday['malam_crt'] : '' ?>">
                        </div>
                    </div>

                    <div class="col-md-6 mt-3">
                        <label for="inputTurgorNight" class="form-label text-truncate">Tugor</label>
                        <div>
                        <input type="text" name="turgorNight" class="form-control" id="inputTurgorNight" placeholder="Type Here...." value="<?= isset($dataFisiologisToday['malam_turgor']) ? $dataFisiologisToday['malam_turgor'] : '' ?>">
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6 mt-3">
                        <label for="inputDidaksirNight" class="form-label text-truncate">Didaksi</label>
                        <div>
                        <input type="text" name="didaksiNight" class="form-control" id="inputDidaksirNight" placeholder="Type Here...." value="<?= isset($dataFisiologisToday['malam_dideaksi'])? $dataFisiologisToday['malam_dideaksi'] : '' ?>">
                        </div>
                    </div>

                    <div class="col-md-6 mt-3">
                        <label for="inputEatNight" class="form-label text-truncate">Eat Status</label>
                        <div>
                        <input type="text" name="eatNight" class="form-control" id="inputEatNight" placeholder="Type Here...." value="<?= isset($dataFisiologisToday['malam_eat_status']) ? $dataFisiologisToday['malam_eat_status'] : '' ?>">
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-6 mt-3">
                        <label for="inputDrinkNight" class="form-label text-truncate">Drink Status</label>
                        <div>
                        <input type="text" name="drinkNight" class="form-control" id="inputDrinkNight" placeholder="Type Here...." value="<?= isset($dataFisiologisToday['malam_drink_status']) ? $dataFisiologisToday['malam_drink_status'] : '' ?>">
                        </div>
                    </div>

                    <div class="col-md-6 mt-3">
                        <label for="inputNoteNight" class="form-label text-truncate">Note</label>
                        <div>
                        <input type="text" name="noteNight" class="form-control" id="inputNoteNight" placeholder="Type Here...." value="<?= isset($dataFisiologisToday['malam_note']) ? $dataFisiologisToday['malam_note'] : '' ?>">
                        </div>
                    </div>
                </div>
            </div>
            <!-- end checkup malam-->

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