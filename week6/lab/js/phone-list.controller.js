(function(){
    
    'use strict';
    angular
            .module('app')
            .controller('PhoneListController', PhoneListController);
    
    PhoneListController.$inject = ['PhonesService'];
    
    //call and get data for view page
    function PhoneListController(PhonesService){
        var vm = this;
        //store phones
        vm.phones = [];
        
        activate();
        
        ////
        
        //Make ajax call, return data in form of a promise
        //Set view model variable phones to that data allowing angular to auto update the view when value is updated
        function activate(){
            PhonesService.getPhones().then(function(response){
                vm.phones = response;
            });
        }
    }
    
})();