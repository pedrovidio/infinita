<?php 
if ($this->uri->segment(2) == 'corretor') {
  $corretor = 'active';
}
else{
  $lead = 'active';
}
?>
<ul class="nav nav-tabs pt-3">
  <li class="nav-item">
    <a class="nav-link <?= $lead ?>" href="<?= base_url('dashboard') ?>">Leads</a>
  </li>
  <li class="nav-item">
    <a class="nav-link <?= $corretor ?>" href="<?= base_url('dashboard/corretor') ?>">Corretores</a>
  </li>
</ul>