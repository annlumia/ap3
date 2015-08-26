<?php
/* @var $this KasbankController */
/* @var $model KasBank */

$this->breadcrumbs = array(
    'Kas Bank' => array('index'),
    'Index',
);

$this->boxHeader['small'] = 'Kas Bank';
$this->boxHeader['normal'] = 'Kas Bank';
?>
<div class="row">
   <div class="small-12 columns">
      <?php
      $this->widget('BGridView', array(
          'id' => 'kas-bank-grid',
          'dataProvider' => $model->search(),
          'filter' => $model,
          'columns' => array(
              array(
                  'class' => 'BDataColumn',
                  'name' => 'nama',
                  'header' => '<span class="ak">N</span>ama',
                  'accesskey' => 'n',
                  'type' => 'raw',
                  'value' => array($this, 'renderLinkToView'),
              ),
              array(
                  'name' => 'kode_akun_id',
                  'filter' => false
              ),
              array(
                  'class' => 'BButtonColumn',
              ),
          ),
      ));
      ?>
   </div>
</div>
<?php
$this->menu = array(
    array('itemOptions' => array('class' => 'divider'), 'label' => ''),
    array('itemOptions' => array('class' => 'has-form hide-for-small-only'), 'label' => '',
        'items' => array(
            array('label' => '<i class="fa fa-plus"></i> <span class="ak">T</span>ambah', 'url' => $this->createUrl('tambah'), 'linkOptions' => array(
                    'class' => 'button',
                    'accesskey' => 't'
                )),
        ),
        'submenuOptions' => array('class' => 'button-group')
    ),
    array('itemOptions' => array('class' => 'has-form show-for-small-only'), 'label' => '',
        'items' => array(
            array('label' => '<i class="fa fa-plus"></i>', 'url' => $this->createUrl('tambah'), 'linkOptions' => array(
                    'class' => 'button'
                )),
        ),
        'submenuOptions' => array('class' => 'button-group')
    )
);
