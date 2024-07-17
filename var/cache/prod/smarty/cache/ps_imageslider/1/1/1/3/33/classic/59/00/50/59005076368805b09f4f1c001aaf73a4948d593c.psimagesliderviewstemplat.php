<?php
/* Smarty version 3.1.48, created on 2024-07-17 08:43:58
  from 'module:psimagesliderviewstemplat' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_6697844eb215c6_47141714',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6c2108a17c7103b6e203f4f0621d4645b56b0114' => 
    array (
      0 => 'module:psimagesliderviewstemplat',
      1 => 1720448850,
      2 => 'module',
    ),
  ),
  'cache_lifetime' => 31536000,
),true)) {
function content_6697844eb215c6_47141714 (Smarty_Internal_Template $_smarty_tpl) {
?>
  <div id="carousel" data-ride="carousel" class="carousel slide" data-interval="5000" data-wrap="true" data-pause="hover" data-touch="true">
    <ol class="carousel-indicators">
            <li data-target="#carousel" data-slide-to="0" class="active"></li>
            <li data-target="#carousel" data-slide-to="1"></li>
            <li data-target="#carousel" data-slide-to="2"></li>
          </ol>
    <ul class="carousel-inner" role="listbox" aria-label="Conteneur carrousel">
              <li class="carousel-item active" role="option" aria-hidden="false">
          <a href="">
            <figure>
              <img src="http://localhost/akimmakako/modules/ps_imageslider/images/8f3eaf9c09ae0fada4735ca5bcb7d192efd52cf1_1920x700_July16-17_Mega_days_FR_1400x 1.png" alt="" loading="lazy" width="1110" height="340">
                          </figure>
          </a>
        </li>
              <li class="carousel-item " role="option" aria-hidden="true">
          <a href="http://localhost/akimmakako/fr/11-accessoires-itech">
            <figure>
              <img src="http://localhost/akimmakako/modules/ps_imageslider/images/442c2fc925a6ba4959a49459063e8ec2ee7285cf_image_172.jpeg" alt="" loading="lazy" width="1110" height="340">
                          </figure>
          </a>
        </li>
              <li class="carousel-item " role="option" aria-hidden="true">
          <a href="http://localhost/akimmakako/fr/2-accueil">
            <figure>
              <img src="http://localhost/akimmakako/modules/ps_imageslider/images/dc6319c4aee3a04e203bd8387998483eb03e646c_voiture de luxe (1) 1.png" alt="" loading="lazy" width="1110" height="340">
                          </figure>
          </a>
        </li>
          </ul>
    <div class="direction" aria-label="Boutons du carrousel">
      <a class="left carousel-control" href="#carousel" role="button" data-slide="prev" aria-label="Précédent">
        <span class="icon-prev hidden-xs" aria-hidden="true">
          <i class="material-icons">&#xE5CB;</i>
        </span>
      </a>
      <a class="right carousel-control" href="#carousel" role="button" data-slide="next" aria-label="Suivant">
        <span class="icon-next" aria-hidden="true">
          <i class="material-icons">&#xE5CC;</i>
        </span>
      </a>
    </div>
  </div>
<?php }
}
