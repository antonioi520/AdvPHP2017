(function () {
    
    'use strict';
    angular
        .module('app.corps')
        .controller('CorpsController', CorpsController);

    CorpsController.$inject = ['CorpsService'];
    /*
     * Simple controller to get information for the view.
     */
    function CorpsController(CorpsService) {
        var vm = this;

        vm.corps = [];
        vm.deleteCorps = deleteCorps;
        vm.message = '';

        activate();

        ////////////

        function activate() {
            CorpsService.getAllCorps().then(function (response) {
                vm.corps = response;
            });
        }
        
        function deleteCorps(Id) {
             CorpsService.deleteCorps(Id).then(function (response) {
                vm.message = 'Corps Deleted';
                activate();
            }, function(error) {
                vm.message = 'Corps was NOT Deleted';
            });
        }

    }
    
})();