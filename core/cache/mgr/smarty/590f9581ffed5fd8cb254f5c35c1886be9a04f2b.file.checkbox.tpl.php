<?php /* Smarty version Smarty-3.0.4, created on 2015-07-20 14:42:53
         compiled from "/home/admin/web/mcmpspb.yellowmarker.ru/public_html/manager/templates/default/element/tv/renders/inputproperties/checkbox.tpl" */ ?>
<?php /*%%SmartyHeaderCode:122830134055ad08ed51beb8-05831413%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '590f9581ffed5fd8cb254f5c35c1886be9a04f2b' => 
    array (
      0 => '/home/admin/web/mcmpspb.yellowmarker.ru/public_html/manager/templates/default/element/tv/renders/inputproperties/checkbox.tpl',
      1 => 1435247116,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '122830134055ad08ed51beb8-05831413',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
)); /*/%%SmartyHeaderCode%%*/?>
<?php if (!is_callable('smarty_modifier_escape')) include '/home/admin/web/mcmpspb.yellowmarker.ru/public_html/core/model/smarty/plugins/modifier.escape.php';
?><div id="tv-input-properties-form<?php echo $_smarty_tpl->getVariable('tv')->value;?>
"></div>


<script type="text/javascript">
// <![CDATA[
var params = {
<?php  $_smarty_tpl->tpl_vars['v'] = new Smarty_Variable;
 $_smarty_tpl->tpl_vars['k'] = new Smarty_Variable;
 $_from = $_smarty_tpl->getVariable('params')->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
 $_smarty_tpl->tpl_vars['v']->total= $_smarty_tpl->_count($_from);
 $_smarty_tpl->tpl_vars['v']->iteration=0;
if ($_smarty_tpl->tpl_vars['v']->total > 0){
    foreach ($_from as $_smarty_tpl->tpl_vars['v']->key => $_smarty_tpl->tpl_vars['v']->value){
 $_smarty_tpl->tpl_vars['k']->value = $_smarty_tpl->tpl_vars['v']->key;
 $_smarty_tpl->tpl_vars['v']->iteration++;
 $_smarty_tpl->tpl_vars['v']->last = $_smarty_tpl->tpl_vars['v']->iteration === $_smarty_tpl->tpl_vars['v']->total;
 $_smarty_tpl->tpl_vars['smarty']->value['foreach']['p']['last'] = $_smarty_tpl->tpl_vars['v']->last;
?>
 '<?php echo (isset($_smarty_tpl->tpl_vars['k']->value) ? $_smarty_tpl->tpl_vars['k']->value : null);?>
': '<?php echo smarty_modifier_escape((isset($_smarty_tpl->tpl_vars['v']->value) ? $_smarty_tpl->tpl_vars['v']->value : null),"javascript");?>
'<?php if (!$_smarty_tpl->getVariable('smarty')->value['foreach']['p']['last']){?>,<?php }?>
<?php }} ?>
};
var oc = {'change':{fn:function(){Ext.getCmp('modx-panel-tv').markDirty();},scope:this}};
MODx.load({
    xtype: 'panel'
    ,layout: 'form'
    ,autoHeight: true
    ,labelAlign: 'top'
    ,cls: 'form-with-labels'
    ,border: false
    ,items: [{
        xtype: 'combo-boolean'
        ,fieldLabel: _('required')
        ,description: MODx.expandHelp ? '' : _('required_desc')
        ,name: 'inopt_allowBlank'
        ,hiddenName: 'inopt_allowBlank'
        ,id: 'inopt_allowBlank<?php echo $_smarty_tpl->getVariable('tv')->value;?>
'
        ,value: params['allowBlank'] == 0 || params['allowBlank'] == 'false' ? false : true
        ,width: 200
        ,listeners: oc
    },{
        xtype: MODx.expandHelp ? 'label' : 'hidden'
        ,forId: 'inopt_allowBlank<?php echo $_smarty_tpl->getVariable('tv')->value;?>
'
        ,html: _('required_desc')
        ,cls: 'desc-under'
    },{      
        xtype: 'numberfield'
        ,allowNegative: false
        ,allowDecimals: false
        ,fieldLabel: _('checkbox_columns')
        ,description: MODx.expandHelp ? '' : _('checkbox_columns_desc')
        ,name: 'inopt_columns'
        ,hiddenName: 'inopt_columns'
        ,id: 'inopt_columns<?php echo $_smarty_tpl->getVariable('tv')->value;?>
'
        ,value: params['columns'] || 1
        ,width: 300
        ,listeners: oc
    },{      
        xtype: MODx.expandHelp ? 'label' : 'hidden'
        ,forId: 'inopt_columns<?php echo $_smarty_tpl->getVariable('tv')->value;?>
'
        ,html: _('checkbox_columns_desc')
        ,cls: 'desc-under'
    }]
    ,renderTo: 'tv-input-properties-form<?php echo $_smarty_tpl->getVariable('tv')->value;?>
'
});
// ]]>
</script>

