var task = Backbone.Model.extend({
defaults: {
  title:'',
  closed:false
}

});

var Task = new task({
title:'backbone.jsの勉強'

});

alert(JSON.stringify(Task.toJSON(), null, '    '));