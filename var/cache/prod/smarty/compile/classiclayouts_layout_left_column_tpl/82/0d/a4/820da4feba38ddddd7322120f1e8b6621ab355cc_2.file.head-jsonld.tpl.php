<?php
/* Smarty version 3.1.48, created on 2024-07-11 10:09:32
  from 'C:\wamp64\www\akimmakako\themes\classic\templates\_partials\microdata\head-jsonld.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.48',
  'unifunc' => 'content_668faf5c4bebb5_20574538',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '820da4feba38ddddd7322120f1e8b6621ab355cc' => 
    array (
      0 => 'C:\\wamp64\\www\\akimmakako\\themes\\classic\\templates\\_partials\\microdata\\head-jsonld.tpl',
      1 => 1720448850,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_668faf5c4bebb5_20574538 (Smarty_Internal_Template $_smarty_tpl) {
echo '<script'; ?>
 type="application/ld+json">
  {
    "@context": "https://schema.org",
    "@type": "Organization",
    "name" : "<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop']->value['name'], ENT_QUOTES, 'UTF-8');?>
",
    "url" : "<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['pages']['index'], ENT_QUOTES, 'UTF-8');?>
",
    <?php if ($_smarty_tpl->tpl_vars['shop']->value['logo_details']) {?>
      "logo": {
        "@type": "ImageObject",
        "url":"<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop']->value['logo_details']['src'], ENT_QUOTES, 'UTF-8');?>
"
      }
    <?php }?>
  }
<?php echo '</script'; ?>
>

<?php echo '<script'; ?>
 type="application/ld+json">
  {
    "@context": "https://schema.org",
    "@type": "WebPage",
    "isPartOf": {
      "@type": "WebSite",
      "url":  "<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['pages']['index'], ENT_QUOTES, 'UTF-8');?>
",
      "name": "<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop']->value['name'], ENT_QUOTES, 'UTF-8');?>
"
    },
    "name": "<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['page']->value['meta']['title'], ENT_QUOTES, 'UTF-8');?>
",
    "url":  "<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['current_url'], ENT_QUOTES, 'UTF-8');?>
"
  }
<?php echo '</script'; ?>
>

<?php if ($_smarty_tpl->tpl_vars['page']->value['page_name'] == 'index') {?>
  <?php echo '<script'; ?>
 type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "WebSite",
      "url" : "<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['pages']['index'], ENT_QUOTES, 'UTF-8');?>
",
      <?php if ($_smarty_tpl->tpl_vars['shop']->value['logo_details']) {?>
        "image": {
          "@type": "ImageObject",
          "url":"<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop']->value['logo_details']['src'], ENT_QUOTES, 'UTF-8');?>
"
        },
      <?php }?>
      "potentialAction": {
        "@type": "SearchAction",
        "target": "<?php echo htmlspecialchars(str_replace('--search_term_string--','{search_term_string}',$_smarty_tpl->tpl_vars['link']->value->getPageLink('search',true,null,array('search_query'=>'--search_term_string--'))), ENT_QUOTES, 'UTF-8');?>
",
        "query-input": "required name=search_term_string"
      }
    }
  <?php echo '</script'; ?>
>
<?php }?>

<?php if ((isset($_smarty_tpl->tpl_vars['breadcrumb']->value['links'][1]))) {?>
  <?php echo '<script'; ?>
 type="application/ld+json">
    {
      "@context": "https://schema.org",
      "@type": "BreadcrumbList",
      "itemListElement": [
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['breadcrumb']->value['links'], 'path', false, NULL, 'breadcrumb', array (
  'iteration' => true,
  'last' => true,
  'total' => true,
));
$_smarty_tpl->tpl_vars['path']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['path']->value) {
$_smarty_tpl->tpl_vars['path']->do_else = false;
$_smarty_tpl->tpl_vars['__smarty_foreach_breadcrumb']->value['iteration']++;
$_smarty_tpl->tpl_vars['__smarty_foreach_breadcrumb']->value['last'] = $_smarty_tpl->tpl_vars['__smarty_foreach_breadcrumb']->value['iteration'] === $_smarty_tpl->tpl_vars['__smarty_foreach_breadcrumb']->value['total'];
?>
          {
            "@type": "ListItem",
            "position": <?php echo htmlspecialchars((isset($_smarty_tpl->tpl_vars['__smarty_foreach_breadcrumb']->value['iteration']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_breadcrumb']->value['iteration'] : null), ENT_QUOTES, 'UTF-8');?>
,
            "name": "<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['path']->value['title'], ENT_QUOTES, 'UTF-8');?>
",
            "item": "<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['path']->value['url'], ENT_QUOTES, 'UTF-8');?>
"
          }<?php if (!(isset($_smarty_tpl->tpl_vars['__smarty_foreach_breadcrumb']->value['last']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_breadcrumb']->value['last'] : null)) {?>,<?php }?>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
      ]
    }
  <?php echo '</script'; ?>
>
<?php }
}
}
