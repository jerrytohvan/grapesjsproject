<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>GrapesJS</title>

  <link rel="stylesheet" href="./grapesjs/dist/css/grapes.min.css"/>
    <script src="./grapesjs/dist/grapes.js"></script>

    <!-- RESOURCE -->
    <link href="https://unpkg.com/grapesjs/dist/css/grapes.min.css" rel="stylesheet"/>
    <script src="https://unpkg.com/grapesjs"></script>
    <script src="//feather.aviary.com/imaging/v3/editor.js"></script>
    <script src="https://static.filestackapi.com/v3/filestack-0.1.10.js"></script>

    <!-- PLUGINS -->

    <script src="./grapesjs-blocks-bootstrap4/dist/grapesjs-blocks-bootstrap4.min.js"></script>
    <script src="./grapesjs-blocks-basic/dist/grapesjs-blocks-basic.min.js"></script>
    <script src="./grapesjs-preset-webpage/dist/grapesjs-preset-webpage.min.js"></script>
    <script src="./toastr/toastr.js"></script>
    <link rel="stylesheet" href="./grapesjs-preset-webpage/dist/grapesjs-preset-webpage.min.css"/>
    <link rel="stylesheet" href="./toastr/build/toastr.min.css"/>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous"/>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <style>
    body, html{ height: 100%; margin: 0;}

    .gjs-block-svg {
        width: 61%;
    }

    .gjs-block-svg-path {
      fill: white;
    }
    </style>
  </head>

  <body>
    <div id="gjs">
    </div>
    <script type="text/javascript">
    var prefix = document.getElementsByTagName("div")[0].getAttribute("id");
