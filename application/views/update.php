<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<h6><?php echo validation_errors(); ?></h6>
<h6><?php echo $this->session->flashdata('error'); ?></h6>

<div class="row">
  <form action="<?php echo site_url('welcome/update/'.$post->id); ?>" method="post" enctype="multipart/form-data">
    <div class="row">
      <div class="input-field col s12">
          <input name="name" id="name" type="text" class="validate" value="<?php echo $post->name; ?>">
          <label for="name">Nama Buah</label>
      </div>
      <div class="input-field col s12">
        <textarea name="description" id="description" class="materialize-textarea"><?php echo $post->description; ?></textarea>
        <label for="description">Deskripsi</label>
      </div>
      <div class="center col s12">
         <img class="responsive-img" id="image" style="max-height:30vh;" src="<?php echo site_url('upload/post/'.$post->filename); ?>">
      </div>
      <div class="file-field input-field col s12">
        <div class="btn green">
          <span>Image</span>
          <input name="image" type="file" id="file">
        </div>
        <div class="file-path-wrapper">
          <input class="file-path validate" type="text" onchange="thumbnail();" name="file">
        </div>
      </div>
    </div>
    <div class="col s12 center">
      <button class="btn green" type="submit">Submit</button>
    </div>
  </form>
</div>

<script type="text/javascript">
  var elem = document.querySelector('#description');
  M.textareaAutoResize(elem);

  function thumbnail () {
    var preview = document.querySelector('#image');
    var file    = document.querySelector('input[type=file]').files[0];
    var reader  = new FileReader();

    reader.onloadend = function () {
      preview.src = reader.result;
    }

    if (file) {
      reader.readAsDataURL(file);
    } else {
      preview.src = "";
    }
  }
</script>