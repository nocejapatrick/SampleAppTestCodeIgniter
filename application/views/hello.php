<?php $this->load->view('partial_layouts/header') ?>
<?php $this->load->view('partial_layouts/navigation') ?>
    <ul>
        <?php foreach($ninjas as $ninja){ ?>

            <li><?= $ninja["name"]?> - <?= $ninja["Dojo"]?></li>

        <?php } ?>
    </ul>
<?php ?>

<?php $this->load->view('partial_layouts/footer') ?>