var editor = grapesjs.init({
  height: '100%',
  container: '#'.concat(prefix),
  fromElement: 1,
  showOffsets: 1,
  autorender: 1,
  avoidInlineStyle: 1,
  storageManager: {
      type: 'remote',
      autosave: true,
      setStepsBeforeSave: 3,
      autoload: true,
      stepsBeforeSave: 1,
      urlStore: '/content/store/'.concat(prefix),
      urlLoad: '/content/load/'.concat(prefix),
      contentTypeJson: true
  },
  styleManager: {
      clearProperties: 1
  },
  plugins: ['gjs-preset-webpage', 'grapesjs-lory-slider', 'grapesjs-tabs'],
  pluginsOpts: {
      'grapesjs-lory-slider': {
          sliderBlock: {
              category: 'Extra'
          }
      },
      'grapesjs-tabs': {
          tabsBlock: {
              category: 'Extra'
          }
      },
      'gjs-preset-webpage': {},

      aviaryOpts: {
          key: '1'
      },
      blocksBasicOpts: {
          flexGrid: 1
      },
      customStyleManager: [{
          name: 'General',
          buildProps: ['float', 'display', 'position', 'top', 'right', 'left', 'bottom'],
          properties: [{
                  name: 'Alignment',
                  property: 'float',
                  type: 'radio',
                  defaults: 'none',
                  list: [{
                          value: 'none',
                          className: 'fa fa-times'
                      },
                      {
                          value: 'left',
                          className: 'fa fa-align-left'
                      },
                      {
                          value: 'right',
                          className: 'fa fa-align-right'
                      }
                  ],
              },
              {
                  property: 'position',
                  type: 'select'
              }
          ],
      }, {
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
          }, {
              property: 'margin',
              properties: [{
                      name: 'Top',
                      property: 'margin-top'
                  },
                  {
                      name: 'Right',
                      property: 'margin-right'
                  },
                  {
                      name: 'Bottom',
                      property: 'margin-bottom'
                  },
                  {
                      name: 'Left',
                      property: 'margin-left'
                  }
              ],
          }, {
              property: 'padding',
              properties: [{
                      name: 'Top',
                      property: 'padding-top'
                  },
                  {
                      name: 'Right',
                      property: 'padding-right'
                  },
                  {
                      name: 'Bottom',
                      property: 'padding-bottom'
                  },
                  {
                      name: 'Left',
                      property: 'padding-left'
                  }
              ],
          }],
      }, {
          name: 'Typography',
          open: false,
          buildProps: ['font-family', 'font-size', 'font-weight', 'letter-spacing', 'color', 'line-height', 'text-align', 'text-decoration', 'text-shadow'],
          properties: [{
                  name: 'Font',
                  property: 'font-family'
              },
              {
                  name: 'Weight',
                  property: 'font-weight'
              },
              {
                  name: 'Font color',
                  property: 'color'
              },
              {
                  property: 'text-align',
                  type: 'radio',
                  defaults: 'left',
                  list: [{
                          value: 'left',
                          name: 'Left',
                          className: 'fa fa-align-left'
                      },
                      {
                          value: 'center',
                          name: 'Center',
                          className: 'fa fa-align-center'
                      },
                      {
                          value: 'right',
                          name: 'Right',
                          className: 'fa fa-align-right'
                      },
                      {
                          value: 'justify',
                          name: 'Justify',
                          className: 'fa fa-align-justify'
                      }
                  ],
              }, {
                  property: 'text-decoration',
                  type: 'radio',
                  defaults: 'none',
                  list: [{
                          value: 'none',
                          name: 'None',
                          className: 'fa fa-times'
                      },
                      {
                          value: 'underline',
                          name: 'underline',
                          className: 'fa fa-underline'
                      },
                      {
                          value: 'line-through',
                          name: 'Line-through',
                          className: 'fa fa-strikethrough'
                      }
                  ],
              }, {
                  property: 'text-shadow',
                  properties: [{
                          name: 'X position',
                          property: 'text-shadow-h'
                      },
                      {
                          name: 'Y position',
                          property: 'text-shadow-v'
                      },
                      {
                          name: 'Blur',
                          property: 'text-shadow-blur'
                      },
                      {
                          name: 'Color',
                          property: 'text-shadow-color'
                      }
                  ],
              }
          ],
      }, {
          name: 'Decorations',
          open: false,
          buildProps: ['opacity', 'background-color', 'border-radius', 'border', 'box-shadow', 'background'],
          properties: [{
              type: 'slider',
              property: 'opacity',
              defaults: 1,
              step: 0.01,
              max: 1,
              min: 0,
          }, {
              property: 'border-radius',
              properties: [{
                      name: 'Top',
                      property: 'border-top-left-radius'
                  },
                  {
                      name: 'Right',
                      property: 'border-top-right-radius'
                  },
                  {
                      name: 'Bottom',
                      property: 'border-bottom-left-radius'
                  },
                  {
                      name: 'Left',
                      property: 'border-bottom-right-radius'
                  }
              ],
          }, {
              property: 'box-shadow',
              properties: [{
                      name: 'X position',
                      property: 'box-shadow-h'
                  },
                  {
                      name: 'Y position',
                      property: 'box-shadow-v'
                  },
                  {
                      name: 'Blur',
                      property: 'box-shadow-blur'
                  },
                  {
                      name: 'Spread',
                      property: 'box-shadow-spread'
                  },
                  {
                      name: 'Color',
                      property: 'box-shadow-color'
                  },
                  {
                      name: 'Shadow type',
                      property: 'box-shadow-type'
                  }
              ],
          }, {
              property: 'background',
              properties: [{
                      name: 'Image',
                      property: 'background-image'
                  },
                  {
                      name: 'Repeat',
                      property: 'background-repeat'
                  },
                  {
                      name: 'Position',
                      property: 'background-position'
                  },
                  {
                      name: 'Attachment',
                      property: 'background-attachment'
                  },
                  {
                      name: 'Size',
                      property: 'background-size'
                  }
              ],
          }, ],
      }, {
          name: 'Extra',
          open: false,
          buildProps: ['transition', 'perspective', 'transform'],
          properties: [{
              property: 'transition',
              properties: [{
                      name: 'Property',
                      property: 'transition-property'
                  },
                  {
                      name: 'Duration',
                      property: 'transition-duration'
                  },
                  {
                      name: 'Easing',
                      property: 'transition-timing-function'
                  }
              ],
          }, {
              property: 'transform',
              properties: [{
                      name: 'Rotate X',
                      property: 'transform-rotate-x'
                  },
                  {
                      name: 'Rotate Y',
                      property: 'transform-rotate-y'
                  },
                  {
                      name: 'Rotate Z',
                      property: 'transform-rotate-z'
                  },
                  {
                      name: 'Scale X',
                      property: 'transform-scale-x'
                  },
                  {
                      name: 'Scale Y',
                      property: 'transform-scale-y'
                  },
                  {
                      name: 'Scale Z',
                      property: 'transform-scale-z'
                  }
              ],
          }]
      }, {
          name: 'Flex',
          open: false,
          properties: [{
              name: 'Flex Container',
              property: 'display',
              type: 'select',
              defaults: 'block',
              list: [{
                      value: 'block',
                      name: 'Disable'
                  },
                  {
                      value: 'flex',
                      name: 'Enable'
                  }
              ],
          }, {
              name: 'Flex Parent',
              property: 'label-parent-flex',
              type: 'integer',
          }, {
              name: 'Direction',
              property: 'flex-direction',
              type: 'radio',
              defaults: 'row',
              list: [{
                  value: 'row',
                  name: 'Row',
                  className: 'icons-flex icon-dir-row',
                  title: 'Row',
              }, {
                  value: 'row-reverse',
                  name: 'Row reverse',
                  className: 'icons-flex icon-dir-row-rev',
                  title: 'Row reverse',
              }, {
                  value: 'column',
                  name: 'Column',
                  title: 'Column',
                  className: 'icons-flex icon-dir-col',
              }, {
                  value: 'column-reverse',
                  name: 'Column reverse',
                  title: 'Column reverse',
                  className: 'icons-flex icon-dir-col-rev',
              }],
          }, {
              name: 'Justify',
              property: 'justify-content',
              type: 'radio',
              defaults: 'flex-start',
              list: [{
                  value: 'flex-start',
                  className: 'icons-flex icon-just-start',
                  title: 'Start',
              }, {
                  value: 'flex-end',
                  title: 'End',
                  className: 'icons-flex icon-just-end',
              }, {
                  value: 'space-between',
                  title: 'Space between',
                  className: 'icons-flex icon-just-sp-bet',
              }, {
                  value: 'space-around',
                  title: 'Space around',
                  className: 'icons-flex icon-just-sp-ar',
              }, {
                  value: 'center',
                  title: 'Center',
                  className: 'icons-flex icon-just-sp-cent',
              }],
          }, {
              name: 'Align',
              property: 'align-items',
              type: 'radio',
              defaults: 'center',
              list: [{
                  value: 'flex-start',
                  title: 'Start',
                  className: 'icons-flex icon-al-start',
              }, {
                  value: 'flex-end',
                  title: 'End',
                  className: 'icons-flex icon-al-end',
              }, {
                  value: 'stretch',
                  title: 'Stretch',
                  className: 'icons-flex icon-al-str',
              }, {
                  value: 'center',
                  title: 'Center',
                  className: 'icons-flex icon-al-center',
              }],
          }, {
              name: 'Flex Children',
              property: 'label-parent-flex',
              type: 'integer',
          }, {
              name: 'Order',
              property: 'order',
              type: 'integer',
              defaults: 0,
              min: 0
          }, {
              name: 'Flex',
              property: 'flex',
              type: 'composite',
              properties: [{
                  name: 'Grow',
                  property: 'flex-grow',
                  type: 'integer',
                  defaults: 0,
                  min: 0
              }, {
                  name: 'Shrink',
                  property: 'flex-shrink',
                  type: 'integer',
                  defaults: 0,
                  min: 0
              }, {
                  name: 'Basis',
                  property: 'flex-basis',
                  type: 'integer',
                  units: ['px', '%', ''],
                  unit: '',
                  defaults: 'auto',
              }],
          }, {
              name: 'Align',
              property: 'align-self',
              type: 'radio',
              defaults: 'auto',
              list: [{
                  value: 'auto',
                  name: 'Auto',
              }, {
                  value: 'flex-start',
                  title: 'Start',
                  className: 'icons-flex icon-al-start',
              }, {
                  value: 'flex-end',
                  title: 'End',
                  className: 'icons-flex icon-al-end',
              }, {
                  value: 'stretch',
                  title: 'Stretch',
                  className: 'icons-flex icon-al-str',
              }, {
                  value: 'center',
                  title: 'Center',
                  className: 'icons-flex icon-al-center',
              }],
          }]
      }],
  }
});


