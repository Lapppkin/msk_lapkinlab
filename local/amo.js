// define(['jquery'], function($){
    var menagercalc = function () {
    	var self = this;
		this.callbacks = {
			render: function(){
				console.log('render');
				return true;
			},
			init: function(){
				console.log('jkashkjsahfjkshdfjkhsdfjhsdlfhsdljkf');

				return true;
			},
			bind_actions: function(){
				console.log('bind_actions');
				return true;
			},
			settings: function(){
				return true;
			},
			onSave: function(){
				alert('click');
				return true;
			},
			destroy: function(){

			},
			contacts: {
					//select contacts in list and clicked on widget name
					selected: function(){
						console.log('contacts');
					}
				},
			leads: {
					//select leads in list and clicked on widget name
					selected: function(){
						console.log('leads');
					}
				},
			tasks: {
					//select taks in list and clicked on widget name
					selected: function(){
						console.log('tasks');
					}
				},

		};
		return this;
    };

// return CustomWidget;
// });