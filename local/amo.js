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
            var arr = {
                add: [
                    {
                        name: "Покупка карандашей",
                        created_at: "1508101200",
                        updated_at: "1508274000",
                        status_id: "13670637",
                        responsible_user_id: "957083",
                        sale: "5000",
                        tags: "pencil, buy",
                        contacts_id: [
                            "1099149"
                        ],
                        company_id: "1099148",
                        catalog_elements_id: {
                            99999: {
                                111111: 10
                            }
                        },
                        custom_fields: [
                            {
                                id: "4399649",
                                values: [
                                    "3691615",
                                    "3691616",
                                    "3691617"
                                ]
                            },
                            {
                                id: "4399656",
                                values: [
                                    {
                                        value: "2017-10-26"
                                    }
                                ]
                            },
                            {
                                id: "4399655",
                                values: [
                                    {
                                        value: "ул. Охотный ряд, 1",
                                        subtype: "address_line_1"
                                    },
                                    {
                                        value: "Москва",
                                        subtype: "city"
                                    },
                                    {
                                        value: "101010",
                                        subtype: "zip"
                                    },
                                    {
                                        value: "RU",
                                        subtype: "country"
                                    }
                                ]
                            }
                        ]
                    }
                ]
            };


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