var pn = editor.Panels;
editor.Commands.add('canvas-clear', function() {
  if (confirm('Are you sure to clean the canvas?')) {
      var comps = editor.DomComponents.clear();
      setTimeout(function() {
          localStorage.clear();
      }, 0)
  }
});



editor.BlockManager.add('social-media-share-plugin', {
  category: 'Social Media',
  label: 'Share Buttons',
  attributes: {
      class: 'fa fa-share-square'
  },
  content: `<!-- AddToAny BEGIN -->
    <div>
    <a href="https://www.addtoany.com/share?linkurl=josephprince.com&amp;linkname=" target="_blank"><img src="https://static.addtoany.com/buttons/a2a.svg" width="32" height="32" style="background-color:blue"></a>
    <a href="https://www.addtoany.com/add_to/facebook?linkurl=josephprince.com&amp;linkname=" target="_blank"><img src="https://static.addtoany.com/buttons/facebook.svg" width="32" height="32" style="background-color:blue"></a>
    <a href="https://www.addtoany.com/add_to/twitter?linkurl=josephprince.com&amp;linkname=" target="_blank"><img src="https://static.addtoany.com/buttons/twitter.svg" width="32" height="32" style="background-color:blue"></a>
    <a href="https://www.addtoany.com/add_to/google_plus?linkurl=josephprince.com&amp;linkname=" target="_blank"><img src="https://static.addtoany.com/buttons/google_plus.svg" width="32" height="32" style="background-color:blue"></a>
    </div>
    <!-- AddToAny END -->`
});

