<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<h6><?= validation_errors(); ?></h6>
<h6><?= $this->session->flashdata('error'); ?></h6>

  <div class="row">
    <form action="<?= site_url('welcome/create'); ?>" method="post" enctype="multipart/form-data" class="col s12">
      <div class="row">
        <div class="input-field col s12">
          <input name="name" id="name" type="text" class="validate">
          <label for="name">Nama Buah</label>
        </div>
      </div>
      <div class="row">
        <div class="input-field col s12">
          <textarea name="description" id="description" class="materialize-textarea"></textarea>
          <label for="description">Deskripsi</label>
        </div>
      </div>
      <div class="file-field input-field">
      <div class="btn green">
          <span>Select File</span>
          <input type="file" name="image1" accept=".jpg,.png,.jpeg">
        </div>
        <div class="file-path-wrapper">
          <input class="file-path validate" type="text">
        </div>
      </div>
      <div class="row center">
        <div class="input-field col s12">
          <button type="submit" class="btn green">Keranjang</button>
        </div>
      </div>
    </form>
  </div>