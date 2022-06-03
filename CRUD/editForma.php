 <form hidden class="text-center" id="forma-izmena-polaznika">

     <span id="polaznik_id"></span>

     <div class="mb-2">
         <label class="form-label">Ime: </label>
         <input type="text" class="form-control text-center" id="ime_izmena">
     </div>
     <div class="mb-2">
         <label class="form-label">Prezime: </label>
         <input type="text" class="form-control text-center" id="prezime_izmena">
     </div>
     <div class="mb-2">
         <label class="form-label">Kategorija: </label>
         <input type="text" class="form-control text-center" id="kategorija_izmena">
     </div>
     <div class="mb-2">
         <label class="form-label">Teorija: </label>
         <input type="text" class="form-control text-center" id="teorija_izmena">
     </div>
     <div class="mb-2">
         <label class="form-label">Instruktor: </label>
         <select class="form-select text-center" id="instruktor_izmena">
             <?php

                $ins1 = new Instruktor();
                $instruktori1 = $ins1->getAll();

                foreach ($instruktori as $i) {
                ?>
                 <option value="<?php echo $i['id']; ?>"><?php echo $i['ime'] . ' ' . $i['prezime']; ?></option>
             <?php
                }
                ?>
         </select>
     </div>

     <div class="form-group mb-2">
         <label class="form-label">Auto škola: </label>
         <select class="form-select text-center" id="auto_skola_izmena">
             <?php

                $as1 = new AutoSkola();
                $autoSkole1 = $as1->getAll();

                foreach ($autoSkole as $askola) {
                ?>
                 <option value="<?php echo $askola['id']; ?>"><?php echo $askola['naziv']; ?></option>
             <?php
                }
                ?>

         </select>
     </div>

     <button type="button" class="btn btn-primary mt-3" id="button-izmena">SAČUVAJ IZMENE</button>
 </form>