// ====================== SKU ELEMENT - TRAIT ==========================
editor.BlockManager.add('sku', {
  category: 'SKU Elements',
  label: 'SKU Elements',
  attributes: {
      class: 'fa fa-tag'
  },
  content: {
      content: '<div> </div>',
      style: {
          height: 'auto',
          width: '100%'
      },
      type: 'sku'
  }
});


var domComps = editor.DomComponents;
var dType = domComps.getType('default');
var dModel = dType.model;
var dView = dType.view;
var modal = editor.Modal;


// $(".gjs-frame:first").contents().find('#skuComponent').on('dblclick',function(e){
//     console.log(e);
// });



var skuVar = domComps.addType('sku', {
  model: dModel.extend({
      init() {
          this.listenTo(this, 'change:sku', this.doStuff);
      },
      doStuff() {
          this.render;
          var skuId = this.get('traits').where({
              name: 'sku'
          })[0].get('value');
          var data = JSON.parse(this.getSku(skuId));
          var content = `<div class="media">
              <img class="mr-3" src="` + data.img + `" alt="` + data.sku_name + `">
              <div class="media-body"><h5 class="mt-0">` + data.sku_name +
              `</h5> <p>` + data.desc + `</p>
              </div>
              <a href="` + data.url + `">Buy now </a>
              </div>`;
          var theId = "#" + this.view.el.id;
          content.className = 'gjs-fonts gjs-f-b1';
          var element = $(theId);
          //access iframe
          var x = $(".gjs-frame:first").contents().find(theId)[0];
          $(x).empty();
          this.append(content);
          console.log(this);
      },
      getSku(id) {
          //retrieve array
          return $.ajax({
              url: "/retrieve/sku/" + id,
              type: "GET",
              async: false,
              dataType: 'json',
              encode: true,
          }).responseText;

      },
      defaults: Object.assign({}, dModel.prototype.defaults, {
          stylable: false,
          editable: false,
          droppable: true,
          traits: [{
              type: 'select',
              label: 'Sku Product',
              name: 'sku',
              changeProp: 1,
              options: [{
                      value: '1',
                      name: 'Grace Promises For Moms (Hardback)'
                  },
                  {
                      value: '2',
                      name: 'The Prayer of Protection–Living Fearlessly in Dangerous Times'
                  },
              ]
          }],
      })
  }, {
      isComponent: function(el) {
          if (el.tagName == 'INPUT') {
              return {
                  type: 'input'
              };
          }
      },
  }),

  view: dView
});
// ====================== END OF SKU ELEMENT - TRAIT ==========================

var domComps = editor.DomComponents;
var blockManager = editor.BlockManager;
var dType1 = domComps.getType('default');
var dModel1 = dType1.model;
var dView1 = dType1.view;



// ====================== START OF SKU ELEMENT - MODAL ==========================

