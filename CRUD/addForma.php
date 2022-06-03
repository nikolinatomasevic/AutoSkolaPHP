 <form hidden class="text-center" id="forma-novi-polaznik">


     <div class="mb-2">
         <label class="form-label">Ime: </label>
         <input type="text" class="form-control text-center" id="ime">
     </div>
     <div class="mb-2">
         <label class="form-label">Prezime: </label>
         <input type="text" class="form-control text-center" id="prezime">
     </div>
     <div class="mb-2">
         <label class="form-label">Kategorija: </label>
         <input type="text" class="form-control text-center" id="kategorija">
     </div>
     <div class="mb-2">
         <label class="form-label">Teorija: </label>
         <input type="text" class="form-control text-center" id="teorija">
     </div>
     <div class="mb-2">
         <label class="form-label">Instruktor: </label>
         <select class="form-select text-center" id="instruktor">
             <?php
                include('OOP/instruktor.php');

                $ins = new Instruktor();
                $instruktori = $ins->getAll();

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
         <select class="form-select text-center" id="auto_skola">
             <?php
                include('OOP/autoskola.php');

                $as = new AutoSkola();
                $autoSkole = $as->getAll();

                foreach ($autoSkole as $askola) {
                ?>
                 <option value="<?php echo $askola['id']; ?>"><?php echo $askola['naziv']; ?></option>
             <?php
                }
                ?>

         </select>
     </div>

     <button type="button" class="btn btn-primary mt-3" id="button-dodaj">DODAJ POLAZNIKA</button>
 </form>