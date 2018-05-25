<script type="text/javascript">
var prefix = document.getElementsByTagName("div")[0].getAttribute("id");
  var editor = grapesjs.init({
    height: '100%',
    container : '#gjs',
    fromElement: 1,
    showOffsets: 1,
    avoidInlineStyle: 1,
    storageManager: {
      type: 'remote',
      autosave: true,
      setStepsBeforeSave: 3,
      autoload: true,
     stepsBeforeSave: 1,
     urlStore: '/content/store',
     urlLoad: '/content/load/'.concat(prefix),
      contentTypeJson: true
     },
    styleManager: {
         clearProperties: 1,
         sectors: [{
          name: 'General',
          open: false,
          buildProps: ['float', 'display', 'position', 'top', 'right', 'left', 'bottom']
        },{
          name: 'Dimension',
          open: false,
          buildProps: ['width', 'flex-width', 'height', 'max-width', 'min-height', 'margin', 'padding'],
          properties: [{
            id: 'flex-width',
            type: 'integer',
            name: 'Width',
            units: ['px', '%'],
            property: 'flex-basis',
            toRequire: 1,
      }]},{
            name: 'Decorations',
            open: false,
            buildProps: ['border-radius-c', 'background-color', 'border-radius', 'border', 'box-shadow', 'background'],
      }]
    },
    plugins: ['gjs-preset-webpage','gjs-blocks-basic','grapesjs-blocks-bootstrap4','grapesjs-lory-slider','grapesjs-tabs', 'gjs-aviary'],
    pluginsOpts: {
      'gjs-aviary':{

      },
      'gjs-blocks-basic':{

      },
      'grapesjs-tabs': {
              tabsBlock: {
                category: 'Extra'
              }
            },
      'grapesjs-blocks-bootstrap4': {
        blocks: {},
        blockCategories: {},
        labels: {},
        gridDevicesPanel: true
      },
      'grapesjs-lory-slider': {
        sliderBlock: {
           category: 'Extra'
         }
       },
       'gjs-preset-webpage': {
               modalImportTitle: 'Import Template',
               modalImportLabel: '<div style="margin-bottom: 10px; font-size: 13px;">Paste here your HTML/CSS and click Import</div>',
               modalImportContent: function(editor) {
                 return editor.getHtml() + '<style>'+editor.getCss()+'</style>'
               },
               filestackOpts: { key: 'AYmqZc2e8RLGLE7TGkX3Hz' },
               aviaryOpts: { key: '1' },
               blocksBasicOpts: { flexGrid: 1 },
               customStyleManager: [{
                 name: 'General',
                 buildProps: ['float', 'display', 'position', 'top', 'right', 'left', 'bottom'],
                 properties:[{
                     name: 'Alignment',
                     property: 'float',
                     type: 'radio',
                     defaults: 'none',
                     list: [
                       { value: 'none', className: 'fa fa-times'},
                       { value: 'left', className: 'fa fa-align-left'},
                       { value: 'right', className: 'fa fa-align-right'}
                     ],
                   },
                   { property: 'position', type: 'select'}
                 ],
               },{
                   name: 'Dimension',
                   open: false,
                   buildProps: ['width', 'flex-width', 'height', 'max-width', 'min-height', 'margin', 'padding'],
                   properties: [{
                     id: 'flex-width',
                     type: 'integer',
                     name: 'Width',
                     units: ['px', '%'],
                     property: 'flex-basis',
                     toRequire: 1,
                   },{
                     property: 'margin',
                     properties:[
                       { name: 'Top', property: 'margin-top'},
                       { name: 'Right', property: 'margin-right'},
                       { name: 'Bottom', property: 'margin-bottom'},
                       { name: 'Left', property: 'margin-left'}
                     ],
                   },{
                     property  : 'padding',
                     properties:[
                       { name: 'Top', property: 'padding-top'},
                       { name: 'Right', property: 'padding-right'},
                       { name: 'Bottom', property: 'padding-bottom'},
                       { name: 'Left', property: 'padding-left'}
                     ],
                   }],
                 },{
                   name: 'Typography',
                   open: false,
                   buildProps: ['font-family', 'font-size', 'font-weight', 'letter-spacing', 'color', 'line-height', 'text-align', 'text-decoration', 'text-shadow'],
                   properties:[
                     { name: 'Font', property: 'font-family'},
                     { name: 'Weight', property: 'font-weight'},
                     { name:  'Font color', property: 'color'},
                     {
                       property: 'text-align',
                       type: 'radio',
                       defaults: 'left',
                       list: [
                         { value : 'left',  name : 'Left',    className: 'fa fa-align-left'},
                         { value : 'center',  name : 'Center',  className: 'fa fa-align-center' },
                         { value : 'right',   name : 'Right',   className: 'fa fa-align-right'},
                         { value : 'justify', name : 'Justify',   className: 'fa fa-align-justify'}
                       ],
                     },{
                       property: 'text-decoration',
                       type: 'radio',
                       defaults: 'none',
                       list: [
                         { value: 'none', name: 'None', className: 'fa fa-times'},
                         { value: 'underline', name: 'underline', className: 'fa fa-underline' },
                         { value: 'line-through', name: 'Line-through', className: 'fa fa-strikethrough'}
                       ],
                     },{
                       property: 'text-shadow',
                       properties: [
                         { name: 'X position', property: 'text-shadow-h'},
                         { name: 'Y position', property: 'text-shadow-v'},
                         { name: 'Blur', property: 'text-shadow-blur'},
                         { name: 'Color', property: 'text-shadow-color'}
                       ],
                   }],
                 },{
                   name: 'Decorations',
                   open: false,
                   buildProps: ['opacity', 'background-color', 'border-radius', 'border', 'box-shadow', 'background'],
                   properties: [{
                     type: 'slider',
                     property: 'opacity',
                     defaults: 1,
                     step: 0.01,
                     max: 1,
                     min:0,
                   },{
                     property: 'border-radius',
                     properties  : [
                       { name: 'Top', property: 'border-top-left-radius'},
                       { name: 'Right', property: 'border-top-right-radius'},
                       { name: 'Bottom', property: 'border-bottom-left-radius'},
                       { name: 'Left', property: 'border-bottom-right-radius'}
                     ],
                   },{
                     property: 'box-shadow',
                     properties: [
                       { name: 'X position', property: 'box-shadow-h'},
                       { name: 'Y position', property: 'box-shadow-v'},
                       { name: 'Blur', property: 'box-shadow-blur'},
                       { name: 'Spread', property: 'box-shadow-spread'},
                       { name: 'Color', property: 'box-shadow-color'},
                       { name: 'Shadow type', property: 'box-shadow-type'}
                     ],
                   },{
                     property: 'background',
                     properties: [
                       { name: 'Image', property: 'background-image'},
                       { name: 'Repeat', property:   'background-repeat'},
                       { name: 'Position', property: 'background-position'},
                       { name: 'Attachment', property: 'background-attachment'},
                       { name: 'Size', property: 'background-size'}
                     ],
                   },],
                 },{
                   name: 'Extra',
                   open: false,
                   buildProps: ['transition', 'perspective', 'transform'],
                   properties: [{
                     property: 'transition',
                     properties:[
                       { name: 'Property', property: 'transition-property'},
                       { name: 'Duration', property: 'transition-duration'},
                       { name: 'Easing', property: 'transition-timing-function'}
                     ],
                   },{
                     property: 'transform',
                     properties:[
                       { name: 'Rotate X', property: 'transform-rotate-x'},
                       { name: 'Rotate Y', property: 'transform-rotate-y'},
                       { name: 'Rotate Z', property: 'transform-rotate-z'},
                       { name: 'Scale X', property: 'transform-scale-x'},
                       { name: 'Scale Y', property: 'transform-scale-y'},
                       { name: 'Scale Z', property: 'transform-scale-z'}
                     ],
                   }]
                 },{
                   name: 'Flex',
                   open: false,
                   properties: [{
                     name: 'Flex Container',
                     property: 'display',
                     type: 'select',
                     defaults: 'block',
                     list: [
                       { value: 'block', name: 'Disable'},
                       { value: 'flex', name: 'Enable'}
                     ],
                   },{
                     name: 'Flex Parent',
                     property: 'label-parent-flex',
                     type: 'integer',
                   },{
                     name      : 'Direction',
                     property  : 'flex-direction',
                     type    : 'radio',
                     defaults  : 'row',
                     list    : [{
                               value   : 'row',
                               name    : 'Row',
                               className : 'icons-flex icon-dir-row',
                               title   : 'Row',
                             },{
                               value   : 'row-reverse',
                               name    : 'Row reverse',
                               className : 'icons-flex icon-dir-row-rev',
                               title   : 'Row reverse',
                             },{
                               value   : 'column',
                               name    : 'Column',
                               title   : 'Column',
                               className : 'icons-flex icon-dir-col',
                             },{
                               value   : 'column-reverse',
                               name    : 'Column reverse',
                               title   : 'Column reverse',
                               className : 'icons-flex icon-dir-col-rev',
                             }],
                   },{
                     name      : 'Justify',
                     property  : 'justify-content',
                     type    : 'radio',
                     defaults  : 'flex-start',
                     list    : [{
                               value   : 'flex-start',
                               className : 'icons-flex icon-just-start',
                               title   : 'Start',
                             },{
                               value   : 'flex-end',
                               title    : 'End',
                               className : 'icons-flex icon-just-end',
                             },{
                               value   : 'space-between',
                               title    : 'Space between',
                               className : 'icons-flex icon-just-sp-bet',
                             },{
                               value   : 'space-around',
                               title    : 'Space around',
                               className : 'icons-flex icon-just-sp-ar',
                             },{
                               value   : 'center',
                               title    : 'Center',
                               className : 'icons-flex icon-just-sp-cent',
                             }],
                   },{
                     name      : 'Align',
                     property  : 'align-items',
                     type    : 'radio',
                     defaults  : 'center',
                     list    : [{
                               value   : 'flex-start',
                               title    : 'Start',
                               className : 'icons-flex icon-al-start',
                             },{
                               value   : 'flex-end',
                               title    : 'End',
                               className : 'icons-flex icon-al-end',
                             },{
                               value   : 'stretch',
                               title    : 'Stretch',
                               className : 'icons-flex icon-al-str',
                             },{
                               value   : 'center',
                               title    : 'Center',
                               className : 'icons-flex icon-al-center',
                             }],
                   },{
                     name: 'Flex Children',
                     property: 'label-parent-flex',
                     type: 'integer',
                   },{
                     name:     'Order',
                     property:   'order',
                     type:     'integer',
                     defaults :  0,
                     min: 0
                   },{
                     name    : 'Flex',
                     property  : 'flex',
                     type    : 'composite',
                     properties  : [{
                             name:     'Grow',
                             property:   'flex-grow',
                             type:     'integer',
                             defaults :  0,
                             min: 0
                           },{
                             name:     'Shrink',
                             property:   'flex-shrink',
                             type:     'integer',
                             defaults :  0,
                             min: 0
                           },{
                             name:     'Basis',
                             property:   'flex-basis',
                             type:     'integer',
                             units:    ['px','%',''],
                             unit: '',
                             defaults :  'auto',
                           }],
                   },{
                     name      : 'Align',
                     property  : 'align-self',
                     type      : 'radio',
                     defaults  : 'auto',
                     list    : [{
                               value   : 'auto',
                               name    : 'Auto',
                             },{
                               value   : 'flex-start',
                               title    : 'Start',
                               className : 'icons-flex icon-al-start',
                             },{
                               value   : 'flex-end',
                               title    : 'End',
                               className : 'icons-flex icon-al-end',
                             },{
                               value   : 'stretch',
                               title    : 'Stretch',
                               className : 'icons-flex icon-al-str',
                             },{
                               value   : 'center',
                               title    : 'Center',
                               className : 'icons-flex icon-al-center',
                             }],
                   }]
                 }
               ],
               }

    },
    canvas: {
      styles: [
        'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css'
      ],
      scripts: [
        'https://code.jquery.com/jquery-3.2.1.slim.min.js',
        'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js',
        'https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js'
      ],
    }
  });
  var storageManager = editor.StorageManager;

  storageManager.add('local2', {
  load: function(keys, clb) {
    var res = {};
    for (var i = 0, len = keys.length; i < len; i++){
      var v = localStorage.getItem(keys[i]);
      if(v) res[keys[i]] = v;
    }
    clb(res); // might be called inside some async method
  },
  store: function(data, clb) {
    for(var key in data)
      localStorage.setItem(key, data[key]);
    clb(); // might be called inside some async method
  }
});

      editor.Panels.addButton('options',
  [{
    id: 'save-db',
    className: 'fa fa-floppy-o',
    command: 'save-db',
    attributes: {title: 'Save DB'}
  }]
);

editor.Commands.add('save-db', {
  run: function(editor, sender){
    sender && sender.set('active',0);
    editor.store();
    editor.on('storage:load', function(e) {
      console.log('Loaded ', e);
    });
    editor.on('storage:store', function(e) {
      console.log('Stored ', e);
    });
  }
});
  window.editor = editor;
</script>
