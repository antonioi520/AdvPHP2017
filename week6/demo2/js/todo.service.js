'use strict';
angular
    .module('app.widgets')
    .factory('TodoService', TodoService);

TodoService.$inject = [];

function TodoService() {
    
    var service = {
        '_properties' : {
            'todoList' : []
        },
        'getTodoList' : getTodoList,
        'add' : add,
        'remove' : remove
        
    };
    return service;

    ////////////

    function getTodoList() {
        return service._properties.todoList;
    };
    
    function add(item) {
        if ( angular.isString(item) && item.length ) {
            service._properties.todoList.push(item);
            console.log('item Added ' + item);
        }
        return service;
    };
    
    //remove last item
//    function remove() {        
//        var list = getTodoList(),
//            itemRemoved = list.pop();
//        console.log('item Removed ' + itemRemoved);
//        return service;
//    };
    
    //remove item
    function remove(index) {        
        var list = getTodoList(),
            itemRemoved = list.splice(index, 1);
        console.log('item Removed ' + itemRemoved);
        return service;
    };
}