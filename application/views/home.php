<ul class="collection">
    <?php foreach ($home_post as $data) :?>
        <li class="collection-item avatar">
        <img src="<?=site_url("upload/post/".$data['filename']) ?>" alt="Text-Alternative" width="100" height="100" class="rectangle">
            <p style="color:green;font-weight:bold;" class="table table-bordered table-striped"><?=$data['name'];?></p>
            <rectangle><?= $data['description'];?></rectangle>
            <a href="<?=site_url('welcome/index/'.$data['id'])?>" class="secondary-content">
            <i class="bi bi-bell-fill"></i>
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="pink" class="bi bi-bell-fill" viewBox="0 0 16 16">
  <path d="M8 16a2 2 0 0 0 2-2H6a2 2 0 0 0 2 2zm.995-14.901a1 1 0 1 0-1.99 0A5.002 5.002 0 0 0 3 6c0 1.098-.5 6-2 7h14c-1.5-1-2-5.902-2-7 0-2.42-1.72-4.44-4.005-4.901z"/>
</svg>
    </a>
        </li>
        <?php endforeach?>
</ul>
<div class ="row">
    <div class= "center col s12">
    <button class="btn red" style="margin-bottom: 10px;">
      <a class="white-text" href="<?php echo site_url('welcome/deleteall'); ?>"> Hapus Semua Data</a>
</div>
    </div>