<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$this->load->view('dist/_partials/header');
?>
      <!-- Main Content -->
      <div class="main-content">
        <section class="section">
          <div class="section-header">
            <h1>Tambah Data Barang</h1>
            <div class="section-header-breadcrumb">
              <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
              <div class="breadcrumb-item"><a href="#">Modules</a></div>
              <div class="breadcrumb-item">Barang</div>
            </div>
          </div>

          <div class="section-body">
            

            <div class="row">
              <div class="col-12">
                <div class="card">
                  <div class="card-header">
                    <h4>Tambah Barang</h4>
                  </div>
                  
                  <?= form_open('mahasiswa/add_save'); ?>
                  <div class="card-body">
                    <div class="form-group">
                        <label >Nama Mahasiswa</label>
                        <input type="text" class="form-control" id="nama" name="nama" required>
                    </div>
                    <div class="form-group">
                        <label >NIM</label>
                        <input type="text" class="form-control" id="nim" name="nim" required>
                    </div>
                    <div class="form-group">
                        <label >No HP</label>
                        <input type="text" class="form-control" id="no_hp" name="no_hp" required>
                    </div>
                    <div class="form-group">
                        <label >Email</label>
                        <input type="email" class="form-control" id="email" name="email" required>
                    </div>
                    <div class="form-group">
                        <label >Jurusan</label>
                        <input type="text" class="form-control" id="jurusan" name="jurusan" required>
                    </div>
                    <div class="form-group">
                        <label >foto</label>
                        <input type="text" class="form-control" id="foto_profil" name="foto_profil">
                    </div>
                    <div class="form-group">
                      <label for="exampleFormControlTextarea1">Alamat</label>
                      <textarea class="form-control" id="alamat" name="alamat" rows="3" required></textarea>
                    </div>

                    </div>
                    
                  <div class = "card-footer">
                    <button type = "submit" class = "btn btn-primary">Simpan</button>
                  </div>

                <?=form_close(); ?> 
                  
                </div>
              </div>
            </div>
            
          </div>
        </section>
      </div>
      <?php $this->load->view('dist/_partials/footer'); ?>