editor.BlockManager.add('sku-modal', {
  category: 'SKU Elements',
  label: 'SKU Modal',
  attributes: {
      class: 'fa fa-tag'
      },
      content: {
          type: 'sku-modal',
          activeOnRender: 1
      }
});

var skuModalObject = {
  model: dModel1.extend({
      init() {
          this.listenTo(this, 'active', this.openModal);
      },

      openModal() {
          var theId = "#" + this.view.el.id;
          $(theId).click(function(){
            console.log("log");
          });
          modal.setContent(`
            <div>
              <form method="post" class="tagForm" id="my_form">
                        <div class="form-group">
                          @foreach($skuList as $sku)
                          <input id="modal-val" type="submit" value="[{{ $sku->id . "] " . $sku->sku_name   }}" onclick="submitContactForm({{ $sku->id }},'` + theId + `')"> <br/>
                          @endforeach
                          </div>
                          <div class="modal-footer">
                              <button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
                          </div>
                      </div>
              </form>
            </div>
                      `);
          modal.setTitle('Select SKU');
          modal.open();


          $('#my_form').submit(function(ev) {
          //  console.log(ev);
            window.onbeforeunload = null;
            ev.preventDefault();
          });

      },
      addContent(skuId) {
        var theId = "#" + this.view.el.id;

          var data = JSON.parse(this.getSku(skuId));
          var content = `<div class="media" id="skuComponent">
              <img class="mr-3" src="` + data.img + `" alt="` + data.sku_name + `">
              <div class="media-body"><h5 class="mt-0">` + data.sku_name +
              `</h5> <p>` + data.desc + `</p>
              </div>
              <a href="` + data.url + `">Buy now </a>
              </div>`;
          content.className = 'gjs-fonts gjs-f-b1';
          var element = $(theId);
          //access iframe
          var x = $(".gjs-frame:first").contents().find(theId)[0];
          $(x).empty();
          this.append(content);
      },
      getSku(id) {
          //retrieve array
          return $.ajax({
              url: "/retrieve/sku/" + id,
              type: "GET",
              async: false,
              dataType: 'json',
              encode: true,
          }).responseText;

      },
      defaults: Object.assign({}, dModel1.prototype.defaults, {
        stylable: false,
        editable: false,
        droppable: true
      }),
  },
  {
    isComponent: function(el) {
          if (el.tagName == 'INPUT') {
              return {
                  type: 'input'
              };
          }
      },
  }
),
  view: dView1
};

domComps.addType('sku-modal', skuModalObject);

function submitContactForm(value, id) {
  var theType = domComps.getType('sku-modal');
  var theModel = theType.model;

  var data = JSON.parse(this.getSku(value));
  var content = `<div class="media" id="skuComponent">
                  <img class="mr-3" src="` + data.img + `" alt="` + data.sku_name + `">
                  <div class="media-body"><h5 class="mt-0">` + data.sku_name +
      `</h5> ` + data.desc + `
                  </div>
                  <a href="` + data.url + `">Buy now </a>
                  </div>`;
    content.className = 'gjs-fonts gjs-f-b1';
    var x = $(".gjs-frame:first").contents().find(id)[0];
    $(x).empty();

    const result = [];
    const wrapper = domComps.getWrapper();
    wrapper.view.$el.find(id).each((el, i, $el) => result.push($el.data('model')))

    result[0].append(content);

    var skuContainer = $(".gjs-frame:first").contents().find(id);
    skuContainer.on('dblclick',function(e){
    //    alert('pressed');
          updateSkuComponent(id);
    });

    modal.close();
    return false;
  }

function getSku(id) {
    return $.ajax({
        url: "/retrieve/sku/" + id,
        type: "GET",
        async: false,
        dataType: 'json',
        encode: true,
    }).responseText;
  }

function updateSkuComponent(id) {
  console.log(id);
  modal.setContent(`
    <div>
      <form method="post" class="tagForm" id="my_form">
                <div class="form-group">
                  @foreach($skuList as $sku)
                  <input id="modal-val" type="submit" value="[{{ $sku->id . "] " . $sku->sku_name   }}" onclick="submitContactForm({{ $sku->id }},'` + id + `');"> <br/>
                  @endforeach
                  </div>
                  <div class="modal-footer">
                      <button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
                  </div>
              </div>
      </form>
    </div>
              `);
  modal.setTitle('Select SKU');
  modal.open();


  $('#my_form').submit(function(ev) {
    window.onbeforeunload = null;
    ev.preventDefault();
  });
}


