(function () {
    
    'use strict';
    angular
        .module('app.corps')
        .controller('CorpsDeleteController', CorpsDeleteController);

    CorpsDeleteController.$inject = ['CorpsService', '$routeParams'];
    /*
     * Simple controller to get information for the view.
     */
    function CorpsDeleteController(CorpsService, $routeParams) {
        var vm = this;

        vm.message = '';
        
        var corpsId = $routeParams.Id;

        activate();

        ////////////

        function activate() {
            CorpsService.deleteCorps(corpsId).then(function (response) {
                vm.message = 'Corps Deleted';
            }, function(error) {
                vm.message = 'Corps was NOT Deleted';
            });
        }

    }
    
})();