// ====================== END OF SKU ELEMENT - MODAL ==========================

// Simple warn notifier
var origWarn = console.warn;
toastr.options = {
  closeButton: true,
  preventDuplicates: true,
  showDuration: 250,
  hideDuration: 150,
  closeButton: true,
  preventDuplicates: true,
  showDuration: 250,
  hideDuration: 150
};
console.warn = function(msg) {
  if (msg.indexOf('[undefined]') == -1) {
      toastr.warning(msg);
  }
  origWarn(msg);
  if (msg.indexOf('[undefined]') == -1) {
      toastr.warning(msg);
  }
  origWarn(msg);
};


// Add and beautify tooltips
[
  ['sw-visibility', 'Show Borders'],
  ['preview', 'Preview'],
  ['fullscreen', 'Fullscreen'],
  ['export-template', 'Export'],
  ['undo', 'Undo'],
  ['redo', 'Redo'],
  ['gjs-open-import-webpage', 'Import'],
  ['canvas-clear', 'Clear canvas']
]
.forEach(function(item) {
  pn.getButton('options', item[0]).set('attributes', {
      title: item[1],
      'data-tooltip-pos': 'bottom'
  });
});
[
  ['open-sm', 'Style Manager'],
  ['open-layers', 'Layers'],
  ['open-blocks', 'Blocks']
]
.forEach(function(item) {
  pn.getButton('views', item[0]).set('attributes', {
      title: item[1],
      'data-tooltip-pos': 'bottom'
  });
});
var titles = document.querySelectorAll('*[title]');

for (var i = 0; i < titles.length; i++) {
  var el = titles[i];
  var title = el.getAttribute('title');
  title = title ? title.trim() : '';
  if (!title)
      break;
  el.setAttribute('data-tooltip', title);
  el.setAttribute('title', '');
}

// Show borders by default
pn.getButton('options', 'sw-visibility').set('active', 1);


// Store and load events
editor.on('storage:load', function(e) {
  console.log('Loaded ', e)
});
editor.on('storage:store', function(e) {
  console.log('Stored ', e)
});


// Do stuff on load
editor.on('load', function() {
  var $ = grapesjs.$;
  // Load and show settings and style manager
  var openTmBtn = pn.getButton('views', 'open-tm');
  openTmBtn && openTmBtn.set('active', 1);
  var openSm = pn.getButton('views', 'open-sm');
  openSm && openSm.set('active', 1);

  // Add Settings Sector
  var traitsSector = $('<div class="gjs-sm-sector no-select">' +
      '<div class="gjs-sm-title"><span class="icon-settings fa fa-cog"></span> Settings</div>' +
      '<div class="gjs-sm-properties" style="display: none;"></div></div>');
  var traitsProps = traitsSector.find('.gjs-sm-properties');
  traitsProps.append($('.gjs-trt-traits'));
  $('.gjs-sm-sectors').before(traitsSector);
  traitsSector.find('.gjs-sm-title').on('click', function() {
      var traitStyle = traitsProps.get(0).style;
      var hidden = traitStyle.display == 'none';
      if (hidden) {
          traitStyle.display = 'block';
      } else {
          traitStyle.display = 'none';
      }
  });


  // Move Ad
  $('#gjs').append($('.ad-cont'));
});

var storageManager = editor.StorageManager;

storageManager.add('local2', {
  load: function(keys, clb) {
      var res = {};
      for (var i = 0, len = keys.length; i < len; i++) {
          var v = localStorage.getItem(keys[i]);
          if (v) res[keys[i]] = v;
      }
      clb(res); // might be called inside some async method
  },
  store: function(data, clb) {
      for (var key in data)
          localStorage.setItem(key, data[key]);
      clb(); // might be called inside some async method
  }
});

editor.Panels.addButton('options', [{
  id: 'save-db',
  className: 'fa fa-floppy-o',
  command: 'save-db',
  attributes: {
      title: 'Save DB'
  }
}]);

editor.Commands.add('save-db', {
  run: function(editor, sender) {
      sender && sender.set('active', 0);
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


  </body>